@extends('admin.layouts.main')

@php
    $title = 'Pengumuman';
@endphp

@section('title')
    Dashboard | Pengumuman
@endsection

@section('sidebar')
    @include('admin.partials.sidebar')
@endsection

@section('content')
    <div class="col-11 mx-auto border border-primary" style="border-radius: 10px">
        <h1 class="bg-primary text-light fs-5 text-center mb-0 py-2"
            style="border-top-left-radius: 10px; border-top-right-radius: 10px">
            <i class="bi bi-megaphone"></i>
            DAFTAR PENGUMUMAN
        </h1>

        {{-- Alert --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible m-3 mb-0" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- Alert End --}}

        <a href="{{ route('admin.pengumuman.create') }}" class="btn btn-primary mx-3 mt-5">
            <i class="bi bi-plus-square"></i>
            <span>Tambah Pengumuman</span>
        </a>

        <div class="table-responsive p-3">
            <table class="table table-hover table-bordered w-100 my-3" id="table-pengumuman">
                <thead>
                    <tr>
                        <th class="text-light text-center text-nowrap" style="background-color: #00287e">ID</th>
                        <th class="text-light text-center text-nowrap" style="background-color: #00287e">JUDUL PENGUMUMAN
                        </th>
                        <th class="text-light text-center text-nowrap" style="background-color: #00287e">PENULIS</th>
                        <th class="text-light text-center text-nowrap" style="background-color: #00287e">TANGGAL UPLOAD</th>
                        <th class="text-light text-center text-nowrap" style="background-color: #00287e">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pengumuman as $item)
                        <tr>
                            <td class="text-center text-nowrap">{{ $loop->iteration }}</td>
                            <td class="text-nowrap">{{ $item->judul_pengumuman }}</td>
                            <td class="text-nowrap">{{ $item->penulis }}</td>
                            <td class="text-center text-nowrap">{{ $item->tanggal_upload }}</td>
                            <td class="d-flex justify-content-center">
                                <form action="{{ route('admin.pengumuman.read', $item->id) }}" method="GET">
                                    <button type="submit" class="btn btn-info fs-5 mx-1">
                                        <i class="bi bi-eye"></i>
                                    </button>
                                </form>
                                <form action="{{ route('admin.pengumuman.edit', $item->id) }}" method="GET">
                                    <button type="submit" class="btn btn-warning fs-5 mx-1">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                </form>
                                <form action="{{ route('admin.pengumuman.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    {{-- <button type="submit" class="btn btn-danger fs-5 mx-1">
                                        <i class="bi bi-trash3"></i>
                                    </button> --}}

                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-danger fs-5 mx-1" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">
                                        <i class="bi bi-trash3"></i>
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content border-danger border-3">
                                                <div class="modal-header bg-danger text-light border-bottom-0">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">
                                                        <i class="bi bi-trash3"></i>
                                                        HAPUS PENGUMUMAN
                                                    </h1>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    <i class="bi bi-exclamation-circle text-danger"
                                                        style="font-size: 50px"></i>
                                                    <p>Apakah Anda yakin ingin menghapus Pengumuman?</p>
                                                </div>
                                                <div class="modal-footer border-top-0">
                                                    <button type="button" class="btn btn-success"
                                                        data-bs-dismiss="modal">Tidak</button>
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@push('css')
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
@endpush

@push('js')
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table-pengumuman').DataTable();
        });
    </script>
@endpush
