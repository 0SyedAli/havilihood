<?php

namespace App\Livewire\Front\Dashboard;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Jobs extends Component
{


    public $jobs = [];
    public function mount()
    {
        $response = Http::withOptions([
            'verify' => false,
        ])->withHeaders([
            'Authorization' => 'Bearer ' . config('services.criteria.api_key'),
            'Content-Type' => 'application/json',
        ])->get(config('services.criteria.base_url') . 'packages');

        $this->jobs = json_decode($response);
    }

    public function render()
    {


        return view('livewire.front.dashboard.jobs',[
            'jobs' => $this->jobs
        ]);
    }

    public function getAssessments()
    {

    }

    /*public function createAssessment()
    {
        $data = [
            'name' => $this->assessmentName,
            'description' => $this->assessmentDescription,
        ];

        $response = $this->criteriaCorpApi->post('assessments', ['json' => $data]);
        $assessment = json_decode($response->getBody()->getContents(), true);

        $this->assessments[] = $assessment;

    }*/
}
