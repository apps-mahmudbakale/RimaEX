@extends('layouts.admin')
@section('title', 'Dashboard')
@section('content')

    <main class="content">
        <div class="container-fluid p-0">
            <div class="row mb-2 mb-xl-3">
                <div class="col-auto d-none d-sm-block">
                    <h3>Dashboard</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                    <div class="card illustration flex-fill">
                        <div class="card-body p-0 d-flex flex-fill">
                            <div class="row g-0 w-100">
                                <div class="col-6">
                                    <div class="illustration-text p-3 m-1">
                                        <h4 class="illustration-text">Welcome Back, {{auth()->user()->firstname ." ". auth()->user()->lastname}}</h4>
                                        <p class="mb-0">Trading Dashboard</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h3 class="mb-2">&#8358; {{auth()->user()->getWalletBalance() ? number_format(auth()->user()->getWalletBalance()) : number_format(0,2) }}</h3>
                                    <p class="mb-2">Cash Balance</p>
                                    <div class="mb-0">
                                    <a href="{{route('app.portfolio.index')}}" class="btn btn-primary btn-sm">Withdraw from Wallet</a>
                                    <a href="{{route('app.portfolio.index')}}" class="btn btn-success btn-sm">Fund Wallet</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h3 class="mb-2">{{auth()->user()->getOrdersCount() ? number_format(auth()->user()->getOrdersCount()) : 0}}</h3>
                                    <p class="mb-2">Total Trading Orders</p>
                                    <div class="mb-0">
                                        <a href="{{route('app.porfolio.orders')}}" class="btn btn-primary btn-sm">View Orders</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-xxl-3 d-flex">
                    <div class="card flex-fill">
                        <div class="card-body py-4">
                            <div class="d-flex align-items-start">
                                <div class="flex-grow-1">
                                    <h3 class="mb-2">&#8358; 
                                        {{$securitiesValues ? number_format($securitiesValues) : number_format(0,2)}}
                                    </h3>
                                    <p class="mb-2">Total Security Value</p>
                                    <div class="mb-0">
                                        <a href="#" class="btn btn-primary btn-sm">View Securities</a>
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
