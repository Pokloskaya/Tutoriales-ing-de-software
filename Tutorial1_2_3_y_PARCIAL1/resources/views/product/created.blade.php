@extends('layouts.app')
@section('title', $viewData["title"])
@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">Product Created</div>
          <div class="card-body">
            <div class="alert alert-success">
              Product created successfully!
            </div>

            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $viewData["name"] }}</h5>
                <p class="card-text">{{ $viewData["price"] }}</p>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
