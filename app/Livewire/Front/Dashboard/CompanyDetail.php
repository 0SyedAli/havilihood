<?php

namespace App\Livewire\Front\Dashboard;

use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class CompanyDetail extends Component
{
    use WithFileUploads;
    public $company_name;
    public $website;
    public $job_url;
    public $work_email;
    public $total_employees;
    public $employment_type;
    public $location;
    public $image_path = null ;


    public function mount()
    {
        $company =  Auth::user()->company;
        $this->company_name = $company?->name;
        $this->website = $company?->website;
        $this->job_url = $company?->job_url;
        $this->work_email = $company?->work_email;
        $this->total_employees = $company?->total_employees;
        $this->employment_type = $company?->employment_type;
        $this->location = $company?->location;
    }
    public function save()
    {
      $validated =  $this->validate([
            'company_name' => 'required|string|max:191',
            'website' => 'required|url|max:191',
            'work_email' => 'required|email|max:191',
            'job_url' => 'required|url|max:191',
            'total_employees' => 'required|integer',
            'employment_type' => 'required|string|max:191',
            'location' => 'required|string|max:191',
            'image_path' => 'nullable|image|max:4048',
        ]);

       $image = Auth::user()->company?->image_path;

        $image_path =null ;
        if ( $this->image_path){
            if (file_exists($image)) {
                unlink(base_path($image) );
            }
            $image_path = 'storage/app/public/' . $this->image_path->store('CompanyImages', 'public');
        }
        Company::updateOrCreate(['user_id' => Auth::id()],[
            'name' => $this->company_name,
            'user_id' => Auth::id(),
            'website' => $this->website,
            'job_url' => $this->job_url,
            'work_email' => $this->work_email,
            'total_employees' => $this->total_employees,
            'employment_type' => $this->employment_type,
            'location' => $this->location,
            'image_path' => $image_path ?? $image,
        ]);


        $this->dispatch('success','company updated successfully');
    }

    public function render()
    {
        return view('livewire.front.dashboard.company-detail');
    }
}
