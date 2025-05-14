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
    public $description;

    public $document;

    public function mount()
    {
        if (session()->has('step_five') ){
            $this->description = \session('step_five')['description'];
//            $this->document = \session('step_five')['job_position'];
        }
    }

    #[On('updateDescription')]
    public function getDescription($description)
    {
        $this->description = $description;
        $this->skipRender();
    }

//    public function updatedDocument(){
//    $this->skipRender();
//
//}

    public function dehydrate()
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
        \session(['step_five' => $validate]);
//        $document = '';
//        if ( $this->document){
//            if (file_exists($this->stepFiveData['document'])) {
//                unlink(base_path($this->stepFiveData['document']) );
//            }
//            $document = $this->document->store('documents','public');
//        }

//        \session(['step_five' => [
//            'description' => $this->description,
//            'document' => $document, // or $this->document->getPath()
//        ]]);

        $this->dispatch('status',true);
        }

    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-five');
    }




}
