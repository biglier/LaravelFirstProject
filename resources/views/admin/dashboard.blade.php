@extends('admin.layouts.app_admin');

@section('content')

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Cathegories 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Matherials 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Users 0</span></p>
      </div>
    </div>
    <div class="col-sm-3">
      <div class="jumbotron">
        <p><span class="label label-primary">Today 0</span></p>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-sm-5">
      <a href="#" class="btn btn-block btn-default">Create Cathegory</a>
      <a href="#" class="list-group-item"></a>
      <h4 class="list-group-item-heading">First cathegory</h4>
      <p class="list-group-item-text">
          Matherail amount
      </p>
    </div>

  </div>
  <div class="row">
    <div class="col-sm-5">
      <a href="#" class="btn btn-block btn-default">Create Matherail</a>
      <a href="#" class="list-group-item"></a>
      <h4 class="list-group-item-heading">First Matherail</h4>
      <p class="list-group-item-text">
          Cathegory
      </p>
    </div>

  </div>
</div>

@endsection
