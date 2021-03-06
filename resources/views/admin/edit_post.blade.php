@extends('layouts.admin')

@section('content')
    <div class="container-sm">

        <div class="row header-border mb-3">
            <div class="col-md-6">
                <h2>Επεξεργασία άρθρου</h2>
            </div>
        </div>

        <div class="row">
            @include('includes.message')
        </div>

        <div class="row">
            <div class="col-md-6 post-image">
                @if (isset($post->image))
                    <div> 
                        <img src="/storage/images/{{ $post->image }}" alt="">
                    </div>
                    <a href="{{ route('image.delete', $post) }}"><button class="btn btn-danger btn-sm mt-1 mb-3">Διαγραφή εικόνας</button></a>
                @endif

                <form action="" id="edit_post_form" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title">ID</label>
                        <input class="form-control" type="text" name="id" value="{{ $post->id }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="title">Τίτλος</label>
                        <input class="form-control" type="text" name="title" value="{{ $post->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="title">Υπότιτλος</label>
                        <input class="form-control" type="text" name="subtitle" value="{{ $post->subtitle }}">
                    </div>
                    <div class="mb-3">
                        <label for="category">Κατηγορία</label>
                        <select class="form-control" name="category">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ ($post->category_id == $category->id) ? ' selected' : '' }}>
                                    {{ $category->title}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="photo">Εικόνα</label>
                        <input class="form-control" type="file" name="photo">
                    </div>
                </form>
            </div>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="body">Κείμενο</label>
                    <textarea form="edit_post_form" class="form-control textarea1" name="body" rows="30" cols="30" required>{!! $post->body !!}</textarea>
                </div>
            
                <button form="edit_post_form" class="btn btn-primary mb-3" type="submit">Αποθήκευση</button>
            </div>
        </div>

    </div>
@endsection