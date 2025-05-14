<div class="dash_sidebar">
    <div class="sidebar_inner">
        <img src="{{asset('public/front/assets/images/dashLogo.png')}}" alt="">
        <button class="toggle_btn d-flex d-md-none" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul id="menu" class="menu-transition">
{{--            <li class=" @yield('dash-jobs')">--}}
{{--                <a href="{{route('jobs')}}" >--}}
{{--                    <img src="{{asset('public/front/assets/images/job.png')}}" alt="">--}}
{{--                    <span>Jobs</span>--}}
{{--                </a>--}}
{{--            </li>--}}
            <li class="@yield('dash-job-posted')">
                <a href="{{route('job.posted')}}" >
                    <img src="{{asset('public/front/assets/images/job_posted.png')}}" alt="">
                    <span>Jobs Posted</span>
                </a>
            </li>
            @if(auth()->user()->role == 'company_owner')

            <li class="@yield('dash-profile')">
                <a href="{{route('profile.pref')}}" >
                    <img src="{{asset('public/front/assets/images/prof_side.png')}}" alt="">
                    <span>Profile Preferences</span>
                </a>
            </li>
            @else
                <li class="@yield('dash-recruiter')">
                    <a href="{{route('recruiter.info')}}" >
                        <img src="{{asset('public/front/assets/images/prof_side.png')}}" alt="">
                        <span>Profile Info</span>
                    </a>
                </li>
            @endif

            <li class="@yield('dash-candidates')">
                <a href="{{route('candidates')}}" >
                    <img src="{{asset('public/front/assets/images/prof_side.png')}}" alt="">
                    <span>Talent Hive</span>
                </a>
            </li>
            <li class="@yield('dash-applicants')">
                <a href="{{route('applicants')}}" >
                    <img src="{{asset('public/front/assets/images/prof_side.png')}}" alt="">
                    <span>Applicants</span>
                </a>
            </li>
            <li class="@yield('dash-setting') menu_mobile">
                <a href="javascript:voide(0);" wire:click="logout">
                    <img src="{{asset('public/front/assets/images/prof_side.png')}}" alt="">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="ds_inner2">
        <ul>
            <li>
                <a href="javascript:voide(0);" wire:click="logout">
                    <img src="{{asset('public/front/assets/images/prof_side.png')}}" alt="">
                    <span>
                        Log out
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
