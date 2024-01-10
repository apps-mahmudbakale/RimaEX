<div>
    <div class="col-12 col-lg-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <div class="card-actions float-end">
                    <input type="text" class="form-control" wire:model.debounce.300ms='search' placeholder="Search">
                </div>
                <h5 class="card-title mb-0">Commodities Orders</h5>
            </div>
            <div class="card-body">
                <table id="datatables-dashboard-orders" class="table table-sm table-striped my-0">
                    <thead>
                        <tr>
                            <th>S/N</th>
                            <th>Product</th>
                            <th>Price</th>
                            <th>Ordered Qunatity</th>
                            <th class="d-none d-xl-table-cell">Ordered By</th>
                            <th class="d-none d-xl-table-cell">Order Type</th>
                            <th class="d-none d-xl-table-cell">Date Ordered</th>
                            <th class="d-none d-xl-table-cell"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $order->commodity->name }}</td>
                                <td>&#8358;{{ number_format($order->commodity->current_price) }}</td>
                                <td>{{$order->qty }}</td>
                                <td class="d-none d-xl-table-cell">{{ $order->user->firstname }} {{ $order->user->lastname }}</td>
                                <td class="d-none d-xl-table-cell">{{ ucwords($order->order_type) }}</td>
                                <td class="d-none d-xl-table-cell">{{$order->created_at->diffForHumans()}}</td>
                                <td class="d-none d-xl-table-cell"><button id="approve{{$order->id}}" data-value="{{$order->id}}" class="btn btn-outline-success">Approve</button><a href="" class="btn btn-outline-danger">Discard</a></td>
                                <script>
                                    document.querySelector('#approve{{ $order->id }}').addEventListener('click', function(e) {
                                        // alert(this.getAttribute('data-value'));
                                        Swal.fire({
                                            title: 'Are you sure?',
                                            text: "You won't be able to revert this!",
                                            icon: 'warning',
                                            showCancelButton: true,
                                            confirmButtonColor: '#3085d6',
                                            cancelButtonColor: '#d33',
                                            confirmButtonText: 'Yes, Approve this!'
                                        }).then((result) => {
                                            if (result.isConfirmed) {
                                                // document.getElementById('del#'+this.getAttribute('data-value')).submit();
                                                window.location="{{route('app.orders.approve', $order->id)}}";
                                            }
                                        })
                                    })
                                </script>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">

                <nav aria-label="Page navigation example">
                    {{ $orders->links() }}
                </nav>
                <div class="fw-normal small mt-4 mt-lg-0">Showing <b>{{ $orders->firstItem() }}</b> to
                    <b>{{ $orders->lastItem() }}</b> out of <b>{{ $orders->total() }}</b> entries</div>
            </div>
        </div>
    </div>
   
    
</div>
