@extends('pub')


@section('title')
	All Trashed Posts | MonstaJamss
@endsection



@section('content')

<?php 
$id = '1';
$sum = DB::table('posts')->whereNotNull('deleted_at')->count();
?>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Posts</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
    </div>
  </div>
</div>



<div class="row">
  	<div class="col-md-12">
		<div class="card">
		  <div class="card-header">
		    <h4 class="card-title"> Trashed Posts ( {{$sum}} )
				
		    </h4>
		  </div>
		  	<div class="card-body">
			    <div class="table-responsive">
			      <table class="table">
			        <thead class=" text-primary">
			          <th>Title</th>
					  <th>Categories</th>
					  <th>Date</th>
			          <th>Author</th>
			          <th>Restore</th>
			          <th>Delete</th>
			        </thead>
			        <tbody>
			        	@forelse ($post as $posts)
			          <tr>
			            <td><a href="" target="_blank">{{ $posts->title }}</a></td>
						<td>{{ $posts->category()->first()->name }}</td>
						<td>{{ $posts->deleted_at->format('m/d/Y') }}</td>
			            <td>{{$posts->user->username}}</td>

			            <td>
			            	<a href="{{ route('posts.restore', $posts->id) }}" class="btn btn-success">Restore</a>
			            </td>
			            <td>
			            	<form action="/delete-permanently/{{ $posts->id }}" method="post">
			        			{{ csrf_field() }}
			        			{{ method_field('DELETE') }}
			            		<button type="submit" class="btn btn-danger">Delete Permanently</button>
			            	</form>
			            </td>
			          </tr>
                      @empty <h2>Bin Empty</h2>
			          @endforelse
			        </tbody>
			      </table>
			    </div>
			</div>
		</div>
		
  	</div>         
</div>


  
@endsection
