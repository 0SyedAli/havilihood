<section class="dashboard_container">
    @section('saved-jobs','active')
    <livewire:front.profile.side-section>
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <h2 class="sjd_h2">Saved Jobs</h2>
                    <livewire:front.components.job-filter />

                </div>
            </div>
            <div class="row flex-column flex-md-row">
                @if(!$jobs->count())
                    <livewire:front.components.alert-bar alertType="alert-info" message="Saved jobs not found">
                        @endif
                        <div class="col-md-6">
                            <div class="saved_jobs_left">
                                @foreach($jobs as $job)
                                    <livewire:front.components.job-card :job="$job" wire:key="$job->id" />
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
