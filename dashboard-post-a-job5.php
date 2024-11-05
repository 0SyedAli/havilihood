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
                    <div>
                        <h4 class="mb-2">Job description</h4>
                        <div id="editor">
                            <p>This is some sample content.</p>
                        </div>
                    </div>
                    <div class="upload_pdf_docs">
                        <input type="file">
                        <img src="assets/images/upload_icon2.png" alt="">
                        <label for="">Upload a PDF or document</label>
                    </div>
                    <p>You can easily upload a PDF document to upload your job details.</p>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-5">
                        <button class="back_btn"><img src="assets/images/arrow_left.png" alt="">Back</button>
                        <a href="dashboard-post-a-job6" class="btn3 btn_post">
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