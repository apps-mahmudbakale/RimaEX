@extends('layouts.admin')
@section('title', 'Create Commodity')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Create Commodity</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.commodities.store')}}" method="POST">
                                @csrf
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Name</label>
                                        <input type="text" name="name" class="form-control" id="inputName" placeholder="Name">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Commodity Code</label>
                                        <input type="text" name="commodity_code" class="form-control" id="inputName" placeholder="Code">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputPrice">Current Price</label>
                                        <input type="number" name="current_price" class="form-control" min="0" step="0" id="inputPrice" placeholder="Current Price">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="old_price">Old Price</label>
                                        <input type="number" name="old_price" class="form-control" step="0" id="old_price"
                                            placeholder="Old Price">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="old_price">Ware House</label>
                                       <select name="ware_house_id" id="" class="form-control">
                                        @foreach ($warehouses as $warehouse)
                                            <option value="{{$warehouse->id}}">{{$warehouse->name }}</option>
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
