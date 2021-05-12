@extends('layouts.admin')

@section('content')
    <div class="container-sm">

        <div class="row header-border mb-3">
            <div class="col-md-4">
                <h2>Άρθρα</h2>
            </div>

            <div class="col-md-8">
                <form action="">
                    <label class="pt-2" for="category"><h4>Κατηγορία:</h4></label>
                    <select id="" name="category" onchange="top.location.href = this.options[this.selectedIndex].value">
                        <option value="{{ route('posts.all') }}">Όλες</option>
                        @if ($selectedCat !== '') 
                            <option value="" selected>
                                {{ $selectedCat->title }}
                            </option>
                        @endif
                        @foreach ($categories as $category)
                            @if ($selectedCat == '')
                                <option value="{{ route('posts.category', $category->url) }}">
                                    {{ $category->title }}
                                </option>
                            @endif
                            @if ($selectedCat !== '' && $selectedCat->url !== $category->url)
                                <option value="{{ route('posts.category', $category->url) }}">
                                    {{ $category->title }}
                                </option>
                            @endif
                        @endforeach
                    </select>
                </form>  
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                @include('includes.message')
                <table class="table table-borderless">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Εικόνα</th>
                        <th scope="col">Τίτλος</th>
                        <th scope="col">Υπότιτλος</th>
                        <th scope="col">Κατηγορία</th>
                        <th scope="col">Κείμενο</th>
                        <th scope="col">Συντάκτης</th>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td scope="row">{{ $post->id }}</td>
                                <td>
                                    @if ($post->image)
                                        <img style="height: 150px" src="/storage/thumbnails/{{ $post->image }}" alt="">
                                    @endif
                                </td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->subtitle }}</td>
                                <td>{{ $post->category->title }}</td>
                                <td><?php echo substr($post->body, 0, 200) . '....'; ?></td>
                                <td>{{ $post->user->fullname }}</td>
                                <td>
                                    @if (Auth::user()->email == $post->user->email || Auth::user()->email == env('ADMIN_EMAIL'))
                                        <a href="{{ route('post.edit', $post) }}">
                                            <button class="btn btn-primary btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                                                </svg>
                                            </button>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    @if (Auth::user()->email == $post->user->email || Auth::user()->email == env('ADMIN_EMAIL'))
                                        <a href="{{ route('post.delete', $post) }}">
                                            <button class="btn btn-danger btn-sm">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                                    <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                                </svg>
                                            </button>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

    </div>
@endsection


