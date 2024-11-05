<?php
$title = '';
$description = '""';
include 'includes/header.php';
?>

<section class="auth_container">
    <?php include("./includes/dash_left2.php") ?>
    <div class="dash_right">
        <div class="dash_right_inner info info2">
            <h3>Take the first step in telling your story</h3>
            <form action="about-company" method="POST">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="info_input">
                            <input type="text" placeholder="First name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="info_input">
                            <input type="text" placeholder="Last name">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Company">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Official Job Title">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Work Email Address">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Phone Number">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Password">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="info_input">
                            <input type="text" placeholder="Re-enter Password">
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