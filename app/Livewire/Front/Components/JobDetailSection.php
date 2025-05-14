<?php

namespace App\Livewire\Front\Components;

use App\Models\SavedJob;
use App\Models\UserJob;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class JobDetailSection extends Component
{
    public $id;
    public function mount($id)
    {
       $this->id  = $id;
    }

    #[On('view-job')]
    function changeId($id)
    {
        $this->id = $id;
    }

    public function saveJob()
    {
         $saved_job =   SavedJob::where('user_id', Auth::id())->where('user_job_id', $this->id)->first();
        if ($saved_job){
            $saved_job->delete();
        } else{
        SavedJob::create([
           'user_id' => Auth::id(),
           'user_job_id' => $this->id,
        ]);
        }

    }


    public function render()
    {
      $job = UserJob::find($this->id);

        $user_skills = [];
        if (Auth::check() && Auth::user()->role === "candidate"){
        $profile_info = Auth::user()->profile_info;
        $user_skills = explode(', ',$profile_info?->skills) ;
        }
        $jobSkills = $job->skills()->pluck('name')->toArray(); // Job skills as array
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

        return view('livewire.front.components.job-detail-section', compact('job','matchingSkillCount'));
    }
}
