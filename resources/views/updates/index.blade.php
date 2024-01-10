@extends('layouts.admin')
@section('title', 'Updates')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <a href="{{route('app.updates.create')}}" class="btn btn-primary float-end mt-n1"><i class="fas fa-plus"></i> Create Updates</a>
            <h1 class="h3 mb-3">Updates</h1>
            <div class="row">
                <div class="col-12">
                    <livewire:updates />
                </div>
            </div>
        </div>
    </main>
@endsection
