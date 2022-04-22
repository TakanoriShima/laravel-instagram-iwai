@extends('layouts.app')
@section('title', $user->name . 'さんのマイページ')
@section('content')
    <div class="text-center">
        <h1 class="text-primary">{{ $user->name }}さんのマイページ</h1>
    </div>
@endsection