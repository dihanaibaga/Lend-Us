@extends('layouts.master')
@section('content')
<div class="content-body">
    <!-- Table Hover Animation start -->
    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Asset</h4>
                    <div class="row-md-50">
                        <div class="col-md-15">
                            <a class="btn btn-info float-end" href="{{ route('asset.create') }}">Tambah</a>
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
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th width="20%">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- menggunakan forelse untuk menampilkan data jika tidak ada data --}}
                            @forelse ($asset as $item)
                            <tr>
                                <td>{{ $loop->index+1 }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->jumlah }}</td>
                                <td>{{ $item->status }}</td>
                                <td class="d-flex">
                                    <a href="{{ route('asset.edit', $item->id) }}" type="button" class="btn btn-outline-info waves-effect mr-1">
                                        <i data-feather='edit'></i>
                                        <span>Edit</span>
                                    </a>
                                    <a>
                                        <form action="{{ route('asset.destroy', $item->id) }}" method="POST">
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
                                <td colspan="5" style="text-align: center">belum ada data</td>
                            </tr>  
                            @endforelse
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Table head options end -->
    </br>
</div>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
@if(Session::has('success'))
<script>
    Toastify({
        text: "{{ session()->get('success') }}"
        , duration: 5000
        , close: true
        , gravity: "top", // `top` or `bottom`
        position: "right", // `left`, `center` or `right`
        stopOnFocus: true, // Prevents dismissing of toast on hover
        className: 'bg-primary'
        , style: {
            background: "linear-gradient(to right, rgb(10, 179, 156), rgb(64, 81, 137))"
        }
        , onClick: function() {} // Callback after click
    }).showToast();

</script>
@endif
@endsection
