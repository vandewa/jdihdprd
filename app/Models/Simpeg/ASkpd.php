<?php

namespace App\Models\Simpeg;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ASkpd extends Model
{
    use HasFactory;
    protected $table = 'a_skpd';
    protected $connection = "simpeg";
    protected $primaryKey = 'idskpd';
    public $incrementing = false;
    protected $keyType = 'string';

    public function parent()
    {
        return $this->belongsTo(ASkpd::class, 'idparent')->select('idskpd', 'idparent', 'skpd');
    }
}
