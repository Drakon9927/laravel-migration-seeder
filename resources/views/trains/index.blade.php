@extends('layouts.app')

@section('content')
    <h1>Elenco Treni</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{ $train->company }} - Da {{ $train->start_station }} a {{ $train->end_station }}</li>
        @endforeach
    </ul>
@endsection