@extends('layouts.front.app')
@section('content')
    <main id="content" role="main">

        <!-- Blogs Section -->
        <div class="container space-2 space-lg-3" id="berita">
            <div class="row justify-content-lg-between">
                <div class="col-lg-8">

                    <div class="border-top border-bottom py-4 mb-5 mt-4">
                        <div class="row align-items-md-center">
                            <div class="col-md-7 mb-5 mb-md-0">
                                <div class="media align-items-center">
                                    <div class="avatar avatar-circle">
                                        <img class="avatar-img" src="{{ asset('pemda.png') }}" alt="Image Description">
                                    </div>
                                    <div class="media-body font-size-1 ml-3">
                                        <a href="#" class="d-inline-block text-inherit font-weight-bold">
                                            Admin
                                        </a>
                                        <span
                                            class="d-block text-muted">{{ Carbon\Carbon::parse($data['created_at'])->isoFormat('LLLL') }}
                                            WIB</span>
                                    </div>
                                </div>
                            </div>

                            {{-- <div class="col-md-5">
                                <div class="d-flex justify-content-md-end align-items-center">
                                    <span class="d-block small font-weight-bold text-cap mr-2">
                                        <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </span>
                                    <span class="d-block small font-weight-bold text-cap mr-1">{{ $detail->views }}</span>
                                    <span class="d-block small font-weight-bold text-cap mr-2">views</span>
                                    <span class="d-block small font-weight-bold text-cap mr-2">|</span>
                                    <span class="d-block small font-weight-bold text-cap mr-2">Share:</span>

                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2"
                                        href="https://www.facebook.com/sharer/sharer.php?u={{ url('/detail/' . $detail->slug) }}"
                                        target="_blank">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2"
                                        href="https://twitter.com/intent/tweet?url={{ url('/detail/' . $detail->slug) }}"
                                        target="_blank">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2"
                                        href="https://api.whatsapp.com/send?text={{ url('/detail/' . $detail->slug) }}"
                                        target="_blank">
                                        <i class="fab fa-whatsapp"></i>
                                    </a>
                                    <a class="btn btn-xs btn-icon btn-soft-secondary rounded-circle ml-2"
                                        href="https://www.linkedin.com/shareArticle?mini=true&url={{ url('/detail/' . $detail->slug) }}"
                                        target="_blank">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </div>
                            </div> --}}
                        </div>
                    </div>

                    <center>
                        <h1 class="h2">{{ $data['judul'] }}</h1>

                        <div class="js-slick-carousel mb-3 slick "
                            data-hs-slick-carousel-options='{
                            "fade": true,
                            "infinite": true,
                            "autoplay": true,
                            "autoplaySpeed": 4000,
                            "dots": true,
                            "dotsAsProgressLine": true,
                            "dotsClass": "slick-dots mt-n4"
                          }'>
                            @foreach ($data['foto'] as $slide)
                                <div class="js-slide">
                                    {{-- <a href="{{ url($slide->path . $slide->file_name ?? '') }}" target="_blank"> --}}
                                    <img class="img-fluid transition-zoom-hover width: 100%;height: 100%;object-fit: scale-down"
                                        src="{{ 'https://setwan.wonosobokab.go.id/' . ('storage' . str_replace('public', '', $slide['path'])) }}"
                                        alt="Image Description" height="150px;">
                                    </a>
                                </div>
                            @endforeach

                        </div>
                        <!-- End Author -->
                        <div class="mt-5 mt-4">
                            {!! $data['isi_posting'] !!}
                        </div>

                        <!-- Sticky Block End Point -->
                        <div id="stickyBlockEndPoint">
                        </div>
                </div>

                <div class="col-lg-3">
                    <div class="mb-7">
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

                    <div class="mb-7">
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
                                        <input type="radio" name="polling_tp" class="polling_tp" value="POLLING_TP_01" />
                                        Sangat Puas
                                    </p>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <p>
                                        <input type="radio" name="polling_tp" class="polling_tp" value="POLLING_TP_02" />
                                        Puas
                                    </p>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <p>
                                        <input type="radio" name="polling_tp" class="polling_tp" value="POLLING_TP_03" />
                                        Cukup Puas
                                    </p>
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <p>
                                        <input type="radio" name="polling_tp" class="polling_tp" value="POLLING_TP_04" />
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
                        <div class="mb-7">
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
                                                    href="{{ $item->link }}" target="_blank">{{ $item->nama ?? '' }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                </article>
                                <!-- End Blog -->
                            @endforeach


                        </div>

                        <div class="mb-7" id="bahasa">
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

            <!-- End Pagination -->
        </div>
        <!-- End Blogs Section -->
    </main>
@endsection
