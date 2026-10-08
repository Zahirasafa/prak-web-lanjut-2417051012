@extends('layouts.app')

@section('content')
    <div class="container py-5">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                Terjadi kesalahan, periksa kembali data yang diisi.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif

        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0" style="color: #7e57c2;">Daftar Pengguna</h3>
                    <a href="{{ route('user.create') }}" class="btn btn-ungu">+ Tambah User</a>
                </div>

                <div class="table-responsive">
                    <table class="table table-hover align-middle table-ungu">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nama</th>
                                <th>NPM</th>
                                <th>Kelas</th>
                                <th style="width: 180px;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td><small>{{ $user->id }}</small></td>
                                    <td>{{ $user->nama }}</td>
                                    <td>{{ $user->nim }}</td>
                                    <td><span class="badge badge-kuning">{{ $user->nama_kelas }}</span></td>
                                    <td>
                                        <a href="{{ route('user.edit', $user->id) }}"
                                            class="btn btn-sm btn-kuning">Edit</a>
                                        <form action="{{ route('user.destroy', $user->id) }}" method="POST"
                                            style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger"
                                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center text-muted py-4">
                                        Belum ada data pengguna.
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