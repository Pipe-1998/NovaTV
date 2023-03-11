<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
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

    public function getAllcategories($id){
        return category::all();
}
        
    public function getUllcategories($id){
        return category::find(id);
        
    }

    public function getAllmovies(){
        return this->hasmany('app\movie');
        
    }
}
