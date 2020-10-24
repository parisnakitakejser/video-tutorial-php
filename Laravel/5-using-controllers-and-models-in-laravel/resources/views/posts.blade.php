@extends('layout.main')
@section('content')
    Page: {{ $page }}

    <hr />

    <ul>
        @foreach($posts AS $post)
            <li>{{ $post['name'] }}</li>
        @endforeach
    </ul>
@endsection
