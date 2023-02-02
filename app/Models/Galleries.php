<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainGalleries;

class Galleries extends Model
{
    use HasFactory;

    protected $table = 'galleries';

    protected $fillable = [
        'title_en',
        'title_my',
        'title_ja',
        'sub_title_en',
        'sub_title_my',
        'sub_title_ja',
        'description_en',
        'description_my',
        'description_ja',
        'created_by'
    ];

    public function main_galleries() 
    {
        return $this->belongsToMany(MainGalleries::class, 'galleries_main_galleries','gallery_id','main_gallery_id');
    }
}
