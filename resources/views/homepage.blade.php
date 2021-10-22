@extends('newTemplate.home')
@section('title','Home | LPPM UDINUS')
@section('container')
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
@endsection