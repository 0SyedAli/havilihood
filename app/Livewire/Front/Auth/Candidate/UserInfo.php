<?php

namespace App\Livewire\Front\Auth\Candidate;

use App\Models\Candidate;
use Livewire\Component;

class UserInfo extends Component
{

    public $job_title = '';
    public $job_types = [];
    public $location = '';
    public $work_model = '';
    public $work_authorizations  = [];

    public function mount()
    {
        if (!auth()->user()->email_verified_at){
            $this->dispatch('error','user is not verified');
            $this->redirectRoute('otp');
        }
    }

    public function save()
    {

        $this->validate([
            'job_title' => 'required|string|max:191',
            'job_types' => 'required|array|min:1',
            'location' => 'required|string|max:191',
            'work_model' => 'required|string|max:191',
            'work_authorizations' => 'required|array|min:1',
        ]);



        Candidate::updateOrCreate(['user_id' => auth()->id()],[
            'job_title' => $this->job_title,
            'job_types' => implode(', ',$this->job_types),
            'location' => $this->location,
            'work_model' => $this->work_model,
            'work_authorizations' => implode(', ',$this->work_authorizations) ,
            'user_id' => auth()->id(),
        ]);

        $this->redirectRoute('profile.analyst');

    }
    public function render()
    {
        return view('livewire.front.auth.candidate.user-info');
    }
}
