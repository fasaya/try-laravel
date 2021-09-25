@extends('templates')

@section('container')

<h1 class="mb-3 mt-3">Halaman {{ $title }}</h1>

<div class="row">

@foreach ($posts as $p)
    <div class="col-4">
        <div class="card">
            <h5 class="card-header">{{ $p['title'] }}</h5>
            <div class="card-body">
                {{-- <h5 class="card-title">{{ $p['title'] }}</h5> --}}
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="/blog/detail/{{ $p['slug'] }}" class="btn btn-primary">Detail</a>
            </div>
        </div>
    </div>
@endforeach
    
</div>

@endsection