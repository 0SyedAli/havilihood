<?php

namespace App\Livewire\Front\Auth\Candidate;

use App\Models\OrderPackage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class PersonalityAnalysis extends Component
{

    public $packageId;
    public $response;

    public function submitOrder()
    {

        $this->validate([
            'packageId' => 'required|string',
        ]);

      $order =  OrderPackage::updateOrCreate(['user_id' => Auth::id()],[
            'user_id' => Auth::id()
        ]);

      $user = Auth::user();
    try {
    $response = Http::withOptions([
        'verify' => false,
    ])->withHeaders([
        'Authorization' => 'Bearer ' . config('services.criteria.api_key'),
        'Content-Type' => 'application/json',
        'Accept' => 'application/json',
    ])->post(config('services.criteria.base_url') . 'order', [
        "packageId" => ["value" => $this->packageId],
        "orderId" => ["value" => "OrderId-" . $order->id],
//            "requisitionId" => ["value" => "req123451"],
//            "externalId" => ["value" => "ext123451"],
        "candidate" => [
            "first" => $user->name,
            "email" => $user->email,
//            "mobile" => "+1 222 333 444"
        ],
        "sendCandidateEmail" => true,
        "smsConsent" => false,
        "returnURL" => [
            "uri" => "https://praetorstestnet.com/hivelihood/profile"
        ],
//            "expiryDate" => "2025-03-01T12:00:00.000Z"
    ]);

        if ($response->successful()) {
            $this->response = json_decode($response);
          return  $this->dispatch('orderSubmitted');
        }

        return $this->dispatch('error', json_decode($response->body())->message );

}catch (\Exception $e){
    dd($e);
}


    }

    public function render()
    {

                $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            'Authorization' => 'Bearer ' . config('services.criteria.api_key'),
            'Content-Type' => 'application/json',
        ])->get(config('services.criteria.base_url') . 'packages');

        $packages = json_decode($response);


        return view('livewire.front.auth.candidate.personality-analysis', compact('packages'));
    }
}
