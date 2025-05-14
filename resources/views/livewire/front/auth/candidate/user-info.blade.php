<section class="auth_container">
    <livewire:front.auth.candidate.side-section />
    <div class="dash_right">
        <div class="dash_right_inner info">
            <h3>What role are you looking for</h3>
{{--            <form action="{{route('profile.anaylist')}}" method="get">--}}
            <form wire:submit.prevent="save">
                <div class="info_input">
                    <label for="">Job title <span>*</span></label>
                    <input type="text" placeholder="Job title or keyword" wire:model="job_title">
                    @error('job_title')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="info_check_container">
                    <label for="">Job type <span>*</span></label>
                    <div class="info_check_inner">

                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input"  type="checkbox" value="Full Time" id="check1" wire:model="job_types">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check1">
                                Full Time
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox"  value="Contract" id="check2" wire:model="job_types">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check2">
                                Contract
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox"  value="Part Time" id="check3" wire:model="job_types">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check3">
                                Part Time
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox"  value="Internship" id="check4" wire:model="job_types">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check4">
                                Internship
                            </label>
                        </div>

                    </div>
                    @error('job_types')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>

                <div class="info_in_ch d-flex align-items-end justify-content-between">
                    <div class="info_input">
                        <label for="">Location<span>*</span></label>
                        <input type="text" placeholder="Enter Location" wire:model="location">
                        @error('location')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="info_input ">
                        <label for="">Work Model <span>*</span></label>
                        <select class="form-select" aria-label="Select location" wire:model="work_model">
                            <option selected>Select Work Model</option>
                            <option value="Onsite">Onsite</option>
                            <option value="Remote">Remote</option>
                            <option value="Hybrid">Hybrid</option>
                        </select>
                        @error('work_model')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>

                </div>
                <div class="info_check_container">
                    <label for="">Work Authorization <span><img src="{{asset('public/front/assets/images/file-question-01.png')}}" width="30" alt=""></span></label>
                    <div class="info_check_inner ">

                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="H1B Sponsorship" id="Sponsorship" wire:model="work_authorizations">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="Sponsorship">
                                H1B Sponsorship
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="USA" id="USA" wire:model="work_authorizations">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="USA" wire:model="work_authorizations">
                                USA
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="Citizenship" id="Citizenship" wire:model="work_authorizations">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="Citizenship">
                                Citizenship
                            </label>
                        </div>

                    </div>
                    @error('work_authorizations')
                    <small class="text-danger">{{$message}}</small>
                    @enderror
                </div>
                <div class="info_btn1">
                    <button  class="btn1" wire:loading.remove wire:target="save">
                        Continue
                    </button>
                    <button class="btn1" type="button" wire:loading  wire:target="save"  >
                        <div  class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
