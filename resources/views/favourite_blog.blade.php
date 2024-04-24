@extends('layouts.app')

@section('content')

    user adatok:<br>
    @auth()
        id: {{ Auth::user()->id }}
        <br>
        név: {{ Auth::user()->name }}
    @endauth
    <br><br>

    fő topic-on bellüli al témák
    @foreach($topics as $topic)
        <li>{{ $topic->name }}</li>
        <li>{{ $topic->created_at }}</li>
    @endforeach
    <br><br>

    topic types (szűrő feltételnek is jó, alapból kiiratni minden topic-ot)
    @foreach($topic_types as $topic_type)
        <li>{{ $topic_type->name }}</li>
    @endforeach
    <br><br>

    favourite topic (csak a felhasználónak megjeleníteni a saját kedvenceit)
    + kell egy ikon/gomb amivel tudja menteni a kedvencei közé
    ++ ehhez api
    <br>
    @foreach($favourite_topics as $favourite_topic)
        {{ $favourite_topic }}
    @endforeach
    <br><br>

@endsection
