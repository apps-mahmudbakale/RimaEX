@extends('layouts.admin')
@section('title', 'Roles')
@section('content')
<main class="content">
    <div class="container-fluid p-0">

        <h1 class="h3 mb-3">Show Role</h1>

        <div class="row">
            <div class="col-md-12 col-xl-12">
                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="card-title mb-0">Role Details</h5>
                    </div>
                    <div class="card-body text-center">
                        <h2 class="mb-0">{{ucwords($role->name)}}</h2>
                    </div>
                    <hr class="my-0" />
                    <div class="card-body">
                        <h5 class="h6 card-title">Permissions</h5>
                        @foreach ($role->permissions as $permission)
                        <a href="#" style="text-decoration: none" class="badge bg-primary me-1 my-1">{{$permission->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>
</main>
@endsection
