<div class="row">
    <div class="col col-md-12">
        <div class="add_job_type ajt_table">
            <h3>Overview</h3>
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                    <tr>
                        <th>Job title</th>
                        <td>{{$stepOneData['title'] ?? null}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-one'})" ></i></td>
                    </tr>
                    <tr>
                        <th>Which option best describes this job's position?</th>
                        <td>{{$stepOneData['job_position'] ?? null}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-one'})"></i></td>
                    </tr>
                    <tr>
                        <th>Location?</th>
                        <td>{{$stepOneData['country'] ?? null}}, {{$stepOneData['state'] ?? null}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-one'})"></i></td>
                    </tr>
                @if( isset($stepTwoData['skills']))
                    @foreach($stepTwoData['skills'] as $key => $skill)
                    <tr>
                        <th>How many years of experience do you have (skill {{$key > 0 ?? null}})?</th>
                        <td>{{$skill->name ??$skill}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-two'})"></i></td>
                    </tr>
                    @endforeach
                @endif
                    <tr>
                        <th>Job type</th>
                        <td>{{$stepThreeData['job_type'] ?? null}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-three'})"></i></td>
                    </tr>
                    <tr>
                        <th>What is your authorization requirement?</th>
                        <td>{{$stepThreeData['work_authorization'] ?? null}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-three'})"></i></td>
                    </tr>
                    <tr>
                        <th>Expected hours per week</th>
                        <td>{{$stepThreeData['hour_start'] ?? null}} {{$stepThreeData['hour_end'] ?? null}}</td>
                        <td><i  role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-three'})"></i></td>
                    </tr>
                    <tr>
                        <th>Schedule</th>
                        <td>{{$stepThreeData['schedule'] ?? null}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-three'})"></i></td>
                    </tr>
                    <tr>
                        <th>Pay ({{$stepFourData['pay_period'] ?? null}})</th>
                        <td>${{$stepFourData['salary_start'] ?? null}} - ${{$stepFourData['salary_end'] ?? null}}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-four'})"></i></td>
                    </tr>
                    <tr>
                        <th>Benefits</th>
                        <td>{{implode(', ',  $stepFourData['benefits'] ?? [])  }}</td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-four'})"></i></td>
                    </tr>
                    <tr>
                        <th>Job description</th>
                        <td><a href="javascript:;" data-bs-target="#forward_link2" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-five'})" data-bs-toggle="modal">View</a></td>
                        <td><i role="button" class="fa-light fa-pen" @click="$dispatch('jumpToStep',{step : 'front.dashboard.upload-job.step-five'})"></i></td>
                    </tr>
                    <tr>
                        <th>Application collection</th>
                        <td>Hivelihood Dashboard</td>
                        <td><i class="fa-light fa-pen"></i></td>
                    </tr>
                    <tr>
                        <th>Send daily updates to</th>
                        <td>Email</td>
                        <td><i class="fa-light fa-pen"></i></td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
