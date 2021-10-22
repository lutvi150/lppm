@extends('admin/admin')

@section('title','Prosiding')


@section('breadcrumbs')
<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Data Prosiding</h1>
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
            <h2 class="text-center"> Form Data Prosiding</h2>
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
            <form method="POST" action="{{ route('add.prosiding') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col">
                        <label>Judul</label>
                        <input type="text" class="form-control" value="{{ (isset($data['judul'])) ? $data['judul'] : '' }}" name="judul">
                    </div>
                    <div class="col">
                        <label>Periode</label>
                        <input type="date" class="form-control" value="{{ (isset($data['periode'])) ? $data['periode'] : '' }}" name="periode">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>ISSN</label>
                        <input type="text" class="form-control" value="{{ (isset($data['issn'])) ? $data['issn'] : '' }}" name="issn">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>Peneliti</label>
                        <input type="text" class="form-control" value="{{ (isset($data['peneliti'])) ? $data['peneliti'] : '' }}" name="peneliti">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="" disabled selected>Pilih Kategori</option>
                            @foreach ($kategori as $item)
                                <option @if(isset($data['kategori'])) {{($data['kategori'] == $item) ? 'selected' : ''}} @endif value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                        </select>
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
                </div>
                <div class="form-group row">
                    <div class="col">
                        <label>NPP</label>
                        <input type="text" class="form-control" value="{{ (isset($data['npp'])) ? $data['npp'] : '' }}" name="npp">
                    </div>
                    <div class="col">
                        <label>NIDN</label>
                        <input type="text" class="form-control" value="{{ (isset($data['nidn'])) ? $data['nidn'] : '' }}" name="nidn">
                    </div>
                    <div class="col">
                        <label>Jabatan Fungsional</label>
                    <select class="form-control" name="jabfung">
                        @foreach($arr as $item)
                            <option value="{{ $item }}" @if(isset($data['jabfung']) == $item) selected='selected' @endif>{{ $item }}</option>
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
    <h3 class="mt-4">Data Prosiding</h3>
    <div class="row">
        <div class="container col-md-12 my-3">
            <div class="table-responsive">
                <table  id="example" class="table table-striped text-light">
                    <thead class="bg-dark">
                        <tr>
                            <td>#</td>
                            <th>Judul</th>
                            <th>ISSN</th>
                            <th>Periode</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="text-dark">
                        @foreach($prosiding as $p)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><a href="/pengabdian/detail/{{ $p->id }}">{{ $p->judul }}</a></td>
                            <td>{{ $p->issn }}</td>
                            <td>{{ $p->periode }}</td>
                            <td><a href="{{ route('edit.prosiding',$p->id) }}" class="btn btn-warning rounded"><i class="fas fa-pencil-alt"></i> Edit</a>
                                @if(!isset($data['id']))<a href="{{ route('delete.prosiding',$p->id) }}" class="btn btn-danger rounded ml-2"><i class="fas fa-trash"></i> Delete</a> @endif</td>
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

