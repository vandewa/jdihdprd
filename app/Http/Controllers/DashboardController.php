<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function index()
    {
        $total_produk = DB::table('produk_hukums')->count();
        $kategori = DB::table('kategoris')->count();
        $total_pengunjung = DB::table('visitors')->count();
        $pengunjung_hari_ini = DB::table('visitors')->whereDate('created_at', '=', date('Y-m-d'))->count();

        return view('dashboard', compact('total_produk', 'kategori', 'total_pengunjung', 'pengunjung_hari_ini'));
    }

    public function password()
    {
        return view('ganti-password');
    }

    public function gantiPassword(Request $request)
    {
        User::find(auth()->user()->id)->update([
            'password' => Hash::make($request->password)
        ]);

        return redirect()->back()->with('edit', 'oke');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(route('index'));
    }
}