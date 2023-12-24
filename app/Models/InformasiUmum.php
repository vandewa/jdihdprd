<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InformasiUmum extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function getPreviewImageAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['path_gambar'])) ?? asset('notfound.jpg');
        return $devan;
    }

    public function getPreviewBupatiAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['bupati_path'])) ?? asset('notfound.jpg');
        return $devan;
    }
}