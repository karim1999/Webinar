@extends('layouts.dashboard')
@section('title', 'Add Poll')
@section('content')
    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">
                Add to the polls
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
        <form method="post" action="{{isset($poll->id) ? route('dashboard.poll.update', 1) : route('dashboard.poll.store')}}" enctype="multipart/form-data">
            @csrf
            @isset($poll->id)
                @method('PUT')
            @endif
            <div class="card-body">
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Question</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('question', $poll->question)}}" name="question"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Option1</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('option1', (count($poll->options) > 0) ? $poll->options[0]->option : "")}}" name="option1"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Option2</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('option2', (count($poll->options) > 1) ? $poll->options[1]->option : "")}}" name="option2"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Option3</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('option3', (count($poll->options) > 2) ? $poll->options[2]->option : "")}}" name="option3"/>
                    </div>
                </div>
                <div class="form-group row">
                    <label  class="col-2 col-form-label">Option4</label>
                    <div class="col-10">
                        <input class="form-control" type="text" value="{{old('option4', (count($poll->options) > 3) ? $poll->options[3]->option : "")}}" name="option4"/>
                    </div>
                </div>
{{--                <div id="kt_repeater_3">--}}
{{--                    <div class="form-group row">--}}
{{--                        <label class="col-2 col-form-label">Options:</label>--}}
{{--                        <div data-repeater-list="" class="col-lg-10">--}}
{{--                            <div data-repeater-item class="form-group row">--}}
{{--                                <div class="col-lg-10">--}}
{{--                                    <div class="input-group">--}}
{{--                                        <div class="input-group-prepend">--}}
{{--                                        <span class="input-group-text">--}}
{{--                                            <i class="fa fa-poll"></i>--}}
{{--                                        </span>--}}
{{--                                        </div>--}}
{{--                                        <input type="text" class="form-control" placeholder="Option"/>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-2">--}}
{{--                                    <a href="javascript:;" data-repeater-delete="" class="btn font-weight-bold btn-danger btn-icon">--}}
{{--                                        <i class="la la-remove"></i>--}}
{{--                                    </a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="form-group row">--}}
{{--                        <div class="col-lg-3"></div>--}}
{{--                        <div class="col">--}}
{{--                            <div data-repeater-create="" class="btn font-weight-bold btn-primary">--}}
{{--                                <i class="la la-plus"></i>--}}
{{--                                Add--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
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
    <script>
        // Class definition
        // var KTFormRepeater = function() {
        //
        //     // Private functions
        //     var demo3 = function() {
        //         $('#kt_repeater_3').repeater({
        //             initEmpty: false,
        //
        //             defaultValues: {
        //                 'text-input': 'foo'
        //             },
        //
        //             show: function() {
        //                 $(this).slideDown();
        //             },
        //
        //             hide: function(deleteElement) {
        //                 if(confirm('Are you sure you want to delete this element?')) {
        //                     $(this).slideUp(deleteElement);
        //                 }
        //             }
        //         });
        //     }
        //
        //     return {
        //         // public functions
        //         init: function() {
        //             demo3();
        //         }
        //     };
        // }();
        //
        // jQuery(document).ready(function() {
        //     KTFormRepeater.init();
        // });
    </script>
@endpush
