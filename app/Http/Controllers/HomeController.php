<?php

namespace App\Http\Controllers;

use App\Models\Sampul;
use Carbon\Carbon;
use App\Models\Berita;
use App\Models\Profil;
use App\Models\Visitor;
use App\Models\Kategori;
use App\Models\LinkTerkait;
use App\Models\ProdukHukum;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Yajra\DataTables\Facades\DataTables;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use hisorange\BrowserDetect\Parser as Browser;


class HomeController extends Controller
{

    public function pengunjung()
    {
        $geoipInfo = geoip()->getLocation($_SERVER['REMOTE_ADDR']);
        if (Browser::isDesktop() == 1) {
            $jenis = 'Desktop';
        }
        if (Browser::isTablet() == 1) {
            $jenis = 'Tablet';
        }
        if (Browser::isMobile() == 1) {
            $jenis = 'Mobile';
        }
        $data = [
            'ip' => $geoipInfo->ip,
            'iso_code' => $geoipInfo->iso_code,
            'country' => $geoipInfo->country,
            'city' => $geoipInfo->city,
            'state' => $geoipInfo->state,
            'state_name' => $geoipInfo->state_name,
            'postal_code' => $geoipInfo->postal_code,
            'lat' => $geoipInfo->lat,
            'lon' => $geoipInfo->lon,
            'timezone' => $geoipInfo->timezone,
            'continent' => $geoipInfo->continent,
            'currency' => $geoipInfo->currency,
            'browser_family' => Browser::browserFamily(),
            'browser_name' => Browser::browserName(),
            'platform_family' => Browser::platformFamily(),
            'platform_name' => Browser::platformName(),
            'jenis' => $jenis,
        ];
        Visitor::create($data);
    }
    public function index()
    {

        $response = Http::withoutVerifying()->retry(5, 1000)->get('https://setwan.wonosobokab.go.id/api/news');

        if ($response->clientError()) {

        } else {
            $response = $response->collect();
            $berita = array_slice($response['data']['data'], 0, 4);
        }

        $this->pengunjung();

        $link = LinkTerkait::all();

        $kategori = Kategori::whereIn('id', [1, 2, 3, 4])->get();

        $sampul = Sampul::orderBy('created_at', 'desc')->get();

        return view('home.index', compact('berita', 'link', 'kategori', 'sampul'));
    }

    public function detailBerita($id)
    {
        $response = Http::withoutVerifying()->get('https://setwan.wonosobokab.go.id/api/news/' . $id);
        $response = $response->collect();

        $data = $response['data'];

        $link = LinkTerkait::all();
        $kategori = Kategori::whereIn('id', [1, 2, 3, 4])->get();

        return view('detail-berita', compact('data', 'link', 'kategori'));

    }

    public function pageProfil()
    {
        $data = Profil::where('id', 1)->first();

        return view('page-profil', compact('data'));
    }

    public function cariHukum(Request $request)
    {

        $judul = ProdukHukum::with('kategori')->where('kategori_id', $request->kategori_id)->first()->kategori->nama ?? '';

        if ($request->ajax()) {

            $data = ProdukHukum::with('kategori');

            if ($request->filled('kategori_id')) {
                $data->where('kategori_id', $request->kategori_id)
                    ->where('tentang', 'LIKE', '%' . $request->kunci . '%');

            }

            $data = $data->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('qrcode', function ($data) {
                    $path = asset('storage' . str_replace('public', '', $data->path));
                    return QrCode::size(70)->generate($path);
                })
                ->addColumn('action', function ($data) {
                    $path = asset('storage' . str_replace('public', '', $data->path));
                    $actionBtn =
                        '<div>
                                <a href="' . route('detail.hukum', $data->id) . '" class="btn btn-info px-3 radius-30" target="_blank"><i class="far fa-eye"></i></a>
                                <a href="' . route('page.hukum', $data->id) . '" class="btn btn-success px-3 radius-30" target="_blank"><i class="fas fa-cloud-download-alt"></i></a>
                            </div>';
                    return $actionBtn;
                })
                ->rawColumns(['qrcode', 'action'])
                ->make(true);
        }

        return view('hukum', compact('judul'));


    }

    public function cariHukumDetail(Request $request)
    {

        if (!$request->filled('kategori_id')) {
            return redirect()->back();
        }

        $judul = ProdukHukum::with('kategori')->where('kategori_id', $request->kategori_id)->first()->kategori->nama ?? '';

        if ($request->ajax()) {

            $data = ProdukHukum::with('kategori')
                ->where('kategori_id', $request->kategori_id)
                ->where('nomor', $request->nomor)
                ->where('tahun', $request->tahun)
                ->where('tentang', 'LIKE', "%$request->tentang%")
                ->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('qrcode', function ($data) {
                    $path = asset('storage' . str_replace('public', '', $data->path));
                    return QrCode::size(70)->generate($path);
                })
                ->addColumn('action', function ($data) {
                    $path = asset('storage' . str_replace('public', '', $data->path));
                    $actionBtn =
                        '<div>
                                <a href="' . route('detail.hukum', $data->id) . '" class="btn btn-info px-3 radius-30" target="_blank"><i class="far fa-eye"></i></a>
                                <a href="' . route('page.hukum', $data->id) . '" class="btn btn-success px-3 radius-30" target="_blank"><i class="fas fa-cloud-download-alt"></i></a>
                            </div>';
                    return $actionBtn;
                })
                ->rawColumns(['qrcode', 'action'])
                ->make(true);
        }

        return view('hukum', compact('judul'));


    }

    public function pageHukum(Request $request, $id)
    {

        $judul = ProdukHukum::with('kategori')->where('kategori_id', $id)->first()->kategori->nama ?? '';

        if ($request->ajax()) {

            $data = ProdukHukum::with('kategori')->where('kategori_id', $id)->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('qrcode', function ($data) {
                    $path = asset('storage' . str_replace('public', '', $data->path));
                    return QrCode::size(70)->generate($path);
                })
                ->addColumn('action', function ($data) {
                    $path = asset('storage' . str_replace('public', '', $data->path));
                    $actionBtn =
                        '<div>
                            <a href="' . route('detail.hukum', $data->id) . '" class="btn btn-info px-3 radius-30" target="_blank"><i class="far fa-eye"></i></a>
                            <a href="' . asset('storage' . str_replace('public', '', $data->path)) . '" class="btn btn-success px-3 radius-30" target="_blank"><i class="fas fa-cloud-download-alt"></i></a>
                        </div>';
                    return $actionBtn;
                })
                ->rawColumns(['qrcode', 'action'])
                ->make(true);
        }

        return view('hukum', compact('judul'));
    }

    public function detailHukum($id)
    {
        $data = ProdukHukum::with('kategori')->where('id', $id)->first();

        return view('detail-hukum', compact('data'));
    }

    public function cariBerita(Request $request)
    {

        $cari = $request->judul;

        $posting = Berita::with(['sampul', 'dibuat'])
            ->where('judul', 'like', "%" . $cari . "%")
            ->orderBy('created_at', 'desc')
            ->simplePaginate(8)
            ->appends(['judul' => $request->judul]);

        $jumlah = Berita::where('judul', 'like', "%" . $cari . "%")->count();


        return view('home.cari', compact('posting', 'cari', 'jumlah'));

    }

    public function berita($id)
    {
        $data = Berita::with(['sampul', 'dibuat'])->where('slug', $id)->first();

        views($data)->cooldown(2)->record();

        return view('detail-berita', compact('data'));
    }

    public function listNews()
    {
        $data = Berita::with(['sampul', 'dibuat'])
            ->where('publish_st', 1)
            ->orderBy('created_at', 'desc')
            ->simplePaginate(8);

        return view('list-berita', compact('data'));
    }



}