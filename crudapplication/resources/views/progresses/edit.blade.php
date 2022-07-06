@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('progress/' .$progresses->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$progresses->id}}" id="id" />
        <label>Title</label></br>
        <input type="text" name="title" id="name" value="{{$progresses->title}}" class="form-control"></br>
        <label>Date</label></br>
        <input type="text" name="date" id="address" value="{{$progresses->date}}" class="form-control"></br>
        <label>Description of progress</label></br>
        <input type="text" name="description" id="mobile" value="{{$progresses->description}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop