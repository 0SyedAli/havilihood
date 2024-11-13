<section class="dashboard_container">
    @section('job-suggestions','active')
   <livewire:front.profile.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex gap-5 alig-items-center">
                        <h2 class="sjd_h2">Jobs</h2>
                        <div class="status2_container">
                            <h4>Recommended<span>04</span></h4>
                            <h4>Liked<span>04</span></h4>
                            <h4>Applied<span>04</span></h4>
                            <h4>External<span>04</span></h4>
                        </div>
                    </div>
                    <div class="filter_top d-flex gap-5 alig-items-center">
                        <button class="filter_btn" data-bs-target="#staticBackdrop" data-bs-toggle="modal">Filter <span>+</span></button>
                        <div class="sjl_itm_label_container">
                            <label for="">Computer</label>
                            <label for="">Programming</label>
                            <label for="">Software</label>
                            <label for="">Technology</label>
                            <label for="">Full-Time</label>
                            <label for="">Philadelphia</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-column flex-md-row">
                <div class="col-md-6">
                    <div class="saved_jobs_left">
                        @for($i = 0; $i < 8; $i++ )
                        <livewire:front.components.job-card />
                        @endfor
                    </div>
                </div>
                <div class="col-md-6">
                    <livewire:front.components.job-detail-section />
                </div>
            </div>
        </div>
    </div>
</section>
