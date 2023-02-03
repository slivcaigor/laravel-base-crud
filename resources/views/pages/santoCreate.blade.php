
@extends('layouts.main-layout')

@section('content')
    
    <h1>Aggiungi Nuovo Santo</h1>
    <form method="POST" action="{{ route('santo.store') }}">
        @csrf
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <br>
        <label for="luogoNascita">Luogo Nascita</label>
        <input type="text" name="luogoNascita">
        <br>
        <label for="dataBenedizione">Data Benedizione</label>
        <input type="date" name="dataBenedizione">
        <br>
        <label for="numeroMiracoli">Numero Miracoli</label>
        <input type="number" name="numeroMiracoli">
        <br>
        <input type="submit" value="Aggiungi Nuovo Santo">
    </form>

@endsection