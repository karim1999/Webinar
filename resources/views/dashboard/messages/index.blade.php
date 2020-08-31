@extends('layouts.dashboard')

@section('title', 'Messages')
@push('styles')
    <link rel="stylesheet" href="{{asset("css/main.css")}}" />
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
                <a href="{{route('dashboard.message.export')}}" style="margin-right: 20px" target="_blank" class="btn btn-success font-weight-bolder">
                    <i class="fa fa-file-export"></i>
                    Export
                </a>

                <!--begin::Button-->
                <a href="{{route('dashboard.message.reset')}}" class="btn btn-danger font-weight-bolder">
                    Reset
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

            <main>
                <div class="chat-window" style="width: 100%" id="chat">
                    <div class="chat-window__title-box">
                        <h1 class="chat-window__title">Chat Window</h1>
                    </div>
                    <div class="chat-window__comments-box" id="chat_box">
                        <div class="user-comments-box" v-for="message in messages" :key="message.id">
{{--                            <img--}}
{{--                                style="width: 32px; height: 32px;"--}}
{{--                                src="{{asset('img/profile-pic.png')}}"--}}
{{--                                alt="profile-pic"--}}
{{--                                class="user-comments-box__profile-pic"--}}
{{--                            />--}}
                            <div class="user-comments-box__content">
                                <h2 class="user-name">@{{ message.guest.first_name }} @{{ message.guest.last_name }}</h2>
                                <p class="user-comment">
                                    @{{ message.message }}
                                    <i @click="deleteMessage(message.id)" style="color: red; cursor:pointer;" class="fa fa-times"></i>
                                </p>
                            </div>
                        </div>
                        {{--                    <form action="#" v-on:submit.prevent="addMessage" class="add-comment">--}}
                        {{--                        <input--}}
                        {{--                            type="text"--}}
                        {{--                            v-model="message"--}}
                        {{--                            name="add-comment"--}}
                        {{--                            id="add-comment"--}}
                        {{--                            class="add-comment__input"--}}
                        {{--                            placeholder="Type your message here"--}}
                        {{--                        />--}}
                        {{--                        <input ref="guest_id" type="hidden" style="display: none" value="{{auth()->user()->id}}">--}}
                        {{--                        <button type="submit" class="add-comment__btn">--}}
                        {{--                            <img src="{{asset('img/send.png')}}" alt="send-button" />--}}
                        {{--                        </button>--}}
                        {{--                    </form>--}}
                    </div>
                </div>
            </main>
        </div>
    </div>
    <!--end::Card-->

@endsection
@push('scripts')
    <script src="{{asset("js/app.js")}}" defer></script>
    <script src="{{asset("js/chat.js")}}" defer></script>
@endpush
