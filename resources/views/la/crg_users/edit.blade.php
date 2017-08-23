@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/crg_users') }}">Crg user</a> :
@endsection
@section("contentheader_description", $crg_user->$view_col)
@section("section", "Crg users")
@section("section_url", url(config('laraadmin.adminRoute') . '/crg_users'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Crg users Edit : ".$crg_user->$view_col)

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
				{!! Form::model($crg_user, ['route' => [config('laraadmin.adminRoute') . '.crg_users.update', $crg_user->id ], 'method'=>'PUT', 'id' => 'crg_user-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'user_id')
					@la_input($module, 'email')
					@la_input($module, 'pwd')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/crg_users') }}">Cancel</a></button>
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
	$("#crg_user-edit-form").validate({
		
	});
});
</script>
@endpush
