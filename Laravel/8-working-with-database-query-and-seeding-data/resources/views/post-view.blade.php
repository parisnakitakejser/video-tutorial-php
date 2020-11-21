@extends('layout.main')
@section('content')

<div>{{$post['content']}}</div>
<small>
    Created by {{$post['name']}} at {{$post['created_at']}} -
    <a href="{{route('edit-post', ['id' => $post['id']])}}">[edit]</a> -
    <a href="{{route('delete-post', ['id' => $post['id']])}}">[delete]</a>
</small>
@endsection
