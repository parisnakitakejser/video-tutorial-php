@extends('layout.main')
@section('content')

@if($display_content === true)
    <div>
        This content is allowed to be displayed
    </div>
@elseif($display_content === false)
    <div>
        This content is not allowed, but we show it ! :)
    </div>
@endif

<ul>
@foreach($employees AS $employee)
<li>{{ $employee['name'] }}</li>
@endforeach
</ul>

{{ "<script>alert('hello world');</script>" }}
{{--{!! "<script>alert('hello world');</script>"  !!}--}}
@endsection
