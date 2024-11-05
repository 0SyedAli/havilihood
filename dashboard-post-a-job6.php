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
                    <h2 class="sjd_h2" style="margin: 50px 0 40px;">Post a Job</h2>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-12">
                    <div class="add_job_type ajt_table">
                        <h3>Overview</h3>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Job title</td>
                                        <td>Data Scientist</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Which option best describes this job's position?</td>
                                        <td>Onsite</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Location?</td>
                                        <td>USA, New York, Manhattan</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>

                                    <tr>
                                        <th>How many years of experience do you have (skill)?</td>
                                        <td>XXXXX XXX</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>How many years of experience do you have (skill 2)?</td>
                                        <td>XXXXX XXX</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>How many years of experience do you have (skill 3)?</td>
                                        <td>XXXXX XXX</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Job type</td>
                                        <td>US citizen</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>What is your authorization requirement?</td>
                                        <td>XXXXX XXX</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Expected hours per week</td>
                                        <td>XXXXX XXX</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Schedule</td>
                                        <td>XXXXX XXX</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Pay (per hour)</td>
                                        <td>$25 - $30</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Benefits</td>
                                        <td>Dental insurance, Vision insurance</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Job description</td>
                                        <td><a href="javascript:;">View</a></td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Application collection</td>
                                        <td>Talenttube Dashboard</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                    <tr>
                                        <th>Send daily updates to</td>
                                        <td>Email</td>
                                        <td><i class="fa-light fa-pen"></i></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-5">
                        <button class="back_btn"><img src="assets/images/arrow_left.png" alt="">Back</button>
                        <button class="btn3 btn_post">
                            <img src="assets/images/round_plus.png" alt="">
                            Continue
                        </button>
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