@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row flex-column justify-content-center px-5">

            <div class="mt-3 pl-3">
                <h3>Voulez-vous continuer?</h3>
            </div>

            <div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 shadow-sm">
                <h5>{{ $vessel->name }}</h5>
                <div class="d-flex justify-content-between rounded-0">
                    <a class="btn btn-sm bg-maersk-primary mr-1 text-white rounded-0" href="{{ url('/vessels') }}">Annuler</a>
                    {{-- <a class="btn btn-sm btn-danger ml-1 rounded-0" href="{{ url('/shipping/remove/shipping-line/' . $shippingLine->id) }}">Supprimer</a> --}}
                </div>
            </div>



            <form action="{{ url('/vessels/update/' . $vessel->id) }}" method="POST">
                <div class="d-flex flex-column justify-content-between bg-white mt-3 py-3 px-3 shadow-sm">
                    <div class="d-grid-2">
                        <label class="h5" for="code">Vessel</label>
                        <label class="h5" for="shipLine">Shipping Lines</label>
                    </div>
                    <div class="d-grid-2 pb-2">
                        @csrf
                        <input class="form-control py-2 px-2" name="code" type="text" value="{{ $vessel->name }}" readonly required>

                        <select name="shippingLine" id="shipLine">
                            @foreach ($shippingLines as $shipping)
                                <option value="{{ $shipping->id }}">{{ $shipping->name }}</option>
                            @endforeach
                        </select>

                    </div>

                    <div class="d-flex align-self-end align-items-end rounded-0">
                        <input type="submit" class="btn btn-sm btn-success px-3 text-white rounded-0" value="Save">
                    </div>
                </div>
            </form>

        </div>
    </div>
@endsection
