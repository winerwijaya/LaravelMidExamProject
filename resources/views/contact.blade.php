@extends('layout.main')

@section('dropdown')
@foreach($categories as $c)
<li><a class="dropdown-item" href="/category/{{ $c->id }}">{{ $c->category}}</a></li>
@endforeach
@endsection

@section('content')

<h1>contact</h1>
<h3>Store address:</h3>
<p>
    Jalan Pembangunan Raya,
    Kompleks Pertokoan Emerald Blok III/12
    Bintaro, Tangerang Selatan
    Indonesia
</p>
<h3>Open Daily:</h3>
<p>
    08.00 - 20.00
</p>
<h3>Contact:</h3>
<p>
    Phone : 021-8902136123
    Email : happybookstore@store.com
</p>
@endsection