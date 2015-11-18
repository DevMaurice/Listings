@extends('app')
@section('styles')
	<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.css">

@endsection
@section('content')
	<div class="container">

	<div class="row">
		<div class="panel panel-default">
			  <div class="panel-heading clearfix">
					<h3 class="panel-title pull-left" style="padding-top: 7.5px;">Cases:</h3>
					<div class="form-group pull-right">
						<div class="col-lg-12" >
							<a class="btn btn-primary" href="/{{$model}}/create" role="button">
							<i class="fa fa-plus"></i> Create
							</a>
						</div>
					</div>
			  </div>
			  <div class="panel-body">		
				  <div class="table-responsive">
				  	<table class="table table-hover" id="table_id">
				  		@yield('table')
				  	</table>
				  </div>
			  </div>
		</div>
	</div>
</div>
{{-- Confirm Delete --}}
<div class="modal fade" id="modal-delete" tabIndex="-1">
	 <div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					×
				</button>
				<h4 class="modal-title">Please Confirm</h4>
			</div>
			<div class="modal-body">
				 <p class="lead">
					<i class="fa fa-question-circle fa-lg"></i>  
						Are you sure you want to delete this Entity?
				 </p>
			</div>
			<div class="modal-footer">
				<form method="POST" id="delete-form" action="">
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
					<input type="hidden" name="_method" value="DELETE">
					<button type="button" class="btn btn-default"
									                      data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-danger">
									                <i class="fa fa-times-circle"></i> Yes
									              </button>
				</form>
			</div>
			</div>
		</div>
	</div>
</div>

@endsection
@section('script')

<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.js"></script>
	<script type="text/javascript">
	$(document).ready( function () {
    	$('#table_id').DataTable();
	} );
	$('.delete-button').on('click', function () {
	    $('#delete-form').attr('action', $(this).data('delete-link'));
	});


	</script>

@endsection
