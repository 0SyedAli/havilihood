<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;

class StepFour extends Component
{
    #[Validate('required|string|max:191')]
    public $pay_period = '';
    #[Validate('required|numeric|max_digits:191')]
    public $salary_start = '';
    #[Validate('required|numeric|max_digits:191|gt:salary_start')]
    public $salary_end = '';

    #[Validate('required|array|max:191')]
    public $benefits = [];

    public function mount()
    {
        if (session()->has('step_four') ){
            $this->pay_period = \session('step_four')['pay_period'];
            $this->salary_start = \session('step_four')['salary_start'];
            $this->salary_end = \session('step_four')['salary_end'];
            $this->benefits = \session('step_four')['benefits'];
        }
    }

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
