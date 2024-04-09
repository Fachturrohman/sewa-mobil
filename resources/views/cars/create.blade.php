@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Tambah Mobil</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('cars.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="merk" class="form-control @error('merk') is-invalid @enderror" value="{{ old('merk') }}" placeholder="Merk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="model" class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}" placeholder="Model">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="nomor_plat" class="form-control @error('nomor_plat') is-invalid @enderror" value="{{ old('nomor_plat') }}" placeholder="Nomor Plat">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="tarif" class="form-control @error('tarif') is-invalid @enderror" value="{{ old('tarif') }}" placeholder="Tarif sewa per Hari">
                                </div>
                            </div>
                        </div>
                        <div class="button-section">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{route('cars.index')}}" class="btn btn-warning">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
