@extends('layouts.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Edit Unit</h4>
    </div>
    <div class="card-body">
        <form class="form form-horizontal" method="POST" action="{{ route('unit.update', $unit->id) }}">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-12">
                    <div class="form-group row">
                        <div class="col-sm-3 col-form-label">
                            <label>Nama</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text"  class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') ?? $unit->nama }}">
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
                            <label>Inisial Unit</label>
                        </div>
                        <div class="col-sm-9">
                            <input type="text" class="form-control @error('inisial_unit') is-invalid @enderror" name="inisial_unit" value="{{ old('inisial_unit') ?? $unit->inisial_unit }}">
                        @error('inisial_unit')
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