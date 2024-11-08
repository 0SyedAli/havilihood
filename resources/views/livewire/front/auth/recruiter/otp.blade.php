<section class="auth_container">
    <livewire:front.auth.recruiter.side-section />
    <div class="dash_right">
        <div class="dash_right_inner">
            <h2>OTP</h2>
            <p>We have sent you an email containing 6 digits verification code. Please enter the code to verify your identity</p>
            <form action="{{route('employer.info')}}" method="get" class="form_container">
                <div class="otp_section">
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(1)" maxlength="1">
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(2)" maxlength="1">
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(3)" maxlength="1">
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(4)" maxlength="1">
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(5)" maxlength="1">
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(6)" maxlength="1">
                </div>
                <div class="mt-5">
                    <button class="btn1" role="button">
                        Signup now
                    </button>
                </div>
            </form>
        </div>
    </div>
        @script
    <script>
        window.digitValidate = function(ele) {
            const value = ele.value.replace(/[^0-9]/g, '');
            ele.value = value.length === 1 ? '✱' : '';
        };

        window.tabChange = function(val) {
            const ele = document.querySelectorAll('.otp');
            if (ele[val - 1].value !== '') {
                if (val < ele.length) {
                    ele[val].focus();
                }
            } else if (val > 1) {
                ele[val - 2].focus();
            }
        };
    </script>
        @endscript
</section>
