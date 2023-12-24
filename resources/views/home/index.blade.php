@extends('layouts.front.app')
@section('content')
    <main id="content" role="main">
        <!-- Hero Section -->
        <div class="position-relative">
            <!-- Main Slider -->
            <div id="heroSlider" class="js-slick-carousel slick"
                data-hs-slick-carousel-options='{
                "vertical": true,
                "verticalSwiping": true,
                "autoplay": true,
                "autoplaySpeed": 6000,
                "dots": true,
                "dotsClass": "slick-pagination slick-pagination-white d-lg-none position-absolute bottom-0 right-0 left-0 mb-3",
                "asNavFor": "#heroSliderNav",
                "responsive": [
                    {
                    "breakpoint": 576,
                    "settings": {
                        "vertical": false,
                        "verticalSwiping": false
                    }
                    }
                ]
                }'>

                @foreach ($sampul as $list)
                    <div class="js-slide d-flex gradient-x-overlay-sm-dark bg-img-hero min-h-620rem"
                        style="background-image: url({{ $list->preview_image }});">
                    </div>
                @endforeach

            </div>
            <!-- End Main Slider -->

            <!-- Slider Nav -->
            <div class="container slick-pagination-line-wrapper content-centered-y right-0 left-0">
                <div class="content-centered-y right-0 mr-3">
                    <div id="heroSliderNav" class="js-slick-carousel slick slick-pagination-line max-w-27rem ml-auto"
                        data-hs-slick-carousel-options='{
                        "vertical": true,
                        "verticalSwiping": true,
                        "autoplay": true,
                        "autoplaySpeed": 10000,
                        "slidesToShow": 3,
                        "isThumbs": true,
                        "asNavFor": "#heroSlider"
                        }'>
                    </div>
                </div>
            </div>
            <!-- End Slider Nav -->
        </div>
        <!-- End Hero Section -->

        <!-- Features Section -->
        <div class="bg-light">
            <div class="container space-2 space-lg-3">
                <!-- Title -->
                <div class="w-md-80 w-lg-50 text-center mx-md-auto mb-5 mb-md-9">
                    <span class="d-block small font-weight-bold text-cap mb-2">Pencarian</span>
                    <h2>Produk Hukum</h2>
                </div>
                <!-- End Title -->

                <div class="row">
                    <div class="col-lg-5 order-lg-2 mb-7 mb-lg-0" data-aos="flip-up">
                        <!-- Nav -->
                        <ul class="nav nav-box" role="tablist">
                            <li class="nav-item w-100 mx-0 mb-3">
                                <a class="nav-link p-4 active" id="pills-one-code-features-tab" data-toggle="pill"
                                    href="#pills-one-code-features" role="tab" aria-controls="pills-one-code-features"
                                    aria-selected="true">
                                    <div class="media align-items-center align-items-lg-start">
                                        <figure class="w-100 max-w-6rem mt-2 mr-4">
                                            <img class="img-fluid" src="{{ asset('front/assets/svg/icons/icon-1.svg') }}"
                                                alt="SVG">
                                        </figure>
                                        <div class="media-body">
                                            <h4 class="mb-0">Pencarian</h4>
                                            <div class="d-none d-lg-block mt-2">
                                                <p class="text-body mb-0">Mencari produk hukum dengan menuliskan kata
                                                    kunci <i>(keyword)</i></p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="nav-item w-100 mx-0 mb-3">
                                <a class="nav-link p-4" id="pills-two-code-features-tab" data-toggle="pill"
                                    href="#pills-two-code-features" role="tab" aria-controls="pills-two-code-features"
                                    aria-selected="false">
                                    <div class="media align-items-center align-items-lg-start">
                                        <figure class="w-100 max-w-6rem mt-2 mr-4">
                                            <img class="img-fluid" src="{{ asset('front/assets/svg/icons/icon-23.svg') }}"
                                                alt="SVG">
                                        </figure>
                                        <div class="media-body">
                                            <h4 class="mb-0">Pencarian Spesifik </h4>
                                            <div class="d-none d-lg-block mt-2">
                                                <p class="text-body mb-0">Mencari produk hukum dengan menuliskan nomor,
                                                    tahun, dan tentang produk hukum</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>

                        </ul>
                        <!-- End Nav -->
                    </div>

                    <div class="col-lg-7 order-lg-1 align-self-lg-end" data-aos="flip-up">
                        <!-- Tab Content -->
                        <div class="tab-content pr-lg-4">
                            <div class="tab-pane fade show active" id="pills-one-code-features" role="tabpanel"
                                aria-labelledby="pills-one-code-features-tab">
                                <form class="js-validate card shadow-lg mb-4" novalidate="novalidate" method="post"
                                    action="{{ route('cari.hukum') }}">
                                    @csrf
                                    <div class="card-header border-0 bg-light text-center py-4 px-4 px-md-6">
                                        <h2 class="h4 mb-0">Pencarian</h2>
                                    </div>

                                    <div class="card-body p-4 p-md-6">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label for="emailAddress" class="input-label">Jenis Peraturan</label>
                                                    <select name="kategori_id" class="form-control" required=""
                                                        data-msg="Silahkan pilih jenis peraturan">
                                                        <option value="">- Pilih Jenis Peraturan -</option>
                                                        @foreach ($kategori as $list)
                                                            <option value="{{ $list->id }}">{{ $list->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                            <div class="col-sm-12">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label for="emailAddress" class="input-label">Kata Kunci</label>
                                                    <input type="text" class="form-control" name="kunci"
                                                        id="emailAddress" placeholder="Masukkan kata kunci"
                                                        aria-label="alex@pixeel.com" required=""
                                                        data-msg="Masukkan kata kunci">
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                        </div>

                                        <button type="submit"
                                            class="btn btn-block btn-primary transition-3d-hover">Cari</button>
                                    </div>
                                </form>
                            </div>

                            <div class="tab-pane fade" id="pills-two-code-features" role="tabpanel"
                                aria-labelledby="pills-two-code-features-tab" data-aos="flip-up">
                                <form class="js-validate card shadow-lg mb-4" novalidate="novalidate" method="post"
                                    action="{{ route('cari.hukum.detail') }}">
                                    @csrf
                                    <div class="card-header border-0 bg-light text-center py-4 px-4 px-md-6">
                                        <h2 class="h4 mb-0">Pencarian Spesifik</h2>
                                    </div>

                                    <div class="card-body p-4 p-md-6">
                                        <div class="row">

                                            <div class="col-sm-12">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label for="emailAddress" class="input-label">Jenis Peraturan</label>
                                                    <select name="kategori_id" class="form-control" required=""
                                                        data-msg="Silahkan pilih jenis peraturan">
                                                        <option value="">- Pilih Jenis Peraturan -</option>
                                                        @foreach ($kategori as $list)
                                                            <option value="{{ $list->id }}">{{ $list->nama }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                            <div class="col-sm-12">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label for="emailAddress" class="input-label">Nomor</label>
                                                    <input type="text" class="form-control" name="nomor"
                                                        id="emailAddress" placeholder="Masukkan nomor produk hukum"
                                                        aria-label="alex@pixeel.com" required=""
                                                        data-msg="Masukkan nomor produk hukum">
                                                </div>
                                                <!-- End Form Group -->
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label for="emailAddress" class="input-label">Tahun</label>
                                                    <input type="number" class="form-control" name="tahun"
                                                        id="emailAddress" placeholder="Masukkan tahun produk hukum"
                                                        aria-label="alex@pixeel.com" required=""
                                                        data-msg="Masukkan tahun produk hukum">
                                                </div>
                                                <!-- End Form Group -->
                                            </div>
                                            <div class="col-sm-12">
                                                <!-- Form Group -->
                                                <div class="js-form-message form-group">
                                                    <label for="emailAddress" class="input-label">Tentang</label>
                                                    <input type="text" class="form-control" name="tentang"
                                                        id="emailAddress" placeholder="Masukkan tentang produk hukum"
                                                        aria-label="alex@pixeel.com" required=""
                                                        data-msg="Masukkan tentang produk hukum">
                                                </div>
                                                <!-- End Form Group -->
                                            </div>

                                        </div>

                                        <button type="submit"
                                            class="btn btn-block btn-primary transition-3d-hover">Cari</button>
                                    </div>
                                </form>
                            </div>

                        </div>
                        <!-- End Tab Content -->
                    </div>
                </div>
            </div>
        </div>
        <!-- End Features Section -->

        <!-- Blogs Section -->
        <div class="container space-2 space-lg-3" id="berita">
            <div class="row justify-content-lg-between">
                <div class="col-lg-8">
                    @foreach ($berita as $list)
                        <!-- Blog -->
                        <article class="row mb-7" data-aos="fade-up-right">
                            <div class="col-md-5">
                                <a href="{{ route('detail.berita', $list['id']) }}">
                                    <img class="card-img hvr-bob"
                                        src="https://setwan.wonosobokab.go.id/{{ 'storage' . str_replace('public', '', $list['sampul']['path']) }}"
                                        alt="Image Description" style="height:100%;width:100%;object-fit:cover">
                                </a>
                            </div>
                            <div class="col-md-7">
                                <div class="card-body d-flex flex-column h-100 px-0">
                                    <span class="d-block mb-2">
                                        <a class="font-weight-bold"
                                            href="#">{{ $list['kategorinya']['nama_kategori'] }}</a>
                                    </span>
                                    <h3><a class="text-inherit hvr-underline-reveal"
                                            href="{{ route('detail.berita', $list['id']) }}">{{ $list['judul'] }}</a>
                                    </h3>
                                    {!! substr($list['isi_posting'], 0, 300) . '..' !!}
                                    <div class="media align-items-center mt-auto">
                                        <a class="avatar avatar-sm avatar-circle mr-3" href="blog-profile.html">
                                            <img class="avatar-img" src="{{ asset('pemda.png') }}"
                                                alt="Image Description">
                                        </a>
                                        <div class="media-body">
                                            <span class="text-dark">
                                                <a class="d-inline-block text-inherit font-weight-bold"
                                                    href="#">Admin</a>
                                            </span>
                                            <small
                                                class="d-block">{{ \Carbon\Carbon::parse($list['created_at'])->isoFormat('dddd, DD MMMM YYYY') }}</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- End Blog -->
                    @endforeach


                    <!-- Sticky Block End Point -->
                    <div id="stickyBlockEndPoint"></div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-7" data-aos="fade-up-left">
                        <div class="mb-3">
                            <h3>Jenis Peraturan </h3>
                            <div class="hr-divider hr-divider-style-1"></div>
                        </div>
                        @foreach ($hukum as $item)
                            <li><a href="{{ route('page.hukum', $item->id ?? '') }}" class="hvr-underline-from-center"><b
                                        style="color:black;">{{ $item->nama ?? '' }}</b>
                                    <span class="badge badge-success">
                                        {{ $item->produk_count ?? '' }}</span></a>
                            </li>
                        @endforeach
                    </div>

                    <div class="mb-7" data-aos="fade-up-left">
                        <div class="mb-3">
                            <h3>Polling</h3>
                            <div class="hr-divider hr-divider-style-1"></div>
                        </div>
                        <form method="post" id="poll_form" action="{{ route('polling.store') }}">
                            @csrf
                            <p>
                                Apakah anda puas dengan layanan website kami? Berilah penilaian anda tentang
                                kepuasan layanan kami.
                            </p>
                            <div class="radio">
                                <label>
                                    <p>
                                        <input type="radio" name="polling_tp" class="polling_tp"
                                            value="POLLING_TP_01" />
                                        Sangat Puas
                                    </p>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <p>
                                        <input type="radio" name="polling_tp" class="polling_tp"
                                            value="POLLING_TP_02" />
                                        Puas
                                    </p>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <p>
                                        <input type="radio" name="polling_tp" class="polling_tp"
                                            value="POLLING_TP_03" />
                                        Cukup Puas
                                    </p>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <p>
                                        <input type="radio" name="polling_tp" class="polling_tp"
                                            value="POLLING_TP_04" />
                                        Kurang Puas
                                    </p>
                                </label>
                            </div>
                            <br />
                            <input type="submit" id="poll_button" class="btn btn-primary" value="Kirim" />
                        </form>
                    </div>

                    <!-- Sticky Block Start Point -->
                    <div id="stickyBlockStartPoint"></div>

                    <div class="js-sticky-block"
                        data-hs-sticky-block-options='{
                            "parentSelector": "#stickyBlockStartPoint",
                            "breakpoint": "lg",
                            "startPoint": "#stickyBlockStartPoint",
                            "endPoint": "#stickyBlockEndPoint",
                            "stickyOffsetTop": 40,
                            "stickyOffsetBottom": 20
                        }'>

                        <div class="mb-7" data-aos="fade-up-left">
                            <div class="mb-3">
                                <h3>Tautan JDIH</h3>
                                <div class="hr-divider hr-divider-style-1"></div>

                            </div>

                            @foreach ($link as $item)
                                <!-- Blog -->
                                <article class="mb-5">
                                    <div class="media align-items-center text-inherit">
                                        <div class="avatar avatar-lg mr-3">
                                            <img class="avatar-img"
                                                src="{{ asset('storage' . str_replace('public', '', $item->foto)) }}"
                                                alt="Image Description">
                                        </div>
                                        <div class="media-body">
                                            <h4 class="h6 mb-0"><a class="text-inherit hvr-underline-from-center"
                                                    href="{{ $item->link }}"
                                                    target="_blank">{{ $item->nama ?? '' }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->
                            @endforeach


                        </div>

                        <div class="mb-7" id="bahasa" data-aos="fade-up-left">
                            <div class="mb-3">
                                <h3>Pilihan Bahasa</h3>
                                <div class="hr-divider hr-divider-style-1"></div>
                            </div>

                            <div id="google_translate_element"></div>
                            <script type="text/javascript">
                                function googleTranslateElementInit() {
                                    new google.translate.TranslateElement({
                                        pageLanguage: 'en'
                                    }, 'google_translate_element');
                                }
                            </script>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            {{-- <nav aria-label="Page navigation">
                <ul class="pagination mb-0">
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span class="d-none d-sm-inline-block mr-1">Next</span>
                            <span aria-hidden="true">&raquo;</span>
                        </a>
                    </li>
                </ul>
            </nav> --}}
            <!-- End Pagination -->
        </div>
        <!-- End Blogs Section -->
    </main>
@endsection
