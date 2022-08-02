@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-4">
        <main class="form-registration">
            <form action="/register" method="post">
              @csrf
              <img class="mb-4 rounded mx-auto d-block" src="img/{{ $image }}" alt="<?= $alt; ?>" width="120" height="120">
                <h1 class="h3 mb-3 fw-normal">Silahkan mendaftar</h1>
                
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Nama</label>
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control mb-4 rounded-bottom @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
                @enderror
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
            </form>
            <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Masuk disini!</a></small>
            <p class="mt-3 mb-3 text-muted text-center">&copy; 2019–2021</p>
        </main>
    </div>
</div>
@endsection