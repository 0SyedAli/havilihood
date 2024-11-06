
<div class="row">
    <div class="col-md-10 col-lg-8 col-xxl-6">
        <div class="step_input">
            <p>Write a title for your job post</p>
            <input type="text" wire:model.live="title">
            @error('title')
            <small class="text-danger">{{$message}}</small>
            @enderror
            <ul>
                <li>Examples</li>
                <li>Fashion designer required for an urban clothing brand.</li>
                <li>Video editor needed to create whiteboard explainer video</li>
                <li>UX designer with e-commerce experience to support app development</li>
            </ul>
        </div>
        <div class="step_input ">
            <p>Which option best describes this job's position?</p>
            <div class="step_select" >
                <select wire:model.change="job_position">
                    <option value="Lead">Lead</option>
                    <option value="HR">HR</option>
                    <option value="CEO">CEO</option>
                </select>
                @error('job_position')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="step_input ">
            <p>Choose country</p>
            <div class="step_select" >
                <select>
                    <option value="as">as</option>
                </select>
            </div>
        </div>
        <div class="step_input ">
            <p>Choose state</p>
            <div class="step_select">
                <select>
                    <option value="as">as</option>
                </select>
            </div>
        </div>
    </div>
</div>


