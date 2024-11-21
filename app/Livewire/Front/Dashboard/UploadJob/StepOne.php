<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StepOne extends Component
{
    #[Validate('required|string|max:191')]
    #[Session]
    public $title = '';
    #[Validate('required|string|max:191')]
    #[Session]
    public $job_position = '';
    #[Session]
    #[Validate('required')]
    public $country = '';
    #[Session]
    #[Validate('required')]
    public $state = '';

    #[On('step_next')]
   public function next()
   {
       $this->dispatch('status',false);
      $validate =  $this->validate();
      \session(['step_one' => $validate]);
    $this->dispatch('status',true);
   }

    public function render()
    {

        return view('livewire.front.dashboard.upload-job.step-one');
    }
}
