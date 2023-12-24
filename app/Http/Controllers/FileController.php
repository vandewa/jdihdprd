<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        $path = storage_path('tmp/uploads');

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }

        $file = $request->file('file');
        $name = uniqid() . '_' . trim($file->getClientOriginalName());
        $file->move($path, $name);

        return response()->json([
            'name' => $name,
            'original_name' => $file->getClientOriginalName(),
            'path' => $path . $name
        ]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Berita::with('foto')->where('id', $id)->first();
        foreach ($data->foto as $d) {
            $fileList[] = [
                'name' => $d->nama_file,
                'size' => Storage::size(($d->path)),
                'path' => $d->preview_image
            ];
        }
        return json_encode($fileList ?? []);
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
    public function destroy($id)
    {
        $loc = storage_path('tmp/uploads/') . $id;

        if (file_exists($loc)) {
            unlink(storage_path('tmp/uploads/' . $id));
            return response()->json([
                'lokasi' => $loc,
            ]);
        } else {
            $data = File::where('nama_file', $id)->first();
            unlink((str_replace('public', 'storage', $data->path)));
            $data->delete();
            return response()->json([
                'lokasi' => 'File terhapus'
            ]);
        }
    }
}