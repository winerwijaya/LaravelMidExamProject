@extends('layout.main')

@section('dropdown')
    @foreach($categories as $c)
    <li><a class="dropdown-item" href="/category/{{ $c->id }}">{{ $c->category}}</a></li>
    @endforeach
@endsection

@section('content')
    <h3>Detail buku</h3>
    <p>
        Title : {{$book->title}}
        <br><br>
        Author : {{$book->detail->author}}
        <br><br>
        Publisher : {{$book->detail->publisher}}
        <br><br>
        Year : {{$book->detail->year}}
        <br><br>
        Description :
        <br>
        <p>
            {{$book->detail->description}}
        </p>
    </p>


@endsection