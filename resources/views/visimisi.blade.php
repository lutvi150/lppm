@extends('template/template');

@section('title','Visi dan Misi');

@section('container')
<div class="container mt-2">
    <div class="jumbotron bg-light">
        <h1 class="text-center">Visi dan Misi LPPM</h1>
        <hr>

        <div class="container">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="assetAdmin/foto/bgvisi.jpg" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-center">VISI</h5>
                            <h5 class="card-text text-justify">Menghasilkan produk-produk penelitian dan pengabdian masyarakat yang bermutu, berkelanjutan dan berorientasi pada pengembangan IPTEKS serta bermanfaat bagi masyarakat, pemerintah dan dunia usaha.</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title text-center">MISI</h5>
                            <h5 class="card-text">
                                <table class="table table-borderless text-justify">
                                    <tbody>
                                        <tr>
                                            <td><i class="fas fa-dot-circle"></i></td>
                                            <td>Menyelenggarakan kegiatan penelitian dan pengabdian masyarakat yang berkualitas dan berkelanjutan serta berorientasi pada peningkatan penyelenggaraan pendidikan dan peningkatan IPTEKS.</td>
                                        </tr>
                                        <tr>
                                            <td><i class="fas fa-dot-circle"></i></td>
                                            <td>Menumbuhkembangkan kreatifitas dan inovasi civitas akademika untuk menghasilkan produk-produk penelitian dan pengabdian masyarakat yang bermanfaat bagi masyarakat, pemerintah dan dunia usaha.</td>
                                        </tr>
                                    </tbody>
                                </table>
                                
                                
                            </h5>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="assetAdmin/foto/bgmisi.jpg" class="card-img" alt="...">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
