<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Vision extends Model
{
    use HasFactory;

    protected $table = 'vision';

    protected $fillable = [
        'service_id',
        'title_en',
        'title_my',
        'title_ja',
        'subtitle_en',
        'subtitle_my',
        'subtitle_ja',
        'description_en',
        'description_my',
        'description_ja',
        'cover_image',
        'slide_image',
        'created_by'
    ];

    public function service_vision() 
    {
        return $this->belongsTo(Service::class);
    }

    public function setFilenamesAttribute($value)
    {
        $this->attributes['slide_image'] = json_encode($value);
    }
}
