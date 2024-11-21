<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use App\Models\Job;
use App\Models\JobSkill;
use App\Models\UserJob;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

class StepSix extends Component
{

    public $stepOneData;
    public $stepTwoData;
    public $stepThreeData;
    public $stepFourData;
    public $stepFiveData;

    public function mount()
    {
        $this->stepOneData = session('step_one');
        $this->stepTwoData = session('step_two');
        $this->stepThreeData = session('step_three');
        $this->stepFourData = session('step_four');
        $this->stepFiveData = session('step_five');
    }

    #[On('step_next')]
    public function save()
    {

        $job = UserJob::create([
                'title' => $this->stepOneData['title'],
                'job_position' => $this->stepOneData['job_position'],
                'job_type' => $this->stepThreeData['job_type'],
                'work_authorization' => $this->stepThreeData['work_authorization'],
                'hour_start' => $this->stepThreeData['hour_start'],
                'hour_end' => $this->stepThreeData['hour_end'],
                'schedule' => $this->stepThreeData['schedule'],
                'pay_period' => $this->stepFourData['pay_period'],
                'salary_start' => $this->stepFourData['salary_start'],
                'salary_end' => $this->stepFourData['salary_end'],
                'benefits' => implode(',',$this->stepFourData['benefits']) ,
                'description' => $this->stepFiveData['description'],
                'document' => $this->stepFiveData['document'],
        ]);

        if (isset($this->stepTwoData['skills'])) {
            foreach ($this->stepTwoData['skills'] as $key => $skill) {
                JobSkill::create([
                    'user_job_id' => $job->id,
                    'name' => $skill,
                    'ideal_answer' => $this->stepTwoData['ideal_answer'][$key],
                    'required' => $this->stepTwoData['required'][$key],

                ]);
            }
        }


        dd('ok');


    }




    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-six');
    }
}
