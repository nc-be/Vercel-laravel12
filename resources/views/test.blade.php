@extends('layouts.app')
@section('title', 'Nuestra historia')
@section('content')
<main>
    <h2>LISTA DE PRODUCTOS - TESTING POSTGRES DATA RETRIEVING: {{$products->count()}} PRODUCTS</h2>
    <hr>
    <hr>
    @foreach ($products as $product)
        <p>{{$product->name}}</p>
    @endforeach
</main>
@endsection
