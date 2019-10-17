@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Liste des Shipping Line</h1>
                <div class="mt-3 w-100">
                    @foreach ($shipping_lines as $shipping_line => $ship_line)
                        <div class="bg-white shadow-sm d-flex w-100 align-items-center justify-content-between px-2 py-3 mb-2">
                            <h4>{{ $ship_line->name }}</h4>
                            <div class="d-flex justify-content-between w-14">
                                <a class="btn btn-sm btn-warning ml-2" href="#">Modifier</a>
                                <a class="btn btn-sm btn-danger" href="#">Supprimer</a>
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
