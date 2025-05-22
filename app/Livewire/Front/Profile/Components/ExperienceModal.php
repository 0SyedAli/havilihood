<?php

namespace App\Livewire\Front\Profile\Components;

use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ExperienceModal extends Component
{

    public $job_title;
    public $company_name;
    public $start_date;
    public $end_date;
    public $description;
    public $continues = false ;
    public $modal = false ;

    public $id;

    #[On('experienceEdit')]
    public function handleEdit($id)
    {
        $this->modal = true;
        $this->id = $id;
        $experience = Experience::find($id);
        $this->job_title = $experience->job_title;
        $this->company_name = $experience->company_name;
        $this->start_date = $experience->start_date;
        if ($experience->end_date) $this->end_date = $experience->end_date;
            else $this->continues = true;
        $this->description = $experience->description;
    }

    #[On('experienceShow')]
    public function showModal()
    {
        $this->id = 0;
        $this->job_title = '';
        $this->company_name = '';
        $this->start_date = '';
         $this->continues = false;
        $this->description = '';
        $this->modal = true;
    }

    public function saveExperience()
    {

        $this->validate([
            'job_title' => 'required|string|max:191',
            'company_name' => 'required|string|max:191',
            'start_date' => 'required|date|date_format:Y-m-d',
            'end_date' => 'required|date|date_format:Y-m-d',
            'description' => 'required|string|max:500',
        ]);

        Experience::updateOrCreate(['id'=> $this->id],[
            'user_id' => Auth::id(),
            'job_title' => $this->job_title,
            'company_name' => $this->company_name,
            'start_date' => $this->start_date,
            'end_date' => $this->continues ? null : $this->end_date,
            'description' => $this->description,
        ]);

        $this->modal = false;
        $this->dispatch('closeModal');
        $this->dispatch('dataUpdated');
        $this->dispatch('success','Experience added ');
    }

    public function render()
    {
        return view('livewire.front.profile.components.experience-modal');
    }
}
