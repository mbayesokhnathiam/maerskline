@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <h1>Shipping Lines</h1>
                    <a class="btn btn-sm btn-success shadow-sm rounded-0" href="#">Ajouter une shipping line</a>
                </div>
                <div class="mt-3 w-100">
                    @foreach ($shipping_lines as $shipping_line => $ship_line)
                        <div class="bg-white shadow-sm d-flex w-100 align-items-center justify-content-between px-3 py-3 mb-2">
                            <h5>{{ $ship_line->name }}</h3>
                            <div class="d-flex justify-content-between w-17 rounded-0">
                                <a class="btn btn-sm bg-maersk-primary text-white rounded-0" href="#">Modifier</a>
                                <a class="btn btn-sm btn-danger rounded-0" href="#">Supprimer</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center justify-content-center w-100">
                    {{ $shipping_lines->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
