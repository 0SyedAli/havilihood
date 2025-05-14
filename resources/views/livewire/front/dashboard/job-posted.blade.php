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
                    @foreach($jobs as $job )
                    <div class="col-sm-6" wire:key="{{$job->id}}" >
                       <livewire:front.components.job-card :job="$job" :key="$job->id" />
                    </div>
                    @endforeach

                </div>
            </div>
            <div class="row">
                <div class="12">
                    <br>
                    <br>
                    <br>
                    <br>
                    <a href="{{route('upload.job')}}"  class="btn3">
                        <img src="{{asset('public/front/assets/images/round_plus.png')}}" alt="">
                        Post a Job
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
