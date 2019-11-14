@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="w-100 d-flex align-items-center justify-content-between">
                    <h1>Vessels</h1>
                    @if (Session::has('updateStatus') and Session::get('updateStatus') == 1)
                        <div class="alert-info p-4">Vessel Updated</div>
                    @endif
                    {{-- <a class="btn btn-sm btn-success shadow-sm rounded-0" href="#">Ajouter une shipping line</a> --}}
                </div>
                <div class="mt-3 w-100">
                    @foreach ($vessels as $vessel)
                        <div class="bg-white shadow-sm d-flex w-100 align-items-center justify-content-between px-3 py-3 mb-2">
                            <h5>{{ $vessel->name }}</h3>
                            <div class="d-flex justify-content-between w-17 rounded-0">
                                <a class="btn btn-sm bg-maersk-primary text-white rounded-0" href="{{ url('/vessels/edit/' . $vessel->id) }}">Modifier</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex align-items-center justify-content-center w-100">
                    {{ $vessels->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
