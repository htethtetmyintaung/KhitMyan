<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maincontents;
use App\Models\Mision;
use App\Models\Vision;
use App\Models\Client;

class Service extends Model
{
    use HasFactory;

    protected $table = 'service';

    protected $fillable = [
        'main_content_id',
        'title_en',
        'title_my',
        'title_ja',
        'category_en',
        'category_my',
        'category_ja',
        'description_en',
        'description_my',
        'description_ja',
        'created_by'
    ];

    public function homecontents() 
    {
        return $this->belongsTo(Maincontents::class);
    }

    public function mission() 
    {
        return $this->hasMany(Mission::class,'service_id','id');
    }

    public function vision() 
    {
        return $this->hasMany(Vision::class,'service_id','id');
    }

    public function client() 
    {
        return $this->hasMany(Client::class,'service_id','id');
    }
}
