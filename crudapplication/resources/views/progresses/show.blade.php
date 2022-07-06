@extends('layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Title : {{ $progresses->title }}</h5>
        <p class="card-text">Date : {{ $progresses->date }}</p>
        <p class="card-text">Description of progress : {{ $progresses->description }}</p>
  </div>
      
    </hr>
  
  </div>
</div>