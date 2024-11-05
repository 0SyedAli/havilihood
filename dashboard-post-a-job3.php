<?php
$title = '';
$description = '""';
include 'includes/header.php';
?>
<section class="dashboard_container">
    <?php include("./includes/dash_sidebar2.php") ?>
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <h2 class="sjd_h2" style="margin: 50px 0 40px;">Post a job</h2>
                </div>
            </div>
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
                                    <input type="radio" id="full_time" name="cr_job_type">
                                    <label for="full_time">
                                        <img src="assets/images/plus.png" alt="">
                                        Full Time
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="part_time" name="cr_job_type">
                                    <label for="part_time">
                                        <img src="assets/images/plus.png" alt="">
                                        Part Time
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="contract" name="cr_job_type">
                                    <label for="contract">
                                        <img src="assets/images/plus.png" alt="">
                                        Contract
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="freelance" name="cr_job_type">
                                    <label for="freelance">
                                        <img src="assets/images/plus.png" alt="">
                                        Freelance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="internship" name="cr_job_type">
                                    <label for="internship">
                                        <img src="assets/images/plus.png" alt="">
                                        Internship
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="temporary" name="cr_job_type">
                                    <label for="temporary">
                                        <img src="assets/images/plus.png" alt="">
                                        Temporary
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="step_input pb-0 pt-4">
                            <p>Which option best describes this job's position?</p>
                            <div class="step_select">
                                <select>
                                    <option value="as">as</option>
                                </select>
                            </div>
                        </div>
                        <div class="step_input d-flex align-items-center gap-4">
                            <div class=" d-flex align-items-center gap-4">
                                <p>From</p>
                                <input type="text">
                            </div>
                            <div class=" d-flex align-items-center gap-4">
                                <p>To</p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="select_job_type">
                            <h4>Job type</h4>
                            <div class="custom_container">
                                <div class="custom_radio">
                                    <input type="radio" id="full_time" name="cr_job_type">
                                    <label for="full_time">
                                        <img src="assets/images/plus.png" alt="">
                                        8 hour shift
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="part_time" name="cr_job_type">
                                    <label for="part_time">
                                        <img src="assets/images/plus.png" alt="">
                                        4 hour shift
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="contract" name="cr_job_type">
                                    <label for="contract">
                                        <img src="assets/images/plus.png" alt="">
                                        Monday to Friday
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="freelance" name="cr_job_type">
                                    <label for="freelance">
                                        <img src="assets/images/plus.png" alt="">
                                        12 hour shift
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-5">
                        <button class="back_btn"><img src="assets/images/arrow_left.png" alt="">Back</button>
                        <a href="dashboard-post-a-job4" class="btn3 btn_post">
                            <img src="assets/images/round_plus.png" alt="">
                            Continue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script>
</script>
<?php
include 'includes/footer.php';
?>