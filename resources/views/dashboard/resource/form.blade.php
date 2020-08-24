@extends('layouts.dashboard')
@section('title', 'Add Resource')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                New Resource
            </h3>
        </div>
        <!--begin::Form-->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        @if (session('status'))
            <div class="alert alert-success">
                <div class="alert-text">
                    {{ session('status') }}
                </div>
            </div>
        @endif
        <form method="post" action="{{isset($resource->id) ? route('dashboard.resource.update', 1) : route('dashboard.resource.store')}}" enctype="multipart/form-data">
            @csrf
            @isset($resource->id)
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="form-group row">
                    <label  class="col-2 col-form-label">File</label>
                    <div class="col-10">
                        <input class="form-control" type="file" name="file"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Name</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('name', $resource->name)}}" name="name"/>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="row">
                    <div class="col-2">
                    </div>
                    <div class="col-10">
                        <button type="submit" class="btn btn-success mr-2">Submit</button>
                        <button type="reset" class="btn btn-secondary">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
