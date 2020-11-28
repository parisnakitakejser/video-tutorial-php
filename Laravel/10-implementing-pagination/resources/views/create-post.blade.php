@extends('layout.main')
@section('content')

    <form action="{{ route('create-post') }}" method="post">
        @csrf

        <div class="form-group">
            <label>Title</label><br />
            <input type="text" name="title" class="form-control" />
        </div>
        <div class="form-group">
            <label>Name</label><br />
            <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
            <label>Content</label><br />
            <textarea name="content" class="form-control" rows="10"></textarea>
        </div>

        <button class="btn btn-success">
            Create post
        </button>
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
