<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Field To Market System</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Favicons -->
    <link href=" {{ asset('farmer/assets/img/favicon.png') }} " rel="icon">
    <link href=" {{ asset('farmer/assets/img/apple-touch-icon.png') }} " rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Vendor CSS Files -->
    <link href=" {{ asset('farmer/assets/vendor/bootstrap/css/bootstrap.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('farmer/assets/vendor/bootstrap-icons/bootstrap-icons.css') }} " rel="stylesheet">
    <link href=" {{ asset('farmer/assets/vendor/aos/aos.css') }} " rel="stylesheet">
    <link href=" {{ asset('farmer/assets/vendor/glightbox/css/glightbox.min.css') }} " rel="stylesheet">
    <link href=" {{ asset('farmer/assets/vendor/swiper/swiper-bundle.min.css') }} " rel="stylesheet">

    <!-- Main CSS File -->
    <link href=" {{ asset('farmer/assets/css/main.css') }} " rel="stylesheet">

    <!-- =======================================================
  * Template Name: CoreBiz
  * Template URL: https://bootstrapmade.com/corebiz-bootstrap-business-template/
  * Updated: Aug 30 2025 with Bootstrap v5.3.8
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    {{-- slide crop button carousel  --}}
    <style>
        .slider {
            overflow: hidden;
            white-space: nowrap;
            width: 100%;
            padding: 20px 0;
        }

        .slide-track:hover {
            animation-play-state: paused;
        }

        .slide-track {
            display: inline-flex;
            animation: scroll 15s linear infinite;
        }

        .slide-track button {
            margin-right: 25px;
            border-radius: 30px;
        }

        @keyframes scroll {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(-100%);
            }
        }
    </style>
</head>

<body class="index-page">

    <header id="header" class="header sticky-top">

        <div class="topbar d-flex align-items-center dark-background">
            <div class="container d-flex justify-content-center justify-content-md-between">
                <div class="contact-info d-flex align-items-center">
                    <i class="bi bi-envelope d-flex align-items-center"><a href="{{ route('farmer#dashboard') }}">
                            {{ Auth::user()->email }} </a></i>
                    <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
                </div>
            </div>
        </div><!-- End Top Bar -->

        <div class="branding d-flex align-items-cente">

            <div class="container position-relative d-flex align-items-center justify-content-between">
                <a href="index.html" class="logo d-flex align-items-center">
                    <!-- Uncomment the line below if you also wish to use an image logo -->
                    <!-- <img src="assets/img/logo.webp" alt=""> -->
                    <h1 class="sitename">FieldToMarket</h1>
                </a>

                <nav id="navmenu" class="navmenu">
                    <ul>
                        <li><a href="{{ route('farmer#dashboard') }}"
                                class="{{ request()->routeIs('farmer#dashboard') ? 'active' : '' }}">ပင်မစာမျက်နှာ</a>
                        </li>
                        <li><a href="{{ route('farmer#list') }}"
                                class="{{ request()->routeIs('farmer#list') ? 'active' : '' }}">စိုက်ပျိုးမြေများ</a>
                        </li>
                        <li><a href="#services">သီးနှံစိုက်ပျိုးမှု</a></li>
                        <li><a href="#portfolio">Portfolio</a></li>
                        <li><a href="#team">ငွေပေးချေမှုစနစ်များ</a></li>
                        <li>
                            <form action=" {{ route('logout') }} " method="post">
                                @csrf
                                <button class=" btn btn-success ms-3 rounded-5 px-3">ထွက်မည်</button>
                            </form>
                        </li>
                    </ul>
                    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
                </nav>

            </div>

        </div>

    </header>

    <div class="main">

        @yield('content')

        @include('sweetalert::alert')


    </div>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src=" {{ asset('farmer/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/php-email-form/validate.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/aos/aos.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/glightbox/js/glightbox.min.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/purecounter/purecounter_vanilla.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/waypoints/noframework.waypoints.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/swiper/swiper-bundle.min.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js') }} "></script>
    <script src=" {{ asset('farmer/assets/vendor/isotope-layout/isotope.pkgd.min.js') }} "></script>

    <!-- Main JS File -->
    <script src=" {{ asset('farmer/assets/js/main.js') }} "></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function loadFile(event) {
            var output = document.getElementById('output');

            var reader = new FileReader()

            reader.onload = function() {
                output.src = reader.result;
                output.style.display = "block";
            }

            reader.readAsDataURL(event.target.files[0])
        }
    </script>

    @yield('DeleteData')
</body>

</html>
