@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/frontend_menuses') }}">Frontend menus</a> :
@endsection
@section("contentheader_description", $frontend_menus->$view_col)
@section("section", "Frontend menuses")
@section("section_url", url(config('laraadmin.adminRoute') . '/frontend_menuses'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Frontend menuses Edit : ".$frontend_menus->$view_col)

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
				{!! Form::model($frontend_menus, ['route' => [config('laraadmin.adminRoute') . '.frontend_menuses.update', $frontend_menus->id ], 'method'=>'PUT', 'id' => 'frontend_menus-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'lang')
					@la_input($module, 'title')
					@la_input($module, 'permalink')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/frontend_menuses') }}">Cancel</a></button>
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
	$("#frontend_menus-edit-form").validate({
		
	});
});
</script>
@endpush
