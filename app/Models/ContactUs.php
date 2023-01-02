<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Maincontents;

class ContactUs extends Model
{
    use HasFactory;

    protected $tabe = 'contact_us';

    protected $fillable = [
        'main_content_id',
        'title_en',
        'title_my',
        'title_ja',
        'address_en',
        'address_my',
        'address_ja',
        'phone',
        'email',
        'map',
        'created_by'
    ];

    public function homecontents() 
    {
        return $this->belongsTo(Maincontents::class);
    }
}
