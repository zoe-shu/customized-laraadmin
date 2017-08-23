@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/agents') }}">Agent</a> :
@endsection
@section("contentheader_description", $agent->$view_col)
@section("section", "Agents")
@section("section_url", url(config('laraadmin.adminRoute') . '/agents'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Agents Edit : ".$agent->$view_col)

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
				{!! Form::model($agent, ['route' => [config('laraadmin.adminRoute') . '.agents.update', $agent->id ], 'method'=>'PUT', 'id' => 'agent-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'agent_id')
					@la_input($module, 'first_name')
					@la_input($module, 'last_name')
					@la_input($module, 'email')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/agents') }}">Cancel</a></button>
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
	$("#agent-edit-form").validate({
		
	});
});
</script>
@endpush
