<section class="dashboard_container">
    @section('job-suggestions','active')
    <livewire:front.profile.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard job-seeker">
            <div class="row">
                <div class="col-lg-10 col-md-10 col-xxl-8">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="sjd_h2" style="margin: 50px 0 40px;">Apply to Job</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="detail">
                                <h4>{{$job?->title}}</h4>
                                <h5>{{$job->user->recruiter_info->company->name ?? $job->user->company->name}}</h5>
                                <p>{{$job->country}}, {{$job->state}} {{$job->job_type ? "($job->job_type)" : null }} <span>Promoted</span></p>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <ul class="list">
                                <li><i class="fa-solid fa-building"></i> {{$job->user->recruiter_info->company->total_employees ?? $job->user->company->total_employees}} employees</li>
                                <li><i class="fa-solid fa-briefcase-blank"></i> ${{$job?->salary_start}} - ${{$job?->salary_end}} {{$job?->pay_period}}</li>
                                <li><i class="fa-solid fa-list-ul"></i> {{ $matchingSkillCount }} of {{$job->skills->count()}} skills match your profile</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-xxl-12">
                            <div class="title">
                                <h3>Job Details</h3>
                                {!! $job?->description !!}
                            </div>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex align-items-center gap-5">
                                <a href="#" wire:click.prevent="showModal" class="btn3 btn_post"  >
                                    <img src="assets/images/round_plus.png" alt="">
                                    Continue
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-modal">

            <!-- Modal start -->
            @if($modal)
            <div class="modal fade show" id="Applyjob" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="display: block; padding-left: 0px;">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        <div class="modal-body job-seeker">
                            <div class="form-get-quote md_form" >
                                <div class="row justify-content-center">
                                    <div class="col-lg-7">
                                        <div class="detail">
                                            <h4>{{$job?->title}}</h4>
                                            <h5>{{$job->user->recruiter_info->company->name ?? $job->user->company->name}}</h5>
                                            <p>{{$job->country}}, {{$job->state}} (Remote) <span>Promoted</span></p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <ul class="list">
                                            <li><i class="fa-solid fa-building"></i> {{$job->user->recruiter_info->company->total_employees ?? $job->user->company->total_employees}} employees</li>
                                            <li><i class="fa-solid fa-briefcase-blank"></i> ${{$job?->salary_start}} - ${{$job?->salary_end}} {{$job?->pay_period}}</li>
                                            <li><i class="fa-solid fa-list-ul"></i> {{ $matchingSkillCount }} of {{$job->skills->count()}} skills match your profile</li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="title">
                                            <h2>Job Details</h2>
                                            {!! $job?->description !!}
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Email</h4>
                                            <input type="email" placeholder="Email" wire:model="email">
                                            @error('email')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Phone</h4>
                                            <input type="text" placeholder="Phone" wire:model="phone">
                                            @error('phone')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">What is your authorization requirement?</h4>
                                            <input type="text" placeholder="What is your authorization requirement?" wire:model="work_auth" >
                                            @error('work_auth')
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        <div class="form-input ques">
                                            <h4 for="">Additional questions</h4>
                                            <p>Have you completed the following level of education?</p>
                                        </div>
                                        @foreach($job->skills()->where('required',true)->get() as $key => $skill)
                                        <div class="form-input">
                                            <h4 for="answers{{$key}}">How many years of work experience do you have? ({{$skill->name}})</h4>
                                            <input  type="text" placeholder="How many years of work experience do you have?" id="answers{{$key}}" wire:model="answers.{{$key}}">
                                            @error('answers.'.$key)
                                            <small class="text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
                                        @endforeach

                                        <div class="modal_btn_container gap-5">
                                            <button class="btn1" role="button" wire:click="closeModal" >
                                                Close
                                            </button>
                                            <button class="btn1" role="button" wire:click="save" >
                                                Apply Job
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

                <!-- Modal end -->


        </div>
    </div>
</section>
