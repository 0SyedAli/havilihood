<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
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

    public function mount(){

        if (session()->has('step_one') ){
            $this->title = \session('step_one')['title'];
            $this->job_position = \session('step_one')['job_position'];
            $this->country = \session('step_one')['country'];
            $this->state = \session('step_one')['state'];
        }
    }


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
