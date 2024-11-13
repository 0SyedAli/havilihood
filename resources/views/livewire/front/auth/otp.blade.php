<section class="auth_container">
    @if(auth()->user()->role == 'candidate')
        <livewire:front.auth.candidate.side-section />
    @else
        <livewire:front.auth.recruiter.side-section />
    @endif
    <div class="dash_right">
        <div class="dash_right_inner">
            <h2>OTP</h2>
            <p>We have sent you an email containing 6 digits verification code. Please enter the code to verify your identity</p>
{{--            <form action="{{route('employer.info')}}" method="get" class="form_container">--}}
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
                @error('otp_code')
                <small class="text-danger">{{$message}}</small>
                @enderror
                <div class="mt-5">
                    <button wire:loading.remove wire:target="verify" class="btn1">
                        Signup now
                    </button>
                    <button wire:loading wire:target="verify" class="btn1">
                        <div  class="spinner-border" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                    </button>
                </div>

            </form>
        </div>
    </div>
    @script
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
    @endscript
</section>
