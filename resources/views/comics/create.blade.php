@extends('layouts.app')

@section('title', 'comic create')

@section('main-content')
    <section>

        <div class="container py-4">
            <h2>Add new Comic</h2>
            <form>
                @csrf
                <div class="mb-3  col-3">
                    <label for="title" class="form-label">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="emailHelp">
                </div>
            </form>
    </section>
@endsection
