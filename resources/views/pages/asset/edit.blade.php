@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Unit</h4>
    </div>
    <div class="card-body">
        <form class="form form-horizontal" method="POST" action="{{ route('asset.update', $asset->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-sm-3 col-form-label">
                            <label>Nama Barang</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control @error('nama_barang') is-invalid @enderror" name="nama_barang" value="{{ old('nama_barang') ?? $asset->nama_barang }}">
                            @error('nama_barang')
                            <div class="alert alert-danger mt-2" role="alert">
                                <div class="alert-body">{{ $message }}</div>
                            </div>
                            @enderror  
                        </div>
                       
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-sm-3 col-form-label">
                            <label>Jumlah</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" value="{{ old('jumlaht') ?? $asset->jumlah }}">
                        @error('jumlah')
                        <div class="alert alert-danger mt-2" role="alert">
                            <div class="alert-body">{{ $message }}</div>
                        </div>
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-sm-3 col-form-label">
                            <label>Status</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') ?? $asset->status }}">
                        @error('status')
                        <div class="alert alert-danger mt-2" role="alert">
                            <div class="alert-body">{{ $message }}</div>
                        </div>
                        @enderror
                        </div>
                    </div>
                </div>

                <div class="col-sm-9 offset-sm-3">
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-float waves-light">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection