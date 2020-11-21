@extends('layout.main')
@section('content')
    Page: {{ $page }}

    <hr />

    @foreach($posts AS $post)
        <strong>#{{$post['id']}} - {{ $post['name'] }}</strong>
        {{$post['content']}}
        <hr />
    @endforeach

@endsection
