@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="{{ route('comics.update', $details['id']) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input  value="{{ $details['title'] }}" type="text" name="title" class="form-control" id="title" placeholder="Enter name of your comic book">
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <input  value="{{ $details['description'] }}" type="text" name="description" class="form-control" id="description" placeholder="Enter comic book description">
                    </div>
                    <div class="form-group">
                        <label for="type">thumb</label>
                        <input  value="{{ $details['thumb'] }}" type="text" name="thumb" class="form-control" id="type" placeholder="Enter the comic book thumb">
                    </div>
                    <div class="form-group">
                        <label for="price">price</label>
                        <input  value="{{ $details['price'] }}" type="number" name="price" class="form-control" id="price" placeholder="Enter comic price">
                    </div>
                    <div class="form-group">
                        <label for="series">series</label>
                        <input  value="{{ $details['series'] }}" type="text" name="series" class="form-control" id="series" placeholder="Enter your comic book series">
                    </div>
                    <div class="form-group">
                        <label for="sale_date">sale date</label>
                        <input  value="{{ $details['sale_date'] }}" type="date" name="sale_date" class="form-control" id="sale_date" placeholder="Enter your comic book sale date">
                    </div>
                    <div class="form-group">
                        <label for="type">type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Select your book type</option>
                            <option value="comicBook" {{ $details['type'] == 'comicBook' ? 'selected' : NULL }}>Comic Book</option>
                            <option value="graphicNovel" {{ $details['type'] ==  'graphicNovel' ? 'selected' : NULL }}>Graphic Novel</option>
                            <option value="virtualAdventure" {{ $details['type'] ==  'virtualAdventure' ? 'selected' : NULL }}>Virtual-adventure</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection