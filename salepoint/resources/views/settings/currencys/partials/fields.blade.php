<div class="form-group">
    <div class="col-lg-6">
        {!! Form::label('name', trans('currency.name')) !!}
        {!! Form::text('name', null, ['class' => 'form-control  requiered_field']) !!}
    </div>
    <div class="col-lg-6">
        {!! Form::label('symbol', trans('currency.symbol')) !!}
        {!! Form::text('symbol', null, ['class' => 'form-control  requiered_field']) !!}
    </div>
</div>

