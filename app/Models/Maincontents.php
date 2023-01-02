<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Homecontents;
use App\Models\AboutUs;
use App\Models\ContactUs;

class Maincontents extends Model
{
    use HasFactory;

    protected $table = 'main_contents';

    protected $fillable = [
        'title_en',
        'title_ja',
        'title_my',
        'created_by'
    ];

    public function maincontents() 
    {
        return $this->hasMany(Homecontents::class,'main_content_id','id');
    }

    public function aboutus() 
    {
        return $this->hasMany(AboutUs::class,'main_content_id','id');
    }

    public function contactus() 
    {
        return $this->hasMany(ContactUs::class,'main_content_id','id');
    }

    
}
