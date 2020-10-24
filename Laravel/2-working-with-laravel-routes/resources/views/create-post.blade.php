@extends('layout.main')
@section('content')

    <form action="{{ route('create-post') }}" method="post">
        @csrf

        <label>Your name?</label><br />
        <input type="text" style="border: 1px solid black;" /><br />
        <button>Create post</button>
    </form>

@endsection
