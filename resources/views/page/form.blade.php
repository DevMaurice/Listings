	{!! Form::open(['method' => 'POST', 'route' => 'listing.search', 'class' => 'form-inline']) !!}
				
				 	<div class="form-group @if($errors->first('location')) has-error @endif">
				        {!! Form::label('location', 'Location', ['class' => 'control-label']) !!}
				        {!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
				        <small class="text-danger">{{ $errors->first('location') }}</small>
				    </div>

				    <div class="form-group @if($errors->first('category_id')) has-error @endif ">
				        {!! Form::label('category_id', 'Category', ['class' => 'control-label']) !!}
				        {!! Form::select('category_id', array_pluck($categories,'name','id'), 
				        [null=>'Select One'], ['id' => 'category_id', 'class' => ' form-control','required' => 'required']) !!}
				        	<small class="text-danger">{{ $errors->first('category_id') }}</small>
				    </div>
				    <div class="form-group @if($errors->first('amount')) has-error @endif">
				        {!! Form::label('amount', 'Amount', ['class' => 'control-label']) !!}
				        	{!! Form::text('amount', null, ['class' => 'form-control','required' => 'required']) !!}
				        	<small class="text-danger">{{ $errors->first('amount') }}</small>
				    </div>
				
				    <div class="btn-group pull-right">				       
				        {!! Form::submit("Search", ['class' => 'btn btn-success']) !!}
				    </div>
				
				{!! Form::close() !!}