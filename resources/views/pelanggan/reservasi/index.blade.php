@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3 mb-3">
            <div class="card mb-3" style="max-width: 20rem;">
                <div class="card-header">Profil</div>
                <div class="card-body">
                    <div style="text-align: center">
                        <img src="" style="width: 100px;height: 100px;border-radius: 50%;" />
                        <h4 class="card-title">
                            <!--Auth::user()->name--> Jhonarendra
                        </h4>
                        <p class="card-text">
                            <!--Auth::user()->email--> jhonarendra@gmail.com
                        </p>
                    </div>
                </div>
            </div>
            <ul class="list-group">
                <a href="{{URL('pelanggan')}}" class="list-group-item list-group-item-action">Dashboard</a>
                <a href="{{URL('pelanggan/reservasi')}}" class="list-group-item list-group-item-action active">Reservasi</a>
                <a href="{{URL('pelanggan/pemesanan')}}" class="list-group-item list-group-item-action">Pemesanan</a>
                <a href="{{URL('pelanggan/pengaturan')}}" class="list-group-item list-group-item-action">Pengaturan</a>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Reservasi</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{URL('pelanggan/reservasi/create')}}" class="btn btn-success">Reservasi Baru</a>
                    
                    <table class="table table-bordered mt-3">
                        <thead>
                            <tr>
                                <th scope="col">ID Reservasi</th>
                                <th scope="col">Restoran</th>
                                <th scope="col">Tanggal Reservasi</th>
                                <th scope="col">Nama Pegawai</th>
                                <th scope="col">Nomor Meja</th>
                                <th scope="col">Status</th>
                                <th scope="col">Tanggal Pembaruan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservasi as $reservasi)
                            <tr>
                                <td>{{$reservasi->id_reservasi}}</td>
                                <td>{{$reservasi->nama_restoran}}</td>
                                <td>{{$reservasi->created_at}}</td>
                                <td>{{$reservasi->nama_pegawai}}</td>
                                <td>{{$reservasi->no_meja_reservasi}}</td>
                                <td>{{$reservasi->status_reservasi}}</td>
                                <td>{{$reservasi->updated_at}}</td>
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
