@extends('layouts.layout_base')

@section('section')

  <h2> <a href="{{Route('create')}}">Crea nuovo utente!</a> </h2>

  @foreach ($people as $person)

    <div class="box">
      <h3>Nome: {{$person -> name}}</h3>
      <p><b>Nazionalità:</b> {{$person -> race}}</p>
      <p><b>Codice:</b> {{$person -> cat_rfid}}</p>
      <p style="text-align: right"><b><a href="{{Route('edit', $person -> id)}}">Modifica</a></b></p>
      <p style="text-align: right"><b><a href="{{Route('destroy', $person -> id)}}">Elimina</a></b></p>
    </div>

  @endforeach

@endsection
