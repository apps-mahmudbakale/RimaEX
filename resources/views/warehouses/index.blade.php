@extends('layouts.admin')
@section('title', 'Ware Houses')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <a href="{{route('app.warehouses.create')}}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> Create Warehouse</a>
            <h1 class="h3 mb-3">Ware Houses</h1>
            <div class="row">
                <div class="col-12">
                    <livewire:warehouse />
                </div>
            </div>
        </div>
    </main>
@endsection
