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
                                    <select>
                                        <option value="per hour">per hour</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="step_input row">
                            <div class="col-6 d-flex align-items-center gap-4">
                                <p>From</p>
                                <input type="text">
                            </div>
                            <div class="col-6 d-flex align-items-center gap-4">
                                <p>To</p>
                                <input type="text">
                            </div>
                        </div>
                        <div class="select_job_type">
                            <h4 class="mb-2">Benefits</h4>
                            <p>This helps your job post stand out to the right candidates. It's the first thing they'll see, so make it count! </p>
                            <div class="custom_container">
                                <div class="custom_radio">
                                    <input type="radio" id="full_time" name="cr_job_type5">
                                    <label for="full_time">
                                        <img src="assets/images/plus.png" alt="">
                                        Health insurance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="part_time" name="cr_job_type5">
                                    <label for="part_time">
                                        <img src="assets/images/plus.png" alt="">
                                        Paid time off
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="contract" name="cr_job_type5">
                                    <label for="contract">
                                        <img src="assets/images/plus.png" alt="">
                                        Dental insurance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="freelance" name="cr_job_type5">
                                    <label for="freelance">
                                        <img src="assets/images/plus.png" alt="">
                                        Vision insurance
                                    </label>
                                </div>
                                <div class="custom_radio">
                                    <input type="radio" id="add_benif" name="cr_job_type5">
                                    <label for="add_benif">
                                        <img src="assets/images/plus.png" alt="">
                                        Add you own benefits
                                    </label>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-5">
                        <button class="back_btn"><img src="assets/images/arrow_left.png" alt="">Back</button>
                        <a href="dashboard-post-a-job5" class="btn3 btn_post">
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