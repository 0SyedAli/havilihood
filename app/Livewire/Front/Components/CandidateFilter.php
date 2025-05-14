<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;

class CandidateFilter extends Component
{
    public $job_title = '';
    public $salary = 0;
    public $job_type = [];
    public $work_model = [];
    public $work_auth = [];
    public $location = '';
    public $experience = '';
    public $experience_from = 0;
    public $experience_to = 20;
    public $experience_level = [];
    public $date_posted = '';

    public function sendFilterData()
    {
        $this->dispatch("filter",[
            'job_title'=>$this->job_title,
            'job_type'=>$this->job_type,
            'work_model'=>$this->work_model,
            'work_auth'=>$this->work_auth,
            'location'=>$this->location,
            'experience'=>$this->experience,
            'experience_level'=>$this->experience_level,
            'experience_from'=>$this->experience_from,
            'experience_to'=>$this->experience_to,
            'date_posted'=>$this->date_posted,
            'salary'=> (int)$this->salary
        ]);
    }


    public function render()
    {
        return view('livewire.front.components.candidate-filter');
    }
}
