<section class="dashboard_container">
    @section('profile','active')
    <livewire:front.profile.side-section />

    <style>
        .slider-container {
            position: relative;
            width: 400px;
            margin-top: 20px;
        }

        /* Custom Slider Styling */
        .slider {
            -webkit-appearance: none;
            width: 100%;
            height: 8px;
            background: #ddd;
            border-radius: 5px;
            outline: none;
            cursor: pointer;
            position: relative;
        }

        /* Custom Thumb (Ball with Number) */
        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
            width: 20px;
            height: 50px;
            background: #ddae55;
            border-radius: 6px;
            cursor: pointer;
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        /* Hide default thumb value */
        .slider::-moz-range-thumb {
            width: 50px;
            height: 50px;
            background: #ff5722;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        /* Number inside the thumb */
        .slider-value {
            position: absolute;
            top: -40px;
            left: 50%;
            transform: translateX(-50%);
            font-size: 16px;
            font-weight: bold;
            color: black;
        }
    </style>

    <div class="dashboard_display">
        <div class="profile_dashboard">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-7 col-xxl-8">
                    <div class="pd_sec1">
                        <div>
                            <img src="{{asset('public/front/assets/images/dash_prof_cover.png')}}" class="profile_cover_img" alt="">
                            <div class="pd_sec1_top">
                                <div class="ps-sm-4 d-flex flex-column justify-content-between">
                                    <img class="prof_img_dash" src="{{asset('public/front/assets/images/dash_prof_1.jpg')}}" alt="">
                                    <div class="d-flex justify-content-between justify-content-sm-start flex-sm-column flex-xxl-row gap-1 gap-xxl-5 flex-column">
                                        <div>
                                            <h2>{{$user?->name}}</h2>
                                            <h4>{{$user?->candidate?->job_title}}</h4>
                                            <h5>California, United State</h5>
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
                                        <h2>$1500<span>/month</span></h2>
                                        <div class="d-flex align-items-center flex-wrap gap-4">
                                            <button class="btn2" wire:click="editProfile" wire:loading.remove x-show="$wire.edit" >Edit Profile</button>
                                            <button class="btn2" wire:click="saveProfile" wire:loading.remove x-show=" ! $wire.edit" >Save Profile</button>
                                            <button  class="btn2 align-items-center" type="button"  wire:loading  >
                                                <div  class="spinner-border" role="status" style="margin-top:4px " >
                                                    <span class="visually-hidden">Loading...</span>
                                                </div>
                                            </button>
                                            <div class="menu_btn">
                                                <i class="fa-solid fa-ellipsis"></i>
                                            </div>
                                        </div>
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
                                    <h4>Senior</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="pd2_detail">
                                    <h5>Available</h5>
                                    <h4>{{$user?->candidate?->job_types}}</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="pd2_detail">
                                    <h5>Work Type</h5>
                                    <h4> {{$user?->candidate?->work_model }}</h4>
                                </div>
                            </div>
                            <div class="col-sm-6 col-md-3">
                                <div class="pd2_detail">
                                    <h5>Salary</h5>
                                    <h4>$8,66<span>/hours</span></h4>
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
                    <div class="pd_sec4">
                        <h3>Work Experience</h3>
                        <h5>xxxx xxxxxxx</h5>
                    </div>
                    <div class="pd_sec4">
                        <h3>Education</h3>
                        <h5>xxxx xxxxxxx</h5>
                    </div>
                    <div class="pd_sec4">
                        <h3>Skills</h3>
                        <h5>xxxx xxxxxxx</h5>
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
                <div class="col-12 col-md-10 col-lg-8 col-xl-5 col-xxl-4">
                    <div class="row status_container gy-4">
                        <div class="col-sm-12 ps-xl-0">
                            @if($status?->status == 'Complete')
                                @foreach($scores->scores as $key => $value)
                                    <div class="status_dash">
                                        <div class="d-flex align-items-center justify-content-center w-100">

                                            <h4 class="p-0 text-center">{{$key}}</h4>
                                        </div>
                                        <div class="d-flex justify-content-center ">

                                            <div class="progress">
                                                <div class="barOverflow">
                                                    <div class="bar"></div>
                                                </div>
                                                <span class="bar-text">{{$value}}</span>
                                            </div>
                                            <h3>2,241</h3>
                                        </div>

                                        <div class="slider-container">
                                            <!-- Left Price (Start) -->
                                            {{--                                            <span class="price-left">$0</span>--}}

                                            <!-- Slider -->
                                            <div class="slider-container">
                                                <!-- Number Above Slider -->
                                                <div class="slider-value">50</div>

                                                <!-- Slider -->
                                                <input type="range" min="0" max="100" value="50" class="slider" id="progressSlider">
                                            </div>

                                            <!-- Right Price (Max) -->
                                            {{--                                            <span class="price-right">$100</span>--}}
                                        </div>


                                    </div>

                                @endforeach
                            @else
                                <div class="status_dash">
                                    <div class="d-flex align-items-center justify-content-center w-100">
                                        <h4 class="p-0 text-center">Test Is {{$status?->status}}</h4>
                                    </div>
                                    @endif

                                </div>
                                {{--  <div class="col-sm-6 ps-xl-0">
                                       <div class="status_dash">
                                           <div class="d-flex align-items-center justify-content-between w-100">
                                               <h4 class="p-0">Extrovert</h4>
                                               <i class="fa-solid fa-ellipsis"></i>
                                           </div>
                                           <div class="progress">
                                               <div class="barOverflow">
                                                   <div class="bar"></div>
                                               </div>
                                               <span class="bar-text">30%</span>
                                           </div>
                                           <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                           <h3>2,241</h3>
                                       </div>
                                   </div>  --}}

                        </div>
                    </div>

                </div>
            </div>
            <link href="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.css" rel="stylesheet" type="text/css">
            <script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.2.0/wNumb.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/noUiSlider/14.6.4/nouislider.min.js"></script>

            <script>
                const employees = document.querySelector("#employees")
                var labels = { 0: '0', 10: '10', 15: '15', 20: '20', 25: '25', 40: '40', 55: '55', 70: '70', 85: '85', 100: '100', 110: '100+', };
                noUiSlider.create(employees, {
                    start: 10,
                    connect: [true, false],
                    tooltips: {
                        to: function(value) {
                            return value > 100 ? '100+' : parseInt(value)
                        }
                    },
                    range: {
                        'min': 0,
                        '10%': 10,
                        // '20%': 15,
                        '30%': 20,
                        // '40%': 25,
                        '50%': 40,
                        '60%': 50,
                        '70%': 70,
                        '80%': 85,
                        '90%': 100,
                        'max': 110
                    },
                    pips: {
                        mode: 'steps',
                        filter: function (value, type) {
                            return type === 0 ? -1 : 1;
                        },
                        format: {
                            to: function (value) {
                                return labels[value];
                            }
                        }
                    }
                });
            </script>
</section>
<script>
    const slider = document.getElementById("progressSlider");
    const sliderValue = document.querySelector(".slider-value");

    slider.addEventListener("input", function() {
        let value = this.value;
        sliderValue.textContent = value;
        sliderValue.style.left = `calc(${value}% - 20px)`;
    });
</script>
