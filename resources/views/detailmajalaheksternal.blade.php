@extends('template/template')

@section('title','Detail Majalah Eksternal')


@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h1 class="text-center">Detail Majalah Eksternal</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="container mt-3">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading text-center">Judul Majalah Eksternal</h4>
                @foreach($majalaheksternal as $item)
                <p>{{$item->judul}}</p>.jpg')}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">

            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{url('assetAdmin/foto/dosenlogo
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{$item->peneliti}}</td>
                                    </tr>
                                    <tr>
                                        <td>NPP</td>
                                        <td>:</td>
                                        <td>{{$item->npp}}</td>
                                    </tr>
                                    <tr>
                                        <td>NIDN</td>
                                        <td>:</td>
                                        <td>{{$item->nidn}}</td>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <td>:</td>
                                        <td>Jl. Singosari Raya No 79</td>
                                    </tr>
                                    <tr>
                                        <td>Jabatan Fungsional</td>
                                        <td>:</td>
                                        <td>
                                            <span class="badge badge-warning">{{$item->jabfung}}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <td>:</td>
                                        <td>dosenudinus@dsn.dinus.ac.id</td>
                                    </tr>

                                    <tr>
                                        <td>Dana</td>
                                        <td>:</td>
                                        <td>
                                            <span class="badge badge-success">Rp {{ number_format(6000000) }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Proposal</td>
                                        <td>:</td>
                                        <td>
                                            <img src="{{url('assetAdmin/foto/checked.png')}}" style="max-width:25px; height:auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lap. Kemajuan</td>
                                        <td>:</td>
                                        <td>
                                            <img src="{{url('assetAdmin/foto/cancel.png')}}" style="max-width:25px; height:auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Kontrak</td>
                                        <td>:</td>
                                        <td>
                                            <img src="{{url('assetAdmin/foto/checked.png')}}" style="max-width:25px; height:auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Lap Akhir</td>
                                        <td>:</td>
                                        <td>
                                            <img src="{{url('assetAdmin/foto/cancel.png')}}" style="max-width:25px; height:auto;">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bukti Publikasi</td>
                                        <td>:</td>
                                        <td>
                                            <img src="{{url('assetAdmin/foto/cancel.png')}}" style="max-width:25px; height:auto;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            @if($item->pdf != null)
                            <iframe src="{{ asset('storage/uploads/'.$item->pdf) }}" width="700px" height="600px" />
                            @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
