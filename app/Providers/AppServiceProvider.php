<?php

namespace App\Providers;

use App\Models\InformasiUmum;
use App\Models\Kategori;
use App\Models\Menu;
use App\Models\ProdukHukum;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {

        // if (env('APP_ENV') !== 'local') {
        //     $this->app['request']->server->set('HTTPS', true);
        $visitor = DB::table('visitors')->count();
        View::share('visitor', $visitor);
        $pembaca = DB::table('views')->count();
        View::share('pembaca', $pembaca);
        $info = DB::table('informasi_umums')->first();
        View::share('info', $info);
        $hari_ini = DB::table('visitors')->whereDate('created_at', date('Y-m-d'))->count();
        View::share('hari_ini', $hari_ini);
        $bulan_ini = DB::table('visitors')->whereMonth('created_at', date('m'))->count();
        View::share('bulan_ini', $bulan_ini);
        $tahun_ini = DB::table('visitors')->whereYear('created_at', date('Y'))->count();
        View::share('tahun_ini', $tahun_ini);
        $hukum = Kategori::withCount('produk')->get();
        View::share('hukum', $hukum);
        $produk_hukum = Kategori::whereIn('id', [1, 2, 3, 4])->get();
        View::share('produk_hukum', $produk_hukum);
        $monografi_hukum = Kategori::whereNotIn('id', [1, 2, 3, 4])->get();
        View::share('monografi_hukum', $monografi_hukum);

        // }

        if (env('APP_ENV') != 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }

    }
}
