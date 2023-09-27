@extends('layouts.app')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Create product</div>
          <div class="card-body">
            @if($errors->any())
            <ul id="errors" class="alert alert-danger list-unstyled">
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
            @endif

            <form method="POST" action="{{ route('pet.save') }}">
              @csrf
              <input type="text" class="form-control mb-2" placeholder="Ingresa el nombre de la mascota!" name="name" value="{{ old('name') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter type" name="type" value="{{ old('type') }}" />
              <input type="text" class="form-control mb-2" placeholder="Enter rating" name="rating" value="{{ old('rating') }}" />
              <input type="submit" class="btn btn-primary" value="Send" />
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection