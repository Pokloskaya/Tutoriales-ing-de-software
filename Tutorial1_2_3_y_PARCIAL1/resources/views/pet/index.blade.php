@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <a href="/pet/create" class="btn btn-primary"> Registrar mascotas </a>
        </div>
        <div class="col-md-4">
            <a href="/pet/list" class="btn btn-primary"> Listar mascotas </a>
        </div>
        <div class="col-md-4">
            <a href="/pet/statistics" class="btn btn-primary"> Estadísticas de mascotas </a>
        </div>
    </div>
</div>
@endsection
