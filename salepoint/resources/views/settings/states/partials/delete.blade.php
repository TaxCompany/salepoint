{!! Form::open(['route'=>['settings.state.destroy', $state->id],'method'=>'DELETE'])!!}

<button type="submit" onclick="return confirm('Sure you want to delete?')"class="btn btn-danger btn-sm"><i class="fa fa-trash"></i>
    {{trans('state.delete')}}
</button>

{!!Form::close()!!}

