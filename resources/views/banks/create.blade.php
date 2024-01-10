@extends('layouts.admin')
@section('title', 'Create Bank')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Create Bank</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.banks.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Bank Name</label>
                                        <input type="text" name="bank_name" class="form-control" id="inputName" placeholder="Bank Name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Account Name</label>
                                        <input type="text" name="account_name" class="form-control" id="inputName" placeholder="Account Name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputPrice">Account Number</label>
                                        <input type="text" name="account_number" class="form-control" placeholder="Account Number">
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
