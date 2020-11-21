@extends('layout.main')
@section('content')

    <form action="{{ route('create-post') }}" method="post">
        @csrf

        <label>Title</label><br />
        <input type="text" name="title" style="border: 1px solid black;" /><br />
        <br />
        <label>Name</label><br />
        <input type="text" name="name" style="border: 1px solid black;" /><br />
        <br />
        <label>Content</label><br />
        <input type="text" name="content" style="border: 1px solid black;" /><br />
        <br />

        <button>Create post</button>
    </form>

    @if(isset($errors) && $errors->all())
        <div style="background: pink;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if(isset($title))
    <hr />
    Title: {{$title}}<br />
    Name: {{$name ?? 'Name not defined!'}}<br />
    Content: {{$content}}
    @endif


@endsection
