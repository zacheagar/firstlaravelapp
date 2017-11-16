
<h2>

<a href="/posts/{{ $post->id }}">
{{$post->title}}
</a>

</h2>
<h3> {{ $post->created_at->toFormattedDateString() }} </h3>
<h4> {{ $post->body }} </h4>
