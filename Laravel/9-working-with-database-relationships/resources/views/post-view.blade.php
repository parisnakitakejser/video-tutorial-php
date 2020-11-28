@extends('layout.main')
@section('content')

<div>{{$post['content']}}</div>
<small>
    Created by {{$post['name']}} at {{$post['created_at']}} -
    <a href="{{route('edit-post', ['id' => $post['id']])}}">[edit]</a> -
    <a href="{{route('delete-post', ['id' => $post['id']])}}">[delete]</a>
</small>

<hr />

@foreach($post->comments AS $comment)
<div class="media mb-3">
    <img src="http://placekitten.com/75/75" class="mr-3">
    <div class="media-body">
        <h5 class="mt-0">{{$comment['name']}}</h5>
        {{$comment['comment']}}
    </div>
</div>
@endforeach

@endsection
