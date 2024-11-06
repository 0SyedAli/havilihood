<div class="dash_sidebar">
    <div class="sidebar_inner">
        <img src="{{asset('front/assets/images/dashLogo.png')}}" alt="">
        <button class="toggle_btn d-flex d-md-none" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul id="menu" class="menu-transition">
            <li class=" @yield('dash-jobs')">
                <a href="{{route('jobs')}}" wire:navigate.hover>
                    <img src="{{asset('front/assets/images/job.png')}}" alt="">
                    <span>Jobs</span>
                </a>
            </li>
            <li class="@yield('dash-job-posted')">
                <a href="{{route('job.posted')}}" wire:navigate.hover>
                    <img src="{{asset('front/assets/images/job_posted.png')}}" alt="">
                    <span>Jobs Posted</span>
                </a>
            </li>
            <li class="@yield('dash-profile')">
                <a href="{{route('profile.pref')}}" wire:navigate.hover>
                    <img src="{{asset('front/assets/images/prof_side.png')}}" alt="">
                    <span>Profile Preferences</span>
                </a>
            </li>
            <li class="@yield('dash-candidates')">
                <a href="{{route('candidates')}}" wire:navigate.hover>
                    <img src="{{asset('front/assets/images/prof_side.png')}}" alt="">
                    <span>Candidates</span>
                </a>
            </li>
            <li class="@yield('dash-setting') menu_mobile">
                <a href="settings">
                    <img src="{{asset('front/assets/images/prof_side.png')}}" alt="">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="ds_inner2">
        <ul>
            <li>
                <a href="">
                    <img src="{{asset('front/assets/images/prof_side.png')}}" alt="">
                    <span>
                        Log out
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
