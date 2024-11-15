
<div class="row">
    <div class="col-12">
        <div class="add_expe">
            <div class="title mb-5">
                <h3>Screening Questions</h3>
                <p>Adding screening questions will help you to get deeper understanding of job seekers qualification</p>
            </div>
            @foreach($items as $index => $item)
                <div class="add_skills_container">
                    <div class="asc_top d-flex align-items-center justify-content-between">
                        <h4>How many years of experience do you have (skill)?</h4>
                        @if($index)
                            <span wire:click.prevent="remove_item({{$index}})" role="button"> X </span>
                        @endif
                    </div>
                    <div class="d-flex align-items-end gap-4 flex-wrap">
                        <div class="asc">
                            <h5>Skill</h5>
                            <input type="text" wire:model.live="skills.{{$index}}">
                            <div>
                            @error('skills.'.$index)
                            <small class="text-danger">{{$message}}</small>
                            @enderror
                            </div>
                        </div>

                        <div class="asc">
                            <h5>Ideal Answer</h5>
                            <input type="number" wire:model.live="ideal_answer.{{$index}}">
                            <div>
                                @error('ideal_answer.'.$index)
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="w25 px-0 d-flex align-items-center gap-2">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox"  id="check{{$index}}" wire:model.live="required.{{$index}}">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label" for="check{{$index}}">
                                Must have qualification
                            </label>
                        </div>
                    </div>
                </div>
            @endforeach
            <button class="add_asc_btn" wire:click="add_item">
                <img src="{{asset('front/assets/images/plus_round_brown.png')}}" alt="">
                Add you question
            </button>

        </div>
    </div>
</div>
