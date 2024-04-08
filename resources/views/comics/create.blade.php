@extends('layouts.app')

@section('title', 'comic create')

@section('main-content')
    <section>

        <div class="container py-4">
            <h2>Add new Comic</h2>
            <form action="" method="POST">
                @csrf
                <div class="row">

                    <div class="mb-3  col-3">
                        <label for="title" class="form-label">Title:</label>
                        <input type="text" name="title" class="form-control" id="title">
                    </div>

                    <div class="mb-3  col-3">
                        <label for="series" class="form-label">Series:</label>
                        <input type="text" name="series" class="form-control" id="series">
                    </div>

                    <div class="mb-3  col-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" min=0 step=0.01 name="price" class="form-control" id="price">
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                </div>

            </form>
    </section>
@endsection
