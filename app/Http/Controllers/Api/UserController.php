<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function getUser() {

        return User::select('id','name','email')->get();

    }

    /*el nombre de los libros que saco prestados el usuario 5*/

    /*proximos libros que tiene por vencer el usuario 4*/

    /*cuantos libros de la categoria comedia tiene el usuario 1*/

    /*cuantos libros en estado pending tiene el usuario 8*/
}
