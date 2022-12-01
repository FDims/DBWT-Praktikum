@extends('layout')
@section('content')
    @empty($gerichte)
        Es sind keine Gerichte vorhanden
    @endempty
    <ul>
        @foreach($gerichte as $key)
            @if($key['preis_intern']>2.0)
            <li>
                {{$key['name']}}
                {{$key['preis_intern']}}
            </li>
            @endif

        @endforeach
    </ul>
@endsection