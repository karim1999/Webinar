@extends('layouts.dashboard')

@section('title', $poll->question)
@push('styles')
    <link rel="stylesheet" href="{{asset("css/main.css")}}" />
    <style>
        /*.progress {*/
        /*    position: absolute;*/
        /*    left: 0;*/
        /*    top: 0;*/
        /*    height: 100%;*/
        /*    width: 2%;*/
        /*    background-color: #DBEEFF;*/
        /*    border-radius: 0.8rem 0 0 0.8rem;*/
        /*}*/

    </style>
@endpush

@section('content')
    <!--begin::Card-->
    <div id="real_time_poll" class="card card-custom">
        <input type="hidden" style="display: none" value="{{$poll->id}}" ref="poll_id">
        <div class="card-header">
            <div class="card-title">
                <span class="card-icon"><i class="flaticon2-favourite text-primary"></i></span>
                <h3 class="card-label">{{$poll->question}}</h3>
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
            <div v-if="results">
                <div class="polling-content">
                    <div v-for="option in results.options" class="polling-answer">
                        <p style="position: inherit; z-index: 78234" class="polling-answer__text">@{{ option.option }} (@{{ Math.round(option.votes/results.total*100) }}%)</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" :style="{width: Math.round(option.votes/results.total*100)+'%'}" :aria-valuenow="Math.round(option.votes/results.total*100)" aria-valuemin="0" aria-valuemax="100">@{{ Math.round(option.votes/results.total*100)+'%' }}</div>
                        </div>
{{--                        <span class="progress"></span>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end::Card-->

@endsection
@push('scripts')
    <script src="{{asset("js/app.js")}}" defer></script>
    <script src="{{asset("js/poll.js")}}" defer></script>
@endpush
