@extends('template')

@section('content')
<div class="container-fluid py-4">
    <h3 class="mb-4">Data Cat</h3>

    <div class="d-flex justify-content-between align-items-center flex-wrap gap-3 mb-4">
        <a href="/tugascrud/tambah" class="btn btn-success">
            <i class="bi bi-plus-circle me-2"></i> Tambah Cat
        </a>

        <form action="/tugascrud/cari" method="GET" class="d-flex align-items-center" style="gap: 10px; max-width: 400px;">
            <input type="text" name="cari" class="form-control" placeholder="Cari cat..." value="{{ old('cari') }}">
            <button type="submit" class="btn btn-secondary">
                <i class="bi bi-search"></i> Cari
            </button>
        </form>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle w-100">
            <thead class="table-light text-center">
                <tr>
                    <th style="min-width: 150px;">Merk</th>
                    <th style="min-width: 120px;">Harga</th>
                    <th style="min-width: 120px;">Tersedia</th>
                    <th style="min-width: 100px;">Berat</th>
                    <th style="min-width: 180px;">Opsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cat as $k)
                <tr>
                    <td>{{ $k->merkcat }}</td>
                    <td class="text-center">Rp{{ number_format($k->hargacat, 0, ',', '.') }}</td>
                    <td class="text-center">
                        @if($k->tersedia == '1')
                            <span class="badge bg-success">Ya</span>
                        @else
                            <span class="badge bg-danger">Tidak</span>
                        @endif
                    </td>
                    <td class="text-center">{{ $k->berat }} kg</td>
                    <td class="text-center">
                        <div class="d-flex justify-content-center gap-2">
                            <a href="/tugascrud/edit/{{ $k->ID }}" class="btn btn-sm btn-primary">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="/tugascrud/delete/{{ $k->ID }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $cat->links() }}
    </div>
</div>
@endsection
