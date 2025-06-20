@extends('template')
@section('content')

<div class="container mt-4">
    <h3>Data Nilai</h3>
    <a href="/eas/tambah" class="btn btn-primary mb-3">Tambah Data</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($nilai as $n)
            @php
                if ($n->nilaiangka <= 40) {
                    $huruf = 'D';
                } elseif ($n->nilaiangka <= 60) {
                    $huruf = 'C';
                } elseif ($n->nilaiangka <= 80) {
                    $huruf = 'B';
                } else {
                    $huruf = 'A';
                }
                $bobot = $n->nilaiangka * $n->sks;
            @endphp
            <tr>
                <td>{{ $n->id }}</td>
                <td>{{ $n->nomorinduksiswa }}</td>
                <td>{{ $n->nilaiangka }}</td>
                <td>{{ $n->sks }}</td>
                <td>{{ $huruf }}</td>
                <td>{{ $bobot }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
