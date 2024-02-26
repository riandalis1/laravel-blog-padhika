@extends('layouts.main')

@section('container')
    <div class="row justify-content-center my-5">
        <div class="col-lg-5 bg-dark p-5 rounded shadow">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('loginError') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <main class="form-signin w-100 m-auto">
                <h1 class="h3 mb-3 fw-semibold text-center text-danger">Please Login</h1>

                <form action="/login" method="post" class="text-dark">
                    @csrf
                    <div class="form-floating">
                        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                            id="email" autocomplete="off" placeholder="name@example.com" autofocus autocomplete="off"
                            required value="{{ old('email') }}">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input name="password" type="password" class="form-control" id="password" autocomplete="off"
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="btn btn-danger w-100 py-2" type="submit">Login</button>
                </form>

                <small class="d-block mt-3 text-secondary text-center text-center">Not registered?
                    <a href="/register" class="text-decoration-none text-danger">Register Now!</a>
                </small>
            </main>
        </div>
    </div>
@endsection
