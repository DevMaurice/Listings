@extends('app')
@section('content')
<div class="container">
	<div class="row ">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="panel panel-default">
				  <div class="panel-heading">
						<h3 class="panel-title">Category</h3>
				  </div>
				  <div class="panel-body">						
					@include('admin.category.form')	
					</div>				 
			</div>
		</div>
	</div>
</div>
@endsection	








