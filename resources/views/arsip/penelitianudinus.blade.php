@extends('template/template')

@section('title','Pengabdian Udinus')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container">
            <h1 class="text-center mt-5">Daftar Penelitian Masyarakat Universitas Dian Nuswantoro</h1>
            <hr>
            <br>
            <div class="table-responsive">
            <table class="table mt-3" id="example">

                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Tahun</th>
                        <th>Fakultas</th>
                        <th>NPP</th>
                        <th>NIDN</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penelitian as $item)
                        <tr>
                            <td><a href="/penelitian/detail/{{ $item->id }}">{{ $item->judul }}</a></td>
                            <td>{{ $item->peneliti }}</td>
                            <td>{{ $item->tahun }}</td>
                            <td>{{ $item->fakultas }}</td>
                            <td>{{ $item->npp }}</td>
                            <td>{{ $item->nidn }}</td>
                            <td>
                                @if($item->pdf != null)
                                    <a class="btn btn-primary" download href="{{ asset('storage/uploads/'.$item->pdf) }}">Download PDF</a>
                                @else
                                    <a class="text-secondary" download href="javascript:void(0)">Tidak ada file PDF</a>
                                @endif
                              </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush


