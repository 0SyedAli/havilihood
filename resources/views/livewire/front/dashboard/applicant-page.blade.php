<section class="dashboard_container">
    @section('dash-applicants','active')
    <livewire:front.dashboard.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <h2 class="sjd_h2" style="margin: 50px 0 40px;">Jobs Applicants</h2>
                </div>
            </div>
            <div>
                @if(!$applicants->count())
                    <livewire:front.components.alert-bar alertType="alert-info" message="Applicants not found" />
                @endif
                <div class="row">

                    @foreach($applicants as $applicant )
                        <div class="col-sm-6" wire:key="{{$applicant->id}}">
                            <livewire:front.components.applicant-card :applicant="$applicant" @click="handleSelect({{ $applicant->id }})"  :key="$applicant->id" />
                        </div>
                    @endforeach

                </div>
            </div>

            @if($selectedApplicant && $modal)
            <div class="modal fade show" id="applicantDetail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block; padding-left: 0px;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        <div class="modal-body job-seeker">
                            <div class="form-get-quote md_form" >
                                        <h2>Job Details</h2>
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">

                                        <div class="detail">
                                            <h4>{{$selectedApplicant->job?->title}}</h4>
                                            <h5>{{$selectedApplicant?->job?->user->recruiter_info->company->name ?? $selectedApplicant?->job?->user->company->name}}</h5>
                                            <p>{{$selectedApplicant?->job?->country}}, {{$selectedApplicant?->job?->state}} (Remote) <span>Promoted</span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <ul class="list">
                                            <li><i class="fa-solid fa-building"></i> {{ $selectedApplicant->job?->user->recruiter_info->company->total_employees ?? $selectedApplicant->job?->user->company->total_employees}} employees</li>
                                            <li><i class="fa-solid fa-briefcase-blank"></i> ${{$selectedApplicant->job?->salary_start}} - ${{$selectedApplicant->job?->salary_end}} {{$selectedApplicant->job?->pay_period}}</li>
                                            <li><i class="fa-solid fa-list-ul"></i> {{ $matchingSkillCount }} of {{$selectedApplicant->job->skills->count()}} skills match your profile</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="title">
                                            {!! $selectedApplicant?->job?->description !!}
                                        </div>
                                        <h2>Applicant Details</h2>
                                        <div class="form-input">
                                            <h4 >Email</h4>
                                            <p>{{$selectedApplicant->email}}</p>
                                        </div>
                                        <div class="form-input">
                                            <h4 >Phone</h4>
                                           <p>{{$selectedApplicant->phone}}</p>
                                        </div>
                                        <div class="form-input">
                                            <h4 >Applicant's authorization requirement?</h4>
                                            <p>{{$selectedApplicant->work_auth}}</p>
                                        </div>
                                        <div class="form-input ques">
                                            <h4 >Additional questions</h4>
                                            <p> Applicant has completed the following level of education?</p>
                                        </div>
                                        @foreach($selectedApplicant->job->skills()->where('required',true)->get() as $key => $skill)
                                            <div class="form-input">
                                                <h4 >How many years of work experience do you have? ({{$skill->name}})</h4>
                                            <p>{{explode(', ', $selectedApplicant->answers)[$key]}}</p>
                                            </div>
                                        @endforeach

                                        <div class="modal_btn_container">
                                            <button class="btn1" role="button" wire:click="closeModel" >
                                                Close
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endif

        </div>
    </div>
</section>
