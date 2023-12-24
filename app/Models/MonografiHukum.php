<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonografiHukum extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function getPreviewFileAttribute()
    {
        $devan = asset(str_replace('public', 'storage', $this->attributes['path'])) ?? asset('notfound.jpg');
        return $devan;
    }

}
