@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/project_details') }}">Project detail</a> :
@endsection
@section("contentheader_description", $project_detail->$view_col)
@section("section", "Project details")
@section("section_url", url(config('laraadmin.adminRoute') . '/project_details'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Project details Edit : ".$project_detail->$view_col)

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

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($project_detail, ['route' => [config('laraadmin.adminRoute') . '.project_details.update', $project_detail->id ], 'method'=>'PUT', 'id' => 'project_detail-edit-form']) !!}
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
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/project_details') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#project_detail-edit-form").validate({
		
	});
});
</script>
@endpush
