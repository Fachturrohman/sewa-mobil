@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">Manajemen Mobil</h6>
                        <a href="{{route('cars.create')}}" class="btn btn-primary pull-right">Tambah Mobil</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <thead>
                            <tr>
                                <th class="text-center">NO</th>
                                <th class="text-center">Merk</th>
                                <th class="text-center">Mobil</th>
                                <th class="text-center">Nomor Plat</th>
                                <th class="text-center">Tarif Sewa / Hari</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cars as $car)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$car->merk}}</td>
                                <td class="text-center">{{$car->model}}</td>
                                <td class="text-center">{{$car->nomor_plat}}</td>
                                <td class="text-center">Rp. {{number_format($car->tarif, 2)}}</td>
                                <td>
                                    <div class="row">
                                        <div class="col-sm">
                                        <a href="{{ route('cars.edit', $car->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                        </div>
                                        <div class="col-sm" style="margin-left:-40px;">
                                            <form action="{{ route('cars.destroy', $car->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
