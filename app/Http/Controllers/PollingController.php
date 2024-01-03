<?php

namespace App\Http\Controllers;

use App\Models\Polling;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\Auth;
use hisorange\BrowserDetect\Parser as Browser;

class PollingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (Auth::check()) {
            if ($request->ajax()) {

                $data = Polling::with('polling')->select('*');

                return DataTables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function ($data) {
                        return
                            '<div class="list-icons">
                        <a href="' . route('polling.destroy', $data->id) . '" class="btn btn-outline-danger rounded-round delete-data-table"><i class="fas fa-trash mr-2"></i>Hapus</a>
                    </div>';
                    })
                    ->addColumn('tanggal', function ($data) {
                        return \Carbon\Carbon::parse($data->created_at)->isoFormat('LLLL');
                        ;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
            }

            return view('polling.index');
        } else {
            abort(403);
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
        Polling::create($data + ['polling_tp' => $request->polling_tp]);

        return redirect()->route('index')->with('store', 'ok');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Polling::destroy($id);
    }
}
