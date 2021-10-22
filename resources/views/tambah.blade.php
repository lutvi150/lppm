@extends('template/template')


@section('title','Tambah Data')


@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h1 class="text-center"> Tambah Data</h1>
        </div>
        <div class="container">
            @if(session('pesan'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="fas fa-check"></i>
                <strong> {{ session('pesan') }}</strong> 
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="container col-md-6">
            <form method="POST" action="/adddata">
                @csrf
                <div class="form-group">
                    <label>Judul</label>
                    <input type="text" class="form-control" name="judul">
                </div>
                <div class="form-group">
                    <label>Tahun</label>
                    <input type="text" class="form-control" name="tahun">
                </div>
                <div class="form-group">
                    <label>Peneliti</label>
                    <input type="text" class="form-control" name="peneliti">
                </div>
                <div class="form-group">
                    <label>Kategori</label>
                    <select class="form-control" name="kategori">
                        <option value="IBM">IBM</option>
                        <option value="Ipteks">Ipteks</option>
                        <option value="PTUPT">PTUPT</option>
                        <option value="Penelitian Dosen Pemula">Penelitian Dosen Pemula</option>
                        <option value="Penelitian Terapan">Penelitian Terapan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Fakultas</label>
                    <select class="form-control" name="fakultas">
                        <option value="FIK">FIK</option>
                        <option value="FIB">FIB</option>
                        <option value="FEB">FEB</option>
                        <option value="FT">FT</option>
                        <option value="FKES">FKES</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>NPP</label>
                    <input type="text" class="form-control" name="npp">
                </div>
                <div class="form-group">
                    <label>NIDN</label>
                    <input type="text" class="form-control" name="nidn">
                </div>
                <div class="form-group">
                    <label>Jabatan Fungsional</label>
                    <select class="form-control" name="jabfung">
                        <option value="Asisten Ahli">Asisten Ahli</option>
                        <option value="Lektor Kepla">Lektor Kepala</option>
                        <option value="Guru Besar">Guru Besar</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Tambah</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="container col-md-6 my-3">
            <table class="table table-striped text-light">
                <thead class="bg-dark">
                    <tr>
                        <td>#</td>
                        <td>Judul</td>
                        <td>Tahun</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    @foreach($penelitian as $p)
                    <tr>
                        <td> {{$loop->iteration}} </td>
                        <td> {{ $p->judul }} </td>
                        <td> {{ $p->tahun }} </td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
