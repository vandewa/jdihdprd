<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransparansiAnggaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPreviewImageAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['link'])) ?? asset('dashtrans/vertical/assets/images/notfound.jpg');
        return $devan;
    }
}
