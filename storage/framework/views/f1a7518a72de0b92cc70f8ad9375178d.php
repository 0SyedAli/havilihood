<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title><?php echo e($title ?? 'Page Title'); ?></title>

        <link rel="shortcut icon" href="<?php echo e(asset('front/assets/images/favicon.png')); ?>" />
        <link href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
        <link href="<?php echo e(asset('front/assets/css/bootstrap.min.css')); ?> " rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('front/assets/css/animate.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('front/assets/css/aos.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('front/assets/css/fancybox.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('front/assets/css/owl.carousel.min.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('front/assets/css/owl.theme.default.css')); ?>" rel="stylesheet" type="text/css">
        <link href="<?php echo e(asset('front/assets/css/jquery-ui.css')); ?>" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/assets/css/slick.css')); ?>" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo e(asset('front/assets/css/slick-theme.css')); ?>" />
        <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <link href="<?php echo e(asset('front/assets/css/custom.css')); ?>" rel="stylesheet" type="text/css">

    </head>
    <body>
        <?php echo e($slot); ?>


        <div class="contact-modal">
            <!-- Modal start -->
            <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                        <div class="modal-body">
                            <form class="form-get-quote" action="javascript:;" method="POST">
                                <div class="row justify-content-center">
                                    <div class="col-lg-12">
                                        <div class="title">
                                            <h2>FILTERS</h2>
                                            <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Job Title</h4>
                                            <input type="text" placeholder="Software Engineer">
                                            <div class="add_field_btn float-end">
                                                <button class="filter_btn">Add <span>+</span></button>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Job Type</h4>
                                            <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="job_type1">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="job_type1">
                                                        Full Time
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="job_type2">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="job_type2">
                                                        Part Time
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="job_type3">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="job_type3">
                                                        Internship
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="job_type4">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="job_type4">
                                                        Contract
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Work Model</h4>
                                            <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="work_model1">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="work_model1">
                                                        Onsite
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="work_model2">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="work_model2">
                                                        Remote
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="work_model3">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="work_model3">
                                                        Hybrid
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Location (within US)</h4>
                                            <div class="d-flex align-items-center gap-3">
                                                <input type="text" placeholder="New York">
                                                <select class="form-select " aria-label="Default select example">
                                                    <option selected>50mi</option>
                                                    <option value="1">10min</option>
                                                    <option value="2">15min</option>
                                                    <option value="3">30min</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Experience Level</h4>
                                            <div class="d-flex flex-wrap gap-3 align-items-center  pt-4">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="exp_level1">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="exp_level1">
                                                        Internship
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="exp_level2">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="exp_level2">
                                                        Entry Level
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="exp_level3">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="exp_level3">
                                                        Mid Level
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="exp_level4">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="exp_level4">
                                                        Senior Level
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="exp_level5">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="exp_level5">
                                                        Director
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="exp_level6">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="exp_level6">
                                                        Executive
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <div class="custom-wrapper rangeS">
                                                <!-- Price Range Slider -->
                                                <div class="price-input-container">
                                                    <div class="price-input">
                                                        <h4 for="">Required Experience (<input type="number" id="min-input" readonly class="min-input" value="0" min="0" max="11" /> - <input type="number" readonly id="max-input" class="max-input" value="11" min="0" max="11" /> years)</h4>
                                                    </div>
                                                    <div class="slider-container mt-4">
                                                        <div class="price-slider" id="price-slider"></div>
                                                    </div>

                                                    <!-- Slider -->
                                                    <div class="range-input">
                                                        <input type="range" id="min-range" class="min-range" min="0" max="11" value="0" step="1">
                                                        <input type="range" id="max-range" class="max-range" min="0" max="11" value="11" step="1">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Date Posted</h4>
                                            <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="date_posted1">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="date_posted1">
                                                        24 hour
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="date_posted2">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="date_posted2">
                                                        3 Days
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="date_posted3">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="date_posted3">
                                                        1 week
                                                    </label>
                                                </div>
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="date_posted4">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="date_posted4">
                                                        1 month
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Compensation & Sponsorship</h4>
                                            <div class="price-input">
                                                <h5 for="">Minimum Annual Salary <span>$<span id="rangeValue">0</span>k/yr</span></h5>
                                            </div>
                                            <div class="range-progress-container">
                                                <input type="range" class="form-range" min="0" max="1000" step="1" id="customRange" value="0">
                                                <div class="progress">
                                                    <div class="progress-bar" role="progressbar" id="progressBar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1000"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <h4 for="">Work Authorization</h4>
                                            <div class="w25 pt-4 pb-3 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="work1">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="work1">
                                                    H1B sponsorship
                                                </label>
                                            </div>
                                            <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                                        </div>
                                        <div class="form-input">
                                            <div class="d-flex align-items-center justify-content-between pb-2">
                                                <h4 for="">Areas of Interest</h4>
                                                <div class="add_field_btn float-end">
                                                    <button class="filter_btn">Add <span>+</span></button>
                                                </div>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="areas1">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="areas1">
                                                        Information Technology
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="areas2">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="areas2">
                                                        Information Technology
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="areas3">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="areas3">
                                                        Information Technology
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="areas4">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="areas4">
                                                        Information Technology
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="areas5">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="areas5">
                                                        Information Technology
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                        </div>
                                        <div class="form-input">
                                            <div class="d-flex align-items-center justify-content-between pb-2">
                                                <h4 for="">Skills</h4>
                                                <div class="add_field_btn float-end">
                                                    <button class="filter_btn">Add <span>+</span></button>
                                                </div>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="skills1">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="skills1">
                                                        Business Development
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="skills2">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="skills2">
                                                        Business Development
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="skills3">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="skills3">
                                                        Business Development
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="skills4">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="skills4">
                                                        Business Development
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                            <div class="tag-labels">
                                                <div class="w25 px-0 d-flex align-items-center gap-2">
                                                    <div class="custom-checkbox">
                                                        <input class="form-check-input" type="checkbox" value="" id="skills5">
                                                        <div class="checkmark"></div>
                                                    </div>
                                                    <label class="form-check-label" for="skills5">
                                                        Business Development
                                                    </label>
                                                </div>
                                                <button class="close-btn">✖</button>
                                            </div>
                                        </div>
                                        <div class="modal_btn_container">
                                            <button class="btn1" role="button">
                                                Apply Filter
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal end -->
        </div>






        <div class="modal fade" id="forward_link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="title d-flex flex-column align-items-center text-center px-4">
                        <img src="<?php echo e(asset('front/assets/images/link_img.png')); ?>" alt="">
                        <h2>Link to the
                            Company Job Post Page</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- get end of url -->
        
            <!-- get end of url -->
        <script src="<?php echo e(asset('front/assets/js/jquery-3.6.3.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/assets/js/aos.js')); ?>"></script>
        <script src="<?php echo e(asset('front/assets/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/assets/js/fancybox.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/assets/js/owl.carousel.min.js')); ?>"></script>
        <script src="<?php echo e(asset('front/assets/js/jquery-ui.js')); ?>"></script>
        <script type="text/javascript" src="<?php echo e(asset('front/assets/js/slick.js')); ?>"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
        <script src="<?php echo e(asset('front/assets/js/custom.js')); ?>"></script>


<script data-navigate-once >

    document.addEventListener('livewire:rendered', () => {
        Livewire.on('error', toastr.error);
        Livewire.on('success', toastr.success);
    });


    document.addEventListener('DOMContentLoaded', () => {
        // Define the updateProgress function
        function updateProgress(value) {
            var progressBar = document.getElementById('progressBar');
            progressBar.style.width = value / 1000 * 100 + '%';
            progressBar.setAttribute('aria-valuenow', value);

            // Update the span with the dynamic value
            var rangeValueDisplay = document.getElementById('rangeValue');
            rangeValueDisplay.textContent = value; // Update the span content with the value
        }

        // Attach the input event to the range slider
        const rangeInput = document.getElementById('customRange');
        rangeInput.addEventListener('input', (event) => {
            updateProgress(event.target.value);
        });
        const minInput = document.getElementById('min-input');
        const maxInput = document.getElementById('max-input');
        const minRange = document.getElementById('min-range');
        const maxRange = document.getElementById('max-range');
        const priceSlider = document.getElementById('price-slider');

        // Update slider background
        function updateSlider() {
            const minPercent = (minRange.value / 11) * 100;
            const maxPercent = (maxRange.value / 11) * 100;
            priceSlider.style.left = minPercent + '%';
            priceSlider.style.right = (100 - maxPercent) + '%';
        }

        // Sync input fields and range sliders
        minInput.addEventListener('input', () => {
            const minValue = Math.min(parseInt(minInput.value), parseInt(maxInput.value) - 1);
            minInput.value = minValue;
            minRange.value = minValue;
            updateSlider();
        });

        maxInput.addEventListener('input', () => {
            const maxValue = Math.max(parseInt(maxInput.value), parseInt(minInput.value) + 1);
            maxInput.value = maxValue;
            maxRange.value = maxValue;
            updateSlider();
        });

        minRange.addEventListener('input', () => {
            const minValue = Math.min(parseInt(minRange.value), parseInt(maxRange.value) - 1);
            minRange.value = minValue;
            minInput.value = minValue;
            updateSlider();
        });

        maxRange.addEventListener('input', () => {
            const maxValue = Math.max(parseInt(maxRange.value), parseInt(minRange.value) + 1);
            maxRange.value = maxValue;
            maxInput.value = maxValue;
            updateSlider();
        });

        // Initial update
        updateSlider();
    });
</script>
<script>

    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('show');
    }
</script>

    </body>
</html>
<?php /**PATH C:\wamp64\www\havelihood\resources\views/components/layouts/app.blade.php ENDPATH**/ ?>