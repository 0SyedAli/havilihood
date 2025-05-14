<?php

namespace App\Livewire\Front\Dashboard;

use App\Livewire\Front\Dashboard\UploadJob\StepContainer;
use App\Models\UserJob;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class JobPosted extends Component
{

    public function mount()
    {
        session()->forget('job_id');
    }

    public function renderassingId($id){
     return   $this->dispatch('editJobs')->to(StepContainer::class);
    }

    #[On('deleteJob')]
    public function handleDelete($id)
    {
        UserJob::destroy($id);
    }

    public function render()
    {
        $jobs = Auth::user()->jobs;
        return view('livewire.front.dashboard.job-posted',['jobs' => $jobs]);
    }
}
