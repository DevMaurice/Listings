@extends('app')
@section('content')
<div class="row">
<div styles="height:20px; color:blue;">
	<div class="panel panel-default">
		  <div class="panel-heading">
				<h3 class="panel-title">Search Listing</h3>
		  </div>
		  <div class="panel-body">
			@include('page.form')
		  </div>
	</div>
</div>
	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
		<ul class="list-group">
			@foreach ($categories as $cat)			
				<a href="{{$cat->id}}" class="list-group-item">
			       	 <i class="fa fa-bars"></i>   {{ $cat->name }} 
			       	 <span class="badge">{{ $cat->listings->count() }}</span>
		    	</a>
	    	@endforeach
		</ul>
	</div>
	<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
		<ul class="list-group">
			@foreach ($results as $property)
				<li class="list-group-item">
				<a href="{{$property->name}}">
				{{ $property->name }}  {{$property->amount}}  {{$property->location}}
				</a>
				</li>			
			@endforeach
		</ul>
	</div>
</div>
@endsection