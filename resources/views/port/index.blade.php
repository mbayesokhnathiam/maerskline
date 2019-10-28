@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-10">
            <div class="w-100 d-flex align-items-center justify-content-between">
                <h1>Ports</h1>
                <form action="/search" method="POST" role="search">
                    <div class="input-group">
                        @csrf
                        <input type="text" class="form-control shadow-sm" name="q"
                            placeholder="Search Port Code ...">
                        <span class="input-group-btn">
                            <button type="submit" class="btn btn-default">
                                <span class="fas fa-search"></span>
                            </button>
                        </span>
                    </div>
                </form>
                {{-- <a class="btn btn-sm btn-success shadow-sm rounded-0" href="#">Ajouter une shipping line</a> --}}
            </div>
            <div class="mt-3 shadow w-100">
                <table class="table table-striped w-100">
                    <thead>
                        <tr>
                            <th>Port Code</th>
                            <th>Port City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ports as $port)
                            <tr>
                                <td>{{ $port->port_code }}</td>
                                <td>{{ $port->port_city }}</td>
                                <td>
                                    <a class="btn btn-sm bg-maersk-primary font-weight-bold text-white rounded-0" href="#" data-toggle="modal" data-target="#exampleModalCenter">Mettre a jour</a>
                                </td>
                                {{--   href="{{ url('/port/update/' . $port->id) }}"  --}}
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex align-items-center justify-content-center w-100">
                {{ $ports->links() }}
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content rounded-0">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Mettre a jour</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <div class="d-flex my-3">
                <input class="form-control rounded-0" type="text" placeholder="Code ...">
            </div>

            <div class="d-flex my-3">
                <input class="form-control mr-1 rounded-0" type="text" placeholder="City ...">
                <input class="form-control ml-1 rounded-0" type="text" placeholder="Country ...">
            </div>

            <div class="d-flex my-3">

                <input class="form-control mr-1 rounded-0" type="text" placeholder="Cluster ...">
                <input class="form-control ml-1 rounded-0" type="text" placeholder="Route ...">
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary rounded-0">Save changes</button>
        </div>
        </div>
    </div>
</div>
@endsection
