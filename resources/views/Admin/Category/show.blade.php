@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<div class="panel panel-default">
				  <div class="panel-heading">
						<h3 class="panel-title">Show Category</h3>
				  </div>
				  <div class="panel-body">					
					<div class="well well-lg">
						<h3>ID: {{$category->id}}</h3> </br>
						<h3>Name: {{$category->name}}</h3>
					</div>
					
				 	</div>
				</div>
		</div>
	</div>
</div>
@endsection	



