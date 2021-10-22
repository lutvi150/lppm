@extends('template/template')

@section('title','Majalah Eksternal Udinus')

@section('container')
<div class="container mt-5 d-flex">
    <div class="row">
        <div class="container">
            <h1 class="text-center mt-5 d-flex">Daftar Majalah Eksternal Universitas Dian Nuswantoro</h1>
            <hr>
            <form class="form-inline my-3 float-right" method="POST" action="cari1">
                @csrf
                <input class="form-control mr-sm-2" type="search" placeholder="Cari Data Disini" aria-label="Search">
                <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fas fa-search"> Cari</i></button>
            </form>
            <br>
            <br>
            <div class="row mt-5">
                <form action="#" id="download_form">
                <?php
                $no =0;
                foreach ($majalaheksternal as $item ){
                    $no ++;
                ?>
                <div class="col-md-3 ">
                    <div class="card" >
                        <img class="card-img-top" src="{{ asset('assetAdmin/foto/book.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <td><a href="/majalaheksternal/detailmajalaheksternal/{{ $item->id }}">{{ $item->judul }}</a></td>
                            <br></br>
                            Penulis : <span class="badge badge-warning">{{$item->peneliti}}</span>
                            NPP : <span class="badge badge-success">{{$item->npp}}</span>
                            NIDN : <span class="badge badge-info">{{$item->nidn}}</span>
                            JabFungsional : <span class="badge badge-danger">{{$item->jabfung}}</span>
                            
                        </div>
                    </div>
                    <div class="card-footer">
                        @if($item->pdf != null)
                        <input type="checkbox" data-url="{{asset('assetAdmin/upload/'.$item->pdf)}}"/>
                        {{-- <input type="checkbox" id="download_pram"> --}}
                        <a id="<?=$no?>" class="link btn btn-primary document" download href="{{asset('assetAdmin/upload/'.$item->pdf)}}"">Download PDF</a>
                        @else
                        <a class="btn btn-secondary" download href="javascript:void(0)">Tidak ada file PDF</a>
                        @endif
                    </div>
                </div>
                <?php }?>
                <button type="submit" class="btn btn-primary">Unduh semua</button>
                </form>
                <div class="progress hide" id="progress_bar">
                    <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%;">
                    </div>
                </div>
                
                <p class="hide" id="result"></p>
            </div>
        </div>
    </div>
</div>
{{-- <script src="../assetAdmin/asset/jquery-multidownload.js"></script>
<script>
    global.jQuery = require('jquery')
    require('jquery-multidownload')

    $('#download_all').click(function (event) {
    event.preventDefault();
    $('.document').multiDownload();
});
</script> --}}
@endsection
