<div>


    <section class="auth_container">
<!--        --><?php //include("./includes/dash_left.php") ?>
        <div class="dash_right">
            <div class="dash_right_inner">
                <h2>Signup</h2>
                <p>Enter your details</p>
                <form wire:submit.prevent="register">
                    <div class="radio_dash d-flex align-items-center justify-content-between">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" wire:model="candidate" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                As Job Seeker
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" wire:model="recruiter" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <label class="form-check-label" for="flexRadioDefault2">
                                As Recruiter
                            </label>
                        </div>
                        @error('user_role')
                        <small class="text-danger">{{$message}}</small>

                        @enderror
                    </div>
                    <div class="input_div prof">
                        <input type="text" placeholder="Full Name">
                        @error('name')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div email">
                        <input type="email" placeholder="Enter Email">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div key">
                        <input type="password" placeholder="Password">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div key">
                        <input type="password" placeholder="Re-enter Password">
                        @error('password_confirmation')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="mt-5">
                        <button class="btn1" role="button" >
                            Signup now
                        </button>
                    </div>
                    <div class="dhac">
                        <p>Don't have an account? <a href="{{route('login')}}" wire:navigate>LOGIN</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>
