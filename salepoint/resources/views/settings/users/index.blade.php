@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    {{trans('users.users')}}
@endsection

@section('buttons')
    <a class="btn btn-success btn-sm" href="{{route('settings.users.create')}}"><i class="fa fa-user-plus"></i>
        {{trans('botones.create')}}
    </a>
@endsection

@section('filters')
    @include('settings.users.partials.filters')
@endsection


@section('body_page')
    @include('settings.users.partials.table_index')
    {!! $users->appends(Request::only(['name']))->render() !!}
@endsection
