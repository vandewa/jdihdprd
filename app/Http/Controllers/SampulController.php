<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Sampul;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SampulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = Sampul::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div class="list-icons">
                        <a href="' . route('sampul.destroy', $data->id) . '" class="btn btn-outline-danger rounded-round delete-data-table"><i class="fas fa-trash mr-2"></i>Hapus</a>
                    </div>';
                })
                ->addColumn('gambar', function ($data) {
                    $path = asset('storage' . str_replace('public', '', $data->path));
                    return '<img src="' . $path . '" style="width:200px;">';
                })
                ->rawColumns(['action', 'gambar'])
                ->make(true);
        }

        return view('sampul.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('sampul.create');
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

        Sampul::create([
            'path' => $path,
        ]);

        return redirect()->route('sampul.index')->with('store', 'ok');

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
        $data = Sampul::find($id);

        return view('sampul.edit', compact('data'));
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
            $path = Sampul::where('id', $id)->first()->path;
        }

        Sampul::find($id)->update([
            'path' => $path,

        ]);

        return redirect()->route('sampul.index')->with('edit', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Sampul::destroy($id);
    }
}
