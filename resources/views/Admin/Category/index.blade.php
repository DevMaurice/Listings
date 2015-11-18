@extends('partials.table')
@section('table')
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Action</th>
	</tr>
				  		</thead>
				  		<tbody>
				  			@foreach ($categories as $category)		  					  				
				  			<tr>
				  				<td>{{$category->id}}</td>
				  				<td>{{$category->name}}</td>			
				  				<td><div class="btn-group">

				  					<a class="btn btn-primary" 
				  					href="/category/{{$category->id}}" 
				  					role="button">
				  					<i class="fa fa-eye"></i> View
				  					</a>

				  					<a class="btn btn-success" 
				  					href="/category/{{$category->id}}/edit" 
				  					role="button">
				  					<i class="fa fa-pencil-square-o"></i> Edit
				  					</a>

				  					<a class="btn btn-danger delete-button" 
				  					data-delete-link="{{ route('category.destroy', $category->id) }}" 
				  					role="button" 
				  					data-toggle="modal" 
				  					data-target="#modal-delete">
				  					<i class="fa fa-trash-o"></i> Delete
				  					</a>
				  				</div></td>
				  			</tr>												  			
				  			
				  			@endforeach
				  		</tbody>
@endsection