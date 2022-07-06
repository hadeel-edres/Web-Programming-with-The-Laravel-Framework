@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('progress') }}" method="post">
        {!! csrf_field() !!}
        <label>Title</label></br>
        <input type="text" name="title" id="name" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="address" class="form-control"></br>
        <label>Description of progress</label></br>
        <input type="text" name="description" id="mobile" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop