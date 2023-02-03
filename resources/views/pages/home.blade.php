@extends('layouts.main-layout')

@section('content')

    <h1>Santi</h1>

    <a href="{{ route('santo.create') }}">Aggiungi Nuovo Santo</a>

    <ul>
        @foreach ($santi as $santo)
            <li>
                <a href="{{route('santo.show', ['id' => $santo -> id])}}">
                    {{ $santo -> nome }} - {{ $santo -> numeroMiracoli }}
                </a>

                <a href="{{route('santo.destroy', ['id' => $santo -> id])}}">
                    X
                </a>

  
            </li>
        @endforeach
    </ul>

@endsection