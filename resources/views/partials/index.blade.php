@extends('layout.app')


@section('title', 'comics')
    
@section('content')    
    
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
            <td>{{$comic->thumb}}</td>
            <td>{{$comic->price}}</td>
            <td>{{$comic->series}}</td>
            <td>{{$comic->sale_date}}</td>
            <td>{{$comic->type}}</td>
            <td>
                <a href="{{route("comics.show", $comic->id)}}"><button type="button" class="btn btn-info">Show</button></a>
            </td>
           
        </tr>

        @endforeach
        
        </tbody>
    </table>
    
@endsection