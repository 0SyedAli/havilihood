<?php

namespace App\Livewire\Front\Auth;

use App\Mail\OtpEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\On;
use Livewire\Attributes\Title;
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
        \App\Models\Otp::updateOrCreate(['email' => $user->email],[
            'email' => $user->email,
            'otp_code' => $otpCode,
            'is_verified' => false,
        ]);
        $data = [
            'name' => $user->name,
            'code' => $otpCode,
        ];

        Mail::to($user->email)->send(new OtpEmail($data));

        $this->dispatch('success','OTP has been sent to your email');
    }

    public function verify()
    {
        $this->validate([
            'otp_code' => 'required|numeric|digits:6',
        ], [
            'otp_code.required' => 'The OTP code is required.',
            'otp_code.numeric' => 'The OTP code must be a number.',
            'otp_code.digits' => 'The OTP code must be 6 digits.',
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
                     if (isCandidate()){
                         $this->redirectRoute('user.info',navigate: true);
                     }else{
                         $this->redirectRoute('employer.info', navigate: true);
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


    #[Title('OTP')]
    public function render()
    {
        return view('livewire.front.auth.otp');
    }
}
