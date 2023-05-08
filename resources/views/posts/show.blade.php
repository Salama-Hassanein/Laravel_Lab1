@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $post['title'] }}</h1>

    <p>ID: {{ $post['id'] }}</p>
    <p>Posted By: {{ $post['posted_by'] }}</p>
    <p>Created At: {{ $post['created_at'] }}</p>

    <a href="{{ route('home') }}" class="btn btn-primary">Go Back</a>
</div>
@endsection