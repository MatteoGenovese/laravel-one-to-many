@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">Author</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->user_id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a href="{{ route('admin.posts.show', $post->id) }}" class="btn btn-sm btn-success">
                                    View
                                </a>
                                <a href="{{ route('admin.posts.edit', $post->id) }}" class="btn btn-sm btn-success">
                                    Edit
                                </a>

                                <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" value="delete">
                                        destroy
                                    </button>
                                </form>

                            </td>
                        </tr>
                    @empty

                    @endforelse

                </tbody>
            </table>


        </div>
    </div>
</div>

@endsection
