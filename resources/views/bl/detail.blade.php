@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="d-flex justify-content-center align-items-center">
                    <div class="d-flex w-75 align-items-start justify-content-between mb-2 px-3 py-3">
                        <a href="{{ url('/bls') }}" class="btn btn-link font-weight-bold rounded-0">
                            <i class="fas fa-chevron-left ml-2"></i>
                            Go back
                        </a>
                        <h1>Nᵒ {{ $bl->bl_number }}</h1>
                    </div>
                </div>
                <div class="mt-3 w-100">
                    <div class="d-flex justify-content-center align-items-center">
                        <div class="bg-white shadow-sm d-flex flex-column w-75 align-items-start justify-content-between mb-2 px-3 py-3">
                            <div class="pl-2">
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
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-12 bg-white shadow-sm">
                <div class="d-flex flex-column w-100 align-items-start justify-content-between mb-2 px-3 py-3">
                    <div class="pl-2">
                        <div class="d-flex justify-content-between py-3">
                            <div class="mr-5">
                                <h5 class="font-weight-bold">Arrival Date</h5>
                                <h5 class="font-weight-bold">Number of 20</h5>
                                <h5 class="font-weight-bold">Number of 40</h5>
                                <h5 class="font-weight-bold">Containers of 20</h5>
                                <h5 class="font-weight-bold">Containers of 40</h5>
                            </div>

                            <div>
                                <h5>{{ $bl->arrival_date }}</h5>
                                <h5>{{ $bl->number_of_20 }}</h5>
                                <h5>{{ $bl->number_of_40 }}</h5>
                                <h5>{{ $bl->container_20 == 0 ? 0 : $bl->container_20 }}</h5>
                                <h5>{{ $bl->container_40 == '' ? '' : $bl->container_40 }}</h5>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
