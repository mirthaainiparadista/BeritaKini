@extends('index')
@section('content')
<h1 class="text-center mb-3">List of Posts in {{ $category->category_name }}</h1>
    
    @if ($posts->count())
        <div class="row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-4">
                    <div class="card" style="height: 500px;">
                        <img src="{{ asset($post->image) }}" class="card-img-top" alt="{{ $post->title }}" style="height: 275px">
                        <div class="card-body" >
                            <h5 class="card-title">{{ $post->title }}</h5>
                            <p class="card-text">{{ $post->excerpt }}</p>
                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary" style="position: absolute; bottom: 10px; left: 10px;"> Lebih lanjut</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @else
        <p class="text-center fs-4">TIDAK ADA POSTINGAN</p>
    @endif
    <br>
    <a href="/categories">Back To Categories</a>
@endsection