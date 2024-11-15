<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StepOne extends Component
{
    #[Validate('required|string|max:191')]
    public $title = '';
    #[Validate('required|string|max:191')]
    public $job_position = '';
    #[Validate('required')]
    public $country = '';
    #[Validate('required')]
    public $state = '';

    #[On('step_next')]
   public function next()
   {
       $this->dispatch('status',false);
      $validate =  $this->validate();
      $this->dispatch('step_1',$validate);
    $this->dispatch('status',true);
   }

    public function render()
    {

        return view('livewire.front.dashboard.upload-job.step-one');
    }
}
