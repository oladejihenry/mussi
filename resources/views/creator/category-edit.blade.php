@extends('pub')


@section('title')
Edit Category | Musigent
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card header">
					<h4>Edit Categories.</h4>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-6">
							<form action="/category-update/{{ $category->id }}" Method="POST">
								{{ csrf_field() }}
								{{ method_field('PUT') }}

								<div class="form-group">
								    <label>Name</label>
								    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
							  	</div>
							  	<button type="submit" class="btn btn-success">Update</button>
							  	<a href="/creator/add-category" class="btn btn-danger">Cancel</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection
