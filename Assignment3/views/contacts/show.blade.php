@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $contacts->name }}</h5>
        <img
         src="{{asset('images/'.$contacts->profile)}}"
         class="w-40 mb-8shadow-x
         alt="">
        <p class="card-text">Password : {{ $contacts->password }}</p>
  </div>
      
    </hr>
  
  </div>
</div>