@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="container">
    <h1>Pets Statistics</h1>
    <p>Average Rating of All Pets: {{ $viewData['averageRating'] }}</p>
</div>
@endsection


@endsection
