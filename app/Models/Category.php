<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\NewsItem;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name_en',
        'name_my',
        'name_ja',
        'created_by',
    ];

    public function category_news()
    {
        return $this->belongsToMany(NewsItem::class, 'category_news_item','category_id','news_item_id');
    }
}
