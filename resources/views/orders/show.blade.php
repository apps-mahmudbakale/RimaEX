@extends('layouts.admin')
@section('title', 'Updates')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <a href="{{route('app.updates.index')}}" class="btn btn-primary float-end mt-n1"> Back</a>
            <h1 class="h3 mb-3">{{$update->title}}</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {!! $update->body !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
