@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <h2> {{ $comic->title }}</h2>
            <div class="mt-4">
                @if (!empty($comic->thumb))
                    <img class="w-25" src="{{ $comic->thumb }}" alt="">
                @else
                    <p>Niente immagine</p>
                @endif
            </div>
            <dl>
                <dt>Nome</dt>
                <dd>{{ $comic->title }}</dd>
                <dt>Tipologia</dt>
                <dd>{{ $comic->type }}</dd>
                <dt>tipo di fumetto</dt>
                <dd>{{ $comic->type }}</dd>
                <dt>prezzo</dt>
                <dd>{{ $comic->price }}</dd>
            </dl>

            <p> {{ $comic->description }}</p>
        </div>
    </section>
@endsection
