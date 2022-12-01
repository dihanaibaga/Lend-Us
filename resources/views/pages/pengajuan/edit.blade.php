@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Pengajuan</h4>
    </div>
    <div class="card-body">
        <form class="form form-horizontal" method="POST" action="{{ route('pengajuan.update', $pengajuan->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-sm-3 col-form-label">
                            <label>Nama</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $pengajuan->nama }}">
                            @error('nama')
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
                            <label>Peminjaman</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('peminjaman') is-invalid @enderror" name="peminjaman" value="{{ old('peminjaman') ?? $pengajuan->peminjaman }}">
                        @error('peminjaman')
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
                            <label>Tanggal Pengajuan</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="date" class="form-control @error('tanggal_pengajuan') is-invalid @enderror" name="tanggal_pengajuan" value="{{ old('tanggal_pengajuan') ?? $pengajuan->tanggal_pengajuan }}">
                        @error('tanggal_pengajuan')
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
                            <input type="text" class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') ?? $pengajuan->status }}">
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