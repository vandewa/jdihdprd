<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Polling extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function polling()
    {
        return $this->belongsTo(ComCode::class, 'polling_tp');
    }

}
