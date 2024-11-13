

    <section class="auth_container">
        <livewire:front.auth.candidate.side-section />
        <div class="dash_right">
            <div class="dash_right_inner">
                <h2>Signup</h2>
                <p>Enter your details</p>
                <form wire:submit.prevent="register">
                    <div class="d-flex align-items-center justify-content-between pb-4">
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-radio">
                                <input class="form-check-input" wire:model="user_role" value="candidate" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="flexRadioDefault1">
                                As Job Seeker
                            </label>
                        </div>
                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-radio">
                                <input class="form-check-input" wire:model="user_role" value="recruiter" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="flexRadioDefault2">
                                As Recruiter
                            </label>
                        </div>
                    </div>
                    <div class="input_div prof">
                        <input type="text" wire:model="name" placeholder="Full Name">
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div email">
                        <input type="email" wire:model="email" placeholder="Enter Email">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div key">
                        <input type="password" wire:model="password" autocomplete="" placeholder="Password">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div key">
                        <input type="password" wire:model="password_confirmation" autocomplete="" placeholder="Re-enter Password">
                        @error('password_confirmation')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button class="btn1" type="submit"   >
                            Signup now
                        </button>
                    </div>
                    <div class="dhac">
                        <p>Already have an account? <a href="{{route('login')}}" wire:navigate >LOGIN</a></p>
                    </div>
                </form>
            </div>
        </div>


    </section>

