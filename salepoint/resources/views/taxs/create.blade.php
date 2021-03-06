@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('uoms.create')}} Tax
@endsection

@section('buttons')
    {!! Form::open(['route'=>'taxs.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> {{trans('botones.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('taxs.index')}}">{{trans('botones.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')

    @include('taxs.partials.fields')
    {!! Form::close() !!}
@endsection
