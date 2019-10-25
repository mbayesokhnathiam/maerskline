@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="w-100 d-flex align-items-center justify-content-center">
                    <h1>Delivery Slips</h1>
                    {{-- <a class="btn btn-sm btn-success shadow-sm rounded-0" href="#">Ajouter une shipping line</a> --}}
                </div>
                <div class="mt-3 w-100">
                    @foreach ($bls as $bl)
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="bg-white shadow-sm d-flex flex-column w-75 align-items-start justify-content-between mb-2 px-3 py-3">
                            <div class="pl-2">
                                <h5 class="font-weight-bolder ">Nᵒ {{ $bl->bl_number }}</h5>

                                <div class="d-flex justify-content-between py-3">
                                    <div class="mr-5">
                                        <h5 class="font-weight-bold">Cargo Type</h5>
                                        <h5 class="font-weight-bold">Owner</h5>
                                        <h5 class="font-weight-bold">Shipper</h5>
                                        <h5 class="font-weight-bold">Commodity</h5>
                                    </div>

                                    <div>
                                        <h5>{{ $bl->cargo_type }}</h5>
                                        <h5>{{ $bl->order }}</h5>
                                        <h5>{{ $bl->shipper }}</h5>
                                        <h5>{{ $bl->commodity }}</h5>
                                    </div>
                                </div>

                            </div>
                            <div class="d-flex justify-content-between pl-2 rounded-0">
                                <a class="btn bg-maersk-primary font-weight-bold p-2 px-4 h5 shadow-sm text-white rounded-0" href="{{ url('/bl/details/' . $bl->id) }}">Details</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center justify-content-center w-100">
                    {{ $bls->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
