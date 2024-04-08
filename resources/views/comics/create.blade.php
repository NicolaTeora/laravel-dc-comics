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
                        <input type="text" name="title" class="form-control" id="title" placeholder="title">
                    </div>

                    <div class="mb-3  col-3">
                        <label for="series" class="form-label">Series:</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="serie">
                    </div>

                    <div class="mb-3  col-3">
                        <label for="price" class="form-label">Price:</label>
                        <input type="number" min=0 step=0.01 name="price" class="form-control" id="price"
                            placeholder="00.00">
                    </div>

                    <div class="mb-3  col-3">
                        <label for="sale_date" class="form-label">Sale Date:</label>
                        <input type="datetime-local" min=0 step=0.01 name="sale_date" class="form-control" id="price">
                    </div>

                    <div class="mb-3  col-12">
                        <label for="thumb" class="form-label">Thumb:</label>
                        <input type="text" name="thumb" class="form-control" id="thumb" placeholder="http://img..">
                    </div>

                    <div class="col-12">
                        <label for="description" class="form-label">Description:</label>
                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                    </div>

                </div>
                <button type="submit" class="my-2 btn btn-success">Save</button>
            </form>
    </section>
@endsection
