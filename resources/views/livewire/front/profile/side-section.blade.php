<div class="dash_sidebar">
    <div class="sidebar_inner">
        <img src="{{asset('front/assets/images/dashLogo.png')}}" alt="">
        <button class="toggle_btn d-flex d-md-none" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul id="menu" class="menu-transition">
            <li class=" @yield('profile')">
                <a href="{{route('profile')}}">
                    <img src="{{asset('front/assets/images/prof_side.png')}}" alt="">
                    <span>Profile</span>
                </a>
            </li>
            <li class="@yield('job-suggestions')">
                <a href="{{route('job.suggestions')}}">
                    <img src="{{asset('front/assets/images/job.png')}}" alt="">
                    <span>Job Suggestions</span>
                </a>
            </li>
            <li class="@yield('saved-jobs')">
                <a href="{{route('saved.jobs')}}">
                    <img src="{{asset('front/assets/images/save_icon.png')}}" alt="">
                    <span>Saved Jobs</span>
                </a>
            </li>
            <li class="@yield('settings')">
                <a href="#">
                    <img src="{{asset('front/assets/images/setting_icon.png')}}" alt="">
                    <span>Settings</span>
                </a>
            </li>
            <li class="@yield('dash-setting') menu_mobile">
                <a href="javascript:voide(0);" wire:click="logout">
                    <img src="{{asset('front/assets/images/prof_side.png')}}" alt="">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="ds_inner2">
        <ul>
            <li>
                <a href="javascript:;" wire:click="logout">
                    <img src="{{asset('front/assets/images/prof_side.png')}}" alt="">
                    <span>
                        Log out
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
