@section('title', ' Website MPP Wonosobo')
@extends('layouts.front.app')
@section('content')
    <div class="blog-area single full-blog full-blog default-padding">
        <div class="container">
            <div class="row">
                <div class="blog-items">
                    <div class="blog-content col-md-10 col-md-offset-1">
                        <div class="">

                            <div class="blog-item-box">
                                <!-- Start Post Thumb -->

                                <div class="course-details__content">
                                    <!--Start Single Courses One-->
                                    <div class="courses-one__single wow fadeInLeft" data-wow-delay="0ms"
                                        data-wow-duration="1000ms">
                                        <div class="courses-one__single-content">
                                            <h1>{{ $data->nama_opd ?? '' }}</h1>
                                            <div style="margin-top: 3rem;">
                                                {!! $data->layanan ?? '' !!}
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

@endsection

@push('css')
    <style>
        img {
            max-width: 1000px;
        }
    </style>
@endpush
