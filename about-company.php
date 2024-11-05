<?php
$title = '';
$description = '""';
include 'includes/header.php';
?>

<section class="auth_container">
    <?php include("./includes/dash_left2.php") ?>
    <div class="dash_right">
        <div class="dash_right_inner info info2">
            <h3>Great! Let us know a bit more about your company</h3>
            <form action="javascript:;">
                <div class="row">
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" required placeholder="Company Website">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Job Fetch URL">
                            <p><span>NOTE:</span> Link to you job hiring application page</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info_input">
                            <input type="text" placeholder="Number of Employees">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info_input">
                            <input type="text" placeholder="Employment Type">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Headquarter City">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="upload_input2">
                            <img src="assets/images/upload_btn2.png" alt="">
                            <input type="file" name="" id="">
                        </div>
                        <div class="info_input readonly_input">
                            <input type="text" readonly="true" aria-readonly="true" placeholder="Upload Company Logo">
                        </div>
                    </div>
                </div>
                <div class="info_btn1">
                    <button class="btn1" role="button" data-bs-toggle="modal" data-bs-target="#comfirm_detail">
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