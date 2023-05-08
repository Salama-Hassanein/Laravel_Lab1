@extends('layouts.app')

@section('content')
<h1>All Posts</h1>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Posted By</th>
            <th>Created At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
        <tr>
            <td>{{ $post['id'] }}</td>
            <td>{{ $post['title'] }}</td>
            <td>{{ $post['posted_by'] }}</td>
            <td>{{ $post['created_at'] }}</td>
            <td>
                <a href="{{ route('posts.show', ['id' => $post['id']]) }}">View</a>
                <a href="{{ route('posts.edit', ['id' => $post['id']]) }}">Edit</a>
                <form method="POST" action="{{ route('posts.destroy', ['id' => $post['id']]) }}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<a href="{{ route('posts.create') }}">Create Post</a>
@endsection