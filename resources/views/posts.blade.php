@extends('layouts.app')

@section('content')
        <div class="container" style="position: relative;">
            <div class="posts-title-container">
                <h1 class="posts-title">{{ $title }}</h1>
            </div>
                
            <div class="row pt-5">
                @foreach ($posts as $post)
                    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 post-container">
                        <div class="mb-5">
                            @if ($post->image)
                                <img src="/storage/images/{{ $post->image }}" class="img-fluid mb-2" alt="">
                            @endif
                            <a href="{{ route('post', $post) }}">{{ $post->title }}</></a>
                            <div class="post-body">
                                <?php 
                                    if (strlen($post->body) > 900) {
                                        $p = strpos($post->body, ' ', 900); 
                                        echo substr($post->body, 0, $p ) . '....';
                                    } else {
                                        echo $post->body; 
                                    }
                                ?>
                            </div>
                            <div class="post-editor">
                                {{ $post->user->fullname }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
@endsection