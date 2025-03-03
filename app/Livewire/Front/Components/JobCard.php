<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;
use PHPUnit\Util\PHP\Job;

class JobCard extends Component
{
    public $job;


    public function render()
    {
        return view('livewire.front.components.job-card');
    }
}
