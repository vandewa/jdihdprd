<!-- sidebar -->
<div class="sidebar">
    <!-- widget about -->
    <div class="rounded widget">
        <div class="text-center widget-about data-bg-image" data-bg-image="{{ asset('katen/images/map-bg.png') }}">
            {{-- <img src="{{ asset('katen/images/logo.svg') }}" alt="logo" class="mb-4" /> --}}
            <h4>Visi Diaspora<span class="dot">.</span></h4>
            @if (Request::segment(1) == '')
                <p class="mb-4">{{ $data->visi ?? '' }}</p>
            @else
                <p class="mb-4">{{ $informasi->visi ?? '' }}</p>
            @endif
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                Misi Diaspora
            </button>
        </div>
    </div>

    <!-- widget post carousel -->
    <div class="rounded widget">
        <div class="text-center widget-header">
            <h3 class="widget-title">Pengurus Yayasan Diaspora Wonosobo</h3>
            <img src="{{ asset('katen/images/wave.svg') }}" class="wave" alt="wave" />
        </div>
        <div class="widget-content">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    @foreach ($pendiri as $index => $list)
                        <div class="carousel-item @if ($index == 0) active @endif">
                            <center>
                                <h5>{{ $list->jabatan ?? '' }}</h5>
                            </center>
                            <a href="{{ route('detail.pengurus', $list->id) }}">
                                <img src="{{ $list->preview_image }}" class="d-block w-100" style="max-height: 300px;">
                                <div class="carousel-caption d-none d-md-block">
                                    <span class="badge bg-danger"
                                        style="font-size: 15px;">{{ $list->nama ?? '' }}</span>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Misi Dispora Wonosobo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if (Request::segment(1) == '')
                    <p class="mb-4"> {!! $data->misi ?? '' !!}</p>
                @else
                    <p class="mb-4"> {!! $informasi->misi ?? '' !!}</p>
                @endif

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
