
		<ul class="list-group">
			<div class = "col-sm-6 col-md-3">
				     <strong>Name</strong>
			</div>
			<div class = "col-sm-6 col-md-3">
				     <strong>Category</strong>
			</div>
			<div class = "col-sm-6 col-md-3">
				     <strong>Location</strong>
			</div>
			<div class = "col-sm-6 col-md-3">
				     <strong>Price</strong>
			</div>
		</ul>
		<ul class="list-group">

			@foreach ($listings as $property)				
				<a href="/listing/{{$property->id}}/search" class="list-group-item">
				<div class = "row">				   
				   <div class = "col-sm-6 col-md-3">
				     {{$property->name}}
				   </div>
				   <div class = "col-sm-6 col-md-3">
				     {{$property->category->name}}
				   </div>
				   <div class = "col-sm-6 col-md-3">
				     {{$property->location}}
				   </div>
				   <div class = "col-sm-6 col-md-3">
				     {{$property->amount}}
				   </div>
				</div>
				</a>
						
			@endforeach
		</ul>		
