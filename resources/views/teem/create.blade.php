@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row teem-create">
    <div class="col-md-offset-3 col-md-6">
      <h3>Create Teem</h3>
      <form>
        <div class="form-group">
          <input class="form-control input-lg" type="text" placeholder="Name">
        </div>
      <h4>Invite</h4><span class="text-helper">(optional)</span>
        <div class="form-group">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
        </div>
        <button type="button" class="btn btn-primary btn-lg">Create</button>
      </form>
    </div>
  </div>
</div>
@endsection
