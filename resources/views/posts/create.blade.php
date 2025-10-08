@extends('layouts.app')
@section('content')
<form method="POST" action="{{ route('posts.store') }}">@csrf
<div class="mb-3"><label>Title</label><input type="text" name="title" class="form-control" required></div>
<div class="mb-3"><label>Content</label><textarea name="content" class="form-control"></textarea></div>
<button type="submit" class="btn btn-success">Save</button></form>@endsection
