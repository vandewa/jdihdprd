<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\IsiMenuUpdateValidation;
use App\Http\Requests\MenuStoreValidation;
use Illuminate\Support\Str;



class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Menu::with('parent')->where('id', '!=', 1);
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    if ($row->id <= 94) {
                        $actionBtn =
                            '<div>
                            <a href="' . route('menu.edit', $row->id) . '" class="btn btn-info px-3 radius-30"><i class="bx bx-edit-alt mr-1"></i>Edit</a>
                        </div>';
                        return $actionBtn;
                    } else {
                        $actionBtn =
                            '<div>
                            <a href="' . route('menu.edit', $row->id) . '" class="btn btn-info px-3 radius-30"><i class="bx bx-edit-alt mr-1"></i>Edit</a>
                            <a href="' . route('menu.destroy', $row->id) . '" class="btn btn-danger px-3 radius-30 delete-data-table"><i class="bx bx-trash-alt mr-1"></i>Delete</a>
                        </div>';
                        return $actionBtn;
                    }

                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('menu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::pluck('nama', 'id');

        return view('menu.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    function cariAngkaTertinggi($data)
    {
        $angkaTertinggi = null;
        foreach ($data as $angka) {
            if ($angkaTertinggi == null || $angka > $angkaTertinggi) {
                $angkaTertinggi = $angka;
            }
        }
        return $angkaTertinggi;
    }

    public function store(MenuStoreValidation $request)
    {
        //cek urutan paling akhir 
        $data = Menu::where('parent_id', $request->parent_id)->select('urutan')->pluck('urutan');
        $angka_tertinggi = $this->cariAngkaTertinggi($data);

        Menu::create([
            'parent_id' => $request->parent_id,
            'nama' => $request->nama,
            'urutan' => $angka_tertinggi + 1,
            'slug' => Str::slug($request->nama),
        ]);

        return redirect()->route('menu.index')->with('store', 'oke');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Menu::findOrFail($id);
        $previous_urutan = $data->urutan;
        $menu = Menu::pluck('nama', 'id');

        return view('menu.edit', compact('data', 'previous_urutan', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MenuStoreValidation $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $nama_menu = $menu->nama;
        $previous_urutan = $menu->urutan;

        if ($request->urutan > $previous_urutan) {
            $increment = -1;
        } else {
            $increment = 1;
        }

        Menu::where('parent_id', $menu->parent_id)
            ->where('urutan', '>=', $request->urutan)
            ->where('urutan', '<', $previous_urutan)
            ->increment('urutan', $increment);

        Menu::where('parent_id', $menu->parent_id)
            ->where('urutan', '>', $previous_urutan)
            ->where('urutan', '<=', $request->urutan)
            ->decrement('urutan', $increment);

        if ($nama_menu != $request->nama) {
            $menu->update([
                'slug' => Str::slug($request->nama),
            ]);
        }

        $menu->update([
            'urutan' => $request->urutan,
            'nama' => $request->nama,
            'parent_id' => $request->parent_id,
        ]);


        return redirect()->route('menu.index')->with('edit', 'oke');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::destroy($id);
    }

    public function indexIsiMenu(Request $request)
    {
        if ($request->ajax()) {
            $data = Menu::with('jenis')->where('id', '!=', 1)->where('parent_id', '!=', 1)->doesntHave('childs');
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $actionBtn =
                        '<div>
                        <a href="' . route('isi.menu.edit', $row->id) . '" class="btn btn-info px-3 radius-30"><i class="bx bx-edit-alt mr-1"></i>Edit</a>
                    </div>';
                    return $actionBtn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('isi-menu.index');
    }

    public function editIsiMenu($id)
    {
        $data = Menu::find($id);

        return view('isi-menu.edit', compact('data'));
    }

    public function updateIsiMenu(IsiMenuUpdateValidation $request, $id)
    {
        Menu::find($id)->update([
            'jenis_st' => $request->jenis_st,
            'deskripsi' => $request->deskripsi,
            'jenis_informasi_publik_tp' => $request->jenis_informasi_publik_tp,
            'path' => $request->path,
        ]);

        return redirect()->route('isi.menu.index')->with('edit', 'oke');

    }
}
