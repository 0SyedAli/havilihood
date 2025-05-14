<div class="sjl_item">
    <div class="row gy-2">
        <div class="col-md-4">
            <img src="{{  asset($applicant?->user?->profile_info?->profile_image ?? 'public/front/assets/images/dash_prof_1.jpg')}}" width="128" height="128" class="img-fluid sjl_profile" alt="">
        </div>
        <div class="col-md-8 ps-md-0">
            <h4> {{$applicant?->user?->candidate?->job_title ?? 'Software Engineer' }} </h4>
            <p>{{$applicant?->user?->name}}</p>
            <div class="sjl_item_tags_container">
                    <div class="sjl_item_tags">
                        <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                        <h4>{{ $skill ?? 'Full-Time'}}</h4>
                    </div>

                <div class="sjl_item_tags">
                    <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                    <h4>{{$applicant?->schedule ?? 'Full-Time'}}</h4>
                </div>
                <div class="sjl_item_tags">
                    <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                    <h4>{{$applicant?->pay_period ?? 'Full-Time'}}</h4>
                </div>
            </div>
            <div class="sjl_itm_label_container">
                @foreach(explode(', ', $applicant?->user?->profile_info?->skills)  as $answer)
                    <label for="">{{$answer}}</label>

                @endforeach
            </div>
        </div>
    </div>
</div>
