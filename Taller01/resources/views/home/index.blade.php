@extends('layouts.app')

@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <a href= "{{ route('accesories.view') }}" role="button" class="btn btn-purple ">Accesories </a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <a href= "{{ route('accesories.create') }}" role="button" class="btn btn-purple ">Create accesories </a>
            </div>
        </div>
    </div>

    <!-- <style>
        .btn-purple {
            background-color: purple;
            color: white;
        }

        .btn-purple:hover {
            background-color: darkpurple;
        }
    </style> -->
@endsection


