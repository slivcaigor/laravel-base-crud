@extends('layouts.main-layout')

@section('content')
    
    <h1>{{ $santo -> nome }} - {{ $santo -> numeroMiracoli }}</h1>
    <h3>Luogo Nascita: {{ $santo -> luogoNascita }}</h3>
    <h3>Data Benedizione: {{ $santo -> dataBenedizione }}</h3>
    
@endsection