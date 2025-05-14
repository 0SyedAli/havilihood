<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Page Title' }}</title>

        <link rel="shortcut icon" href="{{asset('public/front/assets/images/favicon.png')}}" />
        <link href="https://site-assets.fontawesome.com/releases/v6.5.2/css/all.css" rel="stylesheet">
        <link href="{{asset('public/front/assets/css/bootstrap.min.css')}} " rel="stylesheet" type="text/css">
        <link href="{{asset('public/front/assets/css/animate.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/front/assets/css/aos.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/front/assets/css/fancybox.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/front/assets/css/owl.carousel.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/front/assets/css/owl.theme.default.css')}}" rel="stylesheet" type="text/css">
        <link href="{{asset('public/front/assets/css/jquery-ui.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" type="text/css" href="{{asset('public/front/assets/css/slick.css')}}" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link rel="stylesheet" type="text/css" href="{{asset('public/front/assets/css/slick-theme.css')}}" />
        <link href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <link href="{{asset('public/front/assets/css/custom.css')}}" rel="stylesheet" type="text/css">

    </head>
    <body>
        {{ $slot }}


        <div class="modal fade" id="forward_link" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="title d-flex flex-column align-items-center text-center px-4">
                        <img src="{{asset('public/front/assets/images/link_img.png')}}" alt="">
                        <h2>Link to the
                            Company Job Post Page</h2>
                    </div>

                </div>
            </div>
        </div>
        <!-- get end of url -->
        {{-- <?php
        $urlArray = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
        $segments = explode('/', $urlArray);
        $numSegments = count($segments);
        $currentSegment = $segments[$numSegments - 1];
        ?> --}}
            <!-- get end of url -->
        <script src="{{asset('public/front/assets/js/jquery-3.6.3.min.js')}}"></script>
        <script src="{{asset('public/front/assets/js/aos.js')}}"></script>
        <script src="{{asset('public/front/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('public/front/assets/js/fancybox.min.js')}}"></script>
        <script src="{{asset('public/front/assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('public/front/assets/js/jquery-ui.js')}}"></script>
        <script type="text/javascript" src="{{asset('public/front/assets/js/slick.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
        <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
        <script src="{{asset('public/front/assets/js/custom.js')}}"></script>


<script data-navigate-once >

    document.addEventListener('livewire:init', () => {
        Livewire.on('error', toastr.error);
        Livewire.on('success', toastr.success);
        Livewire.on('debug', (data)=>{
            console.log(data)
        });
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
