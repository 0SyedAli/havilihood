<?php
// Get the current URL path
$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $urlArray);
$numSegments = count($segments);
$currentSegment = $segments[$numSegments - 1]; // Current page/segment
?>
<div class="dash_sidebar">
    <div class="sidebar_inner">
        <img src="assets/images/dashLogo.png" alt="">
        <button class="toggle_btn d-flex d-md-none" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul id="menu" class="menu-transition">
            <li class="<?php echo ($currentSegment == 'dashboard-job') ? 'active' : ''; ?>">
                <a href="dashboard-job">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Jobs</span>
                </a>
            </li>
            <li class="<?php echo ($currentSegment == 'dashboard-job-posted') ? 'active' : ''; ?>">
                <a href="dashboard-job-posted">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Jobs Posted</span>
                </a>
            </li>
            <li class="<?php echo ($currentSegment == 'dashboard-profile-proference') ? 'active' : ''; ?>">
                <a href="dashboard-profile-proference">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Profile Preferences</span>
                </a>
            </li>
            <li class="<?php echo ($currentSegment == 'dashboard-candidates') ? 'active' : ''; ?>">
                <a href="dashboard-candidates">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Candidates</span>
                </a>
            </li>
            <li class="<?php echo ($currentSegment == 'settings') ? 'active' : ''; ?> menu_mobile">
                <a href="settings">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
    <div class="ds_inner2">
        <ul>
            <li>
                <a href="">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>
                        Log out
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>