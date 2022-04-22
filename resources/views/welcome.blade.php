@extends('layouts.app')
@section('title', '会員制写真投稿サイト')
@section('content')
    <div class="row">
        {!! link_to_route('signup.get', '新規会員登録', [], ['class' => 'offset-sm-4 col-sm-4 btn btn-primary mt-5']) !!}
    </div>
    <div class="row">
        {!! link_to_route('login', 'ログイン', [], ['class' => 'offset-sm-4 col-sm-4 btn btn-danger mt-5']) !!}
    </div>
@endsection


<!-- link_to_route -->
<!--第1引数：ルーティング名 [web.phpのnameで指定した文字列]-->
<!--第2引数：リンクにしたい文字列-->
<!--第3引数：渡したデータを配列形式で指定（今回は不要なので空っぽの配列 []）-->
<!--第4引数：HTML タグの属性を配列形式で指定（今回は Bootstrap のボタンとして表示するためのクラスを指定）-->