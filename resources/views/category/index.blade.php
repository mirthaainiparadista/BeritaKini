@extends('index')
@section('content')
<h1 class="text-center mb-3">Category</h1>
@if ($categories->count())
<div class="categories ms-1 mb-1">
    <div class="row">
        @foreach ($categories as $category)
        <div class="col-md-3">
          <a href="/categories/{{ $category->category_slug }}">
            <div class="card" style="width: 16rem; height=15rem;">
              <img src="{{  asset('storage/'. $category->category_image)  }}" class="card-img-top" alt="{{ $category->namaKategori }}" style="height:10rem;">
              <div class="card-body">
                <h5 class="card-title text-center">{{ $category->category_name }}</h5>
              </div>
            </div>
          </a>
        </div>
        @endforeach
  </div>
</div>
  @else
      <p class="text-center fs-4">TIDAK ADA POSTINGAN</p>
  @endif

{{-- <div class="container">
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
                            <img src="{{ asset('storage/'. $post->image) }}" class=" rounded-start" alt="{{ $post->title }}" height="175px" width="295">
                        </div>
                        <div class="col-md-12">
                            <div class="card-body" style="height: 225px;">
                                <h5 class="card-title">{{ $post->title }}</h5>
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
</div> --}}
@endsection