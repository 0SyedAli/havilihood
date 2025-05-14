<?php

namespace App\Livewire\Front\Components;

use App\Models\Recruiter;
use Livewire\Attributes\On;
use Livewire\Component;

class RecruiterJobsSection extends Component
{

    public $id;
    public function mount($id)
    {
        $this->id  = $id;
    }

    #[On('view-recruiter')]
    function changeId($id)
    {
        $this->id = $id;
    }

    public function render()
    {
        $recruiter = Recruiter::find($this->id);
        return view('livewire.front.components.recruiter-jobs-section',compact('recruiter'));
    }
}
