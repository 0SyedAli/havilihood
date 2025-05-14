<?php

namespace App\Livewire\Front\Components;

use App\Models\Candidate;
use Livewire\Component;

class CandidateCard extends Component
{

    public $candidate;

    public function mount($candidate){

        $this->candidate = $candidate;
    }
    public function render()
    {
        return view('livewire.front.components.candidate-card');
    }
}
