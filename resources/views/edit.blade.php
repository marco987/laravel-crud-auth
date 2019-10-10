@extends('layouts.layout_base')

@section('section')

  <h2> <a href="{{Route('home')}}">Home</a> </h2>

  <form action="{{Route('update', $person -> id)}}" method="post">
    @csrf
    @method('POST')

    <label for="name">Nome e Cognome</label>
    <input type="text" name="name" value="{{$person -> name}}">
    <label for="race">Nazionalità (2 lettere)</label>
    <input type="text" name="race" value="{{$person -> race}}">
    <label for="cat_rfid">Codice</label>
    <input type="text" name="cat_rfid" value="{{$person -> cat_rfid}}">

    <button type="submit">SALVA modifica</button>

  </form>

@endsection
