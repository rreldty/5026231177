@extends('template')
@section('content')

<div class="container mt-4">
    <h3>Tambah Data Nilai</h3>
    <form action="/eas/store" method="POST">
        @csrf
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" name="nomorinduksiswa" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" name="nilaiangka" class="form-control" required>
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" name="sks" class="form-control" required>
            </div>
        </div>
        <button type="submit" class="btn btn-success">Simpan</button>
    </form>
</div>

@endsection
