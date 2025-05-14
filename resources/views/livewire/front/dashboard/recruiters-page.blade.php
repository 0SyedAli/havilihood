<section class="dashboard_container">
    @section('dash-profile','active')
    <livewire:front.dashboard.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column flex-sm-row gap-2 gap-sm-5 alig-items-center">
                        <h2 class="sjd_h2">Recruiters</h2>
                        {{--  <div class="status2_container">
                              <h4>Invited<span>04</span></h4>

                          </div>--}}
                    </div>
{{--                    <livewire:front.components.candidate-filter />--}}

                </div>
            </div>
            <div class="row flex-column flex-md-row">
                @if(!$recruiters->count())
                    <livewire:front.components.alert-bar alertType="alert-info" message="Recruiters not found" />
                @endif
                <div class="col-md-6">
                    <div class="saved_jobs_left">
                        @foreach($recruiters as  $recruiter )
                            <livewire:front.components.recruiter-card   @click="$dispatch('view-recruiter', { id: {{$recruiter->id}} })" :recruiter="$recruiter" :key="$recruiter->id" />
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    @if($recruiters->count())
                        <livewire:front.components.recruiter-jobs-section :id="$recruiters[0]->id"  />
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
