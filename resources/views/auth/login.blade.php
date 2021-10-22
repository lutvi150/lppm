@extends('template/template');

@section('title','Login Admin');

@section('container')
<div class="content mt-3">

    <div class="animated fadeIn">
    <div class="container mt-5">
    <div class="row">
        <div class="container mt-5">
            <h1 class="text-center"> Login Admin</h1>
        </div>
        <div class="container">
            @if(session('pesan'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="fas fa-times"></i>
                <strong> {{ session('pesan') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
        </div>
        <div class="container col-md-6">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label>Email </label>
                    <input type="text" class="form-control" name="email">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>


                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>

</div>
</div>

@endsection;
