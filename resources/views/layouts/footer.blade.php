<div class="col-md-12 space-top-2 space-bottom-0">
    <div class="d-flex justify-content-center">
        <img src="{{ asset('kontak.gif') }}" style="height: 50px;">
    </div>
    <div class="d-flex justify-content-center">
        <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
    </div>
</div>
<footer class="position-relative">
    <!-- Lists -->
    <div class="container space-top-0 space-top-md-0 space-bottom-2">

        <section id="section-highlight" data-bgimage="url({{ asset('bluetech/images/background/2.png') }}) top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <img src="{{ asset('bluetech/images/kontak.gif') }}" alt="" width="30%;"><br>
                            <img src="{{ asset('bluetech/images/background/separator.png') }}" alt="">
                            <div class="spacer-20"></div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <div class="col-md-4">
                                {{-- <div class="bg-transparent padding40 text-dark box-rounded"> --}}
                                <h3>Hubungi Kami</h3>
                                <ul class="nav nav-sm nav-x-0 nav-black flex-column">
                                    <li class="nav-item">
                                        <a class="nav-link media" href="javascript:;">
                                            <span class="media">
                                                <i class="fas fa-building">Jalan Sabuk Alu </i>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link media" href="tel:{{ $info->telepon ?? '' }}">
                                            <span class="media">
                                                <span class="fas fa-phone mr-2" style="margin-top:10px;"></span>
                                                <span class="media-body">
                                                    {{ $info->telepon ?? '' }}
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link media" href="mailto:{{ $info->email ?? '' }}">
                                            <span class="media">
                                                <span class="fas fa-envelope mr-2" style="margin-top:10px;"></span>
                                                <span class="media-body">
                                                    {{ $info->email ?? '' }}
                                                </span>
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                                {{-- </div> --}}
                                {!! $info->maps ?? '' !!}
                            </div>

                            <div class="col-md-4">
                            <div class="bg-transparent padding40 text-dark box-rounded">
                                    <h3 class="mb-3">Pengaduan Masyarakat</h3>
                                    <a href="https://laporbupati.wonosobokab.go.id" target="_blank">
                                        <img class="mx-auto card-img transition-zoom-hover"
                                            src="{{ asset('laporv.gif') }}" style="width:300px;">
                                    </a>
                                    <div class="mb-3 mt-3">
                                        <h3>Sosial Media</h3>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="d-flex justify-content-start">
                                                <div class="mr-3">
                                                    <a href="">
                                                        <img src="{{ asset('ig.png') }}" height="60"
                                                            class="card-img transition-zoom-hover">
                                                    </a>
                                                </div>
                                                <div>
                                                    <img src="{{ asset('yt.png') }}" height="60"
                                                        class="card-img transition-zoom-hover">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                    {{-- END DESKTOP --}}
                                </div>
                            </div>

                            {{-- <div class="col-md-4">
                                <div class="bg-transparent padding40 text-dark box-rounded">
                                    <div class="mb-1">
                                        <h3>Link Terkait</h3>
                                    </div>
                                    @foreach ($links as $link)
                                        <a href="{{ $link->link }}" target="_blank">
                                            <span style="font-size: 12pt">{{ $link->nama }}</span>
                                        </a>
                                        <br>
                                    @endforeach
                                    <h3 class="mt-5 mb-3">Statistik Pengunjung</h3>
                                    <i class="fas fa-chart-line"></i>
                                    <span style="font-size: 12pt"> Total Pembaca : {{ $pembaca }}</span>
                                    <br>
                                    <i class="far fa-chart-bar"></i>
                                    <span style="font-size: 12pt">Total Pengunjung : {{ $visitor }}</span>
                                </div>
                            </div> --}}

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
    <!-- End Lists -->

    <!-- Social Networks -->
    <div class="container space-1">
        <div class="row justify-content-end">
            <div class="col-md-5 text-right aos-init aos-animate" data-aos="fade-left">
                <p id="copyright" class="small text-dark mb-0">© DPMPTSP
                    Kabupaten
                    Wonosobo.</p>
            </div>
        </div>
    </div>
    <!-- End Social Networks -->

    <!-- SVG Shape -->
    <figure class="ie-wave-7-bottom w-80 w-md-65 w-lg-50 position-absolute bottom-0 left-0 z-index-n1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 589.5 112.7" style="enable-background:new 0 0 589.5 112.7;" xml:space="preserve"
            class="injected-svg js-svg-injector" data-parent="#SVGwave7BottomShape"
            data-uw-rm-alt-original="Image Description">
            <style type="text/css">
                .wave-7-bottom-0 {
                    fill: #a82020;
                }
            </style>
            <linearGradient id="wave7BottomID" gradientUnits="userSpaceOnUse" x1="275.6292" y1="4.2812"
                x2="303.6378" y2="163.1255">
                {{-- <stop class="stop-color-danger" offset="0" style="stop-color:#a82020"></stop> --}}
                <stop class="stop-color-success" offset="1" style="stop-color:#1d8427"></stop>
            </linearGradient>
            <path fill="url(#wave7BottomID)" d="M0,64.7c0,0,131.5-62.5,277-23.5s205,66,312.5,71.5H0L0,64.7z">
            </path>
            <path class="wave-7-bottom-0 fill-primary"
                d="M0,0c0,0.1,38.9,5.7,42.5,6.4c37.7,7.3,74.4,19.5,108.4,37.3c15.5,8.2,30.3,17.6,45.6,26.3  c22.2,12.7,45.4,22.1,70.1,28.9c11,3,22.2,5.5,33.4,7.7c13.6,2.6,27.3,4.7,41,6.2c0,0-341,0-341,0S0,0.2,0,0z">
            </path>
        </svg>
    </figure>
    <figure class="ie-wave-7-bottom w-80 w-md-65 w-lg-50 position-absolute bottom-0 left-0 z-index-n1">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
            viewBox="0 0 589.5 112.7" style="enable-background:new 0 0 589.5 112.7;" xml:space="preserve"
            class="injected-svg js-svg-injector" data-parent="#SVGwave7BottomShape"
            data-uw-rm-alt-original="Image Description">
            <style type="text/css">
                .wave-7-bottom-0 {
                    fill: #a82020;
                }
            </style>
            <linearGradient id="wave7BottomID" gradientUnits="userSpaceOnUse" x1="275.6292" y1="4.2812"
                x2="303.6378" y2="163.1255">
                {{-- <stop class="stop-color-danger" offset="0" style="stop-color:#a82020"></stop> --}}
                <stop class="stop-color-success" offset="1" style="stop-color:#1d8427"></stop>
            </linearGradient>
            <path fill="url(#wave7BottomID)" d="M0,64.7c0,0,131.5-62.5,277-23.5s205,66,312.5,71.5H0L0,64.7z">
            </path>
            <path class="wave-7-bottom-0 fill-primary"
                d="M0,0c0,0.1,38.9,5.7,42.5,6.4c37.7,7.3,74.4,19.5,108.4,37.3c15.5,8.2,30.3,17.6,45.6,26.3  c22.2,12.7,45.4,22.1,70.1,28.9c11,3,22.2,5.5,33.4,7.7c13.6,2.6,27.3,4.7,41,6.2c0,0-341,0-341,0S0,0.2,0,0z">
            </path>
        </svg>
    </figure>
    <!-- End SVG Shape -->
</footer>
