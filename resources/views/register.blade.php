@extends('index')

@section('content')
<h2 class="text-center mb-3">Registration Form</h2>
<div class="row justify-content-center">
<div class="col-lg-5">
    <main class="form-registration">

        <form action="/register" method="post">    
            @csrf
            <div class="form-floating mb-2">
              <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="name"
              required autofocus value="{{ old('name') }}">
              <label for="name">Name</label>
              @error('name')
              <div class="invalid-feedback">
                    {{ $message }}
              </div>
              @enderror
            </div>
          <div class="form-floating mb-2">
            <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email"
            required autofocus value="{{ old('email') }}">
            <label for="email">Email</label>
            @error('email')
            <div class="invalid-feedback">
                  {{ $message }}
            </div>
            @enderror
          </div>
          <div class="form-floating mb-3">
            <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="password"
            required autofocus value="{{ old('password') }}">
            <label for="password">Password</label>
            @error('password')
            <div class="invalid-feedback">
                  {{ $message }}
            </div>
            @enderror
          </div>
          <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">Already Have An Account? <a href="/login">Login</a></small>
      </main>
</div>
</div>

  @endsection