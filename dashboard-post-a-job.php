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
                    <h2 class="sjd_h2" style="margin: 50px 0 40px;">Jobs Posted</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-lg-8 col-xxl-6">
                    <div class="step_input">
                        <p>Write a title for your job post</p>
                        <input type="text">
                        <ul>
                            <li>Examples</li>
                            <li>Fashion designer required for an urban clothing brand.</li>
                            <li>Video editor needed to create whiteboard explainer video</li>
                            <li>UX designer with e-commerce experience to support app development</li>
                        </ul>
                    </div>
                    <div class="step_input ">
                        <p>Which option best describes this job's position?</p>
                        <div class="step_select">
                            <select>
                                <option value="as">as</option>
                            </select>
                        </div>
                    </div>
                    <div class="step_input ">
                        <p>Choose country</p>
                        <div class="step_select">
                            <select>
                                <option value="as">as</option>
                            </select>
                        </div>
                    </div>
                    <div class="step_input ">
                        <p>Choose state</p>
                        <div class="step_select">
                            <select>
                                <option value="as">as</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-5">
                        <button class="back_btn"><img src="assets/images/arrow_left.png" alt="">Back</button>
                        <a href="dashboard-post-a-job2" class="btn3 btn_post">
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