@extends('layouts.admin')
@section('title', 'Portfolio')
@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3>Portfolio</h3>
                </div>
            </div>
            <div class="row">
                <div class="tab">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" href="#icon-tab-1" data-bs-toggle="tab" role="tab">
                                <i class="align-middle" data-feather="bar-chart-2"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#icon-tab-2" data-bs-toggle="tab" role="tab">
                                <i class="align-middle" data-feather="grid"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#icon-tab-3" data-bs-toggle="tab" role="tab">
                                <i class="align-middle" data-feather="pie-chart"></i>
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
                                                        {{ auth()->user()->getWalletBalance()? number_format(auth()->user()->getWalletBalance()): number_format(0, 2) }}
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
                                                        {{ auth()->user()->getLienBalance()? number_format(auth()->user()->getLienBalance()): 0 }}
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
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Deposit Funds</h5>
                                            <hr>
                                        </div>
                                        <div class="card-body">
                                            <div class="card">
                                                <div class="card-header">
                                                    <ul class="nav nav-pills card-header-pills pull-right" role="tablist">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#tab-4">Bank Transfer</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Card
                                                                Payment</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <hr>
                                                <div class="card-body">
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active show" id="tab-4"
                                                            role="tabpanel">
                                                            <div class="alert alert-warning alert-dismissible"
                                                                role="alert">
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="alert" aria-label="Close"></button>
                                                                <div class="alert-icon">
                                                                    <i class="far fa-fw fa-bell"></i>
                                                                </div>
                                                                <div class="alert-message">
                                                                    <p
                                                                        style="text-align: justify; padding:3px; margin:8px;">
                                                                        Transfer from any source to  <strong> 2021095050</strong>. Select
                                                                        Kuda MFB as the destination bank and the funds will
                                                                        be credited to your account.</p>
                                                                </div>
                                                            </div>
                                                            <h5 class="card-title text-center">Bank Name: Kuda Bank</h5>
                                                            <p class="card-text text-center"><strong>Account Number:
                                                                    2021095050</strong></p>
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
                                <div class="col-12 col-md-6 col-lg-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="card-title mb-0">Withdraw Funds</h5>
                                            <hr>
                                        </div>
                                        <div class="card-body">
                                            <form action="">
                                                <div class="form-group">
                                                    Remaining Balance: <strong>&#8358;</strong>
                                                    <input type="text" value=" {{ auth()->user()->getWalletBalance()? number_format(auth()->user()->getWalletBalance()): number_format(0, 2) }}" class="form-control" readonly>
                                                </div>
                                                <div class="form-group">
                                                    Narration: (Optional)
                                                    <input type="text" name="narration" class="form-control"
                                                        placeholder="Enter narration">
                                                </div>
                                                <div class="form-group">
                                                    Amount:
                                                    <input type="number" name="amount" class="form-control"
                                                        placeholder="Enter amount">
                                                </div>
                                                <div class="form-group">
                                                    Select Bank:
                                                    <select name="bank" class="form-control">
                                                        <option value="">Choose Bank...</option>
                                                       @foreach ($banks as $bank )
                                                           <option value="{{$bank->id}}">{{$bank->bank_name}}</option>
                                                       @endforeach
                                                    </select>
                                                    <p class="float-end"><a href="{{route('app.banks.create')}}" >Add New Bank</a></p>
                                                </div>
                                                <div class="form-group">
                                                    Enter Login Password:
                                                    <input type="password" name="password" class="form-control"
                                                        placeholder="Enter login password">
                                                </div>
                                                <div class="form-group">
                                                    <br>
                                                    <button type="submit" class="btn btn-success btn-lg">Withdrawal Request</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="icon-tab-2" role="tabpanel">
                           <livewire:securities />
                        </div>
                        <div class="tab-pane" id="icon-tab-3" role="tabpanel">
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
      
    </main>
    <script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://checkout.flutterwave.com/v3.js"></script>
    <script>
        let Url = 'http://localhost:8000/api/'

        function payWithPaystack() {
            var handler = PaystackPop.setup({
                key: 'pk_live_17bb60dd12dbb0d38c928f73a900494bda8a0ba0', // Replace with your public key
                email: '{{ auth()->user()->email }}',
                amount: document.getElementById('amount').value *
                    100, // the amount value is multiplied by 100 to convert to the lowest currency unit
                currency: 'NGN', // Use GHS for Ghana Cedis or USD for US Dollars
                ref: 'RIMA_EX' + Math.floor((Math.random() * 1000000000) + 1),
                callback: function(response) {
                    //this happens after the payment is completed successfully
                    var reference = response.reference;
                    // alert('Payment complete! Reference: ' + reference);
                    // Make an AJAX call to your server with the reference to verify the transaction
                    fetch(Url + 'FundWallet', {
                            method: 'POST',
                            headers: {
                                'Accept': 'application/json, text/plain, */*',
                                'Content-type': 'application/json'
                            },
                            body: JSON.stringify({
                                user_id: '{{ auth()->user()->id }}',
                                amount: document.getElementById('amount').value,
                                reference: reference
                            })
                        })
                        .then((res) => res.json())
                        .then((data) => {
                            console.log(data);
                            location.reload();
                        })
                },
                onClose: function() {
                    alert('Transaction was not completed, window closed.');
                },
            });
            handler.openIframe();
        }
    </script>
    <script>
        function makePayment() {
          FlutterwaveCheckout({
            public_key: "FLWPUBK-b37536cc59e249f2fc0c85e90d5b13c8-X",
            tx_ref: 'RIMA_EX' + Math.floor((Math.random() * 1000000000) + 1),
            amount: document.getElementById('amount').value,
            currency: "NGN",
            payment_options: "card, banktransfer, ussd",
            redirect_url: "http://localhost:8000/api/FundWallet",
            customer: {
              email: "{{ auth()->user()->email }}",
              phone_number: "{{ auth()->user()->phone }}",
              name: "{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}",
            },
            customizations: {
              title: "Rima Agricultural Commodity Exchange",
              description: "Fund Wallet",
              logo: "{{asset('img/favicon.png')}}",
            },
          });
        }
      </script>
@endsection
