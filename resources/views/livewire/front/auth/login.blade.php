
    <section class="auth_container">
        <livewire:front.auth.candidate.side-section />
        <div class="dash_right">
            <div class="dash_right_inner">
                <img src="{{asset('public/front/assets/images/logo_black.png')}}" class="mb-5 d-inline-block d-lg-none" width="200" alt="">
                <h2>Login</h2>
                <p>Enter your details</p>
                <form wire:submit.prevent="login">
                    <div class="input_div prof">
                        <input type="email" wire:model="email" placeholder="Enter Email">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div key">
                        <input type="password" wire:model="password" autocomplete="" placeholder="Enter Password">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="remember_me">

                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" wire:model="remember" type="checkbox" id="check12">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check12">
                                Remember me
                            </label>
                        </div>
                        <a href="{{route('forget.password')}}" >Forget Password</a>
                    </div>
                    <div class="mt-5">
                        <button class="btn1" wire:loading.remove  wire:target="login">
                            Login now
                        </button>
                        <button  class="btn1" type="button" wire:loading  wire:target="login">
                            <div  class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span>
                            </div>
                        </button>
                    </div>
                    <div class="dhac">
                        <p>Dont have an account? <a href="{{route('register')}}"  >SIGN UP</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


