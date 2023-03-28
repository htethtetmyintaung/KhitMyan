<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\News;
use App\Models\Category;

class NewsItem extends Model
{
    use HasFactory;

    protected $table = 'news_items';

    protected $fillable = [
        'news_id',
        'title_en',
        'title_my',
        'title_ja',
        'description_en',
        'description_my',
        'description_ja',
        'creator_en',
        'creator_my',
        'creator_ja',
        'image',
        'created_by',
    ];

    public function news() 
    {
        return $this->belongsTo(News::class);
    }

    public function category() 
    {
        return $this->belongsToMany(Category::class, 'category_news_item','news_item_id','category_id');
    }
}
