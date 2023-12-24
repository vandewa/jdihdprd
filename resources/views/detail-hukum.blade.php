@extends('layouts/front/app')
@section('content')
    <!-- ========== MAIN ========== -->
    <main id="content" role="main">
        <div class="container space-top-2 space-bottom-2">
            <div class="w-lg-100 mx-lg-auto">
                <div class="space-top-1"></div>
                <h2 class="text-center mb-5">Detail Produk Hukum</h2>
                <div class="row">
                    <div class="col-md-5">
                        <div>
                            <object data="{{ asset($data->preview_file) }}" type="application/pdf" width="100%"
                                height="500" style="border: solid 1px #ccc;"></object>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="content">
                            <!-- Basic datatable -->
                            <div class="card">
                                <div class="card-body">
                                    <style type="text/css">
                                        .tg {
                                            border-collapse: collapse;
                                            border-spacing: 0;
                                        }

                                        .tg td {
                                            border-color: black;
                                            border-style: solid;
                                            border-width: 1px;
                                            font-family: Arial, sans-serif;
                                            font-size: 14px;
                                            overflow: hidden;
                                            padding: 10px 5px;
                                            word-break: normal;
                                        }

                                        .tg th {
                                            border-color: black;
                                            border-style: solid;
                                            border-width: 1px;
                                            font-family: Arial, sans-serif;
                                            font-size: 14px;
                                            font-weight: normal;
                                            overflow: hidden;
                                            padding: 10px 5px;
                                            word-break: normal;
                                        }

                                        .tg .tg-0pky {
                                            border-color: inherit;
                                            text-align: left;
                                            vertical-align: top
                                        }
                                    </style>
                                    <table class="tg" style="width: 100%;">
                                        <thead>
                                            <tr>
                                                <th class="tg-0pky"><span style="background-color:#F7FBFE">Jenis
                                                        Peraturan</span></th>
                                                <th class="tg-0pky"><span
                                                        style="background-color:#F7FBFE">{{ $data->kategori->nama ?? '' }}</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="tg-0pky">Judul Peraturan</td>
                                                <td class="tg-0pky">{{ $data->tentang ?? '' }}</td>
                                            </tr>
                                            <tr>
                                                <td class="tg-0pky"><span style="background-color:#F7FBFE">Nomor</span></td>
                                                <td class="tg-0pky"><span
                                                        style="background-color:#F7FBFE">{{ $data->nomor ?? '' }}</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="tg-0pky">Tahun Terbit</td>
                                                <td class="tg-0pky">{{ $data->tahun ?? '' }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- /basic datatable -->
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </main>
    <!-- ========== END MAIN ========== -->
@endsection
