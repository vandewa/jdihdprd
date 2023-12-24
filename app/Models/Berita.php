<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use CyrildeWit\EloquentViewable\InteractsWithViews;
use CyrildeWit\EloquentViewable\Contracts\Viewable;

class Berita extends Model implements Viewable
{
    use HasFactory, Sluggable, InteractsWithViews;

    protected $guarded = [];

    public function foto()
    {
        return $this->hasMany(File::class, 'berita_id');
    }

    public function sampul()
    {
        return $this->hasOne(File::class, 'berita_id');
    }

    public function dibuat()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function kategori()
    {
        return $this->belongsTo(ComCode::class, 'kategori_tp');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }


}