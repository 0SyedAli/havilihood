<?php

namespace App\Livewire\Front\Dashboard;

use App\Models\Candidate;
use App\Models\User;
use Illuminate\Support\Carbon;
use Livewire\Attributes\On;
use Livewire\Component;
use function PHPUnit\Framework\isEmpty;

class Candidates extends Component
{
    public $data= [];
    #[On('filter')]
    public function getFilterData($data)
    {
        $this->data = $data;
    }

    public function render()
    {
         $candidates =  Candidate::whereHas('user.user_info')->get();
        if( !empty($this->data)){
//            dd($this->data['experience_level']);
            $date_posted = '';
            if ($this->data['date_posted']){
                $date_posted =  Carbon::now()->modify($this->data['date_posted']);
            }
            $candidates = Candidate::where('job_title', 'like', '%' . $this->data['job_title'] . '%')
                ->when($date_posted, function ($query, $date_posted) {
                    return $query->where('created_at', '>=', $date_posted);
                })
                ->when($this->data['experience_from'] && $this->data['experience_to'] , function ($query) {
                    $query->whereHas('user.user_info', function ($q) {
                    $q->whereBetween('total_experience', [$this->data['experience_from'], $this->data['experience_to']]);
                });
                })
                ->when($this->data['salary'], function ($query) {
                $query->whereHas('user.user_info', function ($q) {
                    $q->Where('salary', '>', $this->data['salary']);
                });
                })
                ->when($this->data['work_model'], function ($query) {
                    $query->whereHas('user.user_info', function ($q) {
                    $q->orWhereIn('work_type', $this->data['work_model']);
                });
                })
                ->when($this->data['experience_level'], function ($query) {
                    $query->whereHas('user.user_info', function ($q) {
                  $q->orWhereIn('experience_level', $this->data['experience_level']);
                });
                })
                ->when($this->data['job_type'], function ($query) {
                    $query->where(function($q) {
                    foreach ($this->data['job_type'] as $value) {
                        $q->orWhere('job_types', 'like', '%' . $value . '%');
                    }
                });
                })

                ->when($this->data['work_auth'], function ($query) {
                    $query->where(function($q) {
                        foreach ($this->data['work_auth'] as $value) {
                            $q->orWhere('work_authorizations', 'like', '%' . $value . '%');
                        }
                    });
                })
                ->get();

        }
        return view('livewire.front.dashboard.candidates',compact('candidates'));
    }
}
