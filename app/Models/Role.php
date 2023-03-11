<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'name',
        'descripcion',
    ];
    public function getA11Users(){
        return User::all();
}
        
    public function getUser($id){
        return User::find($id);

    }
    public function users(){
        return this->hasmany('app\user');
        
    }
    public function role(){
        return this->belongs('app\role');
        
    }
}
