@extends('layout.app')


@section('title', 'comics')
    
@section('content')    
    
<section>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">title</th>
            <th scope="col">description</th>
            <th scope="col">thumb</th>
            <th scope="col">price</th>
            <th scope="col">series</th>
            <th scope="col">sale_date</th>
            <th scope="col">type</th>
            <th scope="col">links</th>
        </tr>
        </thead>
        <tbody>

            @foreach ($comics as $comic)

        <tr>          
            <th scope="row">{{$comic->id}}</th>
            <td>{{$comic->title}}</td>
            <td>{{$comic->description}}</td>
            <td><img src="{{$comic->thumb}}" alt=""></td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>
                <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-info">Show</button></a>
                <a href="{{route("comics.edit", $comic->id)}}"><button type="button" class="mt-2 btn btn-success">Edit</button></a>
                <form action="{{route("comics.destroy", $comic->id)}}" method="POST">
                @csrf
                @method("DELETE")
                
                    <input class="mt-2 btn btn-danger" type="submit" value="Delete">
                </form>
            </td>
           
        </tr>

        @endforeach
        
        </tbody>
    </table>
    <a href="{{route("comics.create", $comic->id)}}"><button type="button" class="mb-5 btn btn-dark">Inserisci nuovo</button></a>
</section>
@endsection