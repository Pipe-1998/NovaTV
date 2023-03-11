<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'descripcion',
        'qualitu',
        'image',
        'release_year',
        'languaje',
        'video_link',
        'dowload_link',
        'user_id',
        'category_id',
    ];
    public function getAllmovies($id){
        return movies::all();
}
        
    public function getAllmovie($id){
        return movie::find($id);
        
    }
    public function user(){
        return $this->belongsTo('app\User');
        
    }
    public function getAllm($id){
        return movie::find($id);
        
    }
}
