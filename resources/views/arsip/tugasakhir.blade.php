@extends('template/template')

@section('title','Tugas Akhir')

@section('container')

<div class="container mt-5">
    <div class="row">
        <div class="container">
            <h1 class="text-center mt-5">Daftar Tugas Akhir Universitas Dian Nuswantoro</h1>
            <hr>
            <script type='text/javascript'>

</script>
<div id="main">
    <div class="entry-content">
        <article class="post">
            <h6>Pencarian: </h6>
            <div class="row">
                <div class="col-3">
                    <label for="judul"><h6>Judul</h6></label>
                    <input type="text" class="form-control" placeholder="Cari Judul" id="judul">
                </div>
                <div class="col-3">
                    <label for="wisuda"><h6>Angkatan Wisuda</h6></label>
                    <select id="wisuda" class="form-control">
                        <option value="" selected="selected">- Silahkan Pilih -</option>
                            <option value="71">71 (2021-04-21 07:00:00)</option>
                            <option value="70">70 (2020-09-30 07:00:00)</option>
                            <option value="69">69 (2020-03-18 07:00:00)</option>
                            <option value="68">68 (2019-11-27 07:00:00)</option>
                            <option value="67">67 (2019-08-29 07:00:00)</option>
                            <option value="66">66 (2019-08-28 07:00:00)</option>
                            <option value="65">65 (2019-03-27 07:00:00)</option>
                            <option value="64">64 (2018-11-28 07:00:00)</option>
                            <option value="63">63 (2018-08-29 07:00:00)</option>
                            <option value="62">62 (2018-04-11 00:00:00)</option>
                            <option value="61">61 (2017-12-06 00:00:00)</option>
                            <option value="60">60 (2017-08-26 00:00:00)</option>
                            <option value="59">59 (2017-03-27 00:00:00)</option>
                            <option value="58">58 (2016-11-30 00:00:00)</option>
                            <option value="57">57 (2016-08-24 00:00:00)</option>
                            <option value="56">56 (2016-03-30 00:00:00)</option>
                            <option value="55">55 (2015-11-25 00:00:00)</option>
                            <option value="54">54 (2015-08-26 00:00:00)</option>
                            <option value="53">53 (2015-04-01 00:00:00)</option>
                            <option value="52">52 (2014-11-26 00:00:00)</option>
                            <option value="51">51 (2014-08-20 00:00:00)</option>
                            <option value="50">50 (2014-03-26 00:00:00)</option>
                            <option value="49">49 (2013-11-20 00:00:00)</option>
                            <option value="48">48 (2013-11-13 00:00:00)</option>
                            <option value="47">47 (2013-08-28 00:00:00)</option>
                            <option value="46">46 (2013-03-27 00:00:00)</option>
                            <option value="45">45 (2012-10-31 00:00:00)</option>
                            <option value="44">44 (2012-10-24 00:00:00)</option>
                            <option value="43">43 (2012-04-04 00:00:00)</option>
                            <option value="42">42 (2011-10-05 00:00:00)</option>
                            <option value="41">41 (2011-05-04 00:00:00)</option>
                            <option value="40">40 (2011-04-27 00:00:00)</option>
                            <option value="39">39 (2010-10-13 00:00:00)</option>
                            <option value="38">38 (2010-10-06 00:00:00)</option>
                            <option value="37">37 (2010-04-21 00:00:00)</option>
                            <option value="36">36 (2009-10-28 00:00:00)</option>
                            <option value="35">35 (2009-10-31 00:00:00)</option>
                            <option value="34">34 (2009-04-20 00:00:00)</option>
                            <option value="33">33 (2008-10-22 00:00:00)</option>
                            <option value="32">32 (2008-10-15 00:00:00)</option>
                            <option value="31">31 (2008-04-23 00:00:00)</option>
                            <option value="30">30 (2007-11-07 00:00:00)</option>
                            <option value="29">29 (2007-10-31 00:00:00)</option>
                            <option value="28">28 (2007-04-14 00:00:00)</option>
                            <option value="27">27 (2006-11-30 00:00:00)</option>
                            <option value="26">26 (2006-04-19 00:00:00)</option>
                            <option value="25">25 (2005-11-22 00:00:00)</option>
                            <option value="24">24 (2005-11-15 00:00:00)</option>
                            <option value="23">23 (2005-05-04 00:00:00)</option>
                            <option value="22">22 (2004-10-13 00:00:00)</option>
                            <option value="21">21 (2004-10-06 00:00:00)</option>
                            <option value="20">20 (2004-05-19 00:00:00)</option>
                            <option value="19">19 (2003-10-22 00:00:00)</option>
                            <option value="18">18 (2004-09-13 00:00:00)</option>
                            <option value="17">17 (2003-04-10 00:00:00)</option>
                            <option value="16">16 (2002-10-17 00:00:00)</option>
                            <option value="15">15 (2002-04-18 00:00:00)</option>
                            <option value="14">14 (2001-10-17 00:00:00)</option>
                            <option value="13">13 (2001-04-25 00:00:00)</option>
                            <option value="12">12 (2000-10-12 00:00:00)</option>
                            <option value="11">11 (2000-05-10 00:00:00)</option>
                            <option value="10">10 (1999-10-07 00:00:00)</option>
                            <option value="9">09 (1999-03-11 00:00:00)</option>
                            <option value="8">08 (1998-09-03 00:00:00)</option>
                            <option value="7">07 (1998-04-02 00:00:00)</option>
                            <option value="6">06 (1997-08-27 00:00:00)</option>
                            <option value="5">05 (1997-03-22 00:00:00)</option>
                            <option value="4">04 (1996-08-21 00:00:00)</option>
                            <option value="3">03 (1996-03-12 00:00:00)</option>
                            <option value="2">02 (1995-03-22 00:00:00)</option>
                            <option value="1">01 (1994-02-09 00:00:00)</option>
                            <option value="">Lainnya</option>
                    </select>
                </div>
                <div class="col-3">
                    <label for="fakultas"><h6>Fakultas</h6></label>
                    <select id="fakultas" class="form-control">
                        <option value="" selected="selected">- Silahkan Pilih -</option>
                            @foreach ($fakultas as $item)
                                <option value="{{ $item }}">{{ $item }}</option>
                            @endforeach
                    </select>
                </div>
            </div>
            <br>
            <table class="table mt-3" id="example">
                <thead>
                    <tr>
                        <th>Judul</th>
                        <th>Nama</th>
                        <th>NIM</th>
                        <th>Fakultas</th>
                        <th>Wisuda</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tugas_akhir as $item)
                        <tr>
                        <td><a href="/penelitian/detailtugasakhir/{{ $item->id }}">{{ $item->judul }}</a></td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->nim }}</td>
                            <td>{{ $item->fakultas }}</td>
                            <td>{{ $item->wisuda }}</td>
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
            let table = $('#example').DataTable();

        $('#judul').on('change', function () {
        table.columns(0).search( this.value ).draw();
        });

        $('#wisuda').on('change', function () {
            table.columns(4).search( this.value ).draw();
        });

        $('#fakultas').on('change', function () {
            table.columns(3).search( this.value ).draw();
        });
    });


    </script>
@endpush
