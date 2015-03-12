@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit User: <b>{{ $user->name }}</b></div>
				<div class="panel-body">
                    {!! Form::model($user, ['route'=>['settings.users.update',$user->id],'method'=>'PUT']) !!}
                        @include('settings.users.partials.inputs')
                        <button type="submit" class="btn btn-default">Update User</button>
                    {!! Form::close() !!}
                </div>
			</div>
		</div>
	</div>
</div>
@endsection