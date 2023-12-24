<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>Login JDIH Kab. Wonosobo</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/slick-carousel/slick/slick.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme.min.css') }}">
    @vite([])

</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header" class="header header-bg-transparent header-abs-top">
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <!-- Form -->
        <div class="d-flex align-items-center position-relative vh-lg-100">
            <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center bg-dark vh-lg-100 px-0"
                style="background-image: url({{ asset('front/assets/svg/components/abstract-shapes-20.svg') }});">
                <div class="w-100 p-5">
                    <div>
                        <img src="{{ asset('jdih-putih.png') }}" alt="" width="450">
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row no-gutters">
                    <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
                        <!-- Form -->
                        <form class="js-validate" method="POST" action="{{ route('login') }}">
                            @csrf
                            <!-- Title -->
                            <div class="mb-5 mb-md-7">
                                <h1 class="h2">Welcome back</h1>
                                <p>Login to manage your account.</p>
                            </div>
                            <!-- End Title -->

                            <x-validation-errors class="mb-4 text-danger" />

                            @if (session('status'))
                                <div class="mb-4 text-sm font-medium text-danger">
                                    <span class="badge bg-success">{{ session('status') }}</span>
                                </div>
                            @endif

                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="input-label" for="signinSrEmail">Email address</label>
                                <input type="email" class="form-control" name="email" id="signinSrEmail"
                                    tabindex="1" placeholder="Email address" aria-label="Email address" required
                                    data-msg="Please enter a valid email address.">
                            </div>
                            <!-- End Form Group -->

                            <!-- Form Group -->
                            <div class="js-form-message form-group">
                                <label class="input-label" for="signinSrPassword" tabindex="0">
                                    <span class="d-flex justify-content-between align-items-center">
                                        Password
                                    </span>
                                </label>
                                <input type="password" class="form-control" name="password" id="signinSrPassword"
                                    tabindex="2" placeholder="********" aria-label="********" required
                                    data-msg="Your password is invalid. Please try again.">
                            </div>
                            <!-- End Form Group -->

                            <!-- Button -->
                            <div class="row align-items-center mb-5">
                                <div class="col-sm-12 text-sm-right">
                                    <button type="submit" class="btn btn-primary transition-3d-hover">Submit</button>
                                </div>
                            </div>
                            <!-- End Button -->
                        </form>
                        <!-- End Form -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form -->
    </main>
    <!-- ========== END MAIN ========== -->

    <!-- JS Global Compulsory  -->
    <script src="{{ asset('front/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('front/assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/slick-carousel/slick/slick.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('front/assets/js/theme.min.js') }}"></script>

    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF SLICK CAROUSEL
            // =======================================================
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });


            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                var validation = $.HSCore.components.HSValidation.init($(this));
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="/assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
    </script>
</body>

</html>
