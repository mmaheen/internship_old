<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Admin;

class RegistrationAPIController extends Controller
{
    //
    public function registration(Request $req)
    {
        $req->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|min:2',
        ]);

        $a = new Admin();
        $a->name = $req->name;
        $a->email = $req->email;
        $a->password = md5($req->password);
        $a->save();
    }
}
