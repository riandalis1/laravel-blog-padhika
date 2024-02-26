@extends('layouts.main')

@section('container')
    <div class="row justify-content-center my-5">
        <div class="col-lg-6 bg-dark p-5 rounded shadow">
            <main class="form-registration w-100 m-auto">
                <h1 class="h3 mb-3 fw-semibold text-center text-danger">Registration Form</h1>
                <form action="/register" method="POST" class="text-dark">
                    @csrf
                    <div class="form-floating">
                        <input value="{{ old('name') }}" type="text" required name="name"
                            class="form-control rounded-top 
                            @error('name') is-invalid @enderror"
                            id="name" autocomplete="off" placeholder="name">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input value="{{ old('username') }}" type="text" required name="username"
                            class="form-control @error('name') is-invalid @enderror" id="username" autocomplete="off"
                            placeholder="username">
                        <label for="username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input value="{{ old('email') }}" type="email" required name="email"
                            class="form-control @error('name') is-invalid @enderror" id="email" autocomplete="off"
                            placeholder="name@example.com">
                        <label for="email">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" required name="password"
                            class="form-control rounded-bottom @error('name') is-invalid @enderror" id="password"
                            autocomplete="off" placeholder="Password">
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="btn btn-danger w-100 py-2 mt-3" type="submit">Register</button>
                </form>
                <small class="d-block mt-3 text-secondary text-center text-center">Already registed?
                    <a href="/login" class="text-decoration-none text-danger">Login!</a>
                </small>
            </main>
        </div>
    </div>
@endsection
