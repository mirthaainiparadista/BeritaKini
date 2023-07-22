@extends('index')
@section('content')


<h1 class="text-center mb-3">List of Posts</h1>
{{-- <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search"> --}}
<div class="row justify-content-center">
    <div class="col-md-6">
        <form action="/posts">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search..." name="search" value="{{ request('search') }}">
                <button class="btn btn-danger" type="submit" style="background-color: #BF2C45">Search</button>
            </div>
        </form>
    </div>
</div>
@if ($posts->count())
        <div class="card mb-3" align="middle">
            @if ($posts[0]->image)
                <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category->category_name }}" width="100%" height="500px">
            @else
                <img src="{{ asset('path/to/default/image.jpg') }}" class="card-img-top" alt="{{ $posts[0]->category->category_name }}">
            @endif
            <div class="card-body">
                {{-- <img src="{{ asset('storage/'. $posts[0]->gambar) }}" style="width: 20%" alt="nastar premium" align="middle"/> --}}
                <h5 class="card-title">{{ $posts[0]->title }}</h5>
                <h6> <small class="text-muted">by {{ $posts[0]->user->name }} in {{ $posts[0]->category->category_name }}</small> </h6>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a href="/posts/{{ $posts[0]->slug }}" class="btn btn-primary"> Lebih lanjut</a>
            </div>
        </div>
  @else
      <p class="text-center fs-4">TIDAK ADA POSTINGAN</p>
  @endif

<div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $index => $post)
            <div class="col-md-3">
                <div class="card mb-3" style="width: 100%;"> <!-- Set lebar card menjadi 100% agar gambar memenuhi lebar card -->
                    <div class="position-absolute px-1 py-1" style="background-color: rgba(0,0,0,0.7)">
                        <a href="/categories/{{ $post->category->category_slug }}" class="text-white text-decoration-none">
                            {{ $post->category->category_name }}
                        </a>
                    </div>
                    <div class="row g-0">
                        <div class="col-md-12 text-center">
                            <!-- Menggunakan class "img-fluid" untuk membuat gambar memenuhi lebar card -->
                            <img src="{{ asset('storage/'. $post->image) }}" class=" rounded-start" alt="{{ $post->title }}" height="175px" width="100%">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body" style="height: 275px;">
                                <h5 class="card-title text-wrap">{{ $post->title }}</h5>
                                <h6><small class="text-muted">by {{ $post->user->name }}</small></h6>
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($post->excerpt, 100, '...') }}</p>
                                <a href="/posts/{{ $post->slug }}" class="btn btn-primary" style="position: absolute; bottom: 10px; left: 10px;"> Lebih lanjut</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection
