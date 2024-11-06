<section class="dashboard_container">
    <livewire:front.dashboard.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <h2 class="sjd_h2" style="margin: 50px 0 40px;">Jobs Posted</h2>
                </div>
            </div>
            <livewire:dynamic-component :is="$current" :key="$current" />
            <br>
            <br>
            <div class="row">
                <div class="col-12">
                    <div class="d-flex align-items-center gap-5">
                        <button class="back_btn" wire:click="previous" ><img src="{{asset('front/assets/images/arrow_left.png')}}" alt="">Back</button>
                        <a href="javascript:;" wire:click="next" class="btn3 btn_post">
                            <img src="assets/images/round_plus.png" alt="">
                            Continue
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
