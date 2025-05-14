<?php

namespace App\Livewire\Front\Components;

use Livewire\Component;

class JobFilter extends Component
{

    public $job_title = '';
    public $salary = 0;
    public $job_type = [];
    public $work_model = [];
    public $pay_period = [];
    public $work_auth = [];
    public $location = '';
    public $experience = '';
    public $date_posted ;
    public $experience_level = [];


    public function sendFilterData()
    {
        $this->dispatch("filter",[
            'job_title'=>$this->job_title,
            'job_type'=>$this->job_type,
            'work_model'=>$this->work_model,
            'location'=>$this->location,
            'experience'=>$this->experience,
            'experience_level'=>$this->experience_level,
            'pay_period'=>$this->pay_period,
            'work_auth'=>$this->work_auth,
            'date_posted'=>$this->date_posted,
            'salary'=> (int)$this->salary
        ]);
    }

    public function render()
    {
        return view('livewire.front.components.job-filter');
    }
}
