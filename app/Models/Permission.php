<?php

namespace App\Models;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;


class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'created_by'
    ];

    public function role() 
    {
        return $this->belongsToMany(Role::class, 'permissions_roles','permission_id','role_id');
    }
    
    public function checkPermission($permission)
    {
        $data = auth()->user()->user_role()->first()->permission;
        $arrPermission = [];
        foreach($data as $value) 
        $arrPermission[] = $value->name;
        $collection = new Collection($arrPermission);
        if($collection->contains($permission)){
            return true;
        }
        return false;
    }
        
}





