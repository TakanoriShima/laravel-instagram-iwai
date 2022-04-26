<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Userモデルを使って、全ユーザーデータを取得
        $users = User::all();
        // viewの呼び出し
        return view('users.index', compact('users'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // 注目しているユーザーのプロフィールデータを取得
        $profile = $user->profile()->get()->first();
        // 注目しているユーザーの投稿一覧を取得
        $posts = $user->posts()->get();
        
        // viewの呼び出し
        return view('users.show', compact('user', 'profile', 'posts'));
    }
}
