@extends('admin/admin')

@section('title','Tugas Akhir')


@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Tugas Akhir</h1>
                    </div>
                </div>
            </div>
        </div>

@endsection

@section('content')


<div class="content mt-3">

    <div class="animated fadeIn">
    <div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h2 class="text-center"> Form Data Tugas Akhir</h2>
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
            @elseif(count($errors) > 0)
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                @foreach ($errors->all() as $error)
                <i class="fas fa-times"></i>
                <strong> {{ $error }}</strong>
                <br>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                @endforeach
            </div>
            @endif
        </div>
        <div class="container col-md-12">
            <form method="POST" action="{{ route('add.tugas_akhir') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <label>Judul</label>
                        <input type="text" class="form-control" value="{{ (isset($data['judul'])) ? $data['judul'] : '' }}" name="judul">
                    </div>
                    <div class="col">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="{{ (isset($data['nama'])) ? $data['nama'] : '' }}" name="nama">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>NIM</label>
                        <input type="text" class="form-control" value="{{ (isset($data['nim'])) ? $data['nim'] : '' }}" name="nim">
                    </div>
                    <div class="col">
                    <label>Fakultas</label>
                        <select class="form-control" name="fakultas">
                            <option value="" disabled selected>Pilih Fakultas</option>
                            @foreach ($fakultas as $item)
                                <option @if(isset($data['fakultas'])) {{($data['fakultas'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}" >{{ $item }}</option>
                            @endforeach
                    </select>
                </div>
                    <div class="col">
                        <label>Angkata Wisuda</label>
                        <select class="form-control" name="wisuda">
                            <option value="" disabled selected>Pilih Angkatan Wisuda</option>
                            @foreach ($arr as $item)
                                <option @if(isset($data['wisuda'])) {{($data['wisuda'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>Judul Bahasa Indonesia</label>
                        <input type="text" class="form-control" value="{{ (isset($data['judulindo'])) ? $data['judulindo'] : '' }}" name="judulindo">
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>Judul Bahasa Inggris</label>
                        <input type="text" class="form-control" value="{{ (isset($data['juduling'])) ? $data['juduling'] : '' }}" name="juduling">
                    </div>
                    </div>
                <div class="form-group row">
                    <div class="col">
                        <label>abstrak</label>
                        <textarea class="form-control" name="abstrak">{{ (isset($data['abstrak'])) ? $data['abstrak'] : '' }}</textarea>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>Cover</label>
                        <select class="form-control" name="cover">
                            <option value="" disabled selected>Cover</option>
                            @foreach ($cover as $item)
                                <option @if(isset($data['cover'])) {{($data['cover'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>Daftar isi</label>
                        <select class="form-control" name="isi">
                            <option value="" disabled selected>Daftar isi</option>
                            @foreach ($isi as $item)
                                <option @if(isset($data['isi'])) {{($data['isi'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>Persetujuan TA</label>
                        <select class="form-control" name="setujuta">
                            <option value="" disabled selected>Persetujuan TA</option>
                            @foreach ($setujuta as $item)
                                <option @if(isset($data['setujuta'])) {{($data['setujuta'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>Pengesahan TA</label>
                        <select class="form-control" name="sahta">
                            <option value="" disabled selected>Pengesahan TA</option>
                            @foreach ($sahta as $item)
                                <option @if(isset($data['sahta'])) {{($data['sahta'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>Publikasi TA</label>
                        <select class="form-control" name="publikasi">
                            <option value="" disabled selected>Publikasi TA</option>
                            @foreach ($publikasi as $item)
                                <option @if(isset($data['publikasi'])) {{($data['publikasi'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>File Asli</label>
                        <select class="form-control" name="asli">
                            <option value="" disabled selected>File Asli</option>
                            @foreach ($asli as $item)
                                <option @if(isset($data['asli'])) {{($data['asli'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>File Jurnal</label>
                        <select class="form-control" name="jurnal">
                            <option value="" disabled selected>File Jurnal</option>
                            @foreach ($jurnal as $item)
                                <option @if(isset($data['jurnal'])) {{($data['jurnal'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>BAB I</label>
                        <select class="form-control" name="bab1">
                            <option value="" disabled selected>BAB I</option>
                            @foreach ($bab1 as $item)
                                <option @if(isset($data['bab1'])) {{($data['bab1'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>BAB II</label>
                        <select class="form-control" name="bab2">
                            <option value="" disabled selected>BAB II</option>
                            @foreach ($bab2 as $item)
                                <option @if(isset($data['bab2'])) {{($data['bab2'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>BAB III</label>
                        <select class="form-control" name="bab3">
                            <option value="" disabled selected>BAB III</option>
                            @foreach ($bab3 as $item)
                                <option @if(isset($data['bab3'])) {{($data['bab3'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>BAB IV</label>
                        <select class="form-control" name="bab4">
                            <option value="" disabled selected>BAB IV</option>
                            @foreach ($bab4 as $item)
                                <option @if(isset($data['bab4'])) {{($data['bab4'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>BAB V</label>
                        <select class="form-control" name="bab5">
                            <option value="" disabled selected>BAB V</option>
                            @foreach ($bab5 as $item)
                                <option @if(isset($data['bab5'])) {{($data['bab5'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>BAB VI</label>
                        <select class="form-control" name="bab6">
                            <option value="" disabled selected>BAB VI</option>
                            @foreach ($bab6 as $item)
                                <option @if(isset($data['bab6'])) {{($data['bab6'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                    <div class="col">
                        <label>Daftar Pustaka</label>
                        <select class="form-control" name="dapus">
                            <option value="" disabled selected>Daftar Pustaka</option>
                            @foreach ($dapus as $item)
                                <option @if(isset($data['dapus'])) {{($data['dapus'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <div class="form-group row">
                        <div class="col">
                            <label>Upload PDF</label>
                            <input type="file" class="form-control" value="{{ (isset($data['pdf'])) ? $data['pdf'] : '' }}" name="file">
                        </div>
                    </div>
                <input type="hidden" name="id" value="{{ isset($data['id']) ? $data['id'] : '' }}">
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        </div>
    </div>
    <h3 class="mt-4">Data Tugas Akhir</h3>
    <div class="row">
        <div class="container col-md-12 my-3">
            <div class="table-responsive">
                <table  id="example" class="table table-striped text-light">
                    <thead class="bg-dark">
                        <tr>
                            <td>#</td>
                            <th>Judul</th>
                            <th>Nama</th>
                            <th>Fakultas</th>
                            <th>NIM</th>
                            <th>Angkatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach($tugas_akhir as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="/pengabdian/detail/{{ $p->id }}">{{ $p->judul }}</a></td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->fakultas }}</td>
                            <td>{{ $p->nim }}</td>
                            <td>{{ $p->wisuda }}</td>
                            <td><a href="{{ route('edit.tugas_akhir',$p->id) }}" class="btn btn-warning rounded"><i class="fas fa-pencil-alt"></i> Edit</a>
                                @if(!isset($data['id']))<a href="{{ route('delete.tugas_akhir',$p->id) }}" class="btn btn-danger rounded ml-2"><i class="fas fa-trash"></i> Delete</a> @endif</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
     </div>

</div>


<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection

