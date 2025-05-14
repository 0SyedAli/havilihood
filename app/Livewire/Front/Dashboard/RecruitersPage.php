<?php

namespace App\Livewire\Front\Dashboard;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RecruitersPage extends Component
{
    public function render()
    {
        $recruiters = Company::where('user_id',Auth::id())->first()->recruiters;

        return view('livewire.front.dashboard.recruiters-page',compact('recruiters'));
    }
}
