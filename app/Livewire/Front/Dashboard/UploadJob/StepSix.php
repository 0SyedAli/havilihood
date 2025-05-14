<?php

namespace App\Livewire\Front\Dashboard\UploadJob;

use App\Models\Job;
use App\Models\JobSkill;
use App\Models\UserJob;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Attributes\Session;
use Livewire\Component;

class StepSix extends Component
{

    public $job_id;
    public $stepOneData;
    public $stepTwoData;
    public $stepThreeData;
    public $stepFourData;
    public $stepFiveData;

    public function mount()
    {
        if (session()->has('job_id')) {
            $this->job_id = session()->get('job_id');
            $job = UserJob::find($this->job_id);
            session(['step_one' => ['title'=>$job->title,'job_position'=> $job->job_position,'country'=> $job->country,'state'=> $job->state]]);
            session(['step_three'=> ['job_type'=>$job->job_type,'work_authorization'=> $job->work_authorization,'hour_start'=>$job->hour_start,'hour_end'=>$job->hour_end,'schedule'=>$job->schedule]]);
            session(['step_four'=> ['pay_period'=>$job->job_type,'salary_start'=> $job->salary_start,'salary_end'=>$job->salary_end,'benefits'=> explode(', ',$job->benefits)]]);
            session(['step_five'=> ['description'=>$job->description]]);
            $skillsData = $job->skills()->get(['name', 'ideal_answer', 'required','id'])->toArray();
            $transformedData = [
                'skills' => array_column($skillsData, 'name'),
                'ideal_answer' => array_column($skillsData, 'ideal_answer'),
                'required' => array_column($skillsData, 'required'),
                'id' => array_column($skillsData, 'id')
            ];
            session(['step_two' => $transformedData]);
        }
            $this->stepOneData = session('step_one');
            $this->stepTwoData = session('step_two');
            $this->stepThreeData = session('step_three');
            $this->stepFourData = session('step_four');
            $this->stepFiveData = session('step_five');
//            dd($this->stepTwoData);


    }



    #[On('step_next')]
    public function save()
    {
        $job = UserJob::updateOrCreate(['id' => $this->job_id],[
            'title' => session('step_one')['title'],
            'job_position' => session('step_one')['job_position'],
            'country' => session('step_one')['country'],
            'state' => session('step_one')['state'],
            'job_type' => session('step_three')['job_type'],
            'work_authorization' => session('step_three')['work_authorization'],
            'hour_start' => session('step_three')['hour_start'],
            'hour_end' => session('step_three')['hour_end'],
            'schedule' => session('step_three')['schedule'],
            'pay_period' => session('step_four')['pay_period'],
            'salary_start' => session('step_four')['salary_start'],
            'salary_end' => session('step_four')['salary_end'],
            'benefits' => implode(', ', session('step_four')['benefits']),
            'description' => session('step_five')['description'],
            // 'document' => 'storage/app/public/' . session('step_five')['document'],
            'user_id' => Auth::id()
        ]);

        if (isset(session('step_two')['skills'])) {
            foreach (session('step_two')['skills'] as $key => $skill) {
                JobSkill::updateOrCreate(['id' => session('step_two')['id'][$key] ?? 0],[
                    'user_job_id' => $job->id,
                    'name' => $skill,
                    'ideal_answer' => session('step_two')['ideal_answer'][$key],
                    'required' => session('step_two')['required'][$key],
                ]);
            }
        }

        session()->forget(['step_one', 'step_two', 'step_three', 'step_four', 'step_five','job_id']);

        $this->redirect(route('job.posted'));
    }





    public function render()
    {
        return view('livewire.front.dashboard.upload-job.step-six');
    }
}
