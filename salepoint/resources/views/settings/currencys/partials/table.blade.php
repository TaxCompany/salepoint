<table  class="table table-striped">
    <tr>
        <th>    {!!Form::label(trans('currency.name')) !!}</th>
    </tr>
    @foreach($currency as $currency)
        <tr onclick="window.document.location='{{ route('settings.currency.show', $currency->id) }}';">
            <td>{{$currency->name}}</td>
        </tr>
    @endforeach
</table>