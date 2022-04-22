@extends('layouts.app')
@section('title', '新規会員登録')
@section('content')
    <div class="text-center mt-5">
        <h1 class="text-primary">新規会員登録</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-5">

            <form method="POST" action="/signup">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="name">1. 名前</label>
                    <input type="text"  name="name" class="form-control" id="name">
                </div>

                <div class="form-group">
                    <label for="email">2. メールアドレス</label>
                    <input type="email" name="email" class="form-control" id="email">
                </div>

                <div class="form-group">
                    <label for="password">3. パスワード</label>
                    <input type="password" name="password"  class="form-control" id="password">
                </div>

                <div class="form-group">
                    <label for="password_confirmation">4. パスワードの確認</label>
                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary btn-block mt-5">登録</button>
            </form>
        </div>
    </div>
@endsection