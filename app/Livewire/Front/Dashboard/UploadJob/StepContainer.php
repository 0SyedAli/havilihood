<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Component;

class StepContainer extends Component
{

    public $current = 'front.dashboard.upload-job.step-one';

    protected $steps = [
        'front.dashboard.upload-job.step-one',
        'front.dashboard.upload-job.step-two',
        'front.dashboard.upload-job.step-three',
        'front.dashboard.upload-job.step-four',
        'front.dashboard.upload-job.step-five',
        'front.dashboard.upload-job.step-six',
    ];

    public function next()
    {
        $currentIndex = array_search($this->current, $this->steps);
        $this->current = $this->steps[$currentIndex + 1];
    }
    public function previous()
    {
        $currentIndex = array_search($this->current, $this->steps);

        $this->current = $this->steps[$currentIndex - 1];
    }

    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-container');
    }
}
