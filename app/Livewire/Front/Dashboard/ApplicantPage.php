<?php

namespace App\Livewire\Front\Dashboard;

use App\Models\Applicant;
use Livewire\Component;

class ApplicantPage extends Component
{
    public $id ;
    public $modal = false ;

    public function handleSelect($id)
    {
     $this->id = $id;
     $this->modal = true;
    }

    public function closeModel()
    {
        $this->modal = false;
    }

    public function render()
    {
        $applicants = Applicant::all();

        $selectedApplicant = Applicant::find($this->id);

        $user_skills = [];
        if ($selectedApplicant?->user){
            $profile_info = $selectedApplicant->user->profile_info;
            $user_skills = explode(', ',$profile_info?->skills) ;
        }
        $jobSkills = $selectedApplicant?->job->skills()->pluck('name')->toArray() ?? []; // Job skills as array
        $matchingSkills = [];

        foreach ($user_skills as $userSkill) {
            foreach ($jobSkills as $jobSkill) {
                if (stripos($jobSkill, $userSkill) !== false || stripos($userSkill, $jobSkill) !== false) {
                    $matchingSkills[] = $jobSkill;
                    break; // Avoid counting duplicates
                }
            }
        }
        $matchingSkillCount = count($matchingSkills) ?? 0; // Number of matching skills

        return view('livewire.front.dashboard.applicant-page',compact('applicants','selectedApplicant','matchingSkillCount'));
    }
}
