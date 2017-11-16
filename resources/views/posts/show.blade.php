@extends('layouts.master')

@section('content')
 <h1>{{ $posts->title }}</h1>
 <h3> {{ $posts->created_at->toFormattedDateString() }} </h3>
 <h4> {{ $posts->body }} </h4>

@foreach ($posts->comments as $comment)
<h4>Comments:</h4>
<article>
  {{$comment->body}}
</article>
@endforeach

@endsection
