@extends('layout.main')
@section('content')
    Page: {{ $page }}

    <hr />

    @foreach($posts AS $post)
    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">
            <a href="{{route('view-post', ['id' => $post['id']])}}">#{{$post['id']}} - {{ $post['title'] }}</a></h5>
            <p class="card-text">{{$post['content']}}</p>

            @foreach($post->categorys AS $category)
                <span class="badge badge-dark">{{$category['name']}}</span>
            @endforeach
        </div>
    </div>

    @endforeach

@endsection
