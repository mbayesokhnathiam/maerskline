@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex justify-content-center align-items-center w-100">
                <div class="d-flex w-100  align-items-start justify-content-between mb-2 px-3 py-3">
                    <h1>Delivery Slips</h1>
                    <a href="{{ url('/export/bls/excel' . '/' . app('request')->input('startdate'). '/' . app('request')->input('endate') ) }}" class="btn btn-outline-success font-weight-bold rounded-0">
                        Exporter
                        <i class="fas fa-file-excel ml-2"></i>
                    </a>
                    <form action="{{ url('/bls') }}" class="form-horizontal d-flex justify-content-between" id="form-date" method="GET">
                        <input class="form-control d-inline-block rounded-0 w-75" type="text" id="daterangepicker">
                        <button class="btn bg-maersk-primary text-white rounded-0">Filtrer</button>
                        <input class="d-none" name="startdate" id="start-date">
                        <input class="d-none" name="endate" id="end-date">
                    </form>
                </div>
            </div>

            <div class="col-md-12 overflow-auto">
                <table class="table table-striped shadow">
                    <thead>
                        <tr>
                            <th>Nᵒ</th>
                            <th>Cargo Type</th>
                            <th>Owner</th>
                            <th>Shipper</th>
                            <th>Commodity</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($bls as $bl)
                            <tr>
                                <td class="align-middle">{{ $bl->bl_number }}</td>
                                <td class="align-middle">{{ $bl->cargo_type }}</td>
                                <td class="align-middle">{{ $bl->order }}</td>
                                <td class="align-middle">{{ $bl->shipper }}</td>
                                <td class="align-middle">{{ Str::limit($bl->commodity, 48) }}</td>
                                {{-- <td class="align-middle">{{ $bl->port_city }}</td> --}}
                                {{-- <td class="align-middle">{{ $bl->country }}</td>
                                <td class="align-middle">{{ $bl->cluster }}</td>
                                <td class="align-middle">{{ $bl->route }}</td> --}}
                                <td class="align-middle"><a class="btn bg-maersk-primary font-weight-bold p-2 px-4 h5 shadow-sm text-white rounded-0" href="{{ url('/bls/details/' . $bl->id) }}">Details</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="d-flex align-items-center justify-content-center mt-3 w-100">
                    {{ $bls->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
