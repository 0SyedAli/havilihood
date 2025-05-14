<div class="sjl_item"  >
    <div class="row gy-2">
        <div class="col-md-4">
            <img src="{{asset( $recruiter->image_path ?? 'public/front/assets/images/dash_prof_1.jpg')}}" width="150" height="150" class="img-fluid sjl_profile" alt="">
        </div>
        <div class="col-md-8 ps-md-0">
            <h4> {{$recruiter->job_title ?? 'Software Engineer' }} </h4>
            <h5> {{$recruiter->user->name ?? 'Software Engineer' }} </h5>
            <p class="">{{$recruiter->user->email}}</p>
            <div class="sjl_item_tags_container">
                        <div class="sjl_item_tags">
                            <img src="{{asset('public/front/assets/images/clock_icon.png')}}" alt="">
                            <h4>{{$recruiter->phone}}</h4>
                        </div>
                <div class="sjl_itm_label_container">

                    <label for="">{{$recruiter->work_email}}</label>
                </div>
            </div>
        </div>
    </div>
</div>
