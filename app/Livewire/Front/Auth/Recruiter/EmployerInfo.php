<?php

namespace App\Livewire\Front\Auth\Recruiter;

use App\Models\Company;
use App\Models\Recruiter;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EmployerInfo extends Component
{
    public $company_id;
    public $job_title;
    public $work_email;
    public $phone;

    public function save()
    {
        if ($this->company_id){
            $this->validate([
                'company_id' => 'required|exists:companies,id',
                'job_title' => 'required|string|max:191',
                'work_email' => 'required|email|max:191',
                'phone' => 'required|string|max:191',
            ]);

            Recruiter::create([
                'user_id' => Auth::id(),
                'company_id' => $this->company_id,
                'job_title' => $this->job_title,
                'work_email' => $this->work_email,
                'phone' => $this->phone,
            ]);


            return $this->redirectRoute('jobs');

        }

        return $this->redirectRoute('company.info');
    }

    public function render()
    {
        $companies =Company::latest()->get();

        return view('livewire.front.auth.recruiter.employer-info',compact('companies'));
    }
}
