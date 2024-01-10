@extends('layouts.admin')
@section('title', 'Edit Update')
@section('content')
    <main class="content">
        <div class="container-fluid p-0">
            <h1 class="h3 mb-3">Edit Update</h1>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('app.updates.update', $update->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputName">Title</label>
                                        <input type="text" name="title" class="form-control" id="inputName" value="{{old('title', isset($update) ? $update->title : '')}}" placeholder="Title">
                                    </div>
                                    <div class="mb-3 col-md-12">
                                        <label class="form-label" for="inputEmail4">Update</label>
                                        <textarea name="body" id="summernote" cols="30" class="form-control" rows="10">
                                            {{old('body', isset($update) ? $update->body : '')}}
                                        </textarea>
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
