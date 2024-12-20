<section class="dashboard_container">
    @section('dash-profile','active')
    <livewire:front.dashboard.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex gap-3 gap-xl-5 alig-items-center flex-column flex-xl-row" style="margin: 0px 0 60px;">
                        <h2 class="sjd_h2">Personality Profile Preferences</h2>
                        <div class="status2_container">
                            <h4>Recommended<span>04</span></h4>
                            <h4>Liked<span>04</span></h4>
                            <h4>Applied<span>04</span></h4>
                            <h4>External<span>04</span></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/cities.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Cities</h4>
                                <a href="{{route('company.detail')}}">
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                                </a>
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/decipline.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Disciplines</h4>
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/home_office.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Home Office</h4>
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/job_titles.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Job Titles</h4>
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/career_level.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Career Level</h4>
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/salary.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Salary Expectations</h4>
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/working_hour.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Weekly Working Hours</h4>
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-10 col-md-6 col-xxl-5">
                    <div class="sjl_item dpp">
                        <img src="{{asset('front/assets/images/industry.png')}}" alt="">
                        <div>
                            <div class="d-flex align-items-center gap-2">
                                <h4>Industry</h4>
                                <img src="{{asset('front/assets/images/arrow_right.png')}}" alt="">
                            </div>
                            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Arcu tortor,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
