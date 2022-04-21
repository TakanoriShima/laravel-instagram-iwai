@extends('layouts.app')
@section('title', '会員制写真投稿サイト')
@section('content')
    <div class="row">
        <p>{{ Auth::user()->name }}さんようこそ!</p>
        <a href="/logout" class="offset-sm-1 col-sm-4 btn btn-danger">ログアウト</a>
    </div>
@endsection