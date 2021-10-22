@extends('template/template');

@section('title','Kontak | LPPM UDINUS');

@section('container')
<div class="container mt-2" style="padding-top: 30px">
    <h1 class="mt-5 text-dark text-center">KONTAK LPPM</h1>
    <hr>

    <div class="row">
        <div class="col-md-6">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d247.51508573158824!2d110.40895044181416!3d-6.980819493325563!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708b4ea93e6aff%3A0x9690ab4b18cbdd50!2sUDINUS%20Career%20Center!5e0!3m2!1sid!2sid!4v1606549606365!5m2!1sid!2sid"
                    width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                    tabindex="0"></iframe>
            </div>
        </div>
        <div class="col-md-6">
            <h3 class="text-center mt-3">Office Location</h3>
            <hr class="text-dark col-md-6">
            <table class="table table-borderless">
                <tbody>
                    <tr><td colspan="4">Sekretariat Universitas Dian Nuswantoro</td></tr>
                    <tr><td colspan="4">Jl. Nakula I No. 5-11 Semarang | Jl. Imam Bonjol No. 207 Semarang</td></tr>
                    <tr>
                        <td><i class="fas fa-phone-alt"></i></td>
                        <td>(024) 3517261</td>
                        <td><i class="fas fa-envelope"></i></td>
                        <td>sekretariat@lppm.dinus.ac.id</td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-fax"></i></td>
                        <td>fax : (024) 3569684</td>
                        <td><i class="fas fa-address-card"></i></td>
                        <td>Kode Pos : 50131</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection;
