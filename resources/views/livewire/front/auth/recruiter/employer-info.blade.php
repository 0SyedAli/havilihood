<section class="auth_container">
    <livewire:front.auth.recruiter.side-section />
    <div class="dash_right">
        <div class="dash_right_inner info info2">
            <h3>Take the first step in telling your story</h3>
            <form wire:submit.prevent="save">
                <div class="row">
                    <div class="col-12 ">
                        <div class="info_input">
                            <select class="form-select" aria-label="Select location" wire:model="company_id">
                                <option value="" selected>Select Company</option>
                                @foreach($companies as $company)

                                <option value="{{$company->id}}">{{$company->name}}</option>
                                @endforeach
                            </select>
                            @error('company_id')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Official Job Title" wire:model="job_title">
                            @error('job_title')
                            <small class="text-danger">{{$message}}</small>
                            @enderror

                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="email" placeholder="Work Email Address" wire:model="work_email">
                            @error('work_email')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="tel" placeholder="Phone Number" wire:model="phone">
                            @error('phone')
                            <small class="text-danger">{{$message}}</small>
                            @enderror
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
