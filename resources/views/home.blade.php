@extends('layouts.main')

@section('container')
    <div class="row py-5">
        <div class="col-sm-6 sm p-4 d-flex justify-center align-items-center">
            <img src="/img/profile.png" alt="img" width="250" class="mx-auto">
        </div>
        <div class="col-md-6 sm p-4 d-flex align-items-center lead fs-5">
            <div>
                <p class="d-block w-full">Hei Selamat Datang di blog saya, saya <span class="fw-semibold">Riandalis Purnama
                        Deva!</span>
                    Blog
                    ini
                    berisi
                    <span class="fw-semibold">informasi</span> tentang <span class="fw-semibold">Game, Hobi, Curhat</span>
                    atau
                    yang lainnya!
                </p>
                <button type="button" class="btn btn-outline-dark px-4">Blog Saya!</button>
            </div>

        </div>

    </div>
@endsection
