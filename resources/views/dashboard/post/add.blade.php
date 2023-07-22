@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/createpost" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="image" class="form-label">Gambar (max 5mb)</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image"
            onchange="previewGambar()">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Category</label>
              <select class="form-select" name="category_id">
                  @foreach ($categories as $category)
                    @if (old('category_id') == ($category->id))
                      <option value={{ $category->id }} selected>{{ $category->category_name }}</option>
                    @else
                      <option value={{ $category->id }} >{{ $category->category_name }}</option>
                    @endif
                  @endforeach
              </select>
        </div>
        <input type="hidden" name="user_id" value={{ auth()->user()->id }} />
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name='title'
          required autofocus value="{{ old('title') }}">
        </div>
        <div class="mb-3">
          <label for="excerpt" class="form-label">Excerpt</label>
          <input type="text" class="form-control @error('excerpt') is-invalid @enderror" id="excerpt" name='excerpt'
          required autofocus value="{{ old('excerpt') }}">
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          <textarea rows="8" class="form-control @error('body') is-invalid @enderror" id="body" name='body' required autofocus>{{ old('body') }}</textarea>
      </div>
      <input type="hidden" class="form-control" id="published_at" name="published_at" value="{{ now()->format('Y-m-d H:i:s') }}">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="/dashboard/posts">
          <button type="button" class="btn btn-danger">Batal</button>
        </a>
      </form>
</div>
<script>

  document.addEventListener('trix-file-accept',function(e){
    e.preventDefault();
  })
  function previewGambar() {
    const gambar = document.querySelector('#image');
    const gambarPreview = document.querySelector('.img-preview');

    gambarPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFRevent){
      gambarPreview.src = oFRevent.target.result;
    }
  }
</script>
@endsection