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
                                <td>ID</td>
                                <td>Nama Mata Kuliah</td>
                                <td>SKS</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mks as $mk)
                                <tr>
                                    <td>{{ $mk->id }}</td>
                                    <td>{{ $mk->nama_mk }}</td>
                                    <td>{{ $mk->sks }} SKS</td>
                                    <td>
                                        <a href="{{ route('matakuliah.edit', $mk->id) }}">Edit</a>
                                        <form action="{{ route('matakuliah.destroy', $mk->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection