
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
                <select wire:model.live="job_position">
                    <option  disabled value="">Select job position</option>
                    <option >Lead</option>
                    <option >HR</option>
                    <option >CEO</option>
                </select>
                @error('job_position')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="step_input ">
            <p>Choose country</p>
            <div class="step_select" >
                <select wire:model.live="country">
                    <option disabled value="">Select country</option>
                    <option >USA</option>
                    <option >UAE</option>
                    <option >SAU</option>
                </select>
                @error('country')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
        <div class="step_input ">
            <p>Choose state</p>
            <div class="step_select">
                <select wire:model.live="state">
                    <option disabled value="">Select state</option>
                    <option >Wahington</option>
                    <option >new york</option>
                    <option >time square</option>
                </select>
                @error('state')
                <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
        </div>
    </div>
</div>


