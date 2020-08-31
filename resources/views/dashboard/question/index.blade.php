@extends('layouts.dashboard')

@section('title', 'Questions')
@push('styles')
    <link href="{{asset("assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                <h3 class="card-label">Questions</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{route('dashboard.question.export')}}" style="margin-right: 20px" target="_blank" class="btn btn-success font-weight-bolder">
                    <i class="fa fa-file-export"></i>
                    Export
                </a>
                <!--begin::Button-->
                <a href="{{route('dashboard.question.create')}}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>
                    New Question
                </a>
                <!--end::Button-->
            </div>
        </div>
        <div class="card-body">
            <!--begin: Datatable-->
            @if (session('status'))
                <div class="alert alert-success">
                    <div class="alert-text">
                        {{ session('status') }}
                    </div>
                </div>
            @endif

            <table class="table table-bordered table-hover table-checkable" id="kt_datatable" style="margin-top: 13px !important">
                <thead>
                <tr>
                    <th>Record ID</th>
                    <th>Question</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($questions as $question)
                    <tr>
                        <td>{{$question->id}}</td>
                        <td>{{$question->question}}</td>
                        <td>{{$question->created_at}}</td>
                        <td>
                            @if($setting->question_tab == $question->id)
                                <a data-toggle="tooltip" data-theme="dark" title="Close Question Tab" href="{{route('dashboard.setting.open_question', 0)}}"  class="btn btn-info font-weight-bolder">
                                    <i class="fa fa-door-closed"></i>
                                </a>
                            @else
                                <a data-toggle="tooltip" data-theme="dark" title="Open Question Tab" href="{{route('dashboard.setting.open_question', $question->id)}}" class="btn btn-info font-weight-bolder">
                                    <i class="fa fa-door-open"></i>
                                </a>
                            @endif
                            <span data-toggle="tooltip" data-theme="dark" title="Answers">
                            <button data-toggle="modal" data-target="#answers_{{$question->id}}" class="btn btn-sm btn-icon btn-success">
                                <i class="fa fa-tasks"></i>
                            </button>
                            </span>
                            <a data-toggle="tooltip" data-theme="dark" title="Edit" href="{{route('dashboard.question.edit', $question->id)}}" class="btn btn-sm btn-icon btn-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a  data-toggle="tooltip" data-theme="dark" title="Delete" onclick="event.preventDefault();
                                document.getElementById('question-delete-{{$question->id}}').submit();" href="{{route('dashboard.question.destroy', $question->id)}}" class="btn btn-sm btn-icon btn-danger">
                                <i class="fa fa-times"></i>
                            </a>
                            <form id="question-delete-{{$question->id}}" action="{{route('dashboard.question.destroy', $question->id)}}" method="POST" style="display: none;">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>

            </table>
            <!--end: Datatable-->
        </div>
    </div>
    <!--end::Card-->
    @foreach($questions as $question)
        <div class="modal fade" id="answers_{{$question->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Answers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table table-bordered table-hover table-checkable">
                        <thead>
                        <tr>
                            <th>Record ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>answer</th>
                            <th>Created At</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($question->answers as $answer)
                            <tr>
                                <td>{{$answer->id}}</td>
                                <td>{{$answer->guest->first_name}}</td>
                                <td>{{$answer->guest->email}}</td>
                                <td>{{$answer->answer}}</td>
                                <td>{{$answer->created_at}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>
    @endforeach
@endsection
@push('scripts')
    <!--begin::Page Vendors(used by this page)-->
    <script src="{{asset("assets/plugins/custom/datatables/datatables.bundle.js")}}"></script>
    {{--    <script src="{{asset('assets/js/pages/crud/datatables/data-sources/html.js')}}"></script>--}}
    <script>
        $(document).ready( function () {
            $('#kt_datatable').DataTable();
        } );
    </script>
    <!--end::Page Vendors-->
@endpush
