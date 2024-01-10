@extends('layouts.admin')
@section('title', 'Edit User')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Edit User</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.users.update', $user->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputName">First Name</label>
                                        <input type="text" name="firstname" class="form-control" value="{{old('firstname', isset($user) ? $user->firstname : '')}}" id="inputName" placeholder="First Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputName">Last Name</label>
                                        <input type="text" name="lastname" class="form-control" value="{{old('lastname', isset($user) ? $user->lastname : '')}}" id="inputName" placeholder="First Name">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputEmail4">Email</label>
                                        <input type="email" name="email" class="form-control" value="{{old('email', isset($user) ? $user->email : '')}}" id="inputEmail4" placeholder="Email">
                                    </div>
                                    <div class="mb-3 col-md-6">
                                        <label class="form-label" for="inputName">Phone</label>
                                        <input type="text" name="phone" class="form-control" value="{{old('phone', isset($user) ? $user->phone : '')}}" id="inputinputName" placeholder="Phone">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputRole">Role</label>
                                        <select id="inputRole" name="roles[]" class="form-control">
                                            <option selected="">Choose...</option>
                                            @foreach ($roles as $key => $role)
                                                <option value="{{ $role->id }}">{{ $role->name }}</option>
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
