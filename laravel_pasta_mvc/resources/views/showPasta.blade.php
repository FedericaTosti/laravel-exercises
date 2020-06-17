@extends('mainLayout')

@section('content')

  <h1> {{ $card["titolo"] }} </h1>
  <img src="{{ $card["src"] }}" alt="{{ $card["titolo"] }}">
  <p> Cottura: {{ $card["cottura"] }} --- <span> Peso: {{ $card["peso"] }} </span> </p>
  <h4>Descrizione: </h4>
  <p> {!! $card["descrizione"] !!} </p>

@endsection
