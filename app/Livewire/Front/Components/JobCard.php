<?php

namespace App\Livewire\Front\Components;

use App\Models\UserJob;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class JobCard extends Component
{
    public $job;

    public function mount(UserJob $job){
        $this->job = $job;
    }

    public function editJob($id)
    {
        Session::put('job_id', $id);
        return $this->redirectRoute('upload.job');
    }

    public function deleteJob($id)
    {
    $this->dispatch('deleteJob', $id);
    }


    public function render()
    {
        return view('livewire.front.components.job-card');
    }
}
