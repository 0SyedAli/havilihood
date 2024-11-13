<?php

namespace App\Livewire\Front\Auth;

use App\Mail\OtpEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\On;
use Livewire\Component;
use Masmerise\Toaster\Toaster;

class Otp extends Component
{
    public $otp_code;
    #[On('getOtp')]
    public function updateOtp($otpCode)
    {
        $this->otp_code = $otpCode;
    }

    public function resendCode()
    {
        $user = Auth::user();
        $otpCode = rand(100000, 999999);
        \App\Models\Otp::create([
            'email' => $user->email,
            'otp_code' => $otpCode,
        ]);
        $data = [
            'name' => $user->name,
            'code' => $otpCode,
        ];

        Mail::to($user->email)->send(new OtpEmail($data));

        $this->dispatch('success','otp has been sent to your email');
    }

    public function verify()
    {
        $this->validate([
            'otp_code' => 'required|numeric|digits:6'
        ]);
        $user = Auth::user();
        $otp = \App\Models\Otp::where('email',$user->email)->where('is_verified',false)->orderByDesc('id')->first();
        $expiry = now();

        if ($otp){
            if ($expiry  <= $otp->created_at->modify('+10 minutes')){
                if ($otp->otp_code == $this->otp_code){
                    $user = User::where('email',$otp->email)->first();
                    $user->email_verified_at = now();
                    $otp->is_verified = true;
                    $user->save();
                    $otp->save();
                     $this->dispatch('success','user verified successfully');
                     if ($user->role == 'candidate'){
                         $this->redirectRoute('user.info');
                     }else{
                         $this->redirectRoute('employer.info');
                     }
                }
                else{
                    $this->dispatch('error','invalid otp code please try again');

                }
            }
            else{
               $this->dispatch('error','otp code has expired please try again');
            }
        }
        else{
          $this->dispatch('error','otp code not found please try again');
        }
    }


    public function render()
    {
        return view('livewire.front.auth.otp');
    }
}
