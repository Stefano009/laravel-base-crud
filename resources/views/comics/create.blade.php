@extends('layouts.app')

{{-- @if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>  
@endif --}}
{{-- metodo per mostrare tutti gli errori ad inizio pagina --}}

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
                        @error('title')
                        <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        {{-- <input type="text" name="description" class="form-control" id="description" placeholder="Enter comic book description"> --}}
                        <textarea class="form-control" id="description" name="description" ></textarea>
                        @error('description')
                        <div class="alert alert-danger"> {{ $message }} </div>
                        @enderror
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
                        <label for="type">type</label>
                        <select name="type" id="type" class="form-control">
                            <option value="">Select your book type</option>
                            <option value="comicBook">Comic Book</option>
                            <option value="graphicNovel">Graphic Novel</option>
                            <option value="virtualAdventure">Virtual adventure</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection