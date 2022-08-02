@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-md-4">

      @if(session()->has('berhasil'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('berhasil') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
      @endif

      @if(session()->has('loginError'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('loginError') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
        </button>
      </div>
      @endif

        <main class="form-signin">
            <form action="/login" method="post">
              @csrf
                <img class="mb-4 rounded mx-auto d-block" src="img/{{ $image }}" alt="<?= $alt; ?>" width="120" height="120">
                <h1 class="h3 mb-3 fw-normal">Silahkan masuk</h1>
                
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
                <label for="email">Email</label>
                @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control mb-4" id="password" placeholder="Password" required>
                <label for="password">Password</label>
              </div>
          
              <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            </form>
            <small class="d-block text-center mt-3">Belum punya akun? <a href="/register">Daftar sekarang!</a></small>
            <p class="mt-3 mb-3 text-muted text-center">&copy; 2019–2021</p>
        </main>
    </div>
</div>
@endsection