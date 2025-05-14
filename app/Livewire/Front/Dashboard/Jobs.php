<?php

namespace App\Livewire\Front\Dashboard;

use App\Models\Company;
use App\Models\Recruiter;
use App\Models\UserJob;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\On;
use Livewire\Component;

class Jobs extends Component
{

    #[On('deleteJob')]
    public function handleDelete($id)
    {
        UserJob::destroy($id);
    }

    public $data= [];
    #[On('filter')]
    public function getFilterData($data)
    {
        $this->data = $data;
    }

    public function render()
    {
        $recruiters_id = Auth::user()->company->recruiters->pluck('user_id')->toArray();
        array_push($recruiters_id, Auth::id());
        $jobs = UserJob::whereIn('user_id',$recruiters_id)->get();
        if (!empty($this->data)) {
            $date_posted = '';
            if ($this->data['date_posted']) {
                $date_posted = Carbon::now()->modify($this->data['date_posted']);
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
                    $query->whereIn('work_authorization', $this->data['work_auth']);
                })
                ->when($this->data['job_type'], function ($query) {
                    $query->whereIn('job_type', $this->data['job_type']);
                })
                ->get();
        }

        return view('livewire.front.dashboard.jobs',compact('jobs'));
    }


}
