@extends('layouts.app')

@section('content')
<h1>Edit Post</h1>

<form method="POST" action="{{ route('posts.update', ['id' => $post['id']]) }}">
    @csrf
    @method('PUT')

    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ $post['title'] }}">

    <label for="posted_by">Posted By:</label>
    <input type="text" name="posted_by" id="posted_by" value="{{ $post['posted_by'] }}">

    <button type="submit">Update</button>
</form>
@endsection