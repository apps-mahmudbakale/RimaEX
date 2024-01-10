<div>
    <h2>Securities</h2>
    <table id="datatables-dashboard-securities" class="table table-sm table-striped my-0">
        <thead>
            <tr>
                <th>#</th>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($securities as $security)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{ $security->commodity->name }}</td>
                    <td>&#8358;{{ number_format($security->commodity->current_price) }}</td>
                    <td>{{$security->security_qty }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
