@extends('layouts.app')

@section('content')
    <section>
        <div class="container mb-5">
            <a href="{{ route('comics.index') }}" class="btn btn-primary">torna alla lista</a>
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


            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline mb-5">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">
                    Delete
                </button>
            </form>
        </div>
    </section>
@endsection
