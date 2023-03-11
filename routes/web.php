<?php

use Illuminate\Facades\Route;
use App\controllers\EjemploController;
use App\Http\controllers\UserController;


Route::get('/',function(){
    return view('welcome ');
    
});
Route::get('/test',function(){
    $name='andres felipe';
    return view('test ')->with('name',$name);
    
});

Route::get('/test',function(){
    $day='saturday';
    return view('test ')->with('day',$day);
    
});
Route::resources([
    'users' => UserController::class

]);

Route::resources([
    'categories' => CategoryController::class
]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');