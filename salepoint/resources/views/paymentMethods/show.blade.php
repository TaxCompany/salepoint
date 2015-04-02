@include('settings.verticalnav')
@extends('generalPartials.general_view')

@section('title')
    Payment Method
@endsection

@section('buttons')
@section('button_delete')
    @include('paymentMethods.partials.delete')
@endsection
<a class="btn btn-info btn-sm" href="{{ route('paymentMethods.edit', $payment->id) }}"><i class="fa fa-pencil"></i> Edit</a>
<a class="btn btn-success btn-sm" href="{{ route('paymentMethods.create') }}"><i class="fa fa-user-plus"></i> Create</a>
@endsection
@section('filters')
@endsection
@section('body_page')
    <div class="col-lg-2">
    </div>
    <div class="col-lg-9">
        <h1>{{ $payment->typePayment }}</h1>
    </div>
@endsection