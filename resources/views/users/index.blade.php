@extends('layouts.admin')
@section('title', 'Users')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <a href="{{route('app.users.create')}}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> Create User</a>
            <h1 class="h3 mb-3">Users</h1>
            <div class="row">
                <div class="col-12">
                    <livewire:users />
                </div>
            </div>
        </div>
    </main>
@endsection
