<?php

namespace App\Livewire\Front\Auth\Candidate;

use App\Models\Candidate;
use Livewire\Component;

class UserInfo extends Component
{

    public $job_title = '';
    public $job_types = [];
    public $location = '';
    public $open_remote = false;
    public $work_authorizations  = [];

    public function mount()
    {
        if (!auth()->user()->verified_at){
            $this->redirectRoute('otp',navigate: true);
            $this->dispatch('error','user is not verified');
        }
    }

    public function save()
    {

        $this->validate([
            'job_title' => 'required|string|max:191',
            'job_types' => 'required|array|min:1',
            'location' => 'required|string|max:191',
            'work_authorizations' => 'required|array|min:1',
        ]);



        Candidate::create([
            'job_title' => $this->job_title,
            'job_types' => implode(',',$this->job_types),
            'location' => $this->location,
            'work_authorizations' => implode(',',$this->work_authorizations) ,
            'user_id' => auth()->id(),
        ]);

        $this->redirectRoute('profile.anaylist', navigate: true);

    }
    public function render()
    {
        return view('livewire.front.auth.candidate.user-info');
    }
}
