<?php

namespace App\Livewire\Front\Auth;

use App\Mail\OtpEmail;
use App\Models\Otp;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Register extends Component
{
    #[Validate('required|string|in:candidate,recruiter')]
    public $user_role = 'candidate';

    #[Validate('required|string|max:191|string')]
    public $name = '';

    #[Validate('required|string|max:191|email|unique:users,email')]
    public $email = '';

    #[Validate('required|string|max:191|min:6')]
    public $password = '';

    #[Validate('required|string|max:191|same:password')]
    public $password_confirmation = '';

    public function mount(){

    }

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'role' => $this->user_role,
            'password' => Hash::make($this->password),
        ]);
        Auth::login($user);
        $otpCode = rand(100000, 999999);
        Otp::create([
            'email' => $user->email,
            'otp_code' => $otpCode,
        ]);
        $data = [
            'name' => $user->name,
            'code' => $otpCode,
        ];

        Mail::to($user->email)->send(new OtpEmail($data));

         $this->redirectRoute('otp'); // Adjust as needed
    }

    public function render()
    {
        return view('livewire.front.auth.register');
    }
}
