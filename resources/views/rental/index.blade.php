@extends('layouts.app')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
    <div class="col-lg-12 mb-lg-0 mb-4">
            <div class="card">
                <div class="card-header pb-0 p-3">
                    <div class="d-flex justify-content-between">
                        <h6 class="mb-2">List Mobil yang sedang disewa</h6>
                        <a href="{{route('rentals.create')}}" class="btn btn-success pull-right">Sewa Mobil</a>
                        <a href="{{route('rentals.return')}}" class="btn btn-warning" style="margin-left:-400px;">Kembalikan Mobil</a>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table align-items-center ">
                        <thead>
                            <tr>
                                <th class="text-center">NO</th>
                                <th class="text-center">Mobil</th>
                                <th class="text-center">Tanggal Mulai</th>
                                <th class="text-center">Tanggal Selesai</th>
                                <th class="text-center">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rentals as $rental)
                            <tr>
                                <td class="text-center">{{$loop->iteration}}</td>
                                <td class="text-center">{{$rental->car->merk}} - {{$rental->car->model}}</td>
                                <td class="text-center">{{$rental->tanggal_mulai}}</td>
                                <td class="text-center">{{$rental->tanggal_selesai}}</td>
                                <td class="text-center">
                                    {{$rental->status}}
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
