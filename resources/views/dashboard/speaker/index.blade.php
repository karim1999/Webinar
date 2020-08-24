@extends('layouts.dashboard')

@section('title', 'Speakers')
@push('styles')
    <link href="{{asset("assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                <h3 class="card-label">Speakers</h3>
            </div>
            <div class="card-toolbar">
                <a href="{{route('dashboard.speaker.export')}}" style="margin-right: 20px" target="_blank" class="btn btn-success font-weight-bolder">
                    <i class="fa fa-file-export"></i>
                    Export
                </a>

                <!--begin::Button-->
                <a href="{{route('dashboard.speaker.create')}}" class="btn btn-primary font-weight-bolder">
                    <i class="la la-plus"></i>
                    New Speaker
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
                    <th>Image</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Created At</th>
                    <th>Actions</th>
                </tr>
                </thead>

                <tbody>
                @foreach($speakers as $speaker)
                    <tr>
                        <td>{{$speaker->id}}</td>
                        <td><img style="width: 50px; height: 50px" src="{{$speaker->getFirstMediaUrl('image')}}" alt=""></td>
                        <td>{{$speaker->name}}</td>
                        <td>{{$speaker->description}}</td>
                        <td>{{$speaker->created_at}}</td>
                        <td>
                            <a href="{{route('dashboard.speaker.edit', $speaker->id)}}" class="btn btn-sm btn-icon btn-primary">
                                <i class="fa fa-pen"></i>
                            </a>
                            <a onclick="event.preventDefault();
                                document.getElementById('speaker-delete-{{$speaker->id}}').submit();"href="{{route('dashboard.speaker.destroy', $speaker->id)}}" class="btn btn-sm btn-icon btn-danger">
                                <i class="fa fa-times"></i>
                            </a>
                            <form id="speaker-delete-{{$speaker->id}}" action="{{route('dashboard.speaker.destroy', $speaker->id)}}" method="POST" style="display: none;">
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
