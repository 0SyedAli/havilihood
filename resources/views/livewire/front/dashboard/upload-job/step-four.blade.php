
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xxl-6">
                    <div class="title mb-4">
                        <h3>Pay and Benefits</h3>
                        <p>Enhance your job listings with comprehensive pay and benefits information, attracting top talent by showcasing the value and rewards your positions offer</p>
                    </div>
                    <form action="" class="add_job_type">
                        <h4 class="mb-2">Pay</h4>
                        <p>Adding pay and benefits will help the candidates clear understanding of their needs and attract the right candidates for your job post.</p>
                        <div class="step_input pt-2 pb-0 row">
                            <div class="col-sm-6 d-flex align-items-center gap-3">
                                <p>Rate</p>
                                <div class="step_select">
                                    <select  wire:model.live="pay_period">
                                        <option value="" >Select Rate</option>
                                        <option value="per hour">per hour</option>
                                        <option value="per week">per week</option>
                                        <option value="per month">per month</option>
                                        <option value="per year">per year</option>
                                    </select>
                                </div>
                            </div>
                            @error('pay_period')
                                <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="step_input row">
                            <div class="col-6 d-flex align-items-center gap-4">
                                <p>Minimum</p>
                                <input type="number" class="cust_input" wire:model.live="salary_start">

                                @error('salary_start')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="col-6 d-flex align-items-center gap-4">
                                <p>Maximum</p>
                                <input type="number" class="cust_input" wire:model.live="salary_end">
                                @error('salary_end')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="select_job_type">
                            <h4 class="mb-2">Benefits</h4>
                            <p>This helps your job post stand out to the right candidates. It's the first thing they'll see, so make it count! </p>
                            <div class="custom_container">
                                <div class="custom_radio">
                                    <input type="checkbox" id="full_time" name="cr_job_type5" value="Health insurance" wire:model.live="benefits">
                                    <label for="full_time">
                                        <img src="{{asset('front/assets/images/plus.png')}}" alt="" >
                                        Health insurance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="checkbox" id="part_time" name="cr_job_type5" value="Paid time off" wire:model.live="benefits">
                                    <label for="part_time">
                                        <img src="{{asset('front/assets/images/plus.png')}}" alt="" >
                                        Paid time off
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="checkbox" id="contract" name="cr_job_type5" value="Dental insurance" wire:model.live="benefits">
                                    <label for="contract">
                                        <img src="{{asset('front/assets/images/plus.png')}}" alt="" >
                                        Dental insurance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="checkbox" id="freelance" name="cr_job_type5" value="Vision insurance" wire:model.live="benefits">
                                    <label for="freelance">
                                        <img src="{{asset('front/assets/images/plus.png')}}" alt="" >
                                        Vision insurance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="checkbox" id="add_benif" name="cr_job_type5" value="Add you own benefits" wire:model.live="benefits">
                                    <label for="add_benif">
                                        <img src="{{asset('front/assets/images/plus.png')}}" alt="" >
                                        Add you own benefits
                                    </label>
                                </div>

                            </div>
                            @error('benefits')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>

                    </form>

                </div>
            </div>

