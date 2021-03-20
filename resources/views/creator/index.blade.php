@extends('pub')


@section('title')
	Dashboard | Naijaswift
@endsection



@section('content')

<?php
	$sum = DB::table('posts')->count();
  $total = DB::table('users')->count();
  $category = DB::table('categories')->count();
  $trash = DB::table('posts')->whereNotNull('deleted_at')->count();
?>
<div class="row">
  	<div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Registered Users</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$total}}</p>
      </div>
    </div>
  </div> 


  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Posts</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$sum}}</p>
      </div>
    </div>
  </div> 

  

  

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Properties Category</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$category}}</p>
      </div>
    </div>
  </div> 

  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Total Numbers of Trashed Posts</h5>
        <br>
        <hr>
        <p class="btn btn-primary">{{$trash}}</p>
      </div>
    </div>
  </div>     
</div>



@endsection
