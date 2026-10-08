@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-header card-header-ungu text-center py-3">
                        <h4 class="mb-0">Edit Pengguna</h4>
                    </div>
                    <div class="card-body p-4">
                        <form action="{{ route('user.update', $user->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="nama" class="form-label fw-semibold">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama"
                                    value="{{ old('nama', $user->nama) }}" required>
                            </div>

                            <div class="mb-3">
                                <label for="npm" class="form-label fw-semibold">NPM</label>
                                <input type="text" class="form-control" id="npm" name="npm"
                                    value="{{ old('npm', $user->nim) }}" required>
                            </div>

                            <div class="mb-4">
                                <label for="kelas_id" class="form-label fw-semibold">Kelas</label>
                                <select class="form-select" name="kelas_id" id="kelas_id" required>
                                    @foreach ($kelas as $kelasItem)
                                        <option value="{{ $kelasItem->id }}"
                                            {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                                            {{ $kelasItem->nama_kelas }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-ungu">Update</button>
                                <a href="{{ url('/user') }}" class="btn btn-kuning">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection