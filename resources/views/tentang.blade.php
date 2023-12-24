@extends('layouts.front.app')
@section('content')
    <!-- section main content -->
    <section class="main-content mt-3">
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="d-flex justify-content-center mb-3">
                        <div class="border">
                            <div class="frame">
                                <div class="image" style="background-image: url({{ $data->preview_image }})">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <center>
                            <span style="font-size: 17px;">{{ $data->jabatan }}</span>
                        </center>
                        <center>
                            <h4>{{ $data->nama }}</h4>
                        </center>
                    </div>
                    <div class="post-content clearfix mt-4">
                        {!! $data->tentang !!}
                    </div>
                </div>

                <div class="col-lg-4">

                    @include('sidebarkanan')

                </div>

            </div>

        </div>

        </div>
    </section>
@endsection

@push('css')
    <style>
        .border {
            box-sizing: border-box;
            position: relative;
            background: black;
            background-image: linear-gradient(to top right, #5D5D5B, #383838);
            padding: 7px;
            width: 220px;
            box-shadow:
                -1px 1px var(--blur) 1px rgba(0, 0, 0, 0.10),
                -2px 2px var(--blur) 1px rgba(0, 0, 0, 0.09),
                -3px 3px var(--blur) 1px rgba(0, 0, 0, 0.08),
                -4px 4px var(--blur) 1px rgba(0, 0, 0, 0.07),
                -5px 5px var(--blur) 1px rgba(0, 0, 0, 0.06),
                -6px 6px var(--blur) 1px rgba(0, 0, 0, 0.05),
                -7px 7px var(--blur) 1px rgba(0, 0, 0, 0.04),
                -8px 8px var(--blur) 1px rgba(0, 0, 0, 0.03),
                -9px 9px var(--blur) 1px rgba(0, 0, 0, 0.03),
                -10px 10px var(--blur) 1px rgba(0, 0, 0, 0.03),
                -11px 11px var(--blur) 1px rgba(0, 0, 0, 0.03),
                -12px 12px var(--blur) 1px rgba(0, 0, 0, 0.02),
                -13px 13px var(--blur) 1px rgba(0, 0, 0, 0.02),
                -14px 14px var(--blur) 1px rgba(0, 0, 0, 0.01),
                -15px 15px var(--blur) 1px rgba(0, 0, 0, 0.01),
                -16px 16px var(--blur) 1px rgba(0, 0, 0, 0.01);

            &:before {
                content: ' ';
                display: block;
                padding-bottom: 140%;
            }
        }

        .frame {
            left: 3%;
            top: 2.5%;
            box-shadow: inset -1px 1px 6px 1px rgba(0, 0, 0, .24);
            width: 94%;
            height: 95%;
            background: white;
            align-items: center;
            display: flex;
            padding: 18px;
            box-sizing: border-box;
            position: absolute;
        }

        .image {
            box-shadow: inset 0 0 1px 0 rgba(0, 0, 0, .2);
            height: 100%;
            width: 100%;
            background-size: cover;
            background-position: center center;
        }
    </style>
@endpush
