<!-- Esta linea hay que cambiarla por la de su respectivo menu-->
@include('settings.verticalnav')

<!-- Esta linea va de cajon -->
@extends('generalPartials.general_view')

@section('title')
    {{trans('country.country')}}
@endsection
@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.country.create')}}"><i class="fa fa-user-plus"></i>
        {{trans('botones.create')}}
    </a>
@endsection

@section('filters')
    @include('settings.countrys.partials.filters')
@endsection


@section('body_page')
    @include('settings.countrys.partials.table')
    {!! $country->appends(Request::only(['country']))->render() !!}
@endsection

