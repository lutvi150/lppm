@extends('template/template')

@section('title','Prosiding Udinus')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container">
            <h1 class="text-center mt-5">Daftar Prosiding Universitas Dian Nuswantoro</h1>
            <hr>
            <br>
            <table class="table mt-3" id="example">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>ISSN</th>
                        <th>Periode</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($prosiding1 as $item)
                        <tr>
                        <td><a href="/penelitian/detailprosiding/{{ $item->id }}">{{ $item->judul }}</a></td>
                            <td>{{ $item->issn }}</td>
                            <td>{{ date('F, Y', strtotime($item->periode)) }}</td>
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

@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
