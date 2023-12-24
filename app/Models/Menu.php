<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function childs()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')->orderBy('urutan', 'asc');
    }

    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(ComCode::class, 'jenis_st');
    }

    public function getPreviewImageAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['path'])) ?? asset('dashtrans/vertical/assets/images/notfound.jpg');
        return $devan;
    }
}
