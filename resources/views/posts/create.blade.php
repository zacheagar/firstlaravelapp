@extends('layouts.master')


@section('content')

<h1>Publish A Post</h1>
<form method="POST" action="/posts">
  {{ csrf_field() }}
<div class="form-group">
  Title:<br>
<input type="text" class="form-control" id="title" name="title"required>
</div>
<div class="form-group">
  Body: <br>
<textarea id="body"name="body"class="form-control"required></textarea>

</div>
<button type="submit" class="form-control" id="submit" name="submit">Publish</button>
</form>
@endsection
