@extends('layouts.app')
@section('title', '新規会員登録')
@section('content')
    <div class="text-center mt-5">
        <h1 class="text-primary">新規会員登録</h1>
    </div>

    <div class="row">
        <div class="col-sm-6 offset-sm-3 mt-5">

            {!! Form::open(['route' => 'signup.post']) !!}
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    {!! Form::label('name', '1. 名前') !!}
                    {!! Form::text('name', old('name'),['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('email', '2. メールアドレス') !!}
                    {!! Form::email('email', old('email'),['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', '3. パスワード') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password_confirmation', '4. パスワードの確認') !!}
                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('登録', ['class' => 'offset-sm-3 col-sm-6 btn btn-primary btn-block mt-5']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection