@extends('layouts.app')
@section('title', '投稿ID:' . $post->id . 'の詳細')
@section('content')
    <div class="text-center mt-4">
        <h1 class="text-primary">投稿ID: {{ $post->id }} の詳細</h1>
    </div>
    <div class="row mt-4">
        <table class="table table-bordered table-striped text-center">
            <tr>
                <th>ID</th>
                <th>名前</th>
                <th>タイトル</th>
                <th>内容</th>
                <th>画像</th>
                <th>内容</th>
            </tr>
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->user->name }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->content }}</td>
                <td><img src="{{ asset('uploads') }}/{{ $post->image }}" alt="{{ $post->image }}"></td>
                <td>{{ $post->created_at }}</td>
            </tr>
        </table>
    </div>
    
    @if($post->user->id === Auth::id())
    <div class="row mt-4">
        {!! link_to_route('posts.edit', '編集' , ['id' => $post->id ],['class' => 'btn btn-success offset-sm-4 col-sm-4']) !!}
    </div>
    {!! Form::open(['route' => ['posts.destroy', 'id' => $post->id ], 'method' => 'DELETE']) !!}
    <div class="row mt-4">
        {!! Form::submit('削除', ['class' => 'btn btn-danger offset-sm-4 col-sm-4', 'onClick' => 'return deleteAlert();']) !!}
    </div>
    {!! Form::close() !!}
    @endif
@endsection