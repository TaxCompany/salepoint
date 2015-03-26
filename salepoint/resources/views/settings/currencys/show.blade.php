@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Currency
@endsection

@section('buttons')
@section('button_delete')
    @include('settings.currencys.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('settings.currency.edit', $currency->id) }}"><i class="fa fa-pencil"></i> Edit</a>
<a class="btn btn-success btn-sm" href="{{ route('settings.currency.create') }}"><i class="fa fa-user-plus"></i> Create</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        <h1>{{ $currency->name }}</h1>
    </div>
@endsection