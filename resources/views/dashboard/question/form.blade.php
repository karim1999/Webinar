@extends('layouts.dashboard')
@section('title', 'Add Question')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Add to the questions
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
        <form method="post" action="{{isset($question->id) ? route('dashboard.question.update', 1) : route('dashboard.question.store')}}" enctype="multipart/form-data">
            @csrf
            @isset($question->id)
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Question</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('question', $question->question)}}" name="question"/>
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
