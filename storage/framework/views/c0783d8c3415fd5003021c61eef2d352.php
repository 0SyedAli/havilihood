<div class="dash_sidebar">
    <div class="sidebar_inner">
        <img src="<?php echo e(asset('front/assets/images/dashLogo.png')); ?>" alt="">
        <button class="toggle_btn d-flex d-md-none" onclick="toggleMenu()">
            <i class="fa-solid fa-bars"></i>
        </button>
        <ul id="menu" class="menu-transition">
            <li class=" <?php echo $__env->yieldContent('profile'); ?>">
                <a href="<?php echo e(route('profile')); ?>">
                    <img src="<?php echo e(asset('front/assets/images/prof_side.png')); ?>" alt="">
                    <span>Profile</span>
                </a>
            </li>
            <li class="<?php echo $__env->yieldContent('job-suggestions'); ?>">
                <a href="<?php echo e(route('job.suggestions')); ?>">
                    <img src="<?php echo e(asset('front/assets/images/job.png')); ?>" alt="">
                    <span>Job Suggestions</span>
                </a>
            </li>
            <li class="<?php echo $__env->yieldContent('saved-jobs'); ?>">
                <a href="<?php echo e(route('saved.jobs')); ?>">
                    <img src="<?php echo e(asset('front/assets/images/save_icon.png')); ?>" alt="">
                    <span>Saved Jobs</span>
                </a>
            </li>
            <li class="<?php echo $__env->yieldContent('settings'); ?>">
                <a href="#">
                    <img src="<?php echo e(asset('front/assets/images/setting_icon.png')); ?>" alt="">
                    <span>Settings</span>
                </a>
            </li>

        </ul>
    </div>
    <div class="ds_inner2">
        <ul>
            <li>
                <a href="">
                    <img src="<?php echo e(asset('front/assets/images/prof_side.png')); ?>" alt="">
                    <span>
                        Log out
                    </span>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php /**PATH C:\wamp64\www\havelihood\resources\views/livewire/front/profile/side-section.blade.php ENDPATH**/ ?>