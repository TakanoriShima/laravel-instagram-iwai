<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToppagesController extends Controller
{
    // Top page表示
    public function index()
    {
        // viewの呼び出し
        return view('welcome');
    }
}
