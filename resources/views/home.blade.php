@extends('layouts.app')

@section('content')
<div class="container">
    <div class="align-items-end d-flex justify-content-end">
        <form action="/gainde" enctype="multipart/form-data" id="form-upload" method="POST">
            @csrf
            <input accept="text/plain" class="d-none" id="gainde-file" name="gainde_file" required type="file">
            <button class="btn bg-maersk-primary py-2 rounded-0 shadow text-white font-weight-bold" id="btn-upload">
                <span class="d-none spinner-border spinner-border-sm" role="status" aria-hidden="true" id="loading-spinner"></span>
                <span id="loading-text">Importer de Gainde</span>
                <i class="fas fa-download"></i>
            </button>
        </form>
    </div>

    <div class="row justify-content-center pt-3">
        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Shipping Lines</span>

                <i class="fas fa-shipping-fast fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">{{ $ships }}</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="{{ url('/shipping') }}">Voir plus</a>
            </div>
        </div>

        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Vessels</span>

                <i class="fas fa-ship  fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">{{ $vessels }}</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="{{ url('/vessels') }}">Voir plus</a>
            </div>
        </div>

        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Bordereaux de Livraison (BL)</span>

                <i class="fas fa-file-alt  fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">{{ $bls }}</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="{{ url('/bls') }}">Voir plus</a>
            </div>
        </div>

        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Ports</span>

                <i class="fas fa-globe-africa fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">{{ $ports }}</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="{{ url('/ports') }}">Voir plus</a>
            </div>
        </div>

    </div>
</div>
@endsection
