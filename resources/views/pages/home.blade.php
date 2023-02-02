@extends('layouts.main-layout')

@section('content')

    <h1>Santi</h1>
    <ul>
        @foreach ($santi as $santo)
            <li>
                {{ $santo -> nome }} - {{ $santo -> numeroMiracoli }}
            </li>
        @endforeach
    </ul>

@endsection