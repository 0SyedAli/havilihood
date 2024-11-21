<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StepThree extends Component
{

    #[Validate('required|string|max:191')]
    #[Session]
    public $job_type = '';
    #[Validate('required|string|max:191')]
    #[Session]
    public $work_authorization = '';
    #[Validate('required|numeric|max_digits:191')]
    #[Session]
    public $hour_start = '';
    #[Validate('required|numeric|max_digits:191|gt:hour_start')]
    #[Session]
    public $hour_end;

    #[Validate('required|string|max:191')]
    #[Session]
    public $schedule = '';

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
