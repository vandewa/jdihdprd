<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Kategori::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    if ($data->id <= 4) {
                        $actionBtn = '';
                        return $actionBtn;
                    } else {
                        $actionBtn =
                            '<div>
                            <a href="' . route('kategori.edit', $data->id) . '" class="btn btn-info px-3 radius-30"><i class="bx bx-edit-alt mr-1"></i>Edit</a>
                            <a href="' . route('kategori.destroy', $data->id) . '" class="btn btn-danger px-3 radius-30 delete-data-table"><i class="bx bx-trash-alt mr-1"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('kategori.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Kategori::create([
            'nama' => $request->nama
        ]);

        return redirect()->route('kategori.index')->with('store', 'ok');

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
        $data = Kategori::find($id);

        return view('kategori.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Kategori::find($id)->update([
            'nama' => $request->nama,
        ]);

        return redirect()->route('kategori.index')->with('edit', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Kategori::destroy($id);
    }
}
