<?php

namespace App\Models;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'created_by'
    ];

    public function role() 
    {
        return $this->belongsToMany(Role::class, 'permissions_roles','permission_id','role_id');
    }
}


