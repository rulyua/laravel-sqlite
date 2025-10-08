@extends('layouts.app')
@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create Post</a>
<table class="table table-bordered">
<tr><th>ID</th><th>Title</th><th>Content</th><th>Actions</th></tr>
@foreach($posts as $post)
<tr>
<td>{{ $post->id }}</td><td>{{ $post->title }}</td><td>{{ $post->content }}</td>
<td>
<a href="{{ route('posts.edit', $post) }}" class="btn btn-warning btn-sm">Edit</a>
<form action="{{ route('posts.destroy', $post) }}" method="POST" style="display:inline;">
@csrf @method('DELETE')
<button class="btn btn-danger btn-sm">Delete</button>
</form>
</td></tr>
@endforeach
</table>
@endsection
