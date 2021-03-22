@extends('pub')


@section('title')
Edit Post Page | MonstaJamss
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card header">
					<h4>Edit Property Post.</h4>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
					
				</div>
				
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
							<form action="/post-update/{{ $post->id }}" Method="POST" enctype="multipart/form-data">
								{{ csrf_field() }}
								{{ method_field('PUT') }}

								<div class="form-group">
								    <label>Title</label>
								    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
								  </div>
								  <br>
								  
									<br>
							  	<div class="form-group">
								    <label>Description</label>
								    <textarea type="text" name="body" value="" class="editor">{{ $post->body }}</textarea>
								   <script>
									ClassicEditor
										.create( document.querySelector( '.editor' ) ,{
											mediaEmbed: {
								            // configuration...
								        },
											cloudServices: {
								            
								        },
								        // plugins: [ Image, ImageResize ],
								        image: {
								        	resizeUnit: '400px',
								        toolbar: [
								            'imageTextAlternative', '|', 'imageStyle:alignLeft', 'imageStyle:full', 'imageStyle:alignRight'
								        ],
								        styles: [
								                // This option is equal to a situation where no style is applied.
								                'full',
								                // This represents an image aligned to the left.
								                'alignLeft',
								                // This represents an image aligned to the right.
								                'alignRight'
								            ]
								    },
										})
										.then( editor => {
											window.editor = editor;
										} )
										.catch( err => {
											console.error( err.stack );
										} );
								</script>
							  	</div>
					
			  <br>
              <div class="form-group">
                <label><b>Youtube Video:</b></label>
                <br>
                <textarea name="youtube" cols="30" rows="10">{{ $post->youtube }}</textarea>
                </div>
			  <br>
			  <div>
				  <label><b>Price:</b></label>
                  <br>
				  <input type="text" name="price" value="{{$post->price}}">
				</div>
				<br>
				
			  <br>
			  <br>
	          <div>
				  <label><b>Select Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
				  <br>
				  <div style="display:flex;">
				  	<input type="file" class="form-control" name="image"> <img src="{{ url('uploads/' . $post->image ) }}" alt="" style="width:44px; height:27px; margin-left:-60px; margin-top:3px;">
				  </div>
				  
				  
			</div>
							  	<button type="submit" class="btn btn-success">Update</button>
							  	<a href="/creator/all-posts" class="btn btn-danger">Cancel</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection
