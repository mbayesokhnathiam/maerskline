@extends('layouts.app')

@section('content')
    <div class="container pb-2 mb-2">
        <a class="bg-maersk-primary btn btn-sm h3 py-2 text-white">Ajouter une shipping line</a>
    </div>

    <table class="container table w-100">
        <thead>
            <tr>
                <th>Shipping Lines</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($shipping_lines as $shipping_line => $ship_line)

                <tr>
                    <td>{{ $ship_line->name }}</td>
                </tr>

            @endforeach
        </tbody>

    </table>

    <div class="d-flex align-items-center justify-content-center w-100">
        {{ $shipping_lines->links() }}
    </div>
@endsection
