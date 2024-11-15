<section class="auth_container">
    <!--[if BLOCK]><![endif]--><?php if(isCandidate()): ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('front.auth.candidate.side-section', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3797141252-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php else: ?>
        <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('front.auth.recruiter.side-section', []);

$__html = app('livewire')->mount($__name, $__params, 'lw-3797141252-1', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
    <?php endif; ?><!--[if ENDBLOCK]><![endif]-->
    <div class="dash_right">
        <div class="dash_right_inner">
            <h2>OTP</h2>
            <p>We have sent you an email containing 6 digits verification code. Please enter the code to verify your identity</p>
            <div>
                <a href="javascript:;" wire:loading.remove wire:target="resendCode"  wire:click="resendCode">resend code</a>
                <div wire:loading wire:target="resendCode" class="spinner-border" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
            <form wire:submit.prevent="verify" class="form_container">
                <div class="otp_section">
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(1)" maxlength="1" >
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(2)" maxlength="1" >
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(3)" maxlength="1" >
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(4)" maxlength="1" >
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(5)" maxlength="1" >
                    <input class="otp" type="text" oninput="window.digitValidate(this)" onkeyup="window.tabChange(6)" maxlength="1" >
                </div>
                <!--[if BLOCK]><![endif]--><?php $__errorArgs = ['otp_code'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <small class="text-danger"><?php echo e($message); ?></small>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><!--[if ENDBLOCK]><![endif]-->
                <div class="mt-5">
                    <button  class="btn1" wire:loading.remove wire:target="verify">
                        Verify Code
                    </button>
                    <button class="btn1" type="button" wire:loading  wire:target="verify"  >
                        <div  class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </div>

            </form>
        </div>
    </div>
        <?php
        $__scriptKey = '3797141252-0';
        ob_start();
    ?>
    <script>

        window.digitValidate = function(ele) {
            const value = ele.value.replace(/[^0-9]/g, '');
            ele.value = value.length === 1 ? ele.value : '';
            var otp_codes = Array.from(document.querySelectorAll('.otp')).map(otp => otp.value).join('');
            $wire.dispatch('getOtp',[otp_codes]);

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
        <?php
        $__output = ob_get_clean();

        \Livewire\store($this)->push('scripts', $__output, $__scriptKey)
    ?>
</section>
<?php /**PATH C:\wamp64\www\havelihood\resources\views/livewire/front/auth/otp.blade.php ENDPATH**/ ?>