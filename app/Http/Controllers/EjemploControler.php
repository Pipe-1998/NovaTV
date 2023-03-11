<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EjemploControler extends Controller
{
    public function index({
        $user=user::all();
    })
}
