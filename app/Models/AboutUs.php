<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maincontents;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        'main_content_id',
        'image_title_en',
        'image_title_my',
        'image_title_ja',
        'image_description_en',
        'image_description_my',
        'image_description_ja',
        'title_en',
        'title_my',
        'title_ja',
        'sub_title_en',
        'sub_title_my',
        'sub_title_ja',
        'description_en',
        'description_my',
        'description_ja',
        'image',
        'created_by'
    ];

    public function homecontents() 
    {
        return $this->belongsTo(Maincontents::class);
    }
}
