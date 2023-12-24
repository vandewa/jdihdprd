<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\LinkTerkait;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class LinkTerkaitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {

            $data = LinkTerkait::select('*');

            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($data) {
                    return
                        '<div>
                    <a href="' . route('link-terkait.edit', $data->id) . '" class="btn btn-info px-3 radius-30"><i class="bx bx-edit-alt mr-1"></i>Edit</a>
                    <a href="' . route('link-terkait.destroy', $data->id) . '" class="btn btn-danger px-3 radius-30 delete-data-table"><i class="bx bx-trash-alt mr-1"></i>Delete</a>
                </div>';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('link-terkait.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('link-terkait.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if ($request->file('foto')) {
            $foto = $request->file('foto')->storeAs(
                'public/' . Carbon::now()->isoFormat('Y') . '/' . Carbon::now()->isoFormat('MMMM'),
                date('Ymdhis') . '.' . $request->file('foto')->extension()
            );
        } else {
            $foto = null;
        }

        LinkTerkait::create([
            'nama' => $request->nama,
            'link' => $request->link,
            'foto' => $foto,
        ]);

        return redirect()->route('link-terkait.index')->with('store', 'ok');

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
        $data = LinkTerkait::find($id);

        return view('link-terkait.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        if ($request->file('foto')) {
            $foto = $request->file('foto')->storeAs(
                'public/' . Carbon::now()->isoFormat('Y') . '/' . Carbon::now()->isoFormat('MMMM'),
                date('Ymdhis') . '.' . $request->file('foto')->extension()
            );
        } else {
            $foto = LinkTerkait::where('id', $id)->first()->foto;
        }

        LinkTerkait::find($id)->update([
            'nama' => $request->nama,
            'link' => $request->link,
            'foto' => $foto,

        ]);

        return redirect()->route('link-terkait.index')->with('edit', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        LinkTerkait::destroy($id);
    }
}
