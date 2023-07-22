@extends('index')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card mb-3">
                <img src="{{ asset('storage/'.$post->image) }}" class="card-img-top" alt="{{ $post->title }}">
                <div class="card-body">
                    <h6 class="fw-normal text-muted" style="text-align: center"><small> Published at {{ date('d M Y', strtotime($post->published_at)) }} </small></h6>
                    <br>
                    <h5 class="card-title" style="text-align: center">{{ $post->title }}</h5>
                    <h6 class="fw-normal" style="text-align: center"><small> by {{ $post->user->name }} in {{ $post->category->category_name }} </small></h6>
                    <br>
                    <p class="card-text">{{ $post->body }}</p>
                    <br>
                    <a href="/posts">Back To Posts</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection