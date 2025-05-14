<?php

namespace App\Livewire\Front\Profile;

use App\Models\Applicant;
use App\Models\UserJob;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class JobDetail extends Component
{
    public $job;
    public $email;
    public $work_auth;
    public $phone;
    public $answers = [];
    public $modal = false;

    public function mount($slug)
    {
        $this->job = UserJob::where('slug', $slug)->first();
        $this->job->skills()->where('required', true)->each(function ($skill) {
        $this->answers[] = '' ;
        });
    }

    public function showModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
    }

    public function save()
    {
//        dd($this->answer);
        $this->validate([
        'email' => 'required|email|max:191',
        'phone' => 'required|max:15',
            'answers.*' => 'required|max:2',
        'work_auth' => 'required|string|max:191',
        ]);

      Applicant::create([
         'email' => $this->email,
         'phone' => $this->phone,
         'work_auth' => $this->work_auth,
         'answers' => implode(', ', $this->answers) ,
         'user_id' => Auth::id(),
         'user_job_id' => $this->job->id,
      ]);

        $this->modal = false;
        $this->redirectRoute('job.suggestions');
    }


    public function render()
    {
        $user_skills = [];
        if (Auth::check()){
            $profile_info = Auth::user()->profile_info;
            $user_skills = explode(', ',$profile_info?->skills) ;
        }
        $jobSkills = $this->job->skills()->pluck('name')->toArray() ?? []; // Job skills as array
        $matchingSkills = [];

        foreach ($user_skills as $userSkill) {
            foreach ($jobSkills as $jobSkill) {
                if (stripos($jobSkill, $userSkill) !== false || stripos($userSkill, $jobSkill) !== false) {
                    $matchingSkills[] = $jobSkill;
                    break; // Avoid counting duplicates
                }
            }
        }
        $matchingSkillCount = count($matchingSkills); // Number of matching skills
        return view('livewire.front.profile.job-detail',compact('matchingSkillCount'));
    }
}
