@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row p-2">
            <div class="col-md-12 d-flex justify-content-end">
                <a href="{{ route('blog_create') }}" class="btn btn-outline-primary">Create Blog</a>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Blogs</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->category->title }}</td>
                                        <td>
                                            <img src="{{ asset($item->thumbnail) }}" alt="" srcset="" width="200">
                                        </td>
                                        <td>{{ $item->author }}</td>
                                        <td>
                                            <a href="{{ route('blog_edit', $item->id) }}" class="btn btn-outline-secondary btn-sm">Edit</a>
                                            <a href="{{ route('blog_delete', $item->id) }}" class="btn btn-outline-danger btn-sm">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Category</th>
                                    <th scope="col">Thumbnail</th>
                                    <th scope="col">Author</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
