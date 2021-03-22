@extends('pub')

@section('title')
	Create New Post | Musigent
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="card">
				<div class="card header">
					<h4>Create Post.</h4>
					@if (session('status'))
					<div class="alert alert-success" role="alert">
						{{ session('status') }}
					</div>
					@endif
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-12">
                    <form action="/save-post" method="POST" enctype="multipart/form-data">
      		{{ csrf_field() }}
	      <div class="modal-body">
	        
	          <div class="form-group">
	            <label for="recipient-name" class="col-form-label"><b>Title:</b></label>
	            <input type="text" name="title" class="form-control" id="recipient-name">
	          </div>
	          <br>
	          <div class="form-group">
	          	<label for="recipient-name" class="col-form-label"><b>Post Category:</b></label>
	          	<br>
	          	<select class="form-control" id="cats" name="category[]" id="main-tags" multiple="multiple" style="width:223.438px;">
  					@foreach($cat as $cats)
              		<option value="{{$cats->id}}">{{$cats->name}}</option>
              		...
             		@endforeach
				</select> <b style="color:red;">Note: Please Select Only (One) Property Category.</b>
	          </div>
	     
	          
			  
	          <br>
	          <br>
	          <div class="form-group">
					<label><b>Description:</b></label>
					<textarea type="text" name="body" value="" class="editor"></textarea>
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
                <textarea name="youtube" cols="30" rows="10" style="width: 50%;"></textarea>
                </div>
				<br>
				<div>
				  <label><b>Price:</b></label>
                  <br>
				  <input type="text" value="£" disabled style="width:20px;">
				  <input type="text" name="price" value="0.00">
			</div>
			<br>
			<div>
				  <label><b>Phone Number:</b></label>
                  <br>
				  
				  <input type="text" name="phone_number">
			</div>
				
				<br>
			  <div>
				  <label><b>Select Featured Image To Add:</b> (Maximum Size: <b>5MB</b>)</label>
                  <br>
				  <input type="file" name="image">
			</div>
			<br>
			
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary">Publish</button>
	      </div>
      </form>


</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>
<script>
  $(document).ready(function() {
    $('#cats').select2();
});
</script>

<script>
  $(document).ready(function() {
    
});
</script>

@endsection
