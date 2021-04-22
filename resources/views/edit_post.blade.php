@extends('layouts.admin')

@section('content')
        <div class="container-sm">
            <h2>Edit Post</h2>
            <form action="" method="POST">
                @csrf
                <div class="mb-3">
                    <input class="form-control" type="text" name="title" placeholder="Title here..." value="{{ $post->title }}">
                </div>
                <div class="mb-3">
                    <select class="form-control" name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="body" rows="10" cols="30">{{ $post->body }}
                    </textarea>
                </div>
                <div class="mb-3 row">
                    <div class="col-md-4">
                        @if ($post->image)
                            <img src="/storage/post_images/{{ $post->image }}" class="card-img-top" alt="">
                        @endif
                    </div>
                </div>
                <button class="btn btn-primary mb-3" type="submit">Submit</button>
            </form>
        </div>
@endsection