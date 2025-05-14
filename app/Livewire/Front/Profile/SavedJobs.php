<?php

namespace App\Livewire\Front\Profile;

use App\Models\UserJob;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class SavedJobs extends Component
{

    public $data= [];
    #[On('filter')]
    public function getFilterData($data)
    {
        $this->data = $data;
    }
    public function render()
    {
     $jobs =   Auth::user()->saved_jobs;

        if (!empty($this->data)){
            $date_posted = '';
            if ($this->data['date_posted']){
                $date_posted =  Carbon::now()->modify($this->data['date_posted']);
            }
            $jobs = UserJob::where('title', 'like', '%' . $this->data['job_title'] . '%')
                ->when($date_posted, function ($query, $date_posted) {
                    return $query->where('created_at', '>=', $date_posted);
                })
                ->Where('salary_end', '>', $this->data['salary'])
                ->when($this->data['pay_period'], function ($query) {
                    $query->whereIn('pay_period', $this->data['pay_period']);
                })
                ->when($this->data['work_auth'], function ($query) {
                    $query ->whereIn('work_authorization', $this->data['work_auth']);
                })
                ->when($this->data['job_type'], function ($query) {
                    $query->whereIn('job_type', $this->data['job_type']);
                })
                ->get();

        }

        return view('livewire.front.profile.saved-jobs',compact('jobs'));
    }
}
