<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LPPM | Universitas Dian Nuswantoro</title>
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('style/images/logo_web.png') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/bootstraphome/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('style/assets/css/stylehome.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('style/assets/css/font-awesome.min.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="row header">
            <nav class="navbar navbar-default">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="{{ url('/') }}">
                            <img alt="LPPM-UDINUS" src="{{ asset('style/images/logo-header.png') }}" height="30" />
                        </a>
                    </div>
                    <!-- Untuk menampilkan menu -->
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="">Profil</a></li>
                            <li><a href="">Arsip</a></li>
                            <li><a href="">Galery</a></li>
                            <li><a href="">Kontak</a></li>
                            <li><a href="{{ url('statistik') }}">Statistik</a></li>
                            <li><a href="">Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container">
                <div class="col-md-7 infoheader">
                    <h1><strong>LPPM</strong></h1>
                    <h3>Lembaga Penelitian dan Pengabdian Kepada Masyarakat</h3>
                    <h4>
                        Penelitian dan pengabdian masyarakat yang bermutu, berkelanjutan dan berorientasi pada
                        pengembangan IPTEKS serta bermanfaat bagi masyarakat, pemerintah dan dunia usaha.
                        <br>
                    </h4>
                </div>
            </div>
        </div>
        <div class="row marq">
            <marquee behavior="scroll" scrolldelay="200" onmouseover="this.stop()" onmouseout="this.start()">
                Ketentuan Khusus Usulan Penelitian dan Pengabdian Internal Smt Genap 2019-2020
                &nbsp; &diams; &nbsp;
                Penjelasan dan Revisi Pengajuan Proposal Penelitian dan Pengabdian Internal 2019
                &nbsp; &diams; &nbsp;
                Penerimaan Proposal Program Penelitian
                &nbsp; &diams; &nbsp;
                Prosedur Pengusulan Penelitian IPTEKS
                &nbsp; &diams; &nbsp;
                Pengajuan Proposal Pengabdian Masyarakat
                &nbsp; &diams; &nbsp;
                Lembar Pengesahan Proposal
                &nbsp; &diams; &nbsp;
                Perpanjangan Waktu Pengajuan Proposal
                &nbsp; &diams; &nbsp;
            </marquee>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="container no-padding">
                <div class="col-md-8 content">
                    <div class="box">
                        <div class="container-fluid">
                            <div class="box-title">
                                <h3 class="title"><strong>Sambutan Ketua LPPM</strong></h3>
                            </div>
                            <div class="box-body slice table-responsive">
                                <h5>
                                    <p><img src="{{ asset('style/images/berita-1.jpeg') }}"
                                            alt="" width="705" height="527" /></p>
                                    <p><strong><em>(LPPM with&nbsp;Chairman of Research and Community Service Institute
                                                Technologi Bandung)&nbsp;</em></strong></p>
                                    <p>Universities in Indonesia have three missions composed of Educations, Research
                                        and Community Services. Those three missions are inseparable and lead to the
                                        convergence of the state of the art to the body of knowledge, science and
                                        technology. Dian Nuswantoro is committed to fostering its research and
                                        disseminates it as a form of community services to the society at large. Aside
                                        from the said missions, we also serve to facilitate and foster the enrollment of
                                        Intellectual Property Rights (I.P.R) to the Directorate General of Intellectual
                                        Property Rights, Ministry of Law and Human Rights.</p>
                                    <p>Dian Nuswantoro University has been striving to improve its core competences
                                        particularly in first, the development of creative industry, art and rich
                                        Javanese culture, second, the development of information and communication
                                        technology (I.C.T) for educations, society and government, third, the
                                        development of e-health and health technology. Those three aspects are
                                        underpinned by the development of sustainable social, economy and technology. We
                                        are committed to developing environmental friendly based social, economy and
                                        technology, by putting emphasis on local wisdom, cultural heritage, and Javanese
                                        cultural richness for instance e-gamelan and natural dyes-based batik.</p>
                                    <p>Dian Nuswantoro University is an open and broad-minded university that gets
                                        involved tie-up, alliances, and relations with foreign universities from various
                                        countries.</p>
                                    <p>&nbsp;</p>
                                    <p>Semarang, 18 Maret 2019</p>
                                    <p>Director of Research and Community Services.</p>
                                    <p>&nbsp;</p>
                                    <p>Dr. Eng. Yuliman Purwanto, M.Eng</p>
                                </h5>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="container-fluid">
                            <h3><strong>Berita Terbaru</strong></h3>
                            @for ($i = 0; $i <= 5; $i++)
                            <div class="col-md-12 slice">
                                <div class="col-md-2">
                                    <img class="img-responsive" src="{{ asset('style/images/icon-news.png') }}"
                                        width="100%">
                                </div>
                                <div class="col-md-10">
                                    <span id="title">
                                        <h4><strong>Title </strong></h4>
                                    </span>
                                    <p>Berita, <a href=""> Detail</a></p>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-6">
                                            <button type="button" class="btn btn-xs btn-info" data-toggle="modal"
                                                data-target="#berita" id="btnDetail" onclick="detail_berita()"><i class="fa fa-newspaper-o"></i>Detail</button>
                                        </div>
                                        <div class="col-md-6 col-xs-6 text-right">
                                            <span class="label label-warning">2020-03-30</span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            @endfor
                            <div class="clearfix"></div>
                            <div class="empty"></div>
                            <div class="col-md-12 text-center">
                                <a href="{{ url('berita') }}">Lihat Semua Berita</a>
                            </div>
                        </div>
                        <div class="modal fade" id="berita">
                            <div class="modal-dialog modal-lg box-body">
                                <div class="modal-content box">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                        <h4 class="modal-title text-success"><span
                                                class="fa fa-newspaper-o"></span>Detail Berita</h4>
                                    </div>
                                    <div class="modal-body no-padding">
                                        <table class="table table-striped" id="berita">
                                            <tr id="skode">
                                                <th width="20%">SKIM KODE</th>
                                                <td ></td>
                                            </tr>
                                            <tr id="snama">
                                                <th width="20%">SKIM NAMA</th>
                                                <td ></td>
                                            </tr>
                                            <tr>
                                                <th width="20%">JUDUL</th>

                                                <td ></td>
                                            </tr>
                                            <tr>
                                                <th width="20%">DESKRIPSI</th>
                                                <td ></td>
                                            </tr>
                                            <tr>
                                                <th width="20%">TANGGAL RILIS</th>
                                                <td ></td>
                                            </tr>
                                            <tr>
                                                <th width="20%">FILE</th>
                                                <td ></td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default"
                                            data-dismiss="modal">Tutup</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 sidebar">
                    <div class="box">
                        <div class="container-fluid">
                            <h3><strong>SKIM</strong></h3>
                            @for ($i = 0; $i < 4; $i++)
                            <div class="slice">
                                <span id="title">Penelitian Terapan Perguruan Tinggi</span>
                                <p>Sumber Dana: UDINUS</p>
                                <div class="row">
                                    <div class="col-md-4 col-xs-6">
                                        <a href="{{ url('skim') }}"
                                            class="btn btn-xs btn-success">Lihat Detail</a>
                                    </div>
                                    <div class="col-md-8 col-xs-6 text-right">
                                        <span class="label label-info label-lg">Anggota Maks: 4</span>
                                        <span class="label label-warning label-lg">Tahun: 2018</span>
                                    </div>
                                </div>
                            </div>
                            @endfor
                            <div class="clearfix"></div>
                            <div class="empty"></div>
                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <a href="">Lihat Semua SKIM</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="box">
                        <div class="container-fluid">
                            <h3><strong>Link Terkait</strong></h3>
                            <div class="row">
                                <ul class="nav nav-pills nav-stacked metadata">
                                    <li><a href="http://cc.dinus.ac.id/">Career</a></li>
                                    <li><a href="https://dinus.ac.id/sitemap">Sitemap</a></li>
                                    <li><a href="http://tvku.tv/">TVKU</a></li>
                                    <li><a href="http://eprints.dinus.ac.id/">E-Prints</a></li>
                                    <li><a href="http://repository.dinus.ac.id/">Repository</a></li>
                                    <li><a href="http://publikasi.dinus.ac.id/">Publication</a></li>
                                    <li><a href="http://dinustek.com/">Dinustek</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container no-padding">
            <div class="col-md-2 col-sm-2">
                <h4><strong>Sitemap</strong></h4>
                <ul class="list-unstyled">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{url('jadwal')}}">Jadwal</a></li>
                    <li><a href="{{url('pencarian')}}">Pencarian</a></li>
                    <li><a href="{{url('berita')}}">Berita</a></li>
                    <li><a href="{{url('tentang')}}">Tentang</a></li>
                    <li><a href="{{url('login')}}">Usulan</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-sm-6">
                <h4><strong>Contact Us</strong></h4>
                <div class="col-md-6 no-padding">
                    <address>
                        <strong>LPPM-UDINUS</strong>
                        <br>
                        Sekretariat Universitas Dian Nuswantoro Jl. Nakula I No. 5-11 Semarang Jl. Imam Bonjol No. 207
                        Semarang
                        <br />
                        <abbr title="phone">Telp:</abbr> (024) 351726<br />
                    </address>
                </div>
            </div>
            <div class="col-md-4 col-sm-4 text-center">
                <a href="{{ url('/') }}"><img src="{{ asset('style/images/logo-header.png') }}"></img></a>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 text-center copy">
                <strong>Copyright &copy; 2021 <a href="{{ url('/') }}">LPPM</a>.</strong> All
                rights reserved.
            </div>
        </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
