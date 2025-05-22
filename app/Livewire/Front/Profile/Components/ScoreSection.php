<?php

namespace App\Livewire\Front\Profile\Components;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class ScoreSection extends Component
{
    public $user;
    public function render()
    {
        $user = $this->user;
        $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            'Authorization' => 'Bearer ' . config('services.criteria.api_key'),
            'Content-Type' => 'application/json',
        ])->get(config('services.criteria.base_url').'status?orderId=orderId-'.$user->order_package?->id);

        $status = json_decode($response);
        $scores =null;
        if ($status->status ?? $status->code == 'Complete'){
            $responseScore = Http::withOptions([
                'verify' => false,
            ])->withHeaders([
                'Authorization' => 'Bearer ' . config('services.criteria.api_key'),
                'Content-Type' => 'application/json',
            ])->get(config('services.criteria.base_url').'scores?orderId=OrderId-'.$user->order_package?->id);
            $scores = json_decode($responseScore);

        }
        return view('livewire.front.profile.components.score-section',compact('scores','status'));
    }
}
