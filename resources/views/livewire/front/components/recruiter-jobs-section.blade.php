<div class="saved_jobs_right">
    <div class="d-flex justify-content-between sjr_1st">
        <div>
            <h3>{{$recruiter->job_title}}</h3>
            <h5>{{$recruiter->user->name}}</h5>
            <div class="d-flex gap-3 align-items-center">
                <h4> {{$recruiter->user->email}}</h4>

            </div>
            <div class="skill_tags d-flex flex-column gap-3 py-4">
                <div class="d-flex align-items-center gap-2">
                    <img src="{{  asset('public/front/assets/images/organization.png')}}" alt="">
                    <h4>{{$recruiter?->work_email}}</h4>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{asset('public/front/assets/images/dollar_icon.png')}}" alt="">
                    <h4>${{$recruiter?->phone}} </h4>
                </div>
              {{--  <div class="sjl_item_tags_container">
                    @if(!empty($recruiter?->job_types) )
                        @foreach( explode(', ',$recruiter?->job_types ) as $job_type)
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
                        @if(!empty($recruiter->user->profile_info?->skills) )
                            @foreach( explode(', ',$recruiter->user->profile_info?->skills ) as $skill)
                                <label for="">{{$skill}}</label>
                            @endforeach
                        @endif
                    </div>
                </div>--}}


            </div>
        </div>
        <img class="sjr_compo_img" src="{{asset($recruiter->user->image_path  ?? 'public/front/assets/images/dash_prof_1.jpg')}}" alt="">
    </div>
 {{--   <div class="d-flex align-items-center justify-content-sm-between flex-wrap gap-4 gap-sm-0 ">
        <button class="btn3" data-bs-target="#inviteCandidate" data-bs-toggle="modal">Invite Candidate</button>
        <button class="btn3" onclick="location.href='{{ route('profile',$recruiter->user->slug) }}'">View Profile</button>
        --}}{{--        <div class="d-flex align-items-center gap-2">--}}{{--
        --}}{{--            <img src="{{asset('public/front/assets/images/Save.png')}}" alt="">--}}{{--
        --}}{{--            <h4>Save job</h4>--}}{{--
        --}}{{--        </div>--}}{{--
        --}}{{--        <div class="d-flex align-items-center gap-2">--}}{{--
        --}}{{--            <img src="{{asset('public/front/assets/images/andriod_icon.png')}}" alt="">--}}{{--
        --}}{{--            <h4>Share</h4>--}}{{--
        --}}{{--        </div>--}}{{--
    </div>--}}


    <h3>Jobs</h3>
    <div class="saved_jobs_left">

    @foreach($recruiter->user->jobs as $job )
            <livewire:front.components.job-card :job="$job" :key="$job->id" />
    @endforeach
    </div>
    {{-- <div class="sjr_profile">
         <img src="{{ asset('public/front/assets/images/dash_prof_1.jpg')}}" alt="">
         <div>
             <h3>{{$recruiter?->user?->name}}</h3>
             <h5>{{$recruiter?->user?->recruiter_info?->job_title}}</h5>
         </div>
     </div>--}}
</div>
