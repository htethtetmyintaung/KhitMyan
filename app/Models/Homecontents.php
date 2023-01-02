<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maincontents;

class Homecontents extends Model
{
    use HasFactory;

    protected $table = 'home_contents';

    protected $fillable = [
        'main_content_id',
        'banner_text_en',
        'banner_text_ja',
        'banner_text_my',
        'small_text_en',
        'small_text_ja',
        'small_text_my',
        'image',
        'created_by'
    ];

    public function homecontents() 
    {
        return $this->belongsTo(Maincontents::class);
    }
}
