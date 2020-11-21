@extends('layout.main')
@section('content')

<form action="{{ route('edit-post', ['id' => $post['id']]) }}" method="post">
    @csrf

    <div class="form-group">
        <label>Title</label><br />
        <input type="text" name="title" value="{{$post['title']}}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Name</label><br />
        <input type="text" name="name" value="{{$post['name']}}" class="form-control" />
    </div>
    <div class="form-group">
        <label>Content</label><br />
        <textarea name="content" class="form-control" rows="10">{{$post['content']}}</textarea>
    </div>

    <button class="btn btn-success">
        Update post
    </button>
</form>

@endsection
