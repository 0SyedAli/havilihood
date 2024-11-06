<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\Validate;
use Livewire\Component;

class StepOne extends Component
{
        #[Validate('required|numeric')]
        public $title = '';

    #[Validate('required|numeric')]
        public $job_position = '';

        public function updated(){
          $validate =  $this->validate();


        }


    public function render()
    {

        return view('livewire.front.dashboard.upload-job.step-one');
    }
}
