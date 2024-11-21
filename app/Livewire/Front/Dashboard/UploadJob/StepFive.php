<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;


class StepFive extends Component
{
    use WithFileUploads;
    #[Validate('required|string')]
    #[Session]
    public $description;

    #[Validate('required|image')]
    public $document;

    #[On('updateDescription')]
    public function getDescription($description)
    {
        $this->description = $description;
        $this->skipRender();
    }

    public function hydrate()
    {
        $this->withValidator(function ($validator) {
            $validator->after(function ($validator) {
              $this->dispatch('rendered');
            });
        });
    }



    #[On('step_next')]
    public function next()
    {

        $this->dispatch('status',false);
        $validate =  $this->validate();
        \session(['step_five' => ['description' => $this->description,'document' => $this->document->temporaryUrl()]]);
        $this->dispatch('status',true);
        }

    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-five');
    }


}
