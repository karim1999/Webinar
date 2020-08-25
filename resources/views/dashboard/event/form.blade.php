@extends('layouts.dashboard')
@section('title', 'Add Event')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Add to the agenda
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
        <form method="post" action="{{isset($event->id) ? route('dashboard.event.update', 1) : route('dashboard.event.store')}}" enctype="multipart/form-data">
            @csrf
            @isset($event->id)
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Title</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('title', $event->title)}}" name="title"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Description</label>
                    <div class="col-10">
                        <textarea id="kt-ckeditor-1" class="form-control" name="description">{{old('description', $event->description)}}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-2 col-form-label">Form</label>
                    <div class="col-10">
                        <input class="form-control" name="from" type="time" value="{{old('from', $event->from)}}"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-time-input" class="col-2 col-form-label">To</label>
                    <div class="col-10">
                        <input class="form-control" name="to" type="time" value="{{old('to', $event->to)}}"/>
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
@push('scripts')
    <script src="{{asset('assets/plugins/custom/ckeditor/ckeditor-classic.bundle.js')}}"></script>
    <script>
        var KTCkeditor = function () {
            // Private functions
            var demos = function () {
                ClassicEditor
                    .create( document.querySelector( '#kt-ckeditor-1' ),  {
                        toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ],
                        heading: {
                            options: [
                                { model: 'paragraph', title: 'Paragraph', class: 'ck-heading_paragraph' },
                                { model: 'heading1', view: 'h1', title: 'Heading 1', class: 'ck-heading_heading1' },
                                { model: 'heading2', view: 'h2', title: 'Heading 2', class: 'ck-heading_heading2' }
                            ]
                        }
                    } )
                    .then( editor => {
                        console.log( editor );
                    } )
                    .catch( error => {
                        console.error( error );
                    } );
            }

            return {
                // public functions
                init: function() {
                    demos();
                }
            };
        }();

        // Initialization
        jQuery(document).ready(function() {
            KTCkeditor.init();
        });    </script>
@endpush
