<section class="auth_container">
    <livewire:front.auth.candidate.side-section />
    <div class="dash_right">
        <div class="dash_right_inner info">
            <h3>What role are you looking for</h3>
            <form action="{{route('profile.anaylist')}}" method="get">
                <div class="info_input">
                    <label for="">Job title <span>*</span></label>
                    <input type="text" placeholder="Job title or keyword" wire:model="job_title">
                </div>
                <div class="info_check_container">
                    <label for="">Job type <span>*</span></label>
                    <div class="info_check_inner">

                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="check1" wire:model="job_type">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check1">
                                Full Time
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="check2" wire:model="job_type">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check2">
                                Contract
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="check3" wire:model="job_type">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check3">
                                Part Time
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="check4" wire:model="job_type">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check4">
                                Internship
                            </label>
                        </div>
                    </div>
                </div>
                <div class="info_in_ch d-flex align-items-end justify-content-between">
                    <div class="info_input m-0">
                        <label for="">Location <span>*</span></label>
                        <select class="form-select" aria-label="Select location" wire:model="location">
                            <option selected>Select location</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="w25 px-0 d-flex align-items-center gap-2 info_check_label">
                        <div class="custom-checkbox">
                            <input class="form-check-input" type="checkbox" value="" id="check15">
                            <div class="checkmark"></div>
                        </div>
                        <label class="form-check-label" for="check12">
                            Open to Remote
                        </label>
                    </div>
                </div>
                <div class="info_check_container">
                    <label for="">Work Authorization <span><img src="assets/images/file-question-01.png" width="30" alt=""></span></label>
                    <div class="info_check_inner">

                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check12">
                                H1B Sponsorship
                            </label>
                        </div>
                    </div>
                </div>
                <div class="info_btn1">
                    <button class="btn1" role="button">
                        Continue
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
