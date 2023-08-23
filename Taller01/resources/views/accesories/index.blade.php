@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content') 

    @foreach ($viewData["accesories"] as $accesory)
        <div class="card mb-3">
            <div class="card-body">
                <h5 class="card-title">{{ $accesory->getName() }}</h5>
                <p class="card-text">Brand: {{ $accesory->getBrand() }}</p>
                <p class="card-text">Price: ${{ $accesory->getPrice() }}</p>
                <p class="card-text">Size: {{ $accesory->getSize() }}</p>
                <p class="card-text">Description: {{ $accesory->getDescription() }}</p>
                @if ($accesory->getImage())
                    <img src=" " alt="Accessory Image" class="img-fluid">
                @else
                    <p>No image available</p>
                @endif
            </div>
        </div>
    @endforeach


@endsection