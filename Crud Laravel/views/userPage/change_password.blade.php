@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Change Password</div>
  <div class="card-body">
      
      <form action="{{ route('update_password') }}" method="post">
        {!! csrf_field() !!}
        <label>Old Password</label></br>
        <input type="text" name="old_password" id="old_password" class="form-control"></br>
        <label>New Password</label></br>
        <input type="text" name="new_password" id="new_password" class="form-control"></br>
        <label>Confirm Password</label></br>
        <input type="text" name="confirm_password" id="confirm_password" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        <br>
    </form>
  
  </div>
</div>
@stop