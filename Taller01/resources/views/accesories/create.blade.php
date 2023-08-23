@extends('layouts.app')
@section("title", $viewData["title"])

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

            <form method="POST" action="{{ route('accesories.save') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="brand">brand:</label>
                    <input type="text" name="brand" id="brand" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" name="price" id="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="size">size:</label>
                    <input type="text" name="size" id="size" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">description:</label>
                    <input type="text" name="description" id="description" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image">image con probleman:</label>
                    <input type="text" name="image" id="image" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection