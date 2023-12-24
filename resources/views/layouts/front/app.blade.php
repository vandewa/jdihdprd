<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Title -->
    <title>JDIH DPRD Kab.Wonosobo</title>

    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">


    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/slick-carousel/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('front/assets/vendor/aos/dist/aos.css') }}">

    <!-- CSS Front Template -->
    <link rel="stylesheet" href="{{ asset('front/assets/css/theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/hover-master/css/hover.css') }}">


    <script src="https://kit.fontawesome.com/bb9305debb.js" crossorigin="anonymous"></script>
    @vite([])

    <style>
        .hr-divider {
            width: 100%;
            font-size: 0;
            display: block;
            line-height: 0;
            direction: ltr;
            color: #2791d8;
            overflow: hidden;
            margin: 10px auto;
            position: relative;
        }

        .text-right.hr-divider,
        .text-right .hr-divider {
            direction: rtl;
        }


        /* Lines
----------------------------------------------------------------------------- */
        .hr-divider::after,
        .hr-divider::before {
            content: '';
            color: inherit;
            line-height: 1;
            font-size: 16px;
            display: inline-block;
            vertical-align: middle;
        }

        /* Style 1
----------------------------------------------------------------------------- */
        .hr-divider-style-1::after {
            margin-left: -1px;
            letter-spacing: -5px;
            font-family: 'FontAwesome';
            content: '\f078 \f078 \f078';
        }

        .text-center.hr-divider-style-1::after,
        .text-center .hr-divider-style-1::after {
            margin-left: -5px;
        }

        .text-right.hr-divider-style-1::after,
        .text-right .hr-divider-style-1::after {
            margin-left: 0;
            margin-right: 4px;
        }
    </style>

    @stack('css')
</head>

<body>
    <!-- ========== HEADER ========== -->
    <header id="header"
        class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent 
        @if (Request::segment(1) == '') header-white-nav-links-lg 
        @else 
        header-black-nav-links-lg @endif
        header-show-hide"
        data-hs-header-options='{
              "fixMoment": 1000,
              "fixEffect": "slide"
            }'>

        <div class="header-section">
            <div id="logoAndNav" class="container">
                <!-- Nav -->
                <nav class="js-mega-menu navbar navbar-expand-lg">
                    <!-- Logo -->
                    <a class="navbar-brand" href="{{ route('index') }}" aria-label="Front">
                        <img src="{{ asset('jdih.png') }}" alt="Logo" style="width: 200px;">
                    </a>
                    <!-- End Logo -->

                    <!-- Responsive Toggle Button -->
                    <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                        aria-label="Toggle navigation" aria-expanded="false" aria-controls="navBar"
                        data-toggle="collapse" data-target="#navBar">
                        <span class="navbar-toggler-default">
                            <svg width="14" height="14" viewBox="0 0 18 18"
                                xmlns="http://www.w3.org/2000/svg')}}">
                                <path fill="currentColor"
                                    d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z" />
                            </svg>
                        </span>
                        <span class="navbar-toggler-toggled">
                            <svg width="14" height="14" viewBox="0 0 18 18"
                                xmlns="http://www.w3.org/2000/svg')}}">
                                <path fill="currentColor"
                                    d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z" />
                            </svg>
                        </span>
                    </button>
                    <!-- End Responsive Toggle Button -->

                    <!-- Navigation -->
                    <div id="navBar" class="collapse navbar-collapse">
                        <div class="navbar-body header-abs-top-inner">
                            <ul class="navbar-nav">
                                <!-- Beranda -->
                                <li class="hs-has-sub-menu navbar-nav-item">

                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold"
                                        href="{{ route('index') }}" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="pagesSubMenu" @yield('warna')>Beranda</a>
                                    <!-- Pages - Submenu -->
                                    <div class="hs-sub-menu ">
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Beranda -->
                                <!-- Beranda -->
                                <li class="hs-has-sub-menu navbar-nav-item">

                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold"
                                        href="{{ route('page.profil') }}" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="pagesSubMenu" @yield('warna')>Profil</a>
                                    <!-- Pages - Submenu -->
                                    <div class="hs-sub-menu ">
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Beranda -->

                                <!-- Blog -->
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="blogMegaMenu"
                                        class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="blogSubMenu">Produk Hukum</a>

                                    <!-- Blog - Submenu -->
                                    <div id="blogSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                        @foreach ($produk_hukum as $list)
                                            <a class="dropdown-item"
                                                href="{{ route('page.hukum', $list->id) }}">{{ $list->nama }}</a>
                                        @endforeach
                                    </div>
                                    <!-- End Submenu -->
                                </li>
                                <!-- End Blog -->

                                <!-- Blog -->
                                <li class="hs-has-sub-menu navbar-nav-item">
                                    <a id="blogMegaMenu"
                                        class="hs-mega-menu-invoker nav-link nav-link-toggle font-weight-bold"
                                        href="javascript:;" aria-haspopup="true" aria-expanded="false"
                                        aria-labelledby="blogSubMenu">Monografi Hukum</a>

                                    <!-- Blog - Submenu -->
                                    <div id="blogSubMenu" class="hs-sub-menu dropdown-menu"
                                        aria-labelledby="blogMegaMenu" style="min-width: 230px;">
                                        @foreach ($monografi_hukum as $list)
                                            <a class="dropdown-item"
                                                href="{{ route('page.hukum', $list->id) }}">{{ $list->nama }}</a>
                                        @endforeach
                                    </div>
                                    <!-- End Submenu -->
                                </li>
                                <!-- End Blog -->

                                <!-- Berita -->
                                <li class="hs-has-sub-menu navbar-nav-item">

                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold"
                                        @if (Request::segment(1) == '') href="#berita" 
                                    @else href="{{ route('index') }}" @endif
                                        aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu"
                                        @yield('warna')>Berita</a>
                                    <!-- Pages - Submenu -->
                                    <div class="hs-sub-menu ">
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Berita -->

                                <!-- Kontak -->
                                <li class="hs-has-sub-menu navbar-nav-item">

                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold"
                                        @if (Request::segment(1) == '') href="#kontak" 
                                    @else href="{{ route('index') }}" @endif
                                        aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu"
                                        @yield('warna')>Kontak Kami</a>
                                    <!-- Pages - Submenu -->
                                    <div class="hs-sub-menu ">
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Kontak -->

                                <!-- Kontak -->
                                <li class="hs-has-sub-menu navbar-nav-item">

                                    <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link font-weight-bold"
                                        @if (Request::segment(1) == '') href="#bahasa" 
                                    @else href="{{ route('index') }}" @endif
                                        aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu"
                                        @yield('warna')>Bahasa</a>
                                    <!-- Pages - Submenu -->
                                    <div class="hs-sub-menu ">
                                    </div>
                                    <!-- End Pages - Submenu -->
                                </li>
                                <!-- End Kontak -->

                            </ul>
                        </div>
                    </div>
                    <!-- End Navigation -->
                </nav>
                <!-- End Nav -->
            </div>
        </div>
    </header>
    <!-- ========== END HEADER ========== -->

    <!-- ========== MAIN ========== -->
    @yield('content')
    <!-- ========== END MAIN ========== -->

    <!-- ========== FOOTER ========== -->
    <footer class="bg-dark position-relative" id="kontak">
        <div class="container space-bottom-1 position-relative z-index-2">
            <div class="row justify-content-lg-between mb-11">
                <div class="col-lg-5 space-top-1 space-top-lg-1 text-white mb-7 mb-lg-0">
                    <!-- Title -->
                    <div class="mb-5">
                        <h3 class="text-white">Statistik Pengunjung</h3>

                        <!-- End Nav Link -->
                        <ul class="nav nav-sm nav-x-0 nav-white flex-column">
                            <li class="nav-item">
                                <a class="nav-link media">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-stats-bars2"></span>
                                        <span class="media-body">
                                            Hari Ini : {{ $hari_ini }}
                                        </span>
                                    </span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link media">
                                    <span class="media">
                                        <span class="mt-1 mr-2 icon-stats-growth"></span>
                                        <span class="media-body">
                                            Total Pengunjung : {{ $visitor }}
                                        </span>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Title -->

                    <div class="mb-3">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9985.053795418644!2d109.90677177662603!3d-7.362265638344162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7aa057b0168289%3A0xa1abd1cc13a36dc9!2sDPRD%20Kabupaten%20Wonosobo!5e1!3m2!1sid!2sid!4v1677594066587!5m2!1sid!2sid"
                            width="300" height="200" style="border:0;" allowfullscreen=""
                            loading="lazy"></iframe>
                    </div>

                    <div>
                        <ul class="list-inline mb-0">
                            <!-- Social Networks -->
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="{{ $info->fb }}">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="{{ $info->ig }}">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="{{ $info->twitter }}">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn btn-xs btn-icon btn-soft-light" href="{{ $info->yt }}">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <!-- End Social Networks -->

                        </ul>
                    </div>


                </div>

                <div class="col-lg-6 space-top-1 space-top-lg-1 text-white mb-7 mb-lg-0">
                    <!-- Title -->
                    <div class="mb-7">
                        <h3 class="text-white">Kontak Kami</h3>
                    </div>
                    <!-- End Title -->
                    <div class="row">
                        <!-- Contacts Info -->
                        <div class="col-sm-6 mb-5">
                            <span class="icon icon-soft-light icon-circle mb-3">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <h4 class="text-white mb-0">Email</h4>
                            <a class="text-white-70 font-size-1" href="#">{{ $info->email }}</a>
                        </div>
                        <!-- End Contacts Info -->

                        <!-- Contacts Info -->
                        <div class="col-sm-6 mb-5">
                            <span class="icon icon-soft-light icon-circle mb-3">
                                <i class="fas fa-phone"></i>
                            </span>
                            <h4 class="text-white mb-0">Telepon</h4>
                            <a class="text-white-70 font-size-1" href="#">{{ $info->telepon }}</a>
                        </div>
                        <!-- End Contacts Info -->

                        <!-- Contacts Info -->
                        <div class="col-sm-6">
                            <span class="icon icon-soft-light icon-circle mb-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </span>
                            <h4 class="text-white mb-0">Alamat</h4>
                            <a class="text-white-70 font-size-1" href="#">{{ $info->alamat }}</a>
                        </div>
                        <!-- End Contacts Info -->

                        <div class="col-sm-6">
                            <span class="icon icon-soft-light icon-circle mb-3">
                                <i class="fas fa-clock"></i>
                            </span>
                            <h4 class="text-white mb-0">Jam Operasional</h4>
                            <a class="text-white-70 font-size-1" href="#">
                                Senin - Kamis : 07:30 - 16:00 WIB <br>
                                Jumat : 07:30 - 11:00 WIB

                            </a>
                        </div>
                        <!-- End Contacts Info -->

                    </div>
                </div>
            </div>

            <div class="text-center">
                <!-- Logo -->
                <a class="d-inline-flex align-items-center mb-2" href="index.html" aria-label="Front">
                    <img class="brand" src="{{ asset('jdih-putih.png') }}" alt="Logo" style="width: 400px;">
                </a>
                <!-- End Logo -->

                <p class="small text-white-70">© <?php if (date('Y') == 2023) {
                    echo '2023';
                } else {
                    echo '2023 - ' . date('Y');
                }
                ?> DPRD Kabupaten Wonosobo. All rights reserved.</p>
            </div>
        </div>

        <!-- SVG Background Shape -->
        <figure class="w-100 position-absolute bottom-0 left-0">
            <img class="img-fluid" src="{{ asset('front/assets/svg/components/isometric-squares.svg') }}"
                alt="Image Description">
        </figure>
        <!-- End SVG Background Shape -->
    </footer>
    <!-- ========== END FOOTER ========== -->

    <!-- Go to Top -->
    <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
        data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- End Go to Top -->

    <!-- JS Global Compulsory  -->
    <script src="{{ asset('front/assets/vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>

    <!-- JS Implementing Plugins -->
    <script src="{{ asset('front/assets/vendor/hs-header/dist/hs-header.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-go-to/dist/hs-go-to.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-unfold/dist/hs-unfold.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-mega-menu/dist/hs-mega-menu.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/hs-sticky-block/dist/hs-sticky-block.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/slick-carousel/slick/slick.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/jquery-validation/dist/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('front/assets/vendor/aos/dist/aos.js') }}"></script>

    <!-- JS Front -->
    <script src="{{ asset('front/assets/js/theme.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script type="text/javascript">
        function sweetAlert() {
            Swal.fire(
                'Berhasil!',
                'Memberikan penilaian.',
                'success'
            )
        }

        @if (session('store'))
            sweetAlert();
        @endif
    </script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'en'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <script src='https://code.responsivevoice.org/responsivevoice.js'></script>
    <script>
        $(document).ready(function() {
            responsiveVoice.speak(
                "Selamat datang di website Resmi DPMPTSP Kabupaten Wonosobo",
                "Indonesian Female", {
                    pitch: 1,
                    rate: 1,
                    volume: 1
                }
            );

            // Tag a dan h3 saat di hover
            $("a, h1, h2, h3, h4, h5").mouseover(function(e) {
                $text = e.target.innerText;
                suara($text);
            });

            $("img").mouseover(function(e) {
                $text = e.target.alt;
                suara($text);
            });

            // saat blok text pada tag p
            $('body').mouseup(function() {
                $text = getSelectedText();
                suara($text);
            });

            function getSelectedText() {
                if (window.getSelection) {
                    return window.getSelection().toString();
                } else if (document.selection) {
                    return document.selection.createRange().text;
                }
                return '';
            }

            function suara($text) {
                responsiveVoice.speak(
                    $text,
                    "Indonesian Female", {
                        pitch: 1,
                        rate: 1,
                        volume: 1
                    }
                );
            }

            responsiveVoice.enableWindowClickHook();
        });
    </script>
    <!-- accessibility widget -->
    <script src="https://website-widgets.pages.dev/dist/sienna.min.js" defer></script>

    @stack('js')


    <!-- JS Plugins Init. -->
    <script>
        $(document).on('ready', function() {
            // INITIALIZATION OF HEADER
            // =======================================================
            var header = new HSHeader($('#header')).init();

            // INITIALIZATION OF MEGA MENU
            // =======================================================
            var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
                desktop: {
                    position: 'left'
                }
            }).init();


            // INITIALIZATION OF UNFOLD
            // =======================================================
            var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


            // INITIALIZATION OF FORM VALIDATION
            // =======================================================
            $('.js-validate').each(function() {
                var validation = $.HSCore.components.HSValidation.init($(this));
            });


            // INITIALIZATION OF SLICK CAROUSEL
            // =======================================================
            $('#heroSliderNav').on('init', function(event, slick) {
                $(slick.$slider).find(
                    '.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(
                    function() {
                        $(this).css({
                            transitionDuration: (slick.options.autoplaySpeed - slick.options
                                .speed) + 'ms'
                        });
                    });

                setTimeout(function() {
                    $(slick.$slider).addClass('slick-dots-ready');
                });
            });

            $('#heroSliderNav').one('beforeChange', function(event, slick) {
                $(slick.$slider).find(
                    '.slick-pagination-line-progress .slick-pagination-line-progress-helper').each(
                    function() {
                        $(this).css({
                            transitionDuration: (slick.options.autoplaySpeed + slick.options
                                .speed) + 'ms'
                        });
                    });
            });


            // INITIALIZATION OF SLICK CAROUSEL
            // =======================================================
            $('.js-slick-carousel').each(function() {
                var slickCarousel = $.HSCore.components.HSSlickCarousel.init($(this));
            });

            $(window).on('resize', function() {
                $('#heroSliderNav').slick('setPosition');
            });


            // INITIALIZATION OF STICKY BLOCKS
            // =======================================================
            $('.js-sticky-block').each(function() {
                var stickyBlock = new HSStickyBlock($(this)).init();
            });

            // INITIALIZATION OF AOS
            // =======================================================
            AOS.init({
                duration: 650,
                once: true
            });



            // INITIALIZATION OF GO TO
            // =======================================================
            $('.js-go-to').each(function() {
                var goTo = new HSGoTo($(this)).init();
            });
        });
    </script>

    <!-- IE Support -->
    <script>
        if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write(
            '<script src="{{ asset('front/assets/vendor/babel-polyfill/dist/polyfill.js') }}"><\/script>');
    </script>
</body>

</html>
