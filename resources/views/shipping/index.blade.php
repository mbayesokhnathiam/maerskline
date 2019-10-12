@extends('layouts.app')

@section('content')
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
