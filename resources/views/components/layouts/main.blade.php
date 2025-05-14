<!DOCTYPE html>
<html>

<head>
    <link rel="alternate" hreflang="en-us" href="" />
    <link rel="icon" type="image/png" href="" />
    <title>Hivelihood</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="" />
    <link rel="shortcut icon" href="{{asset('')}}public/front/assets/images/favicon.png" />
    <link href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
    <link href="{{asset('')}}public/front/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}public/front/assets/css/animate.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}public/front/assets/css/aos.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}public/front/assets/css/fancybox.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}public/front/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}public/front/assets/css/owl.theme.default.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}public/front/assets/css/jquery-ui.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/slick-theme.css" />
    <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('')}}public/front/assets/css/custom.css" rel="stylesheet" type="text/css">
</head>

<body>
<style>
    header .navbar-nav li.home a {
        color: #A77415;
        font-weight: 600;
    }
</style>
<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container position-relative">
            <a class="navbar-brand" href="#">
                <img src="{{asset('')}}public/front/assets/images/logo-main.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="mob-nav-menu collapse navbar-collapse  justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item home">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('about-us')}}">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home-candidates')}}">Candidates</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('brands')}}">Brands</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('join')}}">Join</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contact')}}">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('member-portal')}}">Member Portal</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
{{ $slot }}
<footer>
    <div class="container">
        <div class="row align-items-center gy-lg-0 gy-5">
            <div class="col-md-6 col-lg-4">
                <div class="foot_left"><a href="index.php">
                        <img src="{{asset('')}}public/front/assets/images/dashLogo.svg" alt=""></a>
                    <p>A revolution in career navigation and workplace culture</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="foot_mid">
                    <h4>About</h4>
                    <div class="d-flex align-items-start gap-5">
                        <ul>
                            <li><a href="javascript:;">Companies</a></li>
                            <li><a href="{{route('join')}}">Pricing</a></li>
                            <li class="pb-0"><a href="javascript:;">Terms</a></li>
                        </ul>
                        <ul>
                            <li><a href="{{route('home-candidates')}}">Candidates</a></li>
                            <li><a href="javascript:;">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="foot_end">
                    <h4>Signup for Newsletters</h4>
                    <p class="pt-0">The latest job news, articles, sent to your inbox weekly.</p>
                    <div class="fe-form">
                        <input class="mb-0" type="email" placeholder="Email Address">
                        <button class="theme-btn10 m-0">Subscribe</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="foot_bottom">

            <div class="row align-items-center gy-3 gy-sm-0">
                <div class="col-sm-6">
                    <h5>2024 Hivelihood. All rights reserved.</h5>
                </div>
                <div class="col-sm-6">
                    <ul class="fb-ul">
                        <li><a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li><a href="javascript:;"><i class="fa-brands fa-instagram"></i></a></li>
                        <li><a href="javascript:;"><i class="fa-brands fa-dribbble"></i></a></li>
                        <li><a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        <li><a href="javascript:;"><i class="fa-brands fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>

<div class="contact-modal">
    <!-- Modal start -->
    <div class="modal fade" id="staticBackdrop" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                <div class="modal-body">
                    <form class="form-get-quote" action="javascript:;" method="POST">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="title">
                                    <h2>FILTERS</h2>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Job Title</h4>
                                    <input type="text" placeholder="Software Engineer">
                                    <div class="add_field_btn float-end">
                                        <button class="filter_btn">Add <span>+</span></button>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Job Type</h4>
                                    <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check12">
                                                Full Time
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check13">
                                                Part Time
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check14">
                                                Internship
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Contract
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Work Model</h4>
                                    <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check16">
                                                Onsite
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check17">
                                                Remote
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check18">
                                                Hybrid
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Location (within US)</h4>
                                    <div class="d-flex align-items-center gap-3">
                                        <input type="text" placeholder="New York">
                                        <select class="form-select " aria-label="Default select example">
                                            <option selected>50mi</option>
                                            <option value="1">10min</option>
                                            <option value="2">15min</option>
                                            <option value="3">30min</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Experience Level</h4>
                                    <div class="d-flex flex-wrap gap-3 align-items-center  pt-4">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check16">
                                                Internship
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check17">
                                                Entry Level
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check18">
                                                Mid Level
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check18">
                                                Senior Level
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check18">
                                                Director
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check18">
                                                Executive
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <div class="custom-wrapper rangeS">
                                        <!-- Price Range Slider -->
                                        <div class="price-input-container">
                                            <div class="price-input">
                                                <h4 for="">Required Experience (<input type="number" id="min-input" readonly class="min-input" value="0" min="0" max="11" /> - <input type="number" readonly id="max-input" class="max-input" value="11" min="0" max="11" /> years)</h4>
                                            </div>
                                            <div class="slider-container mt-4">
                                                <div class="price-slider" id="price-slider"></div>
                                            </div>

                                            <!-- Slider -->
                                            <div class="range-input">
                                                <input type="range" id="min-range" class="min-range" min="0" max="11" value="0" step="1">
                                                <input type="range" id="max-range" class="max-range" min="0" max="11" value="11" step="1">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Date Posted</h4>
                                    <div class="d-flex align-items-center  pt-4 flex-wrap gap-3 gap-sm-0">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check12">
                                                24 hour
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check13">
                                                3 Days
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check14">
                                                1 week
                                            </label>
                                        </div>
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                1 month
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Compensation & Sponsorship</h4>
                                    <div class="price-input">
                                        <h5 for="">Minimum Annual Salary <span>$<span id="rangeValue">0</span>k/yr</span></h5>
                                    </div>
                                    <div class="range-progress-container">
                                        <input type="range" class="form-range" min="0" max="1000" step="1" id="customRange" value="0">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" id="progressBar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="1000"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <h4 for="">Work Authorization</h4>
                                    <div class="w25 pt-4 pb-3 px-0 d-flex align-items-center gap-2">
                                        <div class="custom-checkbox">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <div class="checkmark"></div>
                                        </div>
                                        <label class="form-check-label" for="check15">
                                            H1B sponsorship
                                        </label>
                                    </div>
                                    <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
                                </div>
                                <div class="form-input">
                                    <div class="d-flex align-items-center justify-content-between pb-2">
                                        <h4 for="">Areas of Interest</h4>
                                        <div class="add_field_btn float-end">
                                            <button class="filter_btn">Add <span>+</span></button>
                                        </div>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Information Technology
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Information Technology
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Information Technology
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Information Technology
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Information Technology
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <div class="d-flex align-items-center justify-content-between pb-2">
                                        <h4 for="">Skills</h4>
                                        <div class="add_field_btn float-end">
                                            <button class="filter_btn">Add <span>+</span></button>
                                        </div>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Business Development
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Business Development
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Business Development
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Business Development
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                    <div class="tag-labels">
                                        <div class="w25 px-0 d-flex align-items-center gap-2">
                                            <div class="custom-checkbox">
                                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                                <div class="checkmark"></div>
                                            </div>
                                            <label class="form-check-label" for="check15">
                                                Business Development
                                            </label>
                                        </div>
                                        <button class="close-btn">✖</button>
                                    </div>
                                </div>
                                <div class="modal_btn_container">
                                    <button class="btn1" role="button">
                                        Apply Filter
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->
</div>

<div class="modal fade" id="comfirm_detail" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="title">
                <h2>Please Confirm Below Details</h2>
                <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
            </div>
            <div class="modal-body proflie_details">
                <div class="table-responsive">
                    <table class="w-100">
                        <tbody>
                        <tr>
                            <th class="col-5">
                                <h5>First Name:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Last Name:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Company:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Job Title:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Work Email:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th>
                            <td></td>
                            </th>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Company Website:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5># of Employees:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Employer Type:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Headquarter City:</h5>
                            </th>
                            <td class="col-7">
                                <h5><span>xxxx xxxxxxx</span></h5>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                            </th>
                            <td class="col-7">
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5">
                                <h5>Company Logo</h5>
                            </th>
                            <td class="col-7">
                                <img src="assets/images/compo_img.png" class="img-fluid" alt="">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="px-0 d-flex align-items-start gap-3">
                            <div class="custom-checkbox">
                                <input class="form-check-input" type="checkbox" value="" id="check15">
                                <div class="checkmark"></div>
                            </div>
                            <label class="form-check-label w90" for="check12">
                                I confirm I represent HR, Recruiting, Marketing, PR or am an Executive at my company and I agree to Hivelihood <a href="javascript:;">Terms of Service</a> and <a href="javascript:;">Privacy Policy</a> on behalf of my company.
                            </label>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="col-12">
                        <div class="modal_btn_container justify-content-between gap-5">
                            <a href="information_employer" class="btn1" role="button">
                                Resubmit Information
                            </a>
                            <button class="btn1" role="button" data-bs-toggle="modal" data-bs-target="#welcome_hivelihood2">
                                Create Account
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="welcome_hivelihood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="title d-flex flex-column align-items-center text-center px-4">
                <img src="assets/images/welcome_logo.png" alt="">
                <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
            </div>
            <div class="modal-body pt-5">
                <div class="modal_btn_container">
                    <a href="dashboard-profile" class="btn1" role="button">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="welcome_hivelihood2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="title d-flex flex-column align-items-center text-center px-4">
                <img src="assets/images/welcome_logo.png" alt="">
                <p>Pharetra convallis posuere morbi leo. Vestibulum lectus mauris ultrices eros in. Lobortis elementum </p>
            </div>
            <div class="modal-body pt-5">
                <div class="modal_btn_container">
                    <a href="dashboard-job" class="btn1" role="button">
                        My Dashboard
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="forward_link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="title d-flex flex-column align-items-center text-center px-4">
                <img src="assets/images/link_img.png" alt="">
                <h2>Link to the
                    Company Job Post Page</h2>
            </div>

        </div>
    </div>
</div>
<!-- get end of url -->
<?php
$urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$segments = explode('/', $urlArray);
$numSegments = count($segments);
$currentSegment = $segments[$numSegments - 1];
?>
    <!-- get end of url -->
<script src="{{asset('')}}public/front/assets/js/jquery-3.6.3.min.js"></script>
<script src="{{asset('')}}public/front/assets/js/aos.js"></script>
<script src="{{asset('')}}public/front/assets/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('')}}public/front/assets/js/fancybox.min.js"></script>
<script src="{{asset('')}}public/front/assets/js/owl.carousel.min.js"></script>
<script src="{{asset('')}}public/front/assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="{{asset('')}}public/front/assets/js/slick.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script src="{{asset('')}}public/front/assets/js/custom.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Define the updateProgress function
        function updateProgress(value) {
            var progressBar = document.getElementById('progressBar');
            progressBar.style.width = value / 1000 * 100 + '%';
            progressBar.setAttribute('aria-valuenow', value);

            // Update the span with the dynamic value
            var rangeValueDisplay = document.getElementById('rangeValue');
            rangeValueDisplay.textContent = value; // Update the span content with the value
        }

        // Attach the input event to the range slider
        const rangeInput = document.getElementById('customRange');
        rangeInput.addEventListener('input', (event) => {
            updateProgress(event.target.value);
        });
        const minInput = document.getElementById('min-input');
        const maxInput = document.getElementById('max-input');
        const minRange = document.getElementById('min-range');
        const maxRange = document.getElementById('max-range');
        const priceSlider = document.getElementById('price-slider');

        // Update slider background
        function updateSlider() {
            const minPercent = (minRange.value / 11) * 100;
            const maxPercent = (maxRange.value / 11) * 100;
            priceSlider.style.left = minPercent + '%';
            priceSlider.style.right = (100 - maxPercent) + '%';
        }

        // Sync input fields and range sliders
        minInput.addEventListener('input', () => {
            const minValue = Math.min(parseInt(minInput.value), parseInt(maxInput.value) - 1);
            minInput.value = minValue;
            minRange.value = minValue;
            updateSlider();
        });

        maxInput.addEventListener('input', () => {
            const maxValue = Math.max(parseInt(maxInput.value), parseInt(minInput.value) + 1);
            maxInput.value = maxValue;
            maxRange.value = maxValue;
            updateSlider();
        });

        minRange.addEventListener('input', () => {
            const minValue = Math.min(parseInt(minRange.value), parseInt(maxRange.value) - 1);
            minRange.value = minValue;
            minInput.value = minValue;
            updateSlider();
        });

        maxRange.addEventListener('input', () => {
            const maxValue = Math.max(parseInt(maxRange.value), parseInt(minRange.value) + 1);
            maxRange.value = maxValue;
            maxInput.value = maxValue;
            updateSlider();
        });

        // Initial update
        updateSlider();
    });
</script>
<script>
    function toggleMenu() {
        const menu = document.getElementById('menu');
        menu.classList.toggle('show');
    }
</script>

</body>


</html>


