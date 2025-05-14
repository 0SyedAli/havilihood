
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xxl-6">
                    <div class="title mb-5">
                        <h3>Add Job Details</h3>
                        <p>Adding screening questions will help you to get deeper understanding of job seekers qualification</p>
                    </div>
                    <form action="" class="add_job_type">
                        <div class="select_job_type">
                            <h4>Job type</h4>
                            <div class="custom_container">
                                <div class="custom_radio">
                                    <input type="radio" id="full_time" name="job_type" value="Full Time" wire:model.live="job_type">
                                    <label for="full_time">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="">
                                        Full Time
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="part_time" name="job_type" value="Part Time" wire:model.live="job_type">
                                    <label for="part_time">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="">
                                        Part Time
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="contract" name="job_type" value="Contract" wire:model.live="job_type">
                                    <label for="contract">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="">
                                        Contract
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="freelance" name="job_type" value="Freelance" wire:model.live="job_type">
                                    <label for="freelance">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="">
                                        Freelance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="internship" name="job_type" value="Internship" wire:model.live="job_type">
                                    <label for="internship">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="">
                                        Internship
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="temporary" name="job_type" value="Temporary" wire:model.live="job_type">
                                    <label for="temporary">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="">
                                        Temporary
                                    </label>
                                </div>
                            </div>
                        </div>
                            @error('job_type')
                            <small class="text-danger">{{$message}}</small>
                        @enderror
                        <div class="step_input pb-0 pt-4">
                            <p>What is your authorization requirement?</p>
                            <div class="step_select">
                                <select wire:model.live="work_authorization">
                                    <option disabled value="" >Select Work Authorization</option>
                                    <option value="USA">USA</option>
                                    <option value="H1B Sponsorship">H1B Sponsorship</option>
                                    <option value="Citizenship">Citizenship</option>
                                </select>
                            </div>
                            @error('work_authorization')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                            <p><strong>Expected hours per week</strong></p>
                        </div>
                        <div class="step_input d-flex align-items-center gap-4">
                            <div class=" d-flex align-items-center gap-4">
                                <p>From</p>
                                <div class="asc"> <input type="number" class="cust_input" wire:model.live="hour_start"> </div>
                            </div>
                            @error('hour_start')
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                            <div class=" d-flex align-items-center gap-4">
                                <p>To</p>
                                <div class="asc">   <input type="number" class="cust_input" wire:model.live="hour_end"> </div>
                            </div>
                            @error('hour_end')
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div>
                        <div class="select_job_type">
                            <h4>Schedule</h4>
                            <div class="custom_container">
                                <div class="custom_radio">
                                    <input type="radio" id="full_time" name="schedule" value="8 hour shift" wire:model.live="schedule">
                                    <label for="full_time">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="" >
                                        8 hour shift
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="part_time" name="schedule" value="4 hour shift" wire:model.live="schedule">
                                    <label for="part_time">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="" >
                                        4 hour shift
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="contract" name="schedule" value="Monday to Friday" wire:model.live="schedule">
                                    <label for="contract">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="" >
                                        Monday to Friday
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="freelance" name="schedule" value="12 hour shift" wire:model.live="schedule">
                                    <label for="freelance">
                                        <img src="{{asset('public/front/assets/images/plus.png')}}" alt="" >
                                        12 hour shift
                                    </label>
                                </div>
                            </div>

                            @error('schedule')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </form>
                </div>
            </div>

