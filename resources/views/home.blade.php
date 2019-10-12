@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Shipping Lines</span>

                <i class="fas fa-shipping-fast fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">1000</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="/shipping">Voir plus</a>
            </div>
        </div>

        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Vessels</span>

                <i class="fas fa-ship  fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">1000</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="/vessels">Voir plus</a>
            </div>
        </div>

        <div class="col-sm-4 col-12 my-2 my-sm-0 p-2 text-center">
            <div class="align-items-center bg-white d-flex flex-column justify-content-center px-3 py-4 shadow">
                <span class="h5 font-weight-bold">Bordereaux de Livraison (BL)</span>

                <i class="fas fa-file-invoice  fa-5x pt-3 text-black-50"></i>

                <span class="font-weight-lighter h4 my-3">1000</span>

                <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white shadow-sm text-uppercase" href="/bls">Voir plus</a>
            </div>
        </div>

    </div>
</div>
@endsection
