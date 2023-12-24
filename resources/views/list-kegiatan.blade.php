@extends('layouts.front.app')
@section('content')
    <!-- section main content -->
    <section class="main-content mt-3">
        <div class="container-xl">

            <div class="row gy-4">

                <div class="col-lg-8">
                    <div class="rounded padding-30 bordered">

                        <div class="de"></div>
                        <div class="row" id="pagenya">
                            @foreach ($data as $k)
                                <div class="col-sm-12">
                                    <!-- post large -->
                                    <div class="post">
                                        <ul class="meta list-inline mt-4 mb-0">
                                            <li class="list-inline-item">
                                                <img src="{{ asset('a.png') }}" alt="author"
                                                    style="height: 20px;"class="mr-3" />
                                                {{ $k->dibuat->name ?? '' }}
                                            </li>
                                            <li class="list-inline-item">
                                                {{ \Carbon\Carbon::createFromTimeStamp(strtotime($k->created_at))->isoFormat('D MMMM Y') }}
                                            </li>
                                        </ul>
                                        <h5 class="post-title mb-3 mt-3"><a
                                                href="{{ route('detail.kegiatan', $k->slug) }}">{{ $k->judul }}</a>
                                        </h5>
                                        {!! $k->link_yt !!}
                                    </div>
                                </div>
                            @endforeach

                        </div>
                        {{ $data->links('vendor.pagination.simple-default') }}

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
        iframe {
            width: 100%;
            aspect-ratio: 16 / 9;
        }
    </style>
@endpush
