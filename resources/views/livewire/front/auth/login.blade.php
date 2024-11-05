<div>

    <section class="auth_container">
 {{-- <?php //include("./includes/dash_left.php") ?> --}}
        <div class="dash_right">
            <div class="dash_right_inner">
                <img src="{{asset('front/assets/images/logo_black.png')}}" class="mb-5 d-inline-block d-lg-none" width="200" alt="">
                <h2>Login</h2>
                <p>Enter your details</p>
                <form action="dashboard-profile" method="POST">
                    <div class="input_div prof">
                        <input type="text" placeholder="Enter Email">
                    </div>
                    <div class="input_div key">
                        <input type="password" placeholder="Enter Password">
                    </div>
                    <div class="remember_me">

                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="check12">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check12">
                                Remember me
                            </label>
                        </div>
                        <a href="forget-password.php">Forget Password</a>
                    </div>
                    <div class="mt-5">
                        <button class="btn1" type="submit" role="button">
                            Login now
                        </button>
                    </div>
                    <div class="dhac">
                        <p>Dont have an account? <a href="signup">SIGN UP</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>


</div>
