<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Galleries;
use App\Models\SubGalleries;

class MainGalleries extends Model
{
    use HasFactory;

    protected $table = 'main_galleries';

    protected $fillable = [
        'image',
        'title_en',
        'title_my',
        'title_ja',
        'description_en',
        'description_my',
        'description_ja',
        'created_by'
    ];

    public function galleries() 
    {
        return $this->belongsToMany(Galleries::class, 'galleries_main_galleries','main_gallery_id','gallery_id');
    }

    public function sub_galleries() 
    {
        return $this->belongsToMany(SubGalleries::class, 'main_sub_galleries','main_gallery_id','sub_gallery_id');
    }
}
