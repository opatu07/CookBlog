<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateAccountRequest;
use Illuminate\Http\Request;

class CreateAccountController extends Controller
{
    public function index(Request $request)
    {
        return view('CreateAccount', ['msg' => 'フォームを入力']);
    }

    public function post(CreateAccountRequest $request)
    {
        return view('CreateAccount', ['msg' => '入力が完了しました。']);
    }
}
