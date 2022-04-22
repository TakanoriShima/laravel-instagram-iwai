@extends('layouts.app')
@section('title', 'ログイン')
@section('content')
    <div class="text-center mt-5">
        <h1 class="text-primary">ログイン</h1>
    </div>
    
    <div class="row mt-5">
        <div class="col-sm-6 offset-sm-3">
            <form action="/login" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <label for="email">Eメール: </label>
                    <input type="email" name="email" value="form-control" id="email">
                </div>
                
                <div class="form-group">
                    <label for="password">パスワード: </label>
                    <input type="password" name="password" value="form-control" id="password">
                </div>
                
                <button type="submit" class="btn btn-primary btn-block mt-5">ログイン</button>
            </form>
        </div>
    </div>

@endsection