@extends("la.layouts.app")

@section("contentheader_title", "Project details")
@section("contentheader_description", "Project details listing")
@section("section", "Project details")
@section("sub_section", "Listing")
@section("htmlheader_title", "Project details Listing")

@section("headerElems")
@la_access("Project_details", "create")
	<button class="btn btn-success btn-sm pull-right" data-toggle="modal" data-target="#AddModal">Add Project detail</button>
@endla_access
@endsection

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box box-success">
	<!--<div class="box-header"></div>-->
	<div class="box-body">
		<table id="example1" class="table table-bordered">
		<thead>
		<tr class="success">
			@foreach( $listing_cols as $col )
			<th>{{ $module->fields[$col]['label'] or ucfirst($col) }}</th>
			@endforeach
			@if($show_actions)
			<th>Actions</th>
			@endif
		</tr>
		</thead>
		<tbody>
			
		</tbody>
		</table>
	</div>
</div>

@la_access("Project_details", "create")
<div class="modal fade" id="AddModal" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="myModalLabel">Add Project detail</h4>
			</div>
			{!! Form::open(['action' => 'LA\Project_detailsController@store', 'id' => 'project_detail-add-form']) !!}
			<div class="modal-body">
				<div class="box-body">
                    @la_form($module)
					
					{{--
					@la_input($module, 'lang')
					@la_input($module, 'property_id')
					@la_input($module, 'featured')
					@la_input($module, 'images')
					@la_input($module, 'proj_title')
					@la_input($module, 'address')
					@la_input($module, 'map_lat')
					@la_input($module, 'map_lon')
					@la_input($module, 'type')
					@la_input($module, 'size')
					@la_input($module, 'agents')
					@la_input($module, 'summary')
					@la_input($module, 'url')
					@la_input($module, 'meta_title')
					@la_input($module, 'meta_desc')
					@la_input($module, 'meta_key')
					@la_input($module, 'active')
					--}}
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				{!! Form::submit( 'Submit', ['class'=>'btn btn-success']) !!}
			</div>
			{!! Form::close() !!}
		</div>
	</div>
</div>
@endla_access

@endsection

@push('styles')
<link rel="stylesheet" type="text/css" href="{{ asset('la-assets/plugins/datatables/datatables.min.css') }}"/>
@endpush

@push('scripts')
<script src="{{ asset('la-assets/plugins/datatables/datatables.min.js') }}"></script>
<script>
$(function () {
	$("#example1").DataTable({
		processing: true,
        serverSide: true,
        ajax: "{{ url(config('laraadmin.adminRoute') . '/project_detail_dt_ajax') }}",
		language: {
			lengthMenu: "_MENU_",
			search: "_INPUT_",
			searchPlaceholder: "Search"
		},
		@if($show_actions)
		columnDefs: [ { orderable: false, targets: [-1] }],
		@endif
	});
	$("#project_detail-add-form").validate({
		
	});
});
</script>
@endpush
