<?php
$title = '';
$description = '""';
include 'includes/header.php';
?>

<section class="auth_container">
    <?php include("./includes/dash_left.php") ?>
    <div class="dash_right">
        <div class="dash_right_inner">
            <h2>OTP</h2>
            <p>We have sent you an email containing 6 digits verification code. Please enter the code to verify your identity</p>
            <form action="information_employer" method="POST" class="form_container">
                <div class="otp_section">
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)' maxlength=1>
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)' maxlength=1>
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)' maxlength=1>
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(4)' maxlength=1>
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(5)' maxlength=1>
                    <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(6)' maxlength=1>
                </div>
                <div class="mt-5">
                    <button class="btn1" role="button">
                        Signup now
                    </button>
                </div>
            </form>
        </div>
    </div>
</section>
<script>
    let digitValidate = function(ele) {
        // Allow only numeric input
        const value = ele.value.replace(/[^0-9]/g, '');

        // Set the value to a star (*) if a digit is entered
        if (value.length === 1) {
            ele.value = '✱';
        } else {
            ele.value = ''; // Clear the input if it is empty
        }
    }

    let tabChange = function(val) {
        let ele = document.querySelectorAll('input');
        if (ele[val - 1].value !== '') {
            ele[val].focus();
        } else if (ele[val - 1].value === '') {
            ele[val - 2].focus();
        }
    }
</script>
<?php
include 'includes/footer.php';
?>