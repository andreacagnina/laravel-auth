@extends('layouts.app')

@section('content')
    <div class="container my-3">
        <div class="row">
            <a href="{{ route('admin.posts.create') }}" class="btn btn-primary">Add a New Post</a>
        </div>
        <div class="row">

            <div class="col-12">
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>TITLE</th>
                            <th>SLUG</th>
                            <th>STRUMENTI</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->slug }}</td>
                                <td>
                                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}" class="btn btn-primary">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
