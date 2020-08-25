@extends('layouts.dashboard')

@section('title', 'Polls')
@push('styles')
    <link href="{{asset("assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                <h3 class="card-label">Polls</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{route('dashboard.poll.export')}}" style="margin-right: 20px" target="_blank" class="btn btn-success font-weight-bolder">
                    <i class="fa fa-file-export"></i>
                    Export
                </a>

                <!--begin::Button-->
                <a href="{{route('dashboard.poll.create')}}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>
                    New Poll
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
                    <th>Options</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($polls as $poll)
                    <tr>
                        <td>{{$poll->id}}</td>
                        <td>{{$poll->question}}</td>
                        <td>
                            @foreach($poll->options as $option)
                                <li>{{$option->option}}: {{$option->votes}}</li>
                            @endforeach
                        </td>
                        <td>{{$poll->created_at}}</td>
                        <td>
                            @if($setting->poll_tab == $poll->id)
                                <a href="{{route('dashboard.setting.open_poll', 0)}}" class="btn btn-info font-weight-bolder">
                                    <i class="fa fa-door-closed"></i>
                                </a>
                            @else
                                <a href="{{route('dashboard.setting.open_poll', $poll->id)}}" class="btn btn-info font-weight-bolder">
                                    <i class="fa fa-door-open"></i>
                                </a>
                            @endif

                            <a href="{{route('dashboard.poll.edit', $poll->id)}}" class="btn btn-sm btn-icon btn-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a onclick="event.preventDefault();
                                document.getElementById('poll-delete-{{$poll->id}}').submit();" href="{{route('dashboard.poll.destroy', $poll->id)}}" class="btn btn-sm btn-icon btn-danger">
                                <i class="fa fa-times"></i>
                            </a>
                            <form id="poll-delete-{{$poll->id}}" action="{{route('dashboard.poll.destroy', $poll->id)}}" method="POST" style="display: none;">
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
