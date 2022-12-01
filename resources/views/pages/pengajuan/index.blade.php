@extends('layouts.master')
@section('content')

<div class="content-body">

    <!-- Table Hover Animation start -->
    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Peminjaman</h4>
                    <div class="row-md-50">
                        <div class="col-mt-20">
                            <a class="btn btn-info float-end" href="{{ route('pengajuan.create') }}">Tambah</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <p class="card-text">
                        Seluruh data yang dapat di pinjamkan.
                    </p>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover-animation">
                    <thead>

                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Peminjaman</th>
                            <th>Tanggal Pengajuan</th>
                            <th>Status</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Menggunakan forelse untuk menuliskan keterangan tambahan jika data tidak ada --}}
                        @forelse ($pengajuan as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->peminjaman }}</td>
                            <td>{{ $item->tanggal_pengajuan }}</td>
                            <td>{{ $item->status }}</td>
                            <td class="d-flex">

                                <a href="{{ route('pengajuan.show', $item->id) }}" type="button" class="btn btn-outline-info waves-effect mr-1">
                                    <i data-feather='detail'></i>
                                    <span>Detail</span>
                                </a>

                                <a href="{{ route('pengajuan.edit', $item->id) }}" type="button" class="btn btn-outline-info waves-effect mr-1">
                                    <i data-feather='edit'></i>
                                    <span>Edit</span>
                                </a>
                                <a>
                                    <form action="{{ route('pengajuan.destroy', $item->id) }}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-outline-danger waves-effect">
                                            <i data-feather="trash-2"></i>
                                            <span>Delete</span>
                                        </button>
                                    </form>




                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" style="text-align: center">belum ada data</td>
                        </tr>
                        @endforelse
                    </tbody>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
