<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;

class ApplicantCard extends Component
{
    public $applicant;

    public function render()
    {
        return view('livewire.front.components.applicant-card');
    }
}
