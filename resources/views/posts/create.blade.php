@extends('layouts.app')

@section('content')
<h1>Create Post</h1>

<form method="POST" action="{{ route('posts.store') }}">
    @csrf

    <label for="title">Title:</label>
    <input type="text" name="title" id="title">

    <label for="posted_by">Posted By:</label>
    <input type="text" name="posted_by" id="posted_by">

    <button type="submit">Create</button>
</form>
@endsection