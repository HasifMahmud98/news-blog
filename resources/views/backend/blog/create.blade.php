@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Blog Create</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('blog_store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="title" name="title"
                                    placeholder="Enter Blog Title" value="{{ old('title') }}">
                                @if ($errors->first('title'))
                                    <div class="text-danger">{{ $errors->first('title') }}</div>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="category">Select Category <span class="text-danger">*</span></label>
                                <select class="form-control" id="category" name="category">
                                    <option value="">Select category...</option>

                                    @foreach ($data as $item)
                                        <option value="{{ $item->id }}"
                                            {{ old('category') == $item->id ? 'selected' : '' }}>{{ $item->title }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->first('category'))
                                    <div class="text-danger">{{ $errors->first('category') }}</div>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="thumbnail">Thumbnail <span class="text-danger">*</span></label> <br>
                                <input type="file" class="form-control-file" id="thumbnail" name="thumbnail">

                                @if ($errors->first('thumbnail'))
                                    <div class="text-danger">{{ $errors->first('thumbnail') }}</div>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">Description <span class="text-danger">*</span></label>
                                <textarea class="form-control" id="description" name="description"
                                    rows="3">{{ old('description') }}</textarea>

                                @if ($errors->first('description'))
                                    <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>

                            <div class="form-group mb-3">
                                <label for="author">Author <span class="text-danger">*</span></label>
                                <input type="text" class="form-control" id="author" name="author"
                                    placeholder="Enter Blog author" value="{{ old('author') }}">
                                @if ($errors->first('author'))
                                    <div class="text-danger">{{ $errors->first('author') }}</div>
                                @endif
                            </div>

                            <button type="submit" class="btn btn-outline-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
