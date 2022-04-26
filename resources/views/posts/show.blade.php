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
        {!! Form::submit('削除', ['class' => 'btn btn-danger offset-sm-4 col-sm-4']) !!}
    </div>
    {!! Form::close() !!}
    @endif
    
    <div class="text-center mt-5">
        <h2 class="text-success">コメント一覧</h2>
    </div>
    @if(count($comments) !== 0)
    <table class="table table-bordered table-striped text-center mt-5">
        <tr>
            <th>ID</th>
            <th>投稿者</th>
            <th>コメント内容</th>
            <th>投稿日時</th>
        </tr>
        @foreach($comments as $comment)
        <tr>
            <td>{{ $comment->id }}</td>
            <td>{{ $comment->user->name }}</td>
            <td>{{ $comment->content }}</td>
            <td>{{ $comment->created_at }}</td>
        </tr>
        @endforeach
    </table>
    @else
    <div class="row mt-3 mb-5">
        <div class="offset-sm-3 col-sm-6 text-center text-danger">
            ※この投稿に関するコメントはまだありません。
        </div>
    </div>
    @endif
    <div class="row mt-5">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(['route' => ['comments.store', 'id' => $post->id ]]) !!}
                <div class="form-group">
                    {!! Form::label('content', 'コメント ') !!}
                    {!! Form::text('content', old('content'), ['class' => 'form-control']) !!}
                </div>
                {!! Form::submit('コメント投稿', ['class' => 'offset-sm-3 col-sm-6 btn btn-primary btn-block mt-5 mb-5']) !!}
            {!! Form::close() !!}
        </div>
    </div>
   
    
@endsection