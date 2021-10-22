<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

    <!-- chartJS -->
{{--    <script src="https://code.highcharts.com/highcharts.js"></script>--}}

    <title>@yield('title')</title>
    @yield('style')
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary fixed-top">
        <div class="container">
            <a class="navbar-brand text-white" href="{{url('')}}">
                <img src="{{url('assetAdmin/foto/logoudinus.png')}}" alt="" class="img-fluid" style="max-width:200px; height:55px;">
            </a>
            <button class="navbar-toggler bg-light" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="{{url('')}}">Home</a>
                    </li>
                    <li class="nav-item dropdown btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Profile
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('sejarahsingkat')}}">Sejarah Singkat</a>
                            <a class="dropdown-item" href="{{url('visimisi')}}">Visi dan Misi</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link dropdown-toggle text-light " href="#" id="navbarDropdownMenuLink"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Arsip
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="{{url('majalahinternal1')}}">Majalah Internal</a>
                            <a class="dropdown-item" href="{{url('majalaheksternal1')}}">Majalah Eksternal</a>
                            <a class="dropdown-item" href="{{url('penelitianudinus')}}">Penelitian</a>
                            <a class="dropdown-item" href="{{url('pengabdian1')}}">Pengabdian Kepada Masyarakat</a>
                            <a class="dropdown-item" href="{{url('prosiding1')}}">Prosiding</a>
                            <a class="dropdown-item" href="{{url('tugasakhir')}}">Tugas Akhir</a>
                        </div>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="#">Galery</a>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="{{url('kontak')}}">Kontak</a>
                    </li>
                    <li class="nav-item btn btn-info btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="{{url('statistik')}}">Statistik</a>
                    </li>
                    <li class="nav-item btn btn-outline-success btn-sm mr-1 mt-1">
                        <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="section">
        @yield('container');
    </section>

    <!-- Footer Start -->
    <footer class="bg-primary text-white p-2 mt-2">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>FAKULTAS</h5><hr class="bg-light col-md-4">
                    <a href="https://fik.dinus.ac.id/" target="_blank" class="text-light">Fakultas Ilmu Komputer</a><br>
                    <a href="https://dinus.ac.id/faculty/42/humanities" target="_blank" class="text-light">Fakultas Ilmu Budaya</a><br>
                    <a href="https://dinus.ac.id/faculty/45/enginering" class="text-light" target="_blank">Fakultas Teknik</a><br>
                    <a href="https://dinus.ac.id/faculty/44/health-science" class="text-light" target="_blank">Fakultas Kesehatan</a><br>
                    <a href="https://dinus.ac.id/faculty/40/economics-business" class="text-light" target="_blank">Fakultas Ekonomi dan Bisnis</a><br>
                    <a href="#" class="text-light" target="_blank">Pasca Sarjana</a>
                </div>
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>MANAJEMEN</h5><hr class="bg-light col-md-4">
                    <a href="http://kpm.dinus.ac.id/" class="text-light" target="_blank">Kantor Penjamin Mutu</a><br>
                    <a href="#" class="text-light" target="_blank">Lembaga Kerjasama</a><br>
                    <a href="http://aset.dinus.ac.id/" class="text-light" target="_blank">Sarana dan Prasarana</a><br>
                    <a href="http://cc.dinus.ac.id/" class="text-light" target="_blank">Career Centre</a><br>
                    <a href="http://lppm.dinus.ac.id/" class="text-light" target="_blank">Penelitian dan Pengabdian</a><br>
                    <a href="https://repository.dinus.ac.id/" class="text-light" target="_blank">Repository</a><br>
                    <a href="http://eprints.dinus.ac.id/" class="text-light" target="_blank">Document Gateway</a><br>
                    <a href="http://simlitabmas.lppm.dinus.ac.id/" class="text-light" target="_blank">Simlitabmas</a>
                </div>
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>AKADEMIK</h5><hr class="bg-light col-md-4">
                    <a href="https://dinus.ac.id/student" class="text-light" target="_blank">SiAdin Mahasiswa</a><br>
                    <a href="https://dinus.ac.id/staf" class="text-light" target="_blank">SiAdin Dosen</a><br>
                    <a href="http://academic.dinus.ac.id/" class="text-light" target="_blank">Sistem Informasi Akademik</a><br>
                    <a href="http://simpeg.dinus.ac.id/auth" class="text-light" target="_blank">Sistem Informasi Kepegawaian</a><br>
                    <a href="#" class="text-light" target="_blank">Sistem Informasi Wisuda</a><br>
                    <a href="#" class="text-light" target="_blank">Sistem Informasi Tugas Akhir</a><br>
                    <a href="https://dinus.ac.id/kerjapraktek/" class="text-light" target="_blank">Sistem Informasi Kerja Praktek</a>
                </div>
                <div class="col-md-3">
                    <hr class="bg-light col-md-4">
                    <h5>FASILITAS</h5><hr class="bg-light col-md-4">
                    <a href="#" target="_blank" class="text-light">Mirror IKC</a><br>
                    <a href="https://kulino.dinus.ac.id/" target="_blank" class="text-light">Kulino</a><br>
                    <a href="https://www.youtube.com/user/dinuschannel" target="_blank" class="text-light">Video Kampus</a><br>
                    <a href="http://tvku.tv/live" target="_blank" class="text-light">TV Kampus</a><br>
                    <a href="#" target="_blank" class="text-light">Digital Library</a><br>
                    <a href="http://poli.dinus.ac.id/" target="_blank" class="text-light">Poliklinik</a><br>
                    <a href="#" target="_blank" class="text-light">Forum Diskusi</a><br>
                    <a href="http://e-gamelanku.dinus.ac.id/" target="_blank" class="text-light">E-Gamelan</a><br>
                </div>
            </div>
            <hr class="bg-light">
            <div class="row">
                <div class="col-sm-12 mt-1 text-center">
                    <p>Copyright © 2020 LPPM UDINUS | All
                        rights reserved</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Footer End -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.5.0/jszip.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip-utils/0.1.0/jszip-utils.min.js" integrity="sha512-3WaCYjK/lQuL0dVIRt1thLXr84Z/4Yppka6u40yEJT1QulYm9pCxguF6r8V84ndP5K03koI9hV1+zo/bUbgMtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/1.3.8/FileSaver.js"></script>
    {{-- <script type="text/javascript" src="../assetAdmin/asset/my_helper.js" crossorigin="anonymous"></script> --}}
    <script type="text/javascript" src="../assetAdmin/asset/my_js.js" crossorigin="anonymous"></script>
{{-- <script src="../assetAdmin/asset/runner.js"></script> --}}
{{-- <script>
    global.jQuery = require('jquery')
    require('../assetAdmin/asset/jquery-multidownload.js')

    $('#download_all').click(function (event) {
    event.preventDefault();
    $('.document').multiDownload();
});
</script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

    @stack('js')

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
</body>

</html>
