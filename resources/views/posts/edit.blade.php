@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('posts.update', $post) }}">@csrf @method('PUT')
<div class="mb-3"><label>Title</label><input type="text" name="title" class="form-control" value="{{ $post->title }}" required></div>
<div class="mb-3"><label>Content</label><textarea name="content" class="form-control">{{ $post->content }}</textarea></div>
<button type="submit" class="btn btn-success">Save</button></form>@endsection
