<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AccountController extends Controller
{
    public function add(Request $request)
    {
        return view('accounts/create');
    }

    public function create(Request $request)
    {
        $param = [
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
        ];

        DB::insert('insert into accounts (username, email, password) values
                    (:username, :email, :password)', $param);
        return redirect('create');
    }

    public function show(Request $request)
    {
        $items = DB::select('select * from accounts');
        return view('accounts/show',['items' => $items]);
    }

    
}
