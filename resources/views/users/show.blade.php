@extends('layouts.admin')
@section('title', 'Users')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">

            <h1 class="h3 mb-3">Show User</h1>

            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card mb-3">
                        <div class="card-header">
                            <h5 class="card-title mb-0">User Details</h5>
                        </div>
                        <div class="card-body text-center">
                            <img src="{{asset('img/avatars/avatar-4.jpg')}}" alt="Stacie Hall" class="img-fluid rounded-circle mb-2"
                                width="128" height="128" />
                            <h5 class="card-title mb-0">{{$user->firstname ." ". $user->lastname}}</h5>
                            {{-- <div class="text-muted mb-2">{{}}</div> --}}

                            {{-- <div>
                                <a class="btn btn-primary btn-sm" href="#">Follow</a>
                                <a class="btn btn-primary btn-sm" href="#"><span data-feather="message-square"></span>
                                    Message</a>
                            </div> --}}
                        </div>
                        <hr class="my-0" />
                        <hr class="my-0" />
                        <div class="card-body">
                            <h5 class="h6 card-title">About</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-1"><span data-feather="user" class="feather-sm me-1"></span> Name <a
                                        href="#">{{$user->firstname ." ". $user->lastname}}</a></li>

                                <li class="mb-1"><span data-feather="mail" class="feather-sm me-1"></span> Email
                                    <a href="#">{{$user->email}}</a></li>
                                <li class="mb-1"><span data-feather="phone" class="feather-sm me-1"></span> Phone Number <a
                                        href="#">{{$user->phone}}</a></li>
                                        <li class="mb-1"><span data-feather="award" class="feather-sm me-1"></span> Occupation <a
                                            href="#">{{$user->occupation}}</a></li>
                            </ul>
                        </div>
                        <hr class="my-0" />
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#icon-tab-1" data-bs-toggle="tab" role="tab">
                                                    <i class="align-middle" data-feather="home"></i> Overview
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#icon-tab-2" data-bs-toggle="tab" role="tab">
                                                    <i class="align-middle" data-feather="grid"></i> Securities
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#icon-tab-3" data-bs-toggle="tab" role="tab">
                                                    <i class="align-middle" data-feather="pie-chart"></i> Transactions
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="#icon-tab-4" data-bs-toggle="tab" role="tab">
                                                    <i class="align-middle" data-feather="credit-card"></i> Banks
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="icon-tab-1" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-12 col-sm-4 col-xxl-3 d-flex">
                                                        <div class="card flex-fill">
                                                            <div class="card-body py-4">
                                                                <div class="d-flex align-items-start">
                                                                    <div class="flex-grow-1">
                                                                        <h3 class="mb-2">&#8358;
                                                                            {{ $user->getWalletBalance()? number_format($user->getWalletBalance()): number_format(0, 2) }}
                                                                        </h3>
                                                                        <p class="mb-2">Cash Balance</p>
                    
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-xxl-3 d-flex">
                                                        <div class="card flex-fill">
                                                            <div class="card-body py-4">
                                                                <div class="d-flex align-items-start">
                                                                    <div class="flex-grow-1">
                                                                        <h3 class="mb-2">&#8358;
                                                                            {{ $user->getLienBalance() ? number_format(auth()->user()->getLienBalance()): 0 }}
                                                                        </h3>
                                                                        <p class="mb-2">Lien Balance</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-sm-4 col-xxl-3 d-flex">
                                                        <div class="card flex-fill">
                                                            <div class="card-body py-4">
                                                                <div class="d-flex align-items-start">
                                                                    <div class="flex-grow-1">
                                                                        <h3 class="mb-2">&#8358;
                                                                            {{$securitiesValues ? number_format($securitiesValues) : number_format(0,2)}}
                                                                        </h3>
                                                                        <p class="mb-2">Total Security Value</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-6 col-lg-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="card">
                                                                    <div class="card-body">
                                                                        <div class="tab-content">
                                                                            <div class="tab-pane fade active show" id="tab-4"
                                                                                role="tabpanel">
                                                                                <div class="card flex-fill">
                                                                                    <div class="card-header">
                                                                                        <h2 class="card-title mb-0">Orders</h2>
                                                                                        <hr>  
                                                                                    </div>
                                                                                    <div class="card-body">
                                                                                        <table id="datatables-dashboard-orders" class="table table-sm table-striped my-0">
                                                                                            <thead>
                                                                                                <tr>
                                                                                                    <th>S/N</th>
                                                                                                    <th>Product</th>
                                                                                                    <th>Price</th>
                                                                                                    <th>Ordered Qunatity</th>
                                                                                                    <th class="d-none d-xl-table-cell">Order Type</th>
                                                                                                    <th class="d-none d-xl-table-cell">Date Ordered</th>
                                                                                                    <th class="d-none d-xl-table-cell">Status</th>
                                                                                                </tr>
                                                                                            </thead>
                                                                                            <tbody>
                                                                                                @foreach ($orders as $order)
                                                                                                    <tr>
                                                                                                        <td>{{ $loop->iteration }}</td>
                                                                                                        <td>{{ $order->commodity->name }}</td>
                                                                                                        <td>&#8358;{{ number_format($order->commodity->current_price) }}</td>
                                                                                                        <td>{{$order->qty }}</td>
                                                                                                        <td class="d-none d-xl-table-cell">{{ ucwords($order->order_type) }}</td>
                                                                                                        <td class="d-none d-xl-table-cell">{{$order->created_at->diffForHumans()}}</td>
                                                                                                        <td class="d-none d-xl-table-cell">{{$order->order_status}}</td>
                                                                                                        
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
                                                                            <div class="tab-pane fade text-center" id="tab-5"
                                                                                role="tabpanel">
                                                                                <input type="number" id="amount" value="10000"
                                                                                    class="form-control">
                                                                                <br>
                                                                                <button onclick="payWithPaystack()"
                                                                                    class="btn btn-primary" type="submit"> <img src="{{asset('paystack.png')}}" width="16" height="16"> Pay with
                                                                                    PayStack</button>
                                                                                    <button onclick="makePayment()"
                                                                                    class="btn btn-warning" type="submit"> <img src="{{asset('flutterwave.png')}}" width="16" height="16"> Pay with
                                                                                    FlutterWave</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane" id="icon-tab-2" role="tabpanel">
                                               <x-user-securities :securities="$securities" />
                                            </div>
                                            <div class="tab-pane" id="icon-tab-3" role="tabpanel">
                                                
                                            </div>
                                            <div class="tab-pane" id="icon-tab-4" role="tabpanel">
                                                <h2>Banks</h2>
                                            </div>
                                            <div class="tab-pane" id="icon-tab-3" role="tabpanel">
                                                
                                            </div>
                                        </div>
                                    </div>
                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </main>
@endsection
