<?php

namespace App\Models;
use App\Models\Permission;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'permission',
        'created_by'
    ];

    public function permission() 
    {
        return $this->belongsToMany(Permission::class, 'permissions_roles','role_id','permission_id');
    }
}
