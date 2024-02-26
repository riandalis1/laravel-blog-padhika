@extends('layouts.main')

@section('container')
    <div class="my-5">
        <form action="">
            <div class="row g-3 align-items-center">
                <div class="col-md-2">
                    <label for="inputPassword6" class="col-form-label">Password</label>
                </div>
                <div class="col-md-4 pb-2" style="margin-left:-40px">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-md-2">
                    <label for="inputPassword6" class="col-form-label">Kode Ruangan</label>
                </div>
                <div class="col-md-4 pb-2" style="margin-left:-40px">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
            <div class="row g-3 align-items-center">
                <div class="col-md-2">
                    <label for="inputPassword6" class="col-form-label">Nama Pasien</label>
                </div>
                <div class="col-md-4 pb-2" style="margin-left:-40px">
                    <input type="password" id="inputPassword6" class="form-control" aria-describedby="passwordHelpInline">
                </div>
            </div>
        </form>
    </div>
@endsection
