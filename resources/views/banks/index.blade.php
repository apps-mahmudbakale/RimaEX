@extends('layouts.admin')
@section('title', 'Commodities')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <a href="{{route('app.commodities.create')}}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> Create Commodity</a>
            <h1 class="h3 mb-3">Commodities</h1>
            <div class="row">
                <div class="col-12">
                    <livewire:commodities />
                </div>
            </div>
        </div>
    </main>
@endsection
