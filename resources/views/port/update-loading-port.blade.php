@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($ports as $port)
            <div class="row flex-column justify-content-center px-5">

                <div class="mt-3 pl-3">
                    <h3>Voulez-vous continuer?</h3>
                </div>


                <div class="d-flex justify-content-between bg-white mt-3 py-3 px-3 shadow-sm">
                    <h5>{{ $port->port_code }}</h5>
                    <div class="d-flex justify-content-between rounded-0">

                        <a class="btn btn-sm bg-maersk-primary mr-1 text-white rounded-0" href="{{ url('/ports') }}">Annuler</a>
                    </div>
                </div>

                <form action="{{ url('/ports/update-loadings-port/upgradePorts/' . $port->id ) }}" method="POST">
                    <div class="d-flex flex-column justify-content-between bg-white mt-3 py-3 px-3 shadow-sm">
                        <div class="d-grid-2 pb-2">
                            @csrf
                            <input class="form-control py-2 px-2" name="code" type="text" value="{{ $port->port_code }}" readonly required>

                            @csrf
                            <input class="form-control py-2" name="place" type="text" value="{{ $port->port_city }}" readonly required>

                            @csrf
                            <input class="form-control py-2" name="country" placeholder="Country ..." type="text" required>

                            @csrf
                            <input class="form-control py-2" name="route" placeholder="Route ..." type="text" required>

                            @csrf
                            <input class="form-control py-2" name="cluster" placeholder="Cluster ..." type="text" required>
                        </div>

                        <div class="d-flex align-self-end align-items-end rounded-0">
                            <input type="submit" class="btn btn-sm btn-success px-3 text-white rounded-0" value="Save">
                        </div>
                    </div>
                </form>

            </div>
        @endforeach
    </div>
@endsection
