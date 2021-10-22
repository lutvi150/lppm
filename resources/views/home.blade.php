@extends('template/template');

@section('title','Home | LPPM UDINUS');

@section('container')
<div class="container">
    <div id="carouselExampleInterval" class="carousel slide mt-5" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-interval="10000">
                <img src="assetAdmin/foto/bgudinus.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item" data-interval="2000">
                <img src="assetAdmin/foto/udinus2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assetAdmin/foto/udinus3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container mt-2">
    <div class="jumbotron bg-light">
        <h1 class="text-center">Sambutan Direktur LPPM</h1>
        <hr>
        <div class="card mb-3">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="assetAdmin/foto/yuliman.jpg" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <p class="card-text text-justify">Universities in Indonesia have three missions composed
                            of Educations, Research and Community Services. Those three missions are inseparable
                            and lead to the convergence of the state of the art to the body of knowledge,
                            science and technology. Dian Nuswantoro is committed to fostering its research and
                            disseminates it as a form of community services to the society at large. Aside from
                            the said missions, we also serve to facilitate and foster the enrollment of
                            Intellectual Property Rights (I.P.R) to the Directorate General of Intellectual
                            Property Rights, Ministry of Law and Human Rights.
                            <br><br>Dian Nuswantoro University has been striving to improve its core competences
                            particularly in first, the development of creative industry, art and rich Javanese
                            culture, second, the development of information and communication technology (I.C.T)
                            for educations, society and government, third, the development of e-health and
                            health technology. Those three aspects are underpinned by the development of
                            sustainable social, economy and technology. We are committed to developing
                            environmental friendly based social, economy and technology, by putting emphasis on
                            local wisdom, cultural heritage, and Javanese cultural richness for instance
                            e-gamelan and natural dyes-based batik.
                            Dian Nuswantoro University is an open and broad-minded university that gets involved
                            tie-up, alliances, and relations with foreign universities from various countries.

                            <br><br>Semarang 1 Februari 2017. <br>
                            Director of Research and Community Services.
                            <br><br><br>Dr. Eng. Yuliman Purwanto, M.Eng
                        </p>
                        <p class="card-text float-right"><small class="text-muted">Last updated 25 November
                                2020</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
