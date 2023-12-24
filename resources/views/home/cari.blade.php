@section('title', 'Hasil Pencarian ' . $cari ?? '' . '| DPMPTSP Wonosobo')
@section('meta-description')
    <meta content="{{ 'Hasil Pencarian ' . $cari ?? '' }}" name="description" />
@endsection
@extends('layouts.front.app')
@section('content')
    <main id="content" role="main">
        <div class="container space-top-3 space-top-lg-3 space-bottom-2">
            <div class="mb-3">
                <h3>Hasil Pencarian : "{{ $cari }}" ({{ $jumlah }}) found.</h3>
            </div>
            <div class="row">
                @foreach ($posting as $item)
                    <!-- Item -->
                    <div class="col-md-3 mb-3">
                        <!-- Blog Card -->
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
                                <h3>
                                    <a class="text-inherit" href="{{ route('detail.berita', $item->slug) }}">
                                        {{ $item->judul ?? '' }}
                                    </a>
                                </h3>
                            </div>

                            <div class="card-footer border-0 pt-0">
                                <div class="media align-items-center">
                                    <div class="avatar-group">
                                        <a class="avatar avatar-xs avatar-circle" href="#" data-toggle="tooltip"
                                            data-placement="top" title=""
                                            data-original-title=" {{ $item->dibuat->name ?? '' }}">
                                            <img class="avatar-img" src="{{ asset('soul.png') }}" alt="Image Description">
                                        </a>
                                    </div>
                                    <div class="media-body d-flex justify-content-end text-muted font-size-1 ml-2">
                                        {{ \Carbon\Carbon::createFromTimeStamp(strtotime($item->created_at))->isoFormat('D MMMM Y') }}
                                    </div>
                                </div>
                            </div>
                        </article>
                        <!-- End Blog Card -->
                    </div>
                @endforeach
            </div>
        </div>

        <div class="d-flex justify-content-center mt-3">
            {{ $posting->links('vendor.pagination.simple-default') }}
        </div>

    </main>
@endsection
