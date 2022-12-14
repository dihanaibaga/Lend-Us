@extends('layouts.master')
@section('content')
<div class="content-body">
    <!-- Table Hover Animation start -->
    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Unit</h4>
                    <div class="row-md-50">
                        <div class="col-mt-20">
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
                            <th>Nama</th>
                            <th>Inisial Unit</th>
                            <th width="20%">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- Menggunakan forelse untuk menuliskan keterangan tambahan jika data tidak ada --}}
                        @forelse ($unit as $item)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->inisial_unit }}</td>
                            <td class="d-flex">
                                <a href="{{ route('unit.edit', $item->id) }}" type="button" class="btn btn-outline-info waves-effect mr-1">
                                    <i data-feather='edit'></i>
                                    <span>Edit</span>
                                </a>
                                <a>
                                    <form action="{{ route('unit.destroy', $item->id) }}" method="POST">
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
