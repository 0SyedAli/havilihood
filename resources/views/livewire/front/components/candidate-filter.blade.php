
<div>

    <div class="filter_top d-flex flex-column flex-sm-row gap-2 gap-sm-5 alig-items-center">
        <button class="filter_btn" data-bs-target="#staticBackdrop" data-bs-toggle="modal">Filter <span>+</span></button>
        <div class="sjl_itm_label_container">
            @if(!empty($job_type))
                @foreach($job_type as $type)
                    <label for="">{{$type}}</label>
                @endforeach
            @endif
            @if(!empty($work_model))
                @foreach($work_model as $work)
                    <label for="">{{$work}}</label>
                @endforeach
            @endif
            @if(!empty($work_auth))
                @foreach($work_auth as $auth)
                    <label for="">{{$auth}}</label>
                @endforeach
            @endif
            @if(!empty($pay_period))
                @foreach($pay_period as $pay)
                    <label for="">{{$pay}}</label>
                @endforeach
            @endif
            @if(!empty($experience_level))
                @foreach($experience_level as $level)
                    <label for="">{{$level}}</label>
                @endforeach
            @endif
            @if(!empty($salary))
                <label for="">${{$salary}}</label>
            @endif
                @if(!empty($experience_from && $experience_to))
                    <label for="">{{$experience_from}}Y - {{$experience_to}}Y</label>
                @endif
        </div>
    </div>
    <div class="contact-modal">
        <!-- Modal start -->
        <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                    <div class="modal-body">
                        <div class="form-get-quote md_form"  >
                            <div class="row justify-content-center">
                                <div class="col-lg-12">
                                    <div class="title">
                                        <h2>FILTERS</h2>
                                        <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                                    </div>
                                    <div class="form-input">
                                        <h4 for="">Job Title</h4>
                                        <input type="text" wire:model="job_title" placeholder="Software Engineer">

                                    </div>
                                    <div class="form-input">
                                        <h4 for="">Job Type</h4>
                                        <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" wire:model="job_type" value="Full Time" id="job_type1">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="job_type1">
                                                    Full Time
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" wire:model="job_type" value="Part Time" id="job_type2">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="job_type2">
                                                    Part Time
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" wire:model="job_type" value="Internship" id="job_type3">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="job_type3">
                                                    Internship
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" wire:model="job_type" value="Contract" id="job_type4">
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
                                                    <input class="form-check-input" type="checkbox" value="Onsite" wire:model="work_model" id="work_model1">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="work_model1">
                                                    Onsite
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Remote" wire:model="work_model" id="work_model2">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="work_model2">
                                                    Remote
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Hybrid" wire:model="work_model" id="work_model3">
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
                                                    <input class="form-check-input" type="checkbox" value="Internship" wire:model="experience_level" id="exp_level1">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="exp_level1">
                                                    Internship
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Entry Level" wire:model="experience_level" id="exp_level2">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="exp_level2">
                                                    Entry Level
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Mid Level" wire:model="experience_level" id="exp_level3">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="exp_level3">
                                                    Mid Level
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Senior Level" wire:model="experience_level" id="exp_level4">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="exp_level4">
                                                    Senior Level
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Director" wire:model="experience_level" id="exp_level5">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="exp_level5">
                                                    Director
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Executive" wire:model="experience_level" id="exp_level6">
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
                                                    <h4 for="">Required Experience (<input type="number" id="min-input" readonly class="min-input" value="0" min="0" max="20" /> - <input type="number" readonly id="max-input" class="max-input" value="20" min="0" max="20" /> years)</h4>
                                                </div>
                                                <div class="slider-container mt-4">
                                                    <div class="price-slider" id="price-slider"></div>
                                                </div>

                                                <!-- Slider -->
                                                <div class="range-input">
                                                    <input type="range" id="min-range" class="min-range" min="0" max="20" value="0" step="1" wire:model="experience_from">
                                                    <input type="range" id="max-range" class="max-range" min="0" max="20" value="20" step="1" wire:model="experience_to">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-input">
                                        <h4 for="">Date Posted</h4>
                                        <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="radio" value="-24 hours" wire:model="date_posted" id="date_posted1">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="date_posted1">
                                                    24 hours
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="radio" value="-3 days" wire:model="date_posted" id="date_posted2">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="date_posted2">
                                                    3 Days
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="radio" value="-1 week" wire:model="date_posted" id="date_posted3">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="date_posted3">
                                                    1 week
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="radio" value="-1 month" wire:model="date_posted" id="date_posted4">
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
                                            <input type="range" class="form-range" min="0" max="1000" step="1" id="customRange" wire:model="salary" value="0">
                                            <div class="progress">
                                                <div class="progress-bar" role="progressbar" id="progressBar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1000"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-input">
                                        <h4 for="">Work Authorization</h4>
                                        <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="H1B Sponsorship" wire:model="work_auth" id="work_auth1">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="work_auth1">
                                                    H1B Sponsorship
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="USA" wire:model="work_auth" id="work_auth2">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="work_auth2">
                                                    USA
                                                </label>
                                            </div>
                                            <div class="w25 px-0 d-flex align-items-center gap-2">
                                                <div class="custom-checkbox">
                                                    <input class="form-check-input" type="checkbox" value="Citizenship" wire:model="work_auth" id="work_auth3">
                                                    <div class="checkmark"></div>
                                                </div>
                                                <label class="form-check-label" for="work_auth3">
                                                    Citizenship
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                  {{--  <div class="form-input">
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
                                    </div>--}}
                                    <div class="modal_btn_container">
                                        <button class="btn1" role="button" type="button" wire:click="sendFilterData" data-bs-dismiss="modal" >
                                            Apply Filter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal end -->
        <script>
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
                const minPercent = (minRange.value / 20) * 100;
                const maxPercent = (maxRange.value / 20) * 100;
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

        </script>
    </div>

</div>
