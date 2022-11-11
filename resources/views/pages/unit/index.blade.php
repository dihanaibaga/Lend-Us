@extends('layouts.master')

@section('content')
<div class="content-body">
    <!-- Table Hover Animation start -->
    <div class="row" id="table-hover-animation">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Data Asset</h4>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Seluruh data yang dapat di pinjamkan.
                    </p>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover-animation">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($unit as $item)
                           @forelse ($collection as $item)
                           
                           @empty
                               
                               <tr>
                                <td>3</td>
                                <td>Laboratorium</td>
                                <td>4</td>
                                <td><span class="badge badge-pill badge-light-primary mr-1">Tersedia</span></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="edit-2" class="mr-50"></i>
                                                <span>Edit</span>
                                            </a>
                                            <a class="dropdown-item" href="javascript:void(0);">
                                                <i data-feather="trash" class="mr-50"></i>
                                                <span>Delete</span>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforelse
                           @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- Table head options end -->

</div>
@endsection