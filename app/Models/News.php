<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maincontents;
use App\Models\NewsItem;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'main_content_id',
        'title_en',
        'title_my',
        'title_ja',
        'description_en',
        'description_my',
        'description_ja',
        'created_by',
    ];

    public function homecontents() 
    {
        return $this->belongsTo(Maincontents::class);
    }

    public function news_item()
    {
        return $this->hasMany(NewsItem::class, 'news_id', 'id');
    }



}
