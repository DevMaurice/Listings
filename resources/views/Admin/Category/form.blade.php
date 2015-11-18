  	@if(isset($category))				
		{!! Form::model($category, 
							['route' => ['category.update', $category->id], 
							'method' => 'PATCH', 
							'class' => 'form-horizontal']) 
							!!}
	<?php $btnVal='Update' ?>
	@else										
	{!! Form::open(['method' => 'POST', 'route' => 'category.store', 'class' => 'form-horizontal']) !!}
	<?php $btnVal='Create' ?>
	@endif
		<div class="col-sm-10">
		<label style="font-size:20px">{{ $btnVal }} category</label>
		
		</div>
		
		<div class="form-group  @if($errors->first('name')) has-error @endif">
			{!! Form::label('name', 'Name',['class' => 'col-sm-3 control-label']) !!}
			<div class="col-sm-6">
			{!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}			
			<small class="text-danger">{{ $errors->first('name') }}</small>
			</div>
		</div>	   
		<div class="col-sm-6 col-sm-offset-3">
			 {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
			{!! Form::submit($btnVal, ['class' => 'btn btn-success']) !!}
		</div>

	{!! Form::close() !!}
