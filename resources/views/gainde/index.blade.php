@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10">
                <div class="mt-3 w-100"></div>
                @foreach ($content as $item)
                    {{ dd($item) }}
                @endforeach
            </div>
        </div>
    </div>
@endsection
