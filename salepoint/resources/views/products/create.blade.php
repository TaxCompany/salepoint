@include('products.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{ trans('products.create_product') }}
@endsection

@section('buttons')
    {!! Form::open(['route'=>'products.store','method'=>'POST','files'=>true]) !!}
    <button type="submit" class="btn btn-info btn-sm"><i class="fa fa-floppy-o"></i> {{trans('botones.save')}}</button>
    <a class="btn btn-danger btn-sm" href="{{route('products.index')}}">{{trans('botones.cancel')}}</a>
@endsection

@section('filters')
@endsection

@section('body_page')
    @include('products.partials.inputs')
    {!! Form::close() !!}
@endsection
