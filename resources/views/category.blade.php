@extends('layout.main')

@section('dropdown')
@foreach($categories as $c)
<li><a class="dropdown-item" href="/category/{{ $c->id }}">{{ $c->category}}</a></li>
@endforeach
@endsection

@section('content')
<h1>home</h1>
<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Judul Buku</th>
            <th scope="col">Penulis</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $b)
        <tr>
            <td><a href="/book/{{ $b->id }}" style="color:black; text-decoration: none;">{{ $b->title }}</a></td>
            <td>{{ $b->detail->author }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection