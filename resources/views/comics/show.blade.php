@extends('layouts.app')

@section('title', 'Pagina iniziale')

@section('main-content')
    <section>

        <div class="container py-4">
            <h2>{{ $comic->title }}</h2>
            <div class="row">
                <div class="col mt-3">
                    <div class="row">

                        <img class="col-6" src="{{ $comic->thumb }}" alt="">

                        <div class="col-6">
                            <strong>{{ $comic->series }}</strong>
                            <p>{{ $comic->description }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
