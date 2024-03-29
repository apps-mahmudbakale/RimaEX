<div class="modal fade" id="defaultModalPrimary2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="modal-title text-danger">{{$productName}} - Sell Order</h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body m-3">
                <form action="{{route('app.orders.store')}}" method="POST" id="buyForm">
                    @csrf
                    <div class="row col">
                        <div class="col-md-6">
                            <input type="hidden" id="productId" wire:model="productId" name="commodity_id">
                            <input type="hidden" value="sell" name="order_type">
                            Cash Balance(&#8358;)
                            <input type="text" readonly value="{{ auth()->user()->getWalletBalance()? number_format(auth()->user()->getWalletBalance()): number_format(0, 2) }}" class="form-control">
                        </div>
                        <div class="col-md-6">
                           
                            Quantity Owned(Units)
                            <input type="text" readonly wire:model="current_price" class="form-control">
                        </div>
                        <div class="col-md-6">
                            Current Price per Unit(&#8358;)
                            <input type="text" readonly wire:model="current_price" class="form-control">
                        </div>
                        <div class="col-md-6">
                            Quantity to Sell(Units)
                            <input type="number" name="qty" value="1" id="sellQty" class="form-control">
                        </div>
                        <div class="col-md-6">
                            Sell Price / Unit (&#8358;) 
                            <input type="number" name="buy_price" step="any" wire:model="buy_price" class="form-control">
                        </div>
                        <div class="col-md-6">
                            This Order is Good for (Days)
                            <select readonly class="form-control">
                                <option>7Days</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <p></p>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Description</th>
                                        <th>Amount (&#8358;)</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Order Amount {{$current_price}} / Unit </td>
                                            <td><span id="samount"></span></td>
                                        </tr>
                                        <tr>
                                            <td>Total Amount Receivable:</td>
                                            <td><span id="receivable"></span></td>
                                        </tr>
                                    </tbody>
                            </table>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger btn-block btn-lg" data-bs-dismiss="modal">Cancel Order</button>
                <button type="submit" class="btn btn-success btn-block btn-lg">Place Order</button>
            </form>
            </div>
        </div>
    </div>
</div>
<script>
    let sUrl = 'http://localhost:8001/api/'
    var sellQty = document.getElementById('sellQty');
    var productId = document.getElementById('productId');
    var submitBtn = document.getElementById('submitBtn');
    sellQty.addEventListener('change', function() {
        // alert(this.value * productId.value);
        fetch(sUrl + 'getPricePerQty', {
        method: 'POST',
        headers: {
          'Accept': 'application/json, text/plain, */*',
          'Content-type': 'application/json'
        },
        body: JSON.stringify({ id:productId.value, qty:this.value})
      })
        .then((res) => res.json())
        .then((data) => {
          document.getElementById('samount').innerText = data;
          document.getElementById('receivable').innerText = data;
        })
    })
</script>