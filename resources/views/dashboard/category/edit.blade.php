@extends('index')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Category</h1>
</div>
<div class="col-lg-8">
    <form method="POST" action="/dashboard/categories/{{ $category->id }}" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="category_image" class="form-label">Gambar (max 5mb)</label>
            <img class="img-preview img-fluid mb-3 col-sm-5">
            <input class="form-control @error('category_image') is-invalid @enderror" type="file" id="category_image" name="category_image" value="{{ old('category_image', $category->category_image) }}"
            onchange="previewGambar()">
        </div>
        <div class="mb-3">
          <label for="category_name" class="form-label">Title</label>
          <input type="text" class="form-control @error('category_name') is-invalid @enderror" id="category_name" name='category_name'
          required autofocus value="{{ old('category_name', $category->category_name ) }}">
        </div>
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