<table class="table table-striped table-hover">
    <tr>
        <th>Image</th>
        <th>Id</th>
        <th>Name</th>
        <th>Description</th>
        <th>Uom</th>
        <th>PurchasePrice</th>
        <th>SalePrice</th>
        <th>QtyAvailable</th>
        <th>IncomingQty</th>
        <th>VirtualAvailable</th>
        <th>Ean13</th>

    </tr>
    @foreach ($products as $product)
        <td>
            @if(!empty($product->image))
                <img src="data:{! mime_content_type( base64_decode($product->image)) !};base64,{{ $product->image }}" width="50px" height="50px"/>
            @else
                <img src="data:image/png;base64,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" width="50px" height="50px"/>
            @endif
        </td>
        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->description }}</td>
        <td>{{ $product->uom }}</td>
        <td>{{ $product->purchasePrice }}</td>
        <td>{{ $product->salePrice }}</td>
        <td>{{ $product->qtyAvailable }}</td>
        <td>{{ $product->incomingQty }}</td>
        <td>{{ $product->virtualAvailable }}</td>
        <td>{{ $product->ean13 }}</td>

        </tr>
    @endforeach
</table>