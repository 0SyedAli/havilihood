<div>


    <section class="auth_container">
<!--        --><?php //include("./includes/dash_left.php") ?>
        <div class="dash_right">
            <div class="dash_right_inner">
                <img src="assets/images/logo_black.png" class="mb-5 d-inline-block d-lg-none" width="200" alt="">
                <h2>Login</h2>
                <p>Enter your details</p>
                <form wire:submit.prevent="login" >
                    <div class="input_div prof">
                        <input type="email" wire:model="email" placeholder="Enter Email">
                        @error('email')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="input_div key">
                        <input type="password" wire:model="password" placeholder="Enter Password">
                        @error('password')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="remember_me">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked">
                                Remember Me
                            </label>
                        </div>
                        <a href="javascript:;">Forget Password</a>
                    </div>
                    <div class="mt-5">
                        <button class="btn1" type="submit" role="button">
                            Login now
                        </button>
                    </div>
                    <div class="dhac">
                        <p>Dont have an account? <a href="{{route('regi ster')}}" wire:navigate>SIGN UP</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


</div>
