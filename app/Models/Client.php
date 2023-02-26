<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Service;

class Client extends Model
{
    use HasFactory;

    protected $table = 'client';

    protected $fillable = [
        'service_id',
        'name_en',
        'name_my',
        'name_ja',
        'description_en',
        'description_my',
        'description_ja',
        'link',
        'image',
        'created_by'
    ];

    public function service_client() 
    {
        return $this->belongsTo(Service::class);
    }
}
