<?php
$title = '';
$description = '""';
include 'includes/header.php';
?>

<section class="auth_container">
    <?php include("./includes/dash_left.php") ?>
    <div class="dash_right">
        <div class="dash_right_inner info">
            <h3>What role are you looking for</h3>
            <form action="profile-anaylist" method="POST">
                <div class="info_input">
                    <label for="">Job title <span>*</span></label>
                    <input type="text" placeholder="Job title or keyword">
                </div>
                <div class="info_check_container">
                    <label for="">Job title <span>*</span></label>
                    <div class="info_check_inner">

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                Full Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked12" checked>
                            <label class="form-check-label" for="flexCheckChecked12">
                                Contract
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault123">
                            <label class="form-check-label" for="flexCheckDefault123">
                                Part Time
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked1234" checked>
                            <label class="form-check-label" for="flexCheckChecked1234">
                                Internship
                            </label>
                        </div>
                    </div>
                </div>
                <div class="info_in_ch d-flex align-items-end justify-content-between">
                    <div class="info_input m-0">
                        <label for="">Location <span>*</span></label>
                        <select class="form-select" aria-label="Select location">
                            <option selected>Select location</option>
                            <option value="1">One</option>
                            <option value="2">Two</option>
                            <option value="3">Three</option>
                        </select>
                    </div>
                    <div class="form-check info_check_label">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked12345" checked>
                        <label class="form-check-label" for="flexCheckChecked12345">
                        Open to Remote
                        </label>
                    </div>
                </div>
                <div class="info_check_container">
                    <label for="">Work Authorization <span>*</span></label>
                    <div class="info_check_inner">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault231">
                            <label class="form-check-label" for="flexCheckDefault231">
                                H1B Sponsorship
                            </label>
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

<?php
include 'includes/footer.php';
?>