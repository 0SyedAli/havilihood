<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StepThree extends Component
{

    #[Validate('required|string|max:191')]
    public $job_type = '';
    #[Validate('required|string|max:191')]
    public $work_authorization = '';
    #[Validate('required|numeric|max_digits:191')]
    public $hour_start = '';
    #[Validate('required|numeric|max_digits:191|gt:hour_start')]
    public $hour_end;

    #[Validate('required|string|max:191')]
    public $schedule = '';


    public function mount()
    {
        if (session()->has('step_three') ){
            $this->job_type = \session('step_three')['job_type'];
            $this->work_authorization = \session('step_three')['work_authorization'];
            $this->hour_start = \session('step_three')['hour_start'];
            $this->hour_end = \session('step_three')['hour_end'];
            $this->schedule = \session('step_three')['schedule'];
        }
    }

    #[On('step_next')]
    public function next()
    {
        $this->dispatch('status',false);
        $validate =  $this->validate( );
        \session(['step_three' => $validate]);
        $this->dispatch('status',true);
    }
    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-three');
    }
}
