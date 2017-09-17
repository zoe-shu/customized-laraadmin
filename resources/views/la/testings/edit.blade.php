@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/testings') }}">Testing</a> :
@endsection
@section("contentheader_description", $testing->$view_col)
@section("section", "Testings")
@section("section_url", url(config('laraadmin.adminRoute') . '/testings'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Testings Edit : ".$testing->$view_col)

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
				{!! Form::model($testing, ['route' => [config('laraadmin.adminRoute') . '.testings.update', $testing->id ], 'method'=>'PUT', 'id' => 'testing-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'slug')
					@la_input($module, 'address')
					@la_input($module, 'checkbox')
					@la_input($module, 'currency')
					@la_input($module, 'date')
					@la_input($module, 'datetime')
					@la_input($module, 'decimal')
					@la_input($module, 'dropdown')
					@la_input($module, 'email')
					@la_input($module, 'file')
					@la_input($module, 'float')
					@la_input($module, 'html')
					@la_input($module, 'image')
					@la_input($module, 'integer')
					@la_input($module, 'mobile')
					@la_input($module, 'multiselect')
					@la_input($module, 'name')
					@la_input($module, 'password')
					@la_input($module, 'radio')
					@la_input($module, 'string')
					@la_input($module, 'taginput')
					@la_input($module, 'textarea')
					@la_input($module, 'textfield')
					@la_input($module, 'url')
					@la_input($module, 'multi_file')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/testings') }}">Cancel</a></button>
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
	$("#testing-edit-form").validate({
		
	});
});
</script>
@endpush
