@extends('layout.app')


@section('title', 'Show comic')
    
@section('content')    
    
    <section>
        <div class="card" style="width: 18rem;">
            <img src="{{$comic->thumb}}" class="card-img-top" alt="img">
            <div class="card-body">
              <h5 class="card-title">Title: {{$comic->title}}</h5>
              <p class="card-text">Description: {{$comic->description}}</p>
            </div>
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Price: {{$comic->price}}</li>
              <li class="list-group-item">Series: {{$comic->series}}</li>
              <li class="list-group-item">Sale date: {{$comic->sale_date}}</li>
              <li class="list-group-item">Type: {{$comic->type}}</li>
            </ul>
            <div class="card-body">
              <a href="{{route("comics.index")}}" class="card-link"><button type="button" class="btn btn-info">Back to table</button></a>
              
            </div>
          </div>
    </section>
    
    
@endsection