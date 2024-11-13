<section class="dashboard_container">
    @section('dash-job-posted','active')
    <livewire:front.dashboard.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <h2 class="sjd_h2" style="margin: 50px 0 40px;">Jobs Posted</h2>
                </div>
            </div>
            <div>
                <div class="row">
                    @for($i = 0; $i < 4; $i++ )

                    <div class="col-sm-6">
                       <livewire:front.components.job-card />
                    </div>
                    @endfor

                </div>
            </div>
            <div class="row">
                <div class="12">
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="{{route('upload.job')}}" wire:navigate class="btn3">
                        <img src="{{asset('front/assets/images/round_plus.png')}}" alt="">
                        Post a Job
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
