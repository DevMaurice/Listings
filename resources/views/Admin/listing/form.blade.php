  	@if(isset($listing))				
		{!! Form::model($listing, 
							['route' => ['listing.update', $listing->id], 
							'method' => 'PATCH', 
							'class' => 'form-horizontal']) 
							!!}
	<?php $btnVal='Update' ?>
	@else										
	{!! Form::open(['method' => 'POST', 'route' => 'listing.store', 'class' => 'form-horizontal','files' => true]) !!}
	<?php $btnVal='Create' ?>
	@endif
		<div class="col-sm-10">
		<label style="font-size:20px">{{ $btnVal }} listing</label>
		
		</div>
			<div class="form-group @if($errors->first('category_id')) has-error @endif">
				{!! Form::label('category_id', 'Category',['class' => 'col-sm-3 control-label']) !!}
				<div class="col-sm-6">
				{!! Form::select('category_id', $options, null, ['id' => 'category_id', 'class' => 'form-control', 'required' => 'required']) !!}
				<small class="text-danger">{{ $errors->first('Category_id') }}</small>
				</div>
			</div>		
		<div class="form-group  @if($errors->first('name')) has-error @endif">
			{!! Form::label('name', 'Name',['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-6">
			{!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}			
			<small class="text-danger">{{ $errors->first('name') }}</small>
			</div>
		</div>	
		<div class="form-group  @if($errors->first('location')) has-error @endif">
			{!! Form::label('location', 'Location',['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-6">
			{!! Form::text('location', null, ['class' => 'form-control', 'required' => 'required']) !!}
			<small class="text-danger">{{ $errors->first('location') }}</small>
			</div>
		</div>	
		<div class="form-group @if($errors->first('amount')) has-error @endif">
		      {!! Form::label('amount', 'Amount',['class' => 'col-sm-3 control-label']) !!}
		      <div class="col-sm-6">
		      {!! Form::text('amount', null, ['class' => 'form-control', 'required' => 'required']) !!}
		      <small class="text-danger">{{ $errors->first('amount') }}</small>
		      </div>
		  </div>  

		 <div class="form-group @if($errors->first('photo')) has-error @endif">
		     {!! Form::label('photo', 'Upload Photo',['class' => 'col-sm-3 control-label']) !!}
		      <div class="col-sm-6">
		     {!! Form::file('photo', ['required' => 'required']) !!}
		     <p class="help-block">Listing Photo</p>
		     <small class="text-danger">{{ $errors->first('photo') }}</small>
		     </div>
		 </div>

		<div class="col-sm-6 col-sm-offset-3">
			 {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
			{!! Form::submit($btnVal, ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
