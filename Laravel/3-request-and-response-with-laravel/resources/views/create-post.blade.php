@extends('layout.main')
@section('content')

    <form action="{{ route('create-post') }}" method="post">
        @csrf

        <label>Title</label><br />
        <input type="text" name="title" style="border: 1px solid black;" /><br />
        <br />
        <label>Content</label><br />
        <input type="text" name="content" style="border: 1px solid black;" /><br />
        <br />

        <button>Create post</button>
    </form>

    @if(isset($title))
    <hr />
    Title: {{$title}}<br />
    Content: {{$content}}
    @endif


@endsection
