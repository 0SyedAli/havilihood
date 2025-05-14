<?php

namespace App\Livewire\Front\Dashboard;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class RecruiterInfo extends Component
{
    use WithFileUploads;
    public $name;
    public $image_path;
    public $job_title;
    public $work_email;
    public $phone;

    public function mount()
    {
        $user =  Auth::user();
        $this->name = $user->name;
        $this->job_title = $user->recruiter_info?->job_title;
        $this->work_email = $user->recruiter_info?->work_email;
        $this->phone = $user->recruiter_info?->phone;
    }

    public function save()
    {

        $this->validate([
            'name' => 'required|string|max:191',
            'job_title' => 'required|string|max:191',
            'work_email' => 'required|email|max:191',
            'phone' => 'required|max:20',
            'image_path' => 'nullable|image|max:4096'
        ]);

        $user =  Auth::user();

        $image_path =null ;
        if ( $this->image_path){
            if (file_exists($user->image_path)) {
                unlink(base_path($user->image_path) );
            }
            $image_path = 'storage/app/public/' . $this->image_path->store('RecruiterImages', 'public');
        }

        $user->name = $this->name;
        $user->image_path = $image_path ?? $user->image_path;
        $user->save();

        $user->recruiter_info->job_title = $this->job_title;
        $user->recruiter_info->work_email = $this->work_email;
        $user->recruiter_info->phone = $this->phone;
        $user->recruiter_info->save();

        $this->dispatch('success','Profile updated successfully');


    }

    public function render()
    {
        return view('livewire.front.dashboard.recruiter-info');
    }
}
