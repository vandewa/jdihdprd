@section('title', 'Berita | DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="Berita" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <main id="content" role="main">
        <div class="container space-top-3 space-top-lg-3 space-bottom-2">

            <div class="space-bottom-1">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('berita.gif') }}" style="height: 90px;">
                    {{-- <br> --}}
                </div>
                <div class="d-flex justify-content-center">
                    <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
                </div>
            </div>

            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-end">
                            <form action="{{ route('cari.berita') }}" class="row" id="form_subscribe" method="get"
                                name="form_subscribe">
                                <div class="card p-3 mb-5">
                                    <div class="form-row input-group-borderless">
                                        <div class="col-sm column-divider-sm mb-2 mb-md-0">
                                            <input class="form-control" id="name_1" name="judul"
                                                placeholder="Cari Berita" type="text" />
                                        </div>
                                        <div class="col-md-auto">
                                            <button type="submit" class="btn btn-block btn-primary btn-sm"><i
                                                    class="fas fa-arrow-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                @foreach ($data as $item)
                    <!-- Item -->
                    <div class="col-md-3 mb-3">
                        <!-- Blog Card -->
                        <a href="{{ route('detail.berita', $item->slug) }}">
                            <article class="card h-100">
                                <div class="card-img-top position-relative">
                                    <img class="card-img-top" src="{{ asset($item->sampul->preview_image ?? '') }}"
                                        style="object-fit:cover; max-height:250px;">
                                    <figure class="ie-curved-y position-absolute right-0 bottom-0 left-0 mb-n1">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
                                            <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"></path>
                                        </svg>
                                    </figure>
                                </div>

                                <div class="card-body">
                                    <h3><a class="text-inherit"
                                            href="{{ route('detail.berita', $item->slug) }}">{{ $item->judul ?? '' }}</a>
                                    </h3>
                                </div>

                                <div class="card-footer border-0 pt-0">
                                    <div class="media align-items-center">
                                        <div class="avatar-group">
                                            <a class="avatar avatar-xs avatar-circle" href="#" data-toggle="tooltip"
                                                data-placement="top" title=""
                                                data-original-title=" {{ $item->dibuat->name ?? '' }}">
                                                <img class="avatar-img" src="{{ asset('favicon_io/apple-touch-icon.png') }}"
                                                    alt="Image Description">
                                            </a>
                                        </div>
                                        <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                            {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->isoFormat('D MMMM Y') }}
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </a>
                        <!-- End Blog Card -->
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $data->links('vendor.pagination.simple-default') }}
        </div>

    </main>
@endsection
