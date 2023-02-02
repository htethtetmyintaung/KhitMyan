<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\MainGalleries;

class SubGalleries extends Model
{
    use HasFactory;

    protected $table = 'sub_galleries';

    protected $fillable = [
        'image',
        'title_en',
        'title_my',
        'title_jp',
        'description_en',
        'description_my',
        'description_jp',
        'created_by'
    ];

    public function main_sub_galleries() 
    {
        return $this->belongsToMany(MainGalleries::class, 'main_sub_galleries','sub_gallery_id','main_gallery_id');
    }
}
