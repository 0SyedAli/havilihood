<div class="sjl_item"    >
    <div class="row gy-2 w-100 ">
        <div class="col-md-4">
            <img src="{{  asset($job?->user?->recruiter_info?->company?->image_path ?? $job?->user?->company?->image_path ??  'public/front/assets/images/dash_prof_1.jpg')}}" width="150" height="150" class="img-fluid sjl_profile" alt="">
        </div>
        <div class="col-md-8 ps-md-0">
            <div class="d-flex justify-content-between">
            <div>
            <h4> {{$job->title ?? 'Software Engineer' }} </h4>
            <p>{{ $job->job_position }}</p>
            </div>
                @if(auth()->user()->role !== "candidate" )
            <div class="d-flex justify-content-between gap-3" >
                <i class="fa fa-pencil" role="button"  wire:click="editJob({{$job->id}})" ></i>
                <i class="fa fa-x" role="button" wire:click="deleteJob({{$job->id}})" ></i>
            </div>
                @endif
            </div>
            <div class="sjl_item_tags_container">
                <div class="sjl_item_tags">
                    <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                    <h4>{{ $job->job_type ?? 'Full-Time'}}</h4>
                </div>
                <div class="sjl_item_tags">
                    <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                    <h4>{{$job->schedule ?? 'Full-Time'}}</h4>
                </div>
                <div class="sjl_item_tags">
                    <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                    <h4>{{$job->pay_period ?? 'Full-Time'}}</h4>
                </div>
            </div>
            <div class="sjl_itm_label_container">
                @foreach($job->skills()->limit(3)->get() as $skill)
                <label for="">{{$skill->name}}</label>
                @endforeach
            </div>


        </div>
    </div>
</div>
