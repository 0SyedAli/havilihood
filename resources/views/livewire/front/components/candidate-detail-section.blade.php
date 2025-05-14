<div class="saved_jobs_right">
    <div class="d-flex justify-content-between sjr_1st">
        <div>
            <h3>{{$candidate?->user->name}}</h3>
            <h5>{{$candidate->job_title}}</h5>
            <div class="d-flex gap-3 align-items-center">
                <h4> {{$candidate?->user?->profile_info?->location ?? "Philadelphia, PA"}} {{ $candidate?->user?->profile_info?->work_type ? "(".$candidate?->user?->profile_info?->work_type.")" : "" }}</h4>

            </div>
            <div class="skill_tags d-flex flex-column gap-3 py-4">
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ asset('public/front/assets/images/organization.png')}}" alt="">
                    <h4>{{$candidate?->user?->profile_info?->experience_level}}</h4>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{asset('public/front/assets/images/dollar_icon.png')}}" alt="">
                    <h4>${{$candidate?->user?->profile_info?->salary}} </h4>
                </div>
                <div class="sjl_item_tags_container">
                    @if(!empty($candidate?->job_types) )
                        @foreach( explode(', ',$candidate?->job_types ) as $job_type)
                            <div class="sjl_item_tags">
                                <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                                <h4>{{$job_type}}</h4>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{asset('public/front/assets/images/list_icon.png')}}" alt="">
                    <div class="sjl_itm_label_container">
                        @if(!empty($candidate->user->profile_info?->skills) )
                            @foreach( explode(', ',$candidate->user->profile_info?->skills ) as $skill)
                                <label for="">{{$skill}}</label>
                            @endforeach
                        @endif
                    </div>
                </div>


            </div>
        </div>
        <img class="sjr_compo_img" src="{{asset($candidate?->user?->profile_info?->profile_image ?? 'public/front/assets/images/compo_img.png')}}" alt="">
    </div>
    <div class="d-flex align-items-center justify-content-sm-between flex-wrap gap-4 gap-sm-0 ">
        <button class="btn3" data-bs-target="#inviteCandidate" data-bs-toggle="modal">Invite Candidate</button>
        <button class="btn3" onclick="location.href='{{ route('profile',$candidate->user->slug) }}'">View Profile</button>
{{--        <div class="d-flex align-items-center gap-2">--}}
{{--            <img src="{{asset('public/front/assets/images/Save.png')}}" alt="">--}}
{{--            <h4>Save job</h4>--}}
{{--        </div>--}}
{{--        <div class="d-flex align-items-center gap-2">--}}
{{--            <img src="{{asset('public/front/assets/images/andriod_icon.png')}}" alt="">--}}
{{--            <h4>Share</h4>--}}
{{--        </div>--}}
    </div>

    <div class="sjr_para">
        {!! $candidate?->user?->profile_info?->bio !!}
    </div>

    <div class="contact-modal">
        <!-- Modal start -->
        <div class="modal fade" id="inviteCandidate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog  modal-dialog-centered" role="document" >
                <div class="modal-content">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="modal-body">
                        <div class="form-get-quote md_form"  >
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="title">
                                        <h2>Invite Candidate</h2>
                                        <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                                    </div>

                                    <div class="saved_jobs_left" style="max-height: 34vh">
                                        @foreach($jobs as $job)
                                            <input type="radio" name="job_id" wire:model="job_id" value="{{$job->id}}"  id="job_id{{$job->id}}">
                                            <label for="job_id{{$job->id}}"  >
                                            <livewire:front.components.job-card :job="$job" :key="$job->id"  />

                                            </label>
                                        @endforeach
                                    </div>
                                    <div class="form-input">
                                        <h4 for="" class="mb-3">message</h4>
                                        <textarea  rows="10" class="form-control" placeholder="Dear Ut laborum non conse,

I hope this message finds you well."></textarea>
                                    </div>


                                    <div class="modal_btn_container">
                                        <button class="btn1" role="button" type="button" wire:click="sendInvitation" data-bs-dismiss="modal" >
                                            Send Invitation
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Modal end -->
    </div>

    {{-- <div class="sjr_profile">
         <img src="{{ asset('public/front/assets/images/dash_prof_1.jpg')}}" alt="">
         <div>
             <h3>{{$candidate?->user?->name}}</h3>
             <h5>{{$candidate?->user?->recruiter_info?->job_title}}</h5>
         </div>
     </div>--}}
</div>
