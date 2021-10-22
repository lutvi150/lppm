@extends('template/template')

@section('title','Majalah Internal Udinus')

@section('container')
<div class="container mt-5">
    <div class="row">
        <div class="container">
            <h1 class="text-center mt-5">Daftar Majalah Internal Universitas Dian Nuswantoro</h1>
            <hr>
            <form class="form-inline my-3 float-right" method="POST" action="majalahinternal/cari1">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Data Disini" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"> Cari</i></button>
                
                
                
              
            </form>
            <a href="javascript:void(0)" id="download_all" class="btn btn-success">Unduh Semua</a>
            <br>
            <br>
            <div class="row mt-5">
                <?php
                    $no =0;
                foreach ($majalahinternal as $item) {
                
                    $no++;
                ?>
                <div class="col-3 mt-5">
                    <div class="card" >
                        <img class="card-img-top" src="{{ asset('assetAdmin/foto/book.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                        <td><a href="/majalahinternal/detailmajalahinternal/{{ $item->id }}">{{ $item->judul }}</a></td>
                        <br></br>
                        Penulis : <span class="badge badge-warning">{{$item->peneliti}}</span>
                                NPP : <span class="badge badge-success">{{$item->npp}}</span>
                                NIDN : <span class="badge badge-info">{{$item->nidn}}</span>
                                JabFungsional : <span class="badge badge-danger">{{$item->jabfung}}</span>

                        </div>
                      <div class="card-footer">
                        @if($item->pdf != null)
                        <input type="checkbox" id="download_pram">
                        <a id="{{$no}}" class="btn btn-primary" download href="{{ asset('assetAdmin/upload/'.$item->pdf) }}">Download PDF</a>
                        @else
                            <a class="btn btn-secondary" download href="javascript:void(0)">Tidak ada file PDF</a>
                        @endif
                      </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<script src="../assetAdmin/asset/runner.js"></script>

@endsection
