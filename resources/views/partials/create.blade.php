@extends('layout.app')


@section('title', 'Insert new comic')
    
@section('content')    
    
    <section>
        <h3>New Comic</h3>

        <form action="{{route("comics.store")}}" method="POST">
            @csrf

            <div class="mb-3">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" id="title" name="title" placeholder="Insert the title">   
              @error('title')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror         
            </div>
            
            <div class="mb-3">
              <label for="description" class="form-label">Description</label>
              <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description" placeholder="Insert the description">{{old('description')}}</textarea>    
              @error('description')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror       
            </div>

            <div class="mb-3">
              <label for="thumb" class="form-label">Thumb</label>
              <input type="text" class="form-control @error('thumb') is-invalid @enderror"  value="{{old('thumb')}}" id="thumb" name="thumb" placeholder="Insert the thumb">            
              @error('thumb')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror  
            </div>

            <div class="mb-3">
              <label for="price" class="form-label">Price</label>
              <input type="number" class="form-control @error('price') is-invalid @enderror"  value="{{old('price')}}" id="price" name="price" min="0.00" max="10000.00" step="0.01" placeholder="Insert the price">            
              @error('price')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="series" class="form-label">Series</label>
              <input type="text" class="form-control @error('series') is-invalid @enderror"  value="{{old('series')}}" id="series" name="series" placeholder="Insert the series: ">            
              @error('series')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="sale_date" class="form-label">Sale date</label>
              <input type="date" class="form-control @error('sale_date') is-invalid @enderror"  value="{{old('sale_date')}}" id="sale_date" name="sale_date" min="1940-01-01" max="2022-03-10">            
              @error('sale_date')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label for="type" class="form-label">Type</label>
              <input type="text" class="form-control @error('type') is-invalid @enderror"  value="{{old('type')}}" id="type" name="type" placeholder="Insert the type: ">            
              @error('type')
                  <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>        


            <a href="{{route("comics.index")}}"><button type="submit" class="btn btn-primary">Submit</button></a>
        </form>

        @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
                  <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
            
        @endif
    </section>
    
    
@endsection