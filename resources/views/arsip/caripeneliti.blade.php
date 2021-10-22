@extends('template/template')

@section('title','Hasil Pencarian')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h1 class="text-center">Hasil Pencarian Terkait</h1>
            <hr>
            <form class="form-inline my-3 float-right" method="POST" action="cari">
                @csrf
                <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Cari Data Disini"
                    aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"> Cari</i></button>
            </form>
        </div>
        <div class="container">
            <table class="table mt-3">
                <tbody>
                    @if($penelitian==null)
                        <div class="alert alert-danger text-center font-weight-bold" role="alert">
                            -- Data yang anda cari tidak ditemukan --
                        </div>
                    @else
                        @foreach($penelitian as $p)
                        <tr>
                            <tr>
                                <td>
                                    <h5 class="text-justify">
                                        <a href="detail/{{$p->id}} ">{{$p->judul}}</a>
                                    </h5>

                                    Penulis : <span class="badge badge-warning">{{$p->peneliti}}</span>
                                    NPP : <span class="badge badge-success">{{$p->npp}}</span>
                                    NIDN : <span class="badge badge-info">{{$p->nidn}}</span>
                                    JabFungsional : <span class="badge badge-danger">{{$p->jabfung}}</span>
                                </td>
                            </tr>
                        </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
