@extends('layouts.admin')
@section('title', 'Create Role')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Create Role</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.roles.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Name</label>
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputRole">Permissions</label>
                                        <select id="inputRole" name="permissions[]" multiple class="form-control">
                                            <option selected="">Choose...</option>
                                            @foreach ($permissions as $key => $permission)
                                                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
