@extends('layouts.app')

@section('content')
    <div class="container py-5">
        <div class="card shadow-sm">
            <div class="card-body p-4">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="mb-0" style="color: #7e57c2;">Daftar Pengguna</h3>
                    <a href="{{ route('user.create') }}" class="btn btn-ungu">+ Tambah User</a>
                </div>

                <x-user-table :users="$users" />
            </div>
        </div>
    </div>
@endsection