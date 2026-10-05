@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0" style="color: #7e57c2;">Daftar Mata Kuliah</h3>
                    <a href="{{ route('matakuliah.create') }}" class="btn btn-ungu">+ Tambah Mata Kuliah</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle table-ungu">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama Mata Kuliah</th>
                                <th>SKS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($mks as $mk)
                                <tr>
                                    <td><small>{{ $mk->id }}</small></td>
                                    <td>{{ $mk->nama_mk }}</td>
                                    <td><span class="badge badge-kuning">{{ $mk->sks }} SKS</span></td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="text-center text-muted py-4">
                                        Belum ada data mata kuliah.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection