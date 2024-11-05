<?php

namespace App\Livewire\Front\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Login extends Component
{
    #[Validate('required|string|email|max:191|exists:users,email', message: ['exists'=>'This email does not exist'])]
    public $email = '';

    #[Validate('required|string|min:6|max:191|')]
    public $password = '';

    public function login(){
        $this->validate();
        $credentials = [
            'email' => $this->email,
            'password' => $this->password,
        ];

        if (Auth::attempt($credentials)) {
             $this->redirectIntended('dashboard');
        }


    }

    public function render()
    {
        return view('livewire.front.auth.login');
    }
}