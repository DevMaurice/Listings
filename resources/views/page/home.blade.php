@extends('app')
@section('content')
<div class="row">
<div styles="height:20px; color:blue;">
	<div class="panel panel-default">		 
		  <div class="panel-body">
			@include('page.form')
		  </div>
	</div>
</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<ul class="list-group">
			@foreach ($categories as $cat)			
				<a href="/category/{{$cat->name}}/search" class="list-group-item">
			       	 <i class="fa fa-bars"></i>   {{ $cat->name }} 
			       	 <span class="badge">{{ $cat->listings->count() }}</span>
		    	</a>
	    	@endforeach
		</ul>
	</div>
<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
	@include('page.list');
</div>
</div>
@endsection