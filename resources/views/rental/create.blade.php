@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Sewa Mobil</h6>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{route('rentals.store')}}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_mulai">Tanggal Mulai</label>
                                    <input type="date" name="tanggal_mulai" class="form-control" value="{{ old('tanggal_mulai') }}" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tgl_selesai">Tanggal Selesai</label>
                                    <input type="date" name="tanggal_selesai" class="form-control" value="{{ old('tanggal_selesai') }}" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group">
                                <label for="selcars">Pilih Mobil</label>
                                <select name="carid" class="form-control" id="selcars">
                                    @foreach ($cars as $car)
                                    <option value="{{$car->id}}">{{$car->merk}} - {{$car->model}} (Rp. {{number_format($car->tarif, 2)}})</option>
                                    @endforeach
                                </select>
                            </div>
                        <div class="button-section">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="{{route('rentals.index')}}" class="btn btn-warning">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
