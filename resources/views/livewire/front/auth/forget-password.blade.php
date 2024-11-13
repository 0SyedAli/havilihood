<div>
    <section class="auth_container">
        <livewire:front.auth.candidate.side-section />
        <div class="dash_right">
            <div class="dash_right_inner">
                <h2>Forget Password</h2>
                <p>Enter your Email Address</p>
                <form action="javascript:;" class="form_container">
                    <div class="input_div email">
                        <input type="text" placeholder="Email">
                    </div>
                    <div class="mt-5">
                        <button class="btn1" role="button">
                            Continue
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @script
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
    @endscript
</div>
