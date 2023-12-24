@section('title', $data->judul ?? '' . '| DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="{{ $data->judul ?? '' }}" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')

    <!-- Start Blog
                                                                                                                                        ============================================= -->
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->
                                <div class="thumb">
                                    <div class="swiper mySwiper">
                                        <div class="swiper-wrapper">
                                            @if ($data)
                                                @foreach ($data->foto as $list)
                                                    <div class="swiper-slide">
                                                        <img src="{{ asset($list->preview_image ?? '') }}" alt="image"
                                                            style="width: 100%; border-top-left-radius: 25px; border-top-right-radius: 25px;" />
                                                    </div>
                                                @endforeach
                                            @endif
                                        </div>
                                        <div class="swiper-button-next"></div>
                                        <div class="swiper-button-prev"></div>
                                        <div class="swiper-pagination"></div>
                                    </div>

                                </div>
                                <div class="course-details__content">
                                    <!--Start Single Courses One-->
                                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms"
                                        data-wow-duration="1000ms">
                                        <div class="courses-one__single-content">
                                            <h6
                                                style=" font-size: 14px;
                                                line-height: 24px;
                                                font-weight: 400;
                                                ">
                                                <b>
                                                    <span>
                                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($data->created_at))->isoFormat('dddd, D MMMM Y') }}</span>
                                                </b>
                                                <ul class="list-unstyled news-one__meta">
                                                    <li>
                                                        <span style="color: black;">Share This Article :</span>
                                                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ url('/berita/detail/' . $data->slug) }}"
                                                            target="_blank"><i class="fa-brands fa-facebook"
                                                                style="color:blue;"></i> Facebook&nbsp;&nbsp;</a>
                                                        <a href="https://api.whatsapp.com/send?text={{ url('/berita/detail/' . $data->slug) }}"
                                                            target="_blank"><i class="fa-brands fa-square-whatsapp"
                                                                style="color:green;"></i> WhatsApp&nbsp;&nbsp;</a>
                                                        <a style="color: black"><i class="fa-solid fa-eye"
                                                                style="color:black"></i>&nbsp;
                                                            {{ views($data)->count() }}
                                                            views</></a>
                                                    </li>
                                                </ul>
                                            </h6>
                                            <h4
                                                style="font-size: 30px;
                                                line-height: 40px;
                                                font-weight: 700;
                                                margin-top: 10px;">
                                                {{ $data->judul }}
                                            </h4>
                                            <div style="margin-top: 3rem;">
                                                {!! $data->isi_berita !!}
                                            </div>

                                        </div>
                                    </div>
                                    <!--End Single Courses One-->
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog -->
@endsection


@push('css')
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
@endpush

@push('js')
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 4000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>
@endpush
