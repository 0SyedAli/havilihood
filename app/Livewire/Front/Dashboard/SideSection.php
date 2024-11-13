<?php

namespace App\Livewire\Front\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class SideSection extends Component
{

    public function logout()
    {
        $user = Auth::user();
        $user->remember_token = null;
        $user->save();
        Auth::logout();
        $this->redirect(route('login'));

    }

    public function render()
    {
        return view('livewire.front.dashboard.side-section');
    }
}
