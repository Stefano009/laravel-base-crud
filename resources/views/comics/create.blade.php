@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.store') }}" method="post">
                    @csrf
                    @method('POST')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Enter name of your comic book">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input type="text" name="description" class="form-control" id="description" placeholder="Enter comic book description">
                    </div>
                    <div class="form-group">
                        <label for="type">thumb</label>
                        <input type="text" name="thumb" class="form-control" id="type" placeholder="Enter the comic book thumb">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input type="number" name="price" class="form-control" id="price" placeholder="Enter comic price">
                    </div>
                    <div class="form-group">
                        <label for="series">series</label>
                        <input type="text" name="series" class="form-control" id="series" placeholder="Enter your comic book series">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">sale date</label>
                        <input type="date" name="sale_date" class="form-control" id="sale_date" placeholder="Enter your comic book sale date">
                    </div>
                    <div class="form-group">
                        <label for="type">type </label>
                        <input type="text" name="type" class="form-control" id="type" placeholder="Enter your comic book type">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection