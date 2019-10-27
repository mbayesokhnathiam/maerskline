@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="w-100 d-flex align-items-center justify-content-between">
                <h1>Shipping Lines</h1>

                @if ($insertStatus ?? '' == 1)
                    <div class="alert-success p-4">Shipping Line Saved</div>
                @endif

                @if ($deleteStatus ?? '' == 1)
                    <div class="alert-info p-4">Shipping Line Deleted</div>
                @endif

                @if ($updateStatus ?? '' == 1)
                    <div class="alert-info p-4">Shipping Line Updated</div>
                @endif

                <a class="btn btn-sm btn-success shadow-sm rounded-0" data-toggle="modal"
                    data-target="#add-shipping-line" href="#">Ajouter une shipping line</a>
            </div>
            <div class="mt-3 w-100">
                @foreach ($shipping_lines as $shipping_line => $ship_line)
                <div class="bg-white shadow-sm d-flex w-100 align-items-center justify-content-between px-3 py-3 mb-2">
                    <h5>{{ $ship_line->name }}</h3>
                    <div class="d-flex justify-content-between w-17 rounded-0">
                        <a class="btn btn-sm bg-maersk-primary text-white rounded-0" href="{{ url('/shipping/edit/' . $ship_line->id) }}">Modifier</a>
                        <a class="btn btn-sm btn-danger rounded-0" href="{{ url('/shipping/remove/' . $ship_line->id) }}">Supprimer</a>
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

<div class="modal fade" id="add-shipping-line" tabindex="-1" role="dialog" aria-labelledby="AddShippingLineCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="addShippingLine">Ajouter une Shipping Line</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/shipping/create') }}" id="add-shipping-line-form" method="POST">
                    <div class="form-row flex-column">
                        <label for="shippingLine">Shipping Line</label>
                        @csrf
                        <input id="shipping-line" name="shippingLine" placeholder="Shipping Line name ..." required type="text">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary rounded-0" data-dismiss="modal">Close</button>
                <button type="button" class="btn bg-maersk-primary rounded-0 text-white" onclick="document.getElementById('add-shipping-line-form').submit()">Save shipping line</button>
            </div>
        </div>
    </div>
</div>
@endsection
