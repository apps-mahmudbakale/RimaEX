@extends('layouts.admin')
@section('title', 'Edit Commodity')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Edit Commodity</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.commodities.update', $commodity->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Name</label>
                                        <input type="text" name="name" class="form-control" id="inputName" value="{{old('name', isset($commodity) ? $commodity->name : '')}}" placeholder="Name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputPrice">Current Price</label>
                                        <input type="number" name="current_price" class="form-control" min="0" step="0" id="inputPrice" value="{{old('current_price', isset($commodity) ? $commodity->current_price : '')}}" placeholder="Current Price">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="old_price">Old Price</label>
                                        <input type="number" name="old_price" class="form-control" step="0" id="old_price" value="{{old('old_price', isset($commodity) ? $commodity->old_price : '')}}" placeholder="Old Price">
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
