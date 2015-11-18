@extends('partials.table')
@section('table')
<thead>
	<tr>
		<th>ID</th>
		<th>Name</th>
		<th>Location</th>
		<th>Amount</th>	
		<th>Type</th>	
		<th>Action</th>
	</tr>
				  		</thead>
				  		<tbody>
				  			@foreach ($listings as $listing)		  					  				
				  			<tr>
				  				<td>{{$listing->id}}</td>
				  				<td>{{$listing->name}}</td>
				  				<td>{{$listing->location}}</td>
				  				<td>{{$listing->amount}}</td>
				  				<td>{{$listing->category->name}}</td>
				  				<td><div class="btn-group">

				  					<a class="btn btn-primary" 
				  					href="/listing/{{$listing->id}}" 
				  					role="button">
				  					<i class="fa fa-eye"></i> View
				  					</a>

				  					<a class="btn btn-success" 
				  					href="/listing/{{$listing->id}}/edit" 
				  					role="button">
				  					<i class="fa fa-pencil-square-o"></i> Edit
				  					</a>

				  					<a class="btn btn-danger delete-button" 
				  					data-delete-link="{{ route('listing.destroy', $listing->id) }}" 
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