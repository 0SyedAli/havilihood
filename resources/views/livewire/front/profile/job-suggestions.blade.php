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
                            <h4>Recommended<span>{{$matchedJobsCount}}</span></h4>
                            <h4>Saved<span>{{$savedJobsCount}}</span></h4>
                            <h4>Applied<span> {{$appliedJobsCount}}</span></h4>
                            <h4>External<span>04</span></h4>
                        </div>
                    </div>
                    <livewire:front.components.job-filter />

                </div>


            </div>
            <div class="row flex-column flex-md-row">
                @if(!$jobs->count())
                    <livewire:front.components.alert-bar alertType="alert-info" message="Jobs not found" />
                        @endif
                <div class="col-md-6">
                    <div class="saved_jobs_left">
                        @foreach($jobs as $job)
                            <livewire:front.components.job-card role="button" @click="$dispatch('view-job', { id: {{$job->id}} })" :job="$job" :key="$job->id" />

                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    @if($jobs->count())
                    <livewire:front.components.job-detail-section :id="$jobs[0]->id" />
                    @endif
                </div>
            </div>
        </div>
        </div>
</section>
