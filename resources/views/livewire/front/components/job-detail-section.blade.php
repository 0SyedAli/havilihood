<div class="saved_jobs_right">
    <div class="d-flex justify-content-between sjr_1st">
        <div>
            <h3>{{$job?->title}}</h3>
            <h5>{{$job->user->recruiter_info?->company?->name ?? $job->user?->company?->name}}</h5>
            <div class="d-flex gap-3 align-items-center">
                <h4>{{$job->country}}, {{$job->state}} {{$job->job_type ? "($job->job_type)" : null }} </h4>
                <span><i class="fa-solid fa-circle"></i></span>
                <h4><span>Promoted</span></h4>
            </div>
            <div class="skill_tags d-flex flex-column gap-3 py-4">
                <div class="d-flex align-items-center gap-2">
                    <img src="{{ asset('public/front/assets/images/organization.png')}}" alt="">
                    <h4> {{$job->user->recruiter_info->company->total_employees ?? $job->user->company->total_employees}} employees</h4>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{asset('public/front/assets/images/dollar_icon.png')}}" alt="">
                    <h4> ${{$job?->salary_start}} - ${{$job?->salary_end}} {{$job?->pay_period}}</h4>
                </div>
                <div class="d-flex align-items-center gap-2">
                    <img src="{{asset('public/front/assets/images/list_icon.png')}}" alt="">
                    <h4>{{ $matchingSkillCount }} of {{$job?->skills->count()}} skills match your profile</h4>
                </div>
            </div>
        </div>
        <img class="sjr_compo_img" src="{{ $job?->user?->recruiter_info?->company?->image_path ?  asset($job?->user?->recruiter_info?->company?->image_path) : ($job?->user?->company?->image_path ? asset($job?->user?->company?->image_path) : asset('public/front/assets/images/compo_img.png'))}}" alt="">
    </div>
    @if(auth()->user()->role === "candidate")
    <div class="d-flex align-items-center justify-content-sm-between flex-wrap gap-4 gap-sm-0 ">
        @if($job->has_applicant)
        <button class="btn3" >Applied</button>
        @else
        <button class="btn3" onclick="window.location.href='{{route('job.detail',$job->slug)}}'">Apply now</button>
        @endif


        <div class="d-flex align-items-center gap-2" role="button" wire:click="saveJob">
            <img src="{{asset('public/front/assets/images/Save.png')}}" alt="">
            <h4>{{$job->saved_job ? "Remove job" : "Save job" }} </h4>
        </div>
        <a href="https://www.facebook.com/sharer/sharer.php?u=http://localhost/havelihood-html/dashboard-job" target="_blank">

        <div class="d-flex align-items-center gap-2">
            <img src="{{asset('public/front/assets/images/andriod_icon.png')}}" alt="">
            <h4>Share</h4>
        </div>
        </a>
    </div>
    @endif
    <div class="sjr_para">
        {!! $job?->description !!}
    </div>
    <div class="sjr_profile">
        <img src="{{asset($job->user->image_path ?? 'public/front/assets/images/dash_prof_1.jpg')}}" alt="">
        <div>
            <h3>{{$job?->user?->name}}</h3>
            <h5>{{$job?->user?->recruiter_info?->job_title ?? "Company Owner"}}</h5>
        </div>
    </div>
</div>
