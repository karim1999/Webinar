@extends('layouts.dashboard')

@section('title', 'Guests')
@push('styles')
    <link href="{{asset("assets/plugins/custom/datatables/datatables.bundle.css")}}" rel="stylesheet" type="text/css"/>
@endpush

@section('content')
    <!--begin::Card-->
    <div class="card card-custom">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                <h3 class="card-label">Guests</h3>
            </div>
            <div class="card-toolbar">

                <!--begin::Button-->
{{--                <a href="{{route('dashboard.guest.create')}}" class="btn btn-primary font-weight-bolder">--}}
{{--                    <i class="la la-plus"></i>--}}
{{--                    New Guest--}}
{{--                </a>--}}
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
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Organization</th>
                    <th>Department</th>
                    <th>Created At</th>
{{--                    <th>Actions</th>--}}
                </tr>
                </thead>

                <tbody>
                @foreach($guests as $guest)
                    <tr>
                        <td>{{$guest->id}}</td>
                        <td>{{$guest->first_name}} {{$guest->last_name}}</td>
                        <td>{{$guest->email}}</td>
                        <td>{{$guest->mobile}}</td>
                        <td>{{$guest->city}}</td>
                        <td>{{$guest->organization}}</td>
                        <td>{{$guest->department}}</td>
                        <td>{{$guest->created_at}}</td>
{{--                        <td>--}}
{{--                            <a href="{{route('dashboard.guest.edit', $guest->id)}}" class="btn btn-sm btn-icon btn-primary">--}}
{{--                                <i class="fa fa-pen"></i>--}}
{{--                            </a>--}}
{{--                            <a onclick="event.preventDefault();--}}
{{--                                document.getElementById('guest-delete-{{$guest->id}}').submit();" href="{{route('dashboard.guest.destroy', $guest->id)}}" class="btn btn-sm btn-icon btn-danger">--}}
{{--                                <i class="fa fa-times"></i>--}}
{{--                            </a>--}}
{{--                            <form id="guest-delete-{{$guest->id}}" action="{{route('dashboard.guest.destroy', $guest->id)}}" method="POST" style="display: none;">--}}
{{--                                @method('DELETE')--}}
{{--                                @csrf--}}
{{--                            </form>--}}
{{--                        </td>--}}
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
