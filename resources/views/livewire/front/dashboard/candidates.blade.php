<section class="dashboard_container">
    @section('dash-candidates','active')
    <livewire:front.dashboard.side-section />
    <div class="dashboard_display">
        <div class="saved_job_dashboard">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex flex-column flex-sm-row gap-2 gap-sm-5 alig-items-center">
                        <h2 class="sjd_h2">Talents</h2>
                          {{--  <div class="status2_container">
                                <h4>Invited<span>04</span></h4>

                            </div>--}}
                    </div>
                    <livewire:front.components.candidate-filter />

                </div>
            </div>
            <div class="row flex-column flex-md-row">
                @if(!$candidates->count())
              <livewire:front.components.alert-bar alertType="alert-info" message="Candidates not found" />
                @endif
                <div class="col-md-6">
                    <div class="saved_jobs_left">
                        @foreach($candidates as  $candidate )
                        <livewire:front.components.candidate-card   @click="$dispatch('view-candidate', { id: {{$candidate->id}} })" :candidate="$candidate" :key="$candidate->id" />

                        @endforeach
                    </div>
                </div>
                <div class="col-md-6">
                    @if($candidates->count())
                    <livewire:front.components.candidate-detail-section :id="$candidates[0]->id"  />
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>
