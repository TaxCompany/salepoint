
@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Create Currency
@endsection

@section('buttons')

    {!! Form::open(['route'=>'settings.fiscalRegimen.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> Save</button>
    <a class="btn btn-danger btn-sm" href="{{route('settings.currency.index')}}">Cancel</a>
@endsection

@section('filters')
@endsection

@section('body_page')

@include('settings.currencys.partials.fields')
{!! Form::close() !!}
@endsection