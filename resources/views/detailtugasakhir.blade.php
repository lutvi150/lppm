@extends('template/template')

@section('title','Detail Akhir')


@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h1 class="text-center">Detail Tugas Akhir</h1>
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="container mt-3">
            <div class="alert alert-success" role="alert">
                <h4 class="alert-heading text-center">Judul Tugas Akhir</h4>
                @foreach($tugasakhir as $item)
                <p>{{$item->judul}}</p>

            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{url('assetAdmin/foto/dosenlogo.jpg')}}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <table class="table table-borderless">
                                <tbody>

                                    <tr>
                                        <td>Nama</td>
                                        <td>:</td>
                                        <td>{{$item->nama}}</td>
                                    <tr>
                                        <td>NIM</td>
                                        <td>:</td>
                                        <td>{{$item->nim}}</td>
                                    </tr>
                                    <tr>
                                        <td>Fakultas</td>
                                        <td>:</td>
                                        <td>{{$item->fakultas}}</td>
                                    </tr>
                                    </tr>
                                    <tr>
                                        <td>Angkatan Wisuda</td>
                                        <td>:</td>
                                        <td>{{$item->wisuda}}</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Bahasa Indonesia</td>
                                        <td>:</td>
                                        <td>{{$item->judulindo}}</td>
                                    </tr>
                                    <tr>
                                        <td>Judul Bahasa Inggris</td>
                                        <td>:</td>
                                        <td>{{$item->juduling}}</td>
                                    </tr>
                                    <tr>
                                        <td>Abstrak</td>
                                        <td>:</td>
                                        <td>{{$item->abstrak}}</td>


                                    </tr>
                                    <tr>
                                        <td>Cover</td>
                                        <td>:</td>
                                        <td>{{$item->cover}}</td>

                                        <td>BAB I</td>
                                        <td>:</td>
                                        <td>{{$item->bab1}}</td>
                                    </tr>
                                    <tr>
                                        <td>Daftar isi</td>
                                        <td>:</td>
                                        <td>{{$item->isi}}</td>
                                        <td>BAB II</td>
                                        <td>:</td>
                                        <td>{{$item->bab2}}</td>

                                    </tr>
                                    <tr>
                                        <td>Persetujuan TA</td>
                                        <td>:</td>
                                        <td>{{$item->setujuta}}</td>
                                        <td>BAB III</td>
                                        <td>:</td>
                                        <td>{{$item->bab3}}</td>
                                    </tr>
                                    <tr>
                                        <td>Pengesahan TA</td>
                                        <td>:</td>
                                        <td>{{$item->sahta}}</td>
                                        <td>BAB IV</td>
                                        <td>:</td>
                                        <td>{{$item->bab4}}</td>
                                    </tr>
                                    <tr>
                                        <td>Publikasi TA</td>
                                        <td>:</td>
                                        <td>{{$item->publikasi}}</td>
                                        <td>BAB V</td>
                                        <td>:</td>
                                        <td>{{$item->bab5}}</td>
                                    </tr>
                                    <tr>
                                        <td>File Asli</td>
                                        <td>:</td>
                                        <td>{{$item->asli}}</td>
                                        <td>BAB VI</td>
                                        <td>:</td>
                                        <td>{{$item->bab6}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jurnal</td>
                                        <td>:</td>
                                        <td>{{$item->jurnal}}</td>
                                        <td>Daftar Putaka</td>
                                        <td>:</td>
                                        <td>{{$item->dapus}}</td>
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
