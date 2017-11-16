@extends('layouts.master')
<h1>All Posts </h1>
@foreach ($posts as $post)
  @include('posts.article')

  @endforeach
