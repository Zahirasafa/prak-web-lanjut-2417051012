@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-header card-header-ungu text-center py-3">
                        <h4 class="mb-0">Buat Mata Kuliah Baru</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('matakuliah.store') }}" method="POST">
                            @csrf

                            <div class="mb-3">
                                <label for="nama_mk" class="form-label fw-semibold">Nama Mata Kuliah</label>
                                <input type="text" class="form-control" id="nama_mk" name="nama_mk"
                                    placeholder="Masukkan nama mata kuliah" required>
                            </div>

                            <div class="mb-4">
                                <label for="sks" class="form-label fw-semibold">SKS</label>
                                <input type="number" class="form-control" id="sks" name="sks"
                                    placeholder="Masukkan jumlah SKS" required>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-ungu">Submit</button>
                                <a href="{{ url('/matakuliah') }}" class="btn btn-kuning">Lihat Daftar Mata Kuliah</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection