<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Kategori;
use App\Models\ProdukHukum;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MonografiHukumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = ProdukHukum::with('kategori')->whereNotIn('kategori_id', [1, 2, 3, 4])->select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div>
                    <a href="' . route('monografi.edit', $data->id) . '" class="btn btn-info px-3 radius-30"><i class="bx bx-edit-alt mr-1"></i>Edit</a>
                    <a href="' . route('monografi.destroy', $data->id) . '" class="btn btn-danger px-3 radius-30 delete-data-table"><i class="bx bx-trash-alt mr-1"></i>Delete</a>
                </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('monografi.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori = Kategori::whereNotIn('id', [1, 2, 3, 4])->pluck('nama', 'id');

        return view('monografi.create', compact('kategori'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->file('path')) {
            $path = $request->file('path')->storeAs(
                'public/' . Carbon::now()->isoFormat('Y') . '/' . Carbon::now()->isoFormat('MMMM'),
                date('Ymdhis') . '.' . $request->file('path')->extension()
            );
        } else {
            $path = null;
        }

        ProdukHukum::create([
            'kategori_id' => $request->kategori_id,
            'nomor' => $request->nomor,
            'tahun' => $request->tahun,
            'tentang' => $request->tentang,
            'path' => $path,
        ]);

        return redirect()->route('monografi.index')->with('store', 'ok');
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
        $data = ProdukHukum::find($id);
        $kategori = Kategori::whereNotIn('id', [1, 2, 3, 4])->pluck('nama', 'id');

        return view('monografi.edit', compact('data', 'kategori'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if ($request->file('path')) {
            $path = $request->file('path')->storeAs(
                'public/' . Carbon::now()->isoFormat('Y') . '/' . Carbon::now()->isoFormat('MMMM'),
                date('Ymdhis') . '.' . $request->file('path')->extension()
            );
        } else {
            $path = ProdukHukum::where('id', $id)->first()->path;
        }

        ProdukHukum::find($id)->update([
            'kategori_id' => $request->kategori_id,
            'nomor' => $request->nomor,
            'tahun' => $request->tahun,
            'tentang' => $request->tentang,
            'path' => $path,
        ]);

        return redirect()->route('monografi.index')->with('edit', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        ProdukHukum::destroy($id);
    }
}
