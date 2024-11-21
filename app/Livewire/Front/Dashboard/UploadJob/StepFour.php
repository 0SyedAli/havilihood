<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StepFour extends Component
{
    #[Validate('required|string|max:191')]
    #[Session]
    public $pay_period = '';
    #[Validate('required|numeric|max_digits:191')]
    #[Session]
    public $salary_start = '';
    #[Validate('required|numeric|max_digits:191|gt:salary_start')]
    #[Session]
    public $salary_end = '';

    #[Validate('required|array|max:191')]
    #[Session]
    public $benefits = [];

    #[On('step_next')]
    public function next()
    {
        $this->dispatch('status',false);
        $validate =  $this->validate();
        \session(['step_four' => $validate]);
        $this->dispatch('status',true);
    }
    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-four');
    }
}
