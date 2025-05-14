<div class="sjl_item"  >
    <div class="row gy-2">
        <div class="col-md-4">
            <img src="{{asset( $candidate?->user?->profile_info?->profile_image ?? 'public/front/assets/images/dash_prof_1.jpg')}}" width="150" height="150" class="img-fluid sjl_profile" alt="">
        </div>
        <div class="col-md-8 ps-md-0">
            <h4> {{$candidate->job_title ?? 'Software Engineer' }} </h4>
            <h5> {{$candidate->user->name ?? 'Software Engineer' }} </h5>
            <p class="">{{  strlen($candidate->user->profile_info?->bio) > 50 ? substr($candidate?->user?->profile_info?->bio, 0, 100) . '...' : $candidate->profile_info->bio  ??  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,"}}</p>
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
