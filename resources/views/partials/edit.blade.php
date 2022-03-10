@extends('layout.app')


@section('title', 'Insert new comic')
    
@section('content')    
    
    <section>
        <h3>Edit Comic</h3>

        <form action="{{route('comics.update',  $comic->id)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" placeholder="Insert the title">            
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" class="form-control" id="description" name="description" placeholder="Insert the description">{{$comic->description}}</textarea>           
            </div>
            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic->thumb}}" placeholder="Insert the thumb">            
            </div>
            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control" id="price" name="price" min="0.00" max="10000.00" step="0.01" value="{{$comic->price}}" placeholder="Insert the price">            
            </div>
            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}" placeholder="Insert the series: ">            
            </div>
            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale date</label>
              <input type="date" min="1940-01-01" max="2022-03-10" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">            
            </div>
            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control" id="type" name="type" value="{{$comic->type}}" placeholder="Insert the type: ">            
            </div>        


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </section>
    
    
@endsection