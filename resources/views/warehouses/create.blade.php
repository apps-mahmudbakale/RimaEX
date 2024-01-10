@extends('layouts.admin')
@section('title', 'Create Warehouse')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Create Warehouse</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.warehouses.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Name</label>
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputEmail4">Location</label>
                                       <input type="text" name="location" class="form-control" placeholder="Location">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputEmail4">Capacity</label>
                                       <input type="text" name="capacity" class="form-control" placeholder="Capacity">
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer mt-4">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
