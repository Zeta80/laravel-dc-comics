@extends('layouts.app')

@section('content')
    {{-- Banner --}}
    <section>
        <div class="container py-4">
            <h2 class="text-center">I fumetti del decennio</h2>
        </div>
    </section>
    {{-- /Banner --}}
    {{-- Table --}}
    <section>
        <div class="container mt-4">
            <div class="mb-4">
                <a href="/" class="btn btn-primary">torna alla home</a>
                <a href="" class="btn btn-primary">aggiungi fumetto</a>
            </div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Prezzo</th>
                        <th scope="col">Data di rilascio</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->price }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <a href="" class="btn btn-primary">
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    {{-- Table --}}
@endsection
