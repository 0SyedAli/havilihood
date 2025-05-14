<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Component;

class StepContainer extends Component
{



    public $current = 'front.dashboard.upload-job.step-one';
    public $currentIndex = 0;

    protected $steps = [
        'front.dashboard.upload-job.step-one',
        'front.dashboard.upload-job.step-two',
        'front.dashboard.upload-job.step-three',
        'front.dashboard.upload-job.step-four',
        'front.dashboard.upload-job.step-five',
        'front.dashboard.upload-job.step-six',
    ];

    public function mount(){
        session()->forget(['step_one', 'step_two', 'step_three', 'step_four', 'step_five']);
        if (session()->has('job_id')) {
            $this->current = 'front.dashboard.upload-job.step-six';
        }
    }

    #[On('status')]
    public function validateStep($status){
        if($status){
            $this->currentIndex  = array_search($this->current, $this->steps);
            $this->current = $this->steps[ $this->currentIndex +1];
        }
    }

    public function next()
    {
        $this->dispatch('step_next');
    }

    #[On('jumpToStep')]
    public function jumpToStep($step){
        $this->current = $step;
        $this->currentIndex = array_search($this->current, $this->steps);
    }



    public function previous()
    {
            $this->currentIndex  = array_search($this->current, $this->steps);
            if ($this->currentIndex > 0){
            $this->current = $this->steps[ $this->currentIndex - 1];
            }else{
                $this->redirectRoute('job.posted');
            }
    }

    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-container');
    }
}
