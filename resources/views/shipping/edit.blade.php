@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row flex-column justify-content-center px-5">

            <div class="mt-3 pl-3">
                <h3>Voulez-vous continuer?</h3>
            </div>


            <div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 shadow-sm">
                <h5>{{ $shippingLine->name }}</h5>
                <div class="d-flex justify-content-between rounded-0">
                    <a class="btn btn-sm bg-maersk-primary mr-1 text-white rounded-0" href="{{ url('/shipping') }}">Annuler</a>
                    {{-- <a class="btn btn-sm btn-danger ml-1 rounded-0" href="{{ url('/shipping/remove/shipping-line/' . $shippingLine->id) }}">Supprimer</a> --}}
                </div>
            </div>



            <form action="{{ url('/shipping/edit/shipping-line/' . $shippingLine->id) }}" method="POST">
                <div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 shadow-sm">
                    @csrf
                    <input class="py-2 w-75" name="shippingLine" placeholder="New name..." type="text" required>
                    <div class="d-flex align-items-center rounded-0">
                        <input type="submit" class="btn btn-sm btn-success mr-1 px-3 text-white rounded-0" value="Save">
                        {{-- <a class="btn btn-sm btn-danger ml-1 rounded-0" href="{{ url('/shipping/remove/shipping-line/' . $shippingLine->id) }}">Supprimer</a> --}}
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
