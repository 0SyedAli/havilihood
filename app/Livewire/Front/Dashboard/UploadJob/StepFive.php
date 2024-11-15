<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;


class StepFive extends Component
{
    use WithFileUploads;
    #[Validate('required|string')]
    public $description;

    #[Validate('required')]
    public $document;

    #[On('updateDescription')]
    public function getDescription($description)
    {
        $this->description = $description;
        $this->skipRender();
    }
    #[On('step_next')]
    public function next()
    {
        $this->dispatch('status',false);
        $validate =  $this->validate();
        $this->dispatch('step_5',$validate);
        $this->dispatch('status',true);
    }

    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-five');
    }

    public function rendered(){
    $this->dispatch('rendered');
    }
}
