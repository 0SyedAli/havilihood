<section class="dashboard_container">
    @section('profile','active')
    @if(auth()->user()->role === "candidate")
    <livewire:front.profile.side-section />
    @else
        <livewire:front.dashboard.side-section />
    @endif
@assets
    <style>
        .slider-container {
            position: relative;
            width: 100%;
            margin: 0px auto;
            text-align: center;
        }

        /* Progress Bar */
        .progress-bar {
            width: 100%;
            height: 22px;
            background: transparent;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
        }

        .progress {
            height: 100%;
            width: 0%;
            background: #28C675;
            border-radius: 0px;
            transition: width 0.5s ease-in-out;
            position: relative;
            z-index: 1;
        }

        /* Number Ball */
        .thumb-value {
            position: absolute;
            left: 0;
            transform: translateX(-50%);
            z-index: 2;
            font-size: 12px;
            font-weight: 600;
        }

        .thumb-value::before {
            content: "";
            position: absolute;
            width: 25px;
            height: 25px;
            background: #ddae55;
            border-radius: 50%;
            border: 2px solid white;
            top: -3px;
            left: 50%;
            transform: translateX(-50%);
            z-index: -1;
            font-size: 12px !important;
            font-weight: 600;
            display: flex
        ;
            align-items: center;
            justify-content: center;
        }

        /* Labels */
        .labels {
            display: flex;
            justify-content: space-between;
            margin-top: 5px;
            font-size: 14px;
            font-weight: bold;
            align-items: center;
            gap: 0 11px;
        }

        /* Circles inside progress bar */
        .progress-circles {
            display: flex;
            justify-content: space-between;
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%);
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .progress-circles li {
            width: 25px;
            height: 12px;
            background: #ddd;
            border-radius: 0px;
            transition: background 0.3s ease-in-out;
        }

        .progress-circles li.active {
            background: #ddd;
        }

    </style>
    <style>

        .range-slider {
            width: 100%;
            position: relative;
            margin-top: 0;
            margin-bottom: 0rem;
        }

        .range {
            -webkit-appearance: none;
            width: 100%;
            border-radius: 10px;
        }

        .range:focus {
            outline: none;
        }

        /* Styling the track */
        .range::-webkit-slider-runnable-track {
            width: 100%;
            height: 12px;
            cursor: pointer;
            background: linear-gradient(90deg, #28C675 var(--range-progress), #dee4ec var(--range-progress));
            border-radius: 1px;
        }

        /* Styling the thumb */
        .range::-webkit-slider-thumb {
            -webkit-appearance: none;
            border: 0 solid transparent;
            box-shadow: 0 1px 3px rgba(0,0,255,.3);
            border-radius: 50%;
            background: #ddae55;
            cursor: pointer;
            height: 25px;
            width: 25px;
            transform: translateY(calc(-55% + 8px));
        }

        /* Tooltip styling */
        .tooltip {
            position: absolute;
            top: -5px;
            left: 50%;
            transform: translateX(-74%);
            opacity: 1;
        }

        .tooltip span {
            position: absolute;
            text-align: center;
            display: block;
            line-height: 1;
            padding: 0.125rem 0.25rem;
            color: #fff;
            border-radius: 0.125rem;
            background: transparent;
            font-size: 14px;
            left: 50%;
            transform: translate(-50%, 0);
        }

        /* Tooltip arrow */
        .tooltip span:before {
            position: absolute;
            content: "";
            left: 50%;
            bottom: -8px;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border: 4px solid transparent;
            border-top-color: transparent;
        }
        .tooltip{

        }
        .show-more{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .show-more button{
            font-size: 16px;
            color: #000;
            font-weight: 600;
            font-family: "Epilogue", sans-serif;
            border: none;
            padding: 0;
            background: transparent;
            outline: none;
            text-decoration: underline;
        }

    </style>
    @endassets
    <div class="dashboard_display">
        <div class="profile_dashboard">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7 col-xxl-8">
                    <div class="pd_sec1">
                        <div>
                            <img src="{{asset('public/front/assets/images/dash_prof_cover.png')}}" class="profile_cover_img" alt="">
                            <div class="pd_sec1_top">
                                <div class="ps-sm-4 d-flex flex-column justify-content-between">

                                        <input type="file" id="profile_image" wire:model="profile_image" hidden="" accept="image/*" >
                                    <label for="profile_image" role="button">
                                    <img class="prof_img_dash" src="{{$profile_image ? $profile_image->temporaryUrl() : asset(  $user?->profile_info?->profile_image ?? 'public/front/assets/images/dash_prof_1.jpg')}}"  alt="">
                                    </label>
                                    <div class="d-flex justify-content-between justify-content-sm-start flex-sm-column flex-xxl-row gap-1 gap-xxl-5 flex-column">
                                        <div>
                                            <h2>{{$user?->name}}</h2>
                                            <h4>{{$user?->candidate?->job_title}}</h4>
                                            <h5 x-show=" $wire.edit">{{$location ?? "California, United State"}}</h5>
                                            <input type="text"  wire:model="location" class="form-control" x-show=" !$wire.edit">
                                        </div>
                                    </div>
                                </div>
                                <div class="ps-sm-4 d-flex flex-column justify-content-between">
                                    <ul class="dash_prof_social">
                                        <li><i class="fa-brands fa-instagram"></i></li>
                                        <li><i class="fa-brands fa-linkedin-in"></i></li>
                                        <li><i class="fa-brands fa-facebook"></i></li>
                                    </ul>
                                    <div class="pricing_prof">
                                        <h2> ${{$user->profile_info?->salary}}<span>/month</span></h2>
                                        @if(auth()->user()->role == "candidate")
                                            <div class="d-flex align-items-center flex-wrap gap-4">
                                                <button class="btn2" wire:click="editProfile" wire:loading.remove  x-show="$wire.edit" >Edit Profile</button>
                                                <button class="btn2" wire:click="saveProfile" wire:loading.remove x-show=" ! $wire.edit" >Save Profile</button>
                                                <button  class="btn2 align-items-center" type="button" wire:loading  >
                                                    <div  class="spinner-border" role="status" style="margin-top:4px " >
                                                        <span class="visually-hidden">Loading...</span>
                                                    </div>
                                                </button>

                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pd_sec2">
                        <div class="row gy-3">
                            <div class="col-sm-6 col-md-3">
                                <div class="pd2_detail">
                                    <h5>Experience Level</h5>
                                    <select class="form-select"  wire:model="experience_level" x-show=" !$wire.edit">
                                        <option value="Internship" >Internship</option>
                                        <option value="Entry Level" >Entry Level</option>
                                        <option value="Mid Level" >Mid Level</option>
                                        <option value="Senior Level" >Senior Level</option>
                                        <option value="Director" >Director</option>
                                        <option value="Executive" >Executive</option>
                                    </select>

                                    <h4 x-show="$wire.edit">{{$experience_level}}</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="pd2_detail">
                                    <h5>Experience</h5>
                                    <input type="number" placeholder="years of experience" wire:model="total_experience" class="form-control" x-show=" !$wire.edit">

                                    <h4 x-show="$wire.edit">{{$total_experience ? $total_experience." Years" : "Fresher"  }} </h4>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="pd2_detail">
                                    <h5>Work Type</h5>
                                    <select class="form-select"  wire:model="work_type" x-show=" !$wire.edit">
                                        <option value="Remote">Remote</option>
                                        <option value="Onsite">Onsite</option>
                                        <option value="Hybrid">Hybrid</option>
                                    </select>
                                    <h4 x-show="$wire.edit"> {{$work_type }}</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="pd2_detail">
                                    <h5>Salary</h5>
                                    <input type="text" name="salary" wire:model="salary" class="form-control" x-show=" !$wire.edit" id="">
                                    <h4 x-show="$wire.edit">${{$salary}}<span>/month</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pd_sec3">
                        <h3>Bio</h3>
                        <br>
                        <textarea rows="10" class="form-control" x-show="!$wire.edit" wire:model="bio"></textarea>
                        <p x-show="$wire.edit" >{{$bio ?? ("Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsu") }}</p>
                    </div>
                    <div class="pd_sec4 ">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                        <h3>Work Experience</h3>
                                @if( !$user->experiences?->count())
                        <h5>xxxx xxxxxxx</h5>
                                @endif
                            </div>

                        <button class="btn2" data-bs-target="#experience"  data-bs-toggle="modal" @click="$dispatch('experienceShow')" x-show=" !$wire.edit" >Add Experience</button>
                        </div>
                        <div class="mt-3">
                            @foreach($user->experiences as $experience)
                                <div class="sjl_item"  >
                                    <div class=" gy-2 w-100 ">
                                        <div class="col-md-12 ps-md-0">
                                            <div class="d-flex justify-content-between">
                                                <div>
                                                    <h4> {{$experience->company_name ?? 'Software Engineer' }} </h4>
                                                    <h6> {{$experience->job_title ?? 'Software Engineer' }} </h6>
                                                    <p>{{ $experience->description }}</p>
                                                </div>
                                                <div class="d-flex justify-content-between gap-3" >
                                                    <small>{{$experience->start_date}}</small> -
                                                    <small>{{$experience->end_date ?? "Continue"}}</small>
                                                    @if(auth()->id() === $user->id)
                                                    <i class="fa fa-pencil" role="button" data-bs-target="#experience" data-bs-toggle="modal"  @click="$dispatch('experienceEdit', {id : {{$experience->id}}}) " ></i>
                                                    <i class="fa fa-x" role="button" wire:click="deleteExperience({{$experience->id}})" ></i>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>


                    </div>
                    <div class="pd_sec4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h3>Education</h3>
                                @if( !$user->educations?->count())
                                    <h5>xxxx xxxxxxx</h5>
                                @endif
                            </div>
                            <button class="btn2" data-bs-target="#education"  data-bs-toggle="modal" @click="$dispatch('educationShow')" x-show=" !$wire.edit" >Add Education</button>
                        </div>
                        <div class="mt-3">
                        @foreach($user->educations as $education)
                                    <div class="sjl_item"  >
                                        <div class=" gy-2 w-100 ">
                                            <div class="col-md-12 ps-md-0">
                                                <div class="d-flex justify-content-between">
                                                    <div>
                                                        <h4> {{$education->certificate ?? 'Software Engineer' }} </h4>
                                                        <h6> {{$education->college_name ?? 'Software Engineer' }} </h6>
                                                        <p>{{ $education->description }}</p>
                                                    </div>
                                                    <div class="d-flex justify-content-between gap-3" >
                                                        <small>{{$education->start_date}} </small>
                                                        -
                                                        <small>{{$education->end_date ?? "Continue"}}</small>
                                                        @if(auth()->id() === $user->id)
                                                        <i class="fa fa-pencil" role="button"  data-bs-target="#education" data-bs-toggle="modal"  @click="$dispatch('educationEdit', {id : {{$education->id}}}) " ></i>
                                                        <i class="fa fa-x" role="button" wire:click="deleteEducation({{$education->id}})" ></i>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                        @endforeach
                        </div>
                    </div>
                    <div class="pd_sec4">
                        <h3>Skills</h3>
                        @foreach($skills as $key => $skill)
                            <div class="tag" x-show="$wire.edit">
                                <span>
                                    {{$skill}}
                                </span>
                            </div>

                            <div class="tag" x-show="!$wire.edit">
                                <input type="text" name="hobby" wire:model="skills.{{$key}}" class="form-control" id="">
                                <button class="close-btn" wire:click.prevent="remove({{$key}},'skills')" >✖</button>
                            </div>
                        @endforeach
                        <a href="#" wire:click.prevent="add('skills')" class="btn btn-success" x-show="!$wire.edit">Add</a>
                    </div>
                    <div class="pd_sec5">
                        <h3>Hobbies</h3>
                        <div class="d-flex align-items-center flex-wrap gap-2 gy-2">

                            @foreach($hobbies as $key => $hobby)
                                <div class="tag" x-show="$wire.edit">
                                <span>
                                    {{$hobby}}
                                </span>
                                </div>

                                <div class="tag" x-show="!$wire.edit">
                                    <input type="text" name="hobby" wire:model="hobbies.{{$key}}" class="form-control" id="">
                                    <button class="close-btn" wire:click.prevent="remove({{$key}},'hobbies')" >✖</button>
                                </div>
                            @endforeach

                            <a href="#" wire:click.prevent="add('hobbies')" class="btn btn-success" x-show="!$wire.edit">Add</a>


                        </div>
                    </div>

                    <div class="pd_sec5">
                        <h3>Interested</h3>
                        <div class="d-flex align-items-center flex-wrap gap-2 gy-2">
                            @foreach($interested as $key => $hobby)
                                <div class="tag" x-show="$wire.edit">
                                <span>
                                    {{$hobby}}
                                </span>
                                </div>

                                <div class="tag" x-show="!$wire.edit">
                                    <input type="text" name="hobby" wire:model="interested.{{$key}}" class="form-control" id="">
                                    <button class="close-btn" wire:click.prevent="remove({{$key}},'interested')" >✖</button>
                                </div>
                            @endforeach

                            <a href="#" wire:click.prevent="add('interested')" class="btn btn-success" x-show="!$wire.edit">Add</a>


                        </div>
                    </div>

                    <div class="pd_sec5">
                        <h3>Activities</h3>
                        <div class="d-flex align-items-center flex-wrap gap-2 gy-2">
                            @foreach($interested as $key => $hobby)
                                <div class="tag" x-show="$wire.edit">
                                <span>
                                    {{$hobby}}
                                </span>
                                </div>

                                <div class="tag" x-show="!$wire.edit">
                                    <input type="text" name="hobby" wire:model="activity.{{$key}}" class="form-control" id="">
                                    <button class="close-btn" wire:click.prevent="remove({{$key}},'activity')" >✖</button>
                                </div>
                            @endforeach

                            <a href="#" wire:click.prevent="add('activity')" class="btn btn-success" x-show="!$wire.edit">Add</a>


                        </div>
                    </div>


                </div>
                <style>
                    .slider-wrapper{
                        width: 100%;
                        margin: 10px auto 40px;
                    }
                </style>
                <livewire:front.profile.components.score-section :user="$user" />

            </div>
        </div>
    </div>

<livewire:front.profile.components.experience-modal />
<livewire:front.profile.components.education-modal />

</section>

@script
<script>
        Livewire.on('closeModal', function (){
        $('#experience').modal('hide')
        $('#education').modal('hide')
    })
    Livewire.on('rendered',function (){

        setTimeout(()=>{

        document.querySelectorAll('.range-slider').forEach(sliderContainer => {
            const range = sliderContainer.querySelector('.range');
            const tooltip = sliderContainer.querySelector('.tooltip');

            const setValue = () => {
                const newValue = ((range.value - range.min) * 100) / (range.max - range.min);
                const newPosition = 16 - (newValue * 0.32);

                tooltip.innerHTML = `<span>${range.value}</span>`;
                tooltip.style.left = `calc(${newValue}% + (${newPosition}px))`;

                // Update CSS variable for progress bar
                range.style.setProperty("--range-progress", `calc(${newValue}% + (${newPosition}px))`);
            };

            // Initialize tooltip position
            setValue();

            // Update tooltip & progress on input
            range.addEventListener('input', setValue);
        });
    })
    })

</script>
@endscript
