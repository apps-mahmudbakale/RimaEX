<div>
    <h2>Securities</h2>
    <table id="datatables-dashboard-securities" class="table table-sm table-striped my-0">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Qty</th>
                <th class="d-none d-xl-table-cell">No of Deals</th>
                <th class="d-none d-xl-table-cell">Change</th>
                <th class="d-none d-xl-table-cell">Buys</th>
                <th class="d-none d-xl-table-cell"></th>
                <th class="d-none d-xl-table-cell">Sales</th>
                <th class="d-none d-xl-table-cell"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($securities as $security)
                <tr>
                    <td>{{ $security->commodity->name }}</td>
                    <td>&#8358;{{ number_format($security->commodity->current_price) }}</td>
                    <td>{{$security->security_qty }}</td>
                    <td class="d-none d-xl-table-cell">{{ $security->commodity->no_of_deals }}</td>
                    <td class="d-none d-xl-table-cell {{ $security->commodity->getCommodityPriceChange() < 0 ? 'text-danger' : 'text-success' }}">{{ $security->commodity->getCommodityPriceChange() < 0 ? $security->commodity->getCommodityPriceChangePercentageFormatted() : '+'. $security->commodity->getCommodityPriceChangePercentageFormatted()}}</td>
                    <td class="d-none d-xl-table-cell">{{ $security->commodity->no_of_buys }}</td>
                    <td class="d-none d-xl-table-cell"><a href="" class="btn btn-outline-success"  wire:click.prevent="selectedProduct({{$security->commodity->id}}, 'buy')">Buy</a></td></td>
                    <td class="d-none d-xl-table-cell">{{ $security->commodity->no_of_sells }}</td>
                    <td class="d-none d-xl-table-cell"><a href="" class="btn btn-outline-danger" wire:click.prevent="selectedProduct({{$security->id}}, 'sell')">Sell</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('partials.modals.buy-modal')
    @include('partials.modals.sell-modal')
</div>
