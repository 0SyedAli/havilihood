<?php

namespace App\Livewire\Front\Components;

use App\Mail\GlobalMail;
use App\Models\Candidate;
use App\Models\UserJob;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Livewire\Attributes\On;
use Livewire\Component;
use PHPUnit\Util\PHP\Job;

class CandidateDetailSection extends Component
{

    public $id;
    public $job_id;
    public $message;
    public function mount($id)
    {
        $this->id  = $id;
    }

    #[On('view-candidate')]
    function changeId($id)
    {
        $this->id = $id;
    }

    public function sendInvitation()
    {
        $job = UserJob::find($this->job_id);

        if (!$job){
            return $this->dispatch('error','job is not selected');
        }

        $candidate = Candidate::find($this->id);
        $data = [
            'subject' => 'John Doe',
            'view' => 'emails.job-invitation',
            'job' =>$job,
            'candidate' => $candidate,
        ];

        Mail::to($candidate->user->email)->send(new GlobalMail($data));
         $this->dispatch('success','Invitation sent');

    }

    public function render()
    {
        $candidate = Candidate::find($this->id);
        $user_ids = Auth::user()->company->recruiters->pluck('user_id')->toArray();
        if (Auth::user()->role === "company_owner"){
        array_push($user_ids,Auth::id());
        }else{
            $user_ids = [Auth::id()];
        }
        $jobs = UserJob::whereIn('user_id',$user_ids)->get();
        return view('livewire.front.components.candidate-detail-section',compact('candidate','jobs'));
    }
}
