<?php

namespace App\Livewire\Front\Profile\Components;

use App\Models\Education;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class EducationModal extends Component
{

    public $college_name;
    public $certificate;
    public $start_date;
    public $end_date;
    public $description;
    public $continues = false ;
    public $modal = false ;
    public $id;


    #[On('educationEdit')]
    public function handleEdit($id)
    {
        $this->modal = true;
        $this->id = $id;
        $experience = Education::find($id);
        $this->college_name = $experience->college_name;
        $this->certificate = $experience->certificate;
        $this->start_date = $experience->start_date;
        if ($experience->end_date) $this->end_date = $experience->end_date;
        else $this->continues = true;
        $this->description = $experience->description;
    }

    #[On('educationShow')]
    public function showModal()
    {
        $this->id = 0;
        $this->college_name = '';
        $this->certificate = '';
        $this->start_date = '';
        $this->continues = false;
        $this->description = '';
        $this->modal = true;

    }

    public function saveEducation()
    {
        $this->modal = true;
        $this->validate([
            'college_name' => 'required|string|max:191',
            'certificate' => 'required|string|max:191',
            'start_date' => 'required|date|date_format:Y-m-d',
            'end_date' => 'required|date|date_format:Y-m-d',
            'description' => 'required|string|max:500',
        ]);

        Education::updateOrCreate(['id'=>$this->id],[
            'user_id'=>Auth::id(),
            'college_name' => $this->college_name,
            'certificate' => $this->certificate,
            'start_date' => $this->start_date,
            'end_date' => $this->continues ? null : $this->end_date,
            'description' => $this->description,
        ]);

        $this->modal = false;
        $this->dispatch('closeModal');
        $this->dispatch('success','Experience added ');
    }
    public function render()
    {
        return view('livewire.front.profile.components.education-modal');
    }
}
