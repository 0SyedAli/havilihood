<?php
$title = '';
$description = '""';
include 'includes/header.php';
?>

<section class="auth_container">
    <?php include("./includes/dash_left.php") ?>
    <div class="dash_right">
        <div class="dash_right_inner">
            <h2>Signup</h2>
            <p>Enter your details</p>
            <form action="javascript:;">
                <div class="radio_dash d-flex align-items-center justify-content-between">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            As Job Seeker
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            As Recruiter
                        </label>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="w25 px-0 d-flex align-items-center gap-2">
                        <div class="custom-radio">
                            <input class="form-check-input" type="radio" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <div class="checkmark"></div>
                        </div>
                        <label class="form-check-label" for="check12">
                            Must have qualification
                        </label>
                    </div>
                    <div class="w25 px-0 d-flex align-items-center gap-2">
                        <div class="custom-radio">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                            <div class="checkmark"></div>
                        </div>
                        <label class="form-check-label" for="check12">
                            Must have qualification
                        </label>
                    </div>
                </div>
                <div class="input_div prof">
                    <input type="text" placeholder="Full Name">
                </div>
                <div class="input_div email">
                    <input type="password" placeholder="Enter Email">
                </div>
                <div class="input_div key">
                    <input type="password" placeholder="Password">
                </div>
                <div class="input_div key">
                    <input type="password" placeholder="Re-enter Password">
                </div>
                <div class="mt-5">
                    <button class="btn1" role="button" onclick="redirectUser()">
                        Signup now
                    </button>
                </div>
                <div class="dhac">
                    <p>Don't have an account? <a href="javascript:;">SIGN UP</a></p>
                </div>
            </form>
        </div>
    </div>
</section>

<?php
include 'includes/footer.php';
?>