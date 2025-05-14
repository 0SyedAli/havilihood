<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;

class RecruiterCard extends Component
{

    public $recruiter;

    public function mount($recruiter){

        $this->recruiter = $recruiter;
    }

    public function render()
    {
        return view('livewire.front.components.recruiter-card');
    }
}
