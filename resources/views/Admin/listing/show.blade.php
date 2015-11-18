@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<div class="panel panel-default">
				  <div class="panel-heading">
						<h3 class="panel-title">Show Listing</h3>
				  </div>
				  <div class="panel-body">					

					<div class="list-group-item">
						Name:<h3>{{$listing->name}}</h3>
					</div>

					<div class="list-group-item">
					Category:<h3>{{$listing->category->name}}</h3>
					</div>

					<div class="list-group-item">
					Location:<h3>{{$listing->location}}</h3>
					</div>

					<div class="list-group-item">
					Cost:<h3>{{$listing->amount}}</h3>
					</div>
					<div class="thumbnail">
						<img src="{{asset('pics/'.{{ $listing->photo}})}}" alt="Property Image" class="img-rounded" width="304" height="235">
						<div class="caption">
							Property Image
						</div>
					</div>	

				 </div>			
		</div>
	</div>
</div>	
@endsection	