<?php

namespace App\Livewire\Front\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
            'password' => Hash::make($this->password),
        ]);
        Auth::login($user);

         $this->redirect('dashboard'); // Adjust as needed
    }

    public function render()
    {
        return view('livewire.front.auth.register');
    }
}
