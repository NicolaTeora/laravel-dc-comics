@extends('layouts.app')

@section('title', 'comic info')

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
                            <strong>$ {{ $comic->price }}</strong>
                        </div>
                    </div>
                </div>
            </div>
            <button class="btn btn-link">
                <a href="{{ route('comics.index') }}"><- Back</a>
            </button>
        </div>

    </section>
@endsection
