<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make($request->all,([
            'firstname'=>'required|max:191',
            'lastname'=>'required|max:191',
            'email'=>'required|email|max:191|unique:users,column,except,id',
            'password'=>'required|min:8',
        ]);
        

    }
}
