@extends('layouts.admin')
@section('title', 'Roles')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <a href="{{route('app.roles.create')}}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> Create Role</a>
            <h1 class="h3 mb-3">Roles</h1>
            <div class="row">
                <div class="col-12">
                    <livewire:roles />
                </div>
            </div>
        </div>
    </main>
@endsection
