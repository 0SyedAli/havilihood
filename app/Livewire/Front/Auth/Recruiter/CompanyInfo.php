<?php

namespace App\Livewire\Front\Auth\Recruiter;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CompanyInfo extends Component
{
    use WithFileUploads;
    public $company_name;
    public $website;
    public $job_url;
    public $work_email;
    public $total_employees;
    public $employment_type;
    public $location;
    public $image_path;

    public function saveCompany()
    {

        $this->validate([
            'company_name' => 'required|string|max:191',
            'website' => 'required|url|max:191',
            'work_email' => 'required|email|max:191',
            'job_url' => 'required|url|max:191',
            'total_employees' => 'required|integer',
            'employment_type' => 'required|string|max:191',
            'location' => 'required|string|max:191',
            'image_path' => 'required|image|max:4048',
        ]);

        $image_path =null ;
        if ( $this->image_path){
            $image_path = 'storage/app/public/' . $this->image_path->store('CompanyImages', 'public');
        }

        $user = Auth::user();
        $user->role = 'company_owner';
        $user->save();

        Company::create([
            'user_id' => $user->id,
            'name' => $this->company_name,
            'website' => $this->website,
            'job_url' => $this->job_url,
            'work_email' => $this->work_email,
            'total_employees' => $this->total_employees,
            'employment_type' => $this->employment_type,
            'location' => $this->location,
            'image_path' => $image_path,
        ]);

        $this->dispatch('success','company added successfully');
        $this->redirect(route('candidates'));

    }

    public function render()
    {
        return view('livewire.front.auth.recruiter.company-info');
    }
}
