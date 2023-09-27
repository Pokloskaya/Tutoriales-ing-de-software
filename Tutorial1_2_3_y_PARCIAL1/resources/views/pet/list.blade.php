@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])


@section('content')
<div class="container">
    <h1>All Pets</h1>

    @if ($viewData['pets']->isEmpty())
        <p>No pets found.</p>
    @else
        <ul>
            @foreach ($viewData['pets'] as $pet)
                <li>
                    <h2>{{ $pet->name }}</h2>
                    <p>Type: {{ $pet->type }}</p>
                    <p>Rating: {{ $pet->rating }}</p>
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection
