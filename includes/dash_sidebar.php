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
            <li class="<?php echo ($currentSegment == 'dashboard-profile') ? 'active' : ''; ?>">
                <a href="dashboard-profile">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Profile</span>
                </a>
            </li>
            <li class="<?php echo ($currentSegment == 'dashboard-job-suggestion') ? 'active' : ''; ?>">
                <a href="dashboard-job-suggestion">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Job Suggestions</span>
                </a>
            </li>
            <li class="<?php echo ($currentSegment == 'dashboard-saved-jobs') ? 'active' : ''; ?>">
                <a href="dashboard-saved-jobs">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Saved Jobs</span>
                </a>
            </li>
            <li class="<?php echo ($currentSegment == 'settings') ? 'active' : ''; ?>">
                <a href="settings">
                    <img src="assets/images/prof_side.png" alt="">
                    <span>Settings</span>
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

<script>
    // var sideMenu = document.querySelectorAll('.sidebar_inner ul');
    // var toggleBtn = document.querySelectorAll('.toggle_btn');

    // $("toggleBtn").click(function() {
    //     $("sideMenu").toggleClass("main");
    // });
</script>