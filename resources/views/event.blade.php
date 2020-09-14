<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$setting->title}} | Event Page</title>
    <meta name="description" content="{{$setting->description}}">
    <meta name="keywords" content="{{$setting->keywords}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @if ($now->lessThan(\Carbon\Carbon::parse($setting->event_time)))
        <link rel="stylesheet" href="{{asset("css/timer.css")}}" />
        <style>
            .main, body{
                background-image: linear-gradient(to bottom, {{$setting->gradient_from}}, {{$setting->gradient_to}})
            }
        </style>
    @else
        <link rel="stylesheet" href="{{asset("css/main.css")}}" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
        <script src="{{asset("js/main.js")}}" defer></script>
    @endif
</head>
<body>
<style>
    [v-cloak] { display: none; }
    .progress {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        width: 2%;
        background-color: #DBEEFF;
        border-radius: 0.8rem 0 0 0.8rem;
    }
    .logout-svg{
        width: 30px;
        fill: {{$setting->gradient_from}};
        height: auto;
    }
    svg, svg * {
        fill: {{$setting->gradient_from}} !important;
    }
    #Ellipse_3{
        fill: #ffffff !important;
    }
</style>
@if ($now->lessThan(\Carbon\Carbon::parse($setting->event_time)))
    <div class="main" id="timer">
        <countdown @end="handleCountdownEnd" class="main" :time="{{round(\Carbon\Carbon::parse($setting->event_time)->floatDiffInSeconds($now))*1000}}">
            <template slot-scope="props">
                <div id='content'>
                    <div class='title'>
                        <span>{{$setting->title}}</span>
                    </div>
                    <p>coming soon</p>
                    <section>
                        <ul id="countdown">
                            <li><span class="days timenumbers">@{{ props.days }}</span>
                                <p class="timeRefDays timedescription">days</p>
                            </li>
                            <li><span class="hours timenumbers">@{{ props.hours }}</span>
                                <p class="timeRefHours timedescription">hours</p>
                            </li>
                            <li><span class="minutes timenumbers">@{{ props.minutes }}</span>
                                <p class="timeRefMinutes timedescription">minutes</p>
                            </li>
                            <li><span class="seconds timenumbers yellow-text">@{{ props.seconds }}</span>
                                <p class="timeRefSeconds timedescription">seconds</p>
                            </li>
                        </ul>
                    </section>
                </div>
            </template>
        </countdown>
    </div>

@else
    <div class="top-bar" style="justify-content: space-between">
        <img src="{{$setting->getFirstMediaUrl('logo_dark')}}" alt="logo" style="height: 30px" class="top-bar__logo" />
        <a style="text-decoration: none; margin-right: 20px; font-size: 16px;" href="{{route('webinar.logout')}}">
            <svg class="logout-svg" height="512pt" viewBox="0 0 512.00533 512" width="512pt" xmlns="http://www.w3.org/2000/svg"><path d="m320 277.335938c-11.796875 0-21.332031 9.558593-21.332031 21.332031v85.335937c0 11.753906-9.558594 21.332032-21.335938 21.332032h-64v-320c0-18.21875-11.605469-34.496094-29.054687-40.554688l-6.316406-2.113281h99.371093c11.777344 0 21.335938 9.578125 21.335938 21.335937v64c0 11.773438 9.535156 21.332032 21.332031 21.332032s21.332031-9.558594 21.332031-21.332032v-64c0-35.285156-28.714843-63.99999975-64-63.99999975h-229.332031c-.8125 0-1.492188.36328175-2.28125.46874975-1.027344-.085937-2.007812-.46874975-3.050781-.46874975-23.53125 0-42.667969 19.13281275-42.667969 42.66406275v384c0 18.21875 11.605469 34.496093 29.054688 40.554687l128.386718 42.796875c4.351563 1.34375 8.679688 1.984375 13.226563 1.984375 23.53125 0 42.664062-19.136718 42.664062-42.667968v-21.332032h64c35.285157 0 64-28.714844 64-64v-85.335937c0-11.773438-9.535156-21.332031-21.332031-21.332031zm0 0"/><path d="m505.75 198.253906-85.335938-85.332031c-6.097656-6.101563-15.273437-7.9375-23.25-4.632813-7.957031 3.308594-13.164062 11.09375-13.164062 19.714844v64h-85.332031c-11.777344 0-21.335938 9.554688-21.335938 21.332032 0 11.777343 9.558594 21.332031 21.335938 21.332031h85.332031v64c0 8.621093 5.207031 16.40625 13.164062 19.714843 7.976563 3.304688 17.152344 1.46875 23.25-4.628906l85.335938-85.335937c8.339844-8.339844 8.339844-21.824219 0-30.164063zm0 0"/></svg>
        </a>
    </div>
    <main>
        <div class="video-box">
            <iframe
                width="100%"
                height="100%"
                src="{{$setting->link}}"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe>
        </div>
        <div class="chat-window" id="chat" style="background-color: {{$setting->chat_background}}">
            <div class="chat-window__title-box" style="background: linear-gradient(to bottom, {{$setting->gradient_from}}, {{$setting->gradient_to}})">
                <h1 class="chat-window__title">Chat Window</h1>
            </div>
            <div v-cloak class="chat-window__comments-box" id="chat_box">
                <div class="user-comments-box" v-for="message in messages" :key="message.id">
                    {{--                <img--}}
                    {{--                    style="width: 32px; height: 32px;"--}}
                    {{--                    src="{{asset('img/profile-pic.png')}}"--}}
                    {{--                    alt="profile-pic"--}}
                    {{--                    class="user-comments-box__profile-pic"--}}
                    {{--                />--}}
                    <div class="user-comments-box__content">
                        <h2 class="user-name">@{{ message.guest.first_name }} @{{ message.guest.last_name }}</h2>
                        <p class="user-comment">
                            @{{ message.message }}
                        </p>
                    </div>
                </div>
                <form action="#" v-on:submit.prevent="addMessage" class="add-comment">
                    <input
                        type="text"
                        v-model="message"
                        name="add-comment"
                        id="add-comment"
                        class="add-comment__input"
                        placeholder="Type your message here"
                    />
                    <input ref="guest_id" type="hidden" style="display: none" value="{{auth()->user()->id}}">
                    <button type="submit" class="add-comment__btn">
                        <img src="{{asset('img/send.png')}}" alt="send-button" />
                    </button>
                </form>
            </div>
        </div>
    </main>
    <footer>
        @if ($setting->enable_resources)
            <div class="footer-icon-box" id="resources_button" onclick="onResourcesList()">
{{--                <img--}}
{{--                    src="{{asset('img/icon-1.svg')}}"--}}
{{--                    alt="resources-list"--}}
{{--                    class="footer-icon"--}}
{{--                    id="resouces-icon"--}}
{{--                />--}}
                <svg class="footer-icon"
                     id="resouces-icon" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon-1" transform="translate(-18 -1000)">
                        <g id="Group_533" data-name="Group 533">
                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="32" cy="32" r="32" transform="translate(18 1000)" fill="#343434" opacity="0.996"/>
                            <circle id="Ellipse_3" data-name="Ellipse 3" cx="29" cy="29" r="29" transform="translate(21 1003)" fill="#fff"/>
                        </g>
                        <g id="list_1_" data-name="list (1)" transform="translate(-23.75 1019)">
                            <g id="Group_501" data-name="Group 501" transform="translate(68.875)">
                                <g id="Group_500" data-name="Group 500">
                                    <path id="Path_79" data-name="Path 79" d="M168.938,1.625h-1.765a2.438,2.438,0,0,0-4.6,0h-1.763a.813.813,0,0,0-.812.813v3.25a.813.813,0,0,0,.813.813h8.125a.813.813,0,0,0,.813-.812V2.438A.813.813,0,0,0,168.938,1.625Z" transform="translate(-160)" fill="#343434"/>
                                </g>
                            </g>
                            <g id="Group_503" data-name="Group 503" transform="translate(64 3.25)">
                                <g id="Group_502" data-name="Group 502">
                                    <path id="Path_80" data-name="Path 80" d="M81.875,64H80.25v2.438a2.44,2.44,0,0,1-2.437,2.438H69.688a2.44,2.44,0,0,1-2.437-2.437V64H65.625A1.628,1.628,0,0,0,64,65.625v19.5a1.607,1.607,0,0,0,1.625,1.625h16.25A1.607,1.607,0,0,0,83.5,85.125v-19.5A1.607,1.607,0,0,0,81.875,64ZM73.513,78.388l-3.25,3.25a.816.816,0,0,1-1.15,0l-1.625-1.625a.812.812,0,0,1,1.149-1.149l1.051,1.05,2.675-2.675a.813.813,0,0,1,1.15,1.149Zm0-6.5-3.25,3.25a.816.816,0,0,1-1.15,0l-1.625-1.625a.812.812,0,0,1,1.149-1.149l1.051,1.05,2.675-2.675a.813.813,0,0,1,1.15,1.149Zm5.925,8.362h-3.25a.813.813,0,0,1,0-1.625h3.25a.813.813,0,0,1,0,1.625Zm0-6.5h-3.25a.813.813,0,0,1,0-1.625h3.25a.813.813,0,0,1,0,1.625Z" transform="translate(-64 -64)" fill="#343434"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>

                <span class="icon-title" id="resources">{{$setting->resources_tab_name}}</span>
            </div>
        @endif
        @if ($setting->enable_polls)
            <div class="footer-icon-box" id="poll_button" onclick="onPolling()">
{{--                <img--}}
{{--                    src="{{asset('img/icon-2.svg')}}"--}}
{{--                    alt="resources-list"--}}
{{--                    class="footer-icon"--}}
{{--                    id="polling-icon"--}}
{{--                />--}}
                <svg
                    class="footer-icon"
                    id="polling-icon"
                    xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon-2" transform="translate(-114 -1000)">
                        <g id="icon-2-2" data-name="icon-2" transform="translate(96)">
                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="32" cy="32" r="32" transform="translate(18 1000)" fill="#343434" opacity="0.996"/>
                            <circle id="Ellipse_3" data-name="Ellipse 3" cx="29" cy="29" r="29" transform="translate(21 1003)" fill="#fff"/>
                        </g>
                        <g id="ballot" transform="translate(133 1019)">
                            <path id="Path_76" data-name="Path 76" d="M.542,22.833h2.3a.541.541,0,0,0,.521-.394l2.4-8.448a1.083,1.083,0,0,0-.672-1.314A12.7,12.7,0,0,0,.533,12,.542.542,0,0,0,0,12.544v9.748a.542.542,0,0,0,.542.542Z" transform="translate(0 1)" fill="#343434"/>
                            <path id="Path_77" data-name="Path 77" d="M23.437,17.807c-2.167,0-6.5,2.742-8.667,2.742a9.977,9.977,0,0,1-4.6-1.659,33.748,33.748,0,0,0,4.6.542c1.686,0,2.167-.575,2.167-1.354,0-1.9-3.22-2.191-4.849-2.439A9.963,9.963,0,0,0,7.01,13.82a2.611,2.611,0,0,1-.082.461l-2.176,7.67c2.465,1.121,6.709,2.9,8.936,2.9,3.25,0,11.917-4.333,11.917-5.417S24.521,17.807,23.437,17.807Z" transform="translate(0.396 1.152)" fill="#343434"/>
                            <path id="Path_78" data-name="Path 78" d="M18.966,11.917a1.826,1.826,0,0,0,1.3-.537l2.031-2.031a1.848,1.848,0,0,0,.538-1.3V1.69A1.692,1.692,0,0,0,21.143,0H13.69A1.692,1.692,0,0,0,12,1.69v8.537a1.692,1.692,0,0,0,1.69,1.69ZM14.705,5.334a.814.814,0,0,1,1.145.1l.752.9,2.385-2.818a.812.812,0,1,1,1.24,1.05L17.217,8.125a.815.815,0,0,1-.62.288.838.838,0,0,1-.624-.291L14.6,6.479a.814.814,0,0,1,.1-1.145Z" transform="translate(1)" fill="#343434"/>
                        </g>
                    </g>
                </svg>
                <span class="icon-title" id="polling-title">{{$setting->polls_tab_name}}</span>
            </div>
        @endif
        @if ($setting->enable_questions)
            <div class="footer-icon-box" id="question_button" onclick="onQA()">
{{--                <img--}}
{{--                    src="{{asset('img/icon-3.svg')}}"--}}
{{--                    alt="resources-list"--}}
{{--                    class="footer-icon"--}}
{{--                    id="QA-icon"--}}
{{--                />--}}
                <svg class="footer-icon"
                     id="QA-icon" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon-3" transform="translate(-211 -1000)">
                        <g id="icon-3-2" data-name="icon-3" transform="translate(193)">
                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="32" cy="32" r="32" transform="translate(18 1000)" fill="#343434" opacity="0.996"/>
                            <circle id="Ellipse_3" data-name="Ellipse 3" cx="29" cy="29" r="29" transform="translate(21 1003)" fill="#fff"/>
                        </g>
                        <g id="question_1_" data-name="question (1)" transform="translate(229 1005.4)">
                            <g id="Group_497" data-name="Group 497" transform="translate(8.27 22.631)">
                                <g id="Group_496" data-name="Group 496">
                                    <path id="Path_74" data-name="Path 74" d="M163.316,179.6a10.554,10.554,0,0,1-.727,3.808h4.591v1.632h-5.4a10.673,10.673,0,0,1-1.22,1.632h3.9V188.3h-5.773a10.549,10.549,0,0,1-5.979,1.85c-.236,0-.472-.009-.707-.024v1.983h11.836l3.669,4.831,4.08-5.373V179.6Z" transform="translate(-152 -179.6)" fill="#343434"/>
                                </g>
                            </g>
                            <g id="Group_499" data-name="Group 499" transform="translate(0 13.6)">
                                <g id="Group_498" data-name="Group 498">
                                    <path id="Path_75" data-name="Path 75" d="M8.977,13.6A8.987,8.987,0,0,0,0,22.577V33.393l4.41-3.087A8.977,8.977,0,1,0,8.977,13.6Zm.816,13.6H8.161V25.569H9.793Zm0-4.492v1.228H8.161v-2.72h.816a.816.816,0,1,0-.816-.816H6.529a2.448,2.448,0,1,1,3.264,2.308Z" transform="translate(0 -13.6)" fill="#343434"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>

                <span class="icon-title" id="QA-title">{{$setting->questions_tab_name}}</span>
            </div>
        @endif

        {{--    <div class="footer-icon-box" id="social_button" onclick="onSocialFeed()">--}}
        {{--        <img--}}
        {{--            src="{{asset('img/icon-4.svg')}}"--}}
        {{--            alt="resources-list"--}}
        {{--            class="footer-icon"--}}
        {{--            id="social-feed-icon"--}}
        {{--        />--}}
        {{--        <span class="icon-title" id="social-feed-title">Social Feed</span>--}}
        {{--    </div>--}}
        @if ($setting->enable_agenda)
            <div class="footer-icon-box" onclick="onEventAgenda()">
{{--                <img--}}
{{--                    src="{{asset('img/icon-5.svg')}}"--}}
{{--                    alt="event-agenda"--}}
{{--                    class="footer-icon"--}}
{{--                    id="event-agena-icon"--}}
{{--                />--}}
                <svg class="footer-icon"
                     id="event-agena-icon" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon-5" transform="translate(-404 -1000)">
                        <g id="icon-5-2" data-name="icon-5" transform="translate(386)">
                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="32" cy="32" r="32" transform="translate(18 1000)" fill="#343434" opacity="0.996"/>
                            <circle id="Ellipse_3" data-name="Ellipse 3" cx="29" cy="29" r="29" transform="translate(21 1003)" fill="#fff"/>
                        </g>
                        <g id="bookmark" transform="translate(395 1019)">
                            <path id="Path_81" data-name="Path 81" d="M379.689,30.536A2.689,2.689,0,0,0,377,33.225V42.88h5.378V33.225a2.689,2.689,0,0,0-2.689-2.689Z" transform="translate(-329.226 -28.972)" fill="#343434"/>
                            <path id="Path_82" data-name="Path 82" d="M32.689,0A2.689,2.689,0,0,0,30,2.689V26.225l8.119-4.059,8.119,4.059V2.689A2.689,2.689,0,0,1,48.926,0Z" transform="translate(0)" fill="#343434"/>
                        </g>
                    </g>
                </svg>

                <span class="icon-title" id="even-agena-title">{{$setting->agenda_tab_name}}</span>
            </div>
        @endif
        @if ($setting->enable_speakers)
            <div class="footer-icon-box" id="speaker_button" onclick="onSpeakersProfile()">
{{--                <img src="{{asset('img/icon-6.svg')}}" alt="resources-list" class="footer-icon" id="speakers-profile-icon" />--}}
                <svg  class="footer-icon" id="speakers-profile-icon" xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 64 64">
                    <g id="icon-6" transform="translate(-500 -1000)">
                        <g id="icon-6-2" data-name="icon-6" transform="translate(482)">
                            <circle id="Ellipse_2" data-name="Ellipse 2" cx="32" cy="32" r="32" transform="translate(18 1000)" fill="#343434" opacity="0.996"/>
                            <circle id="Ellipse_3" data-name="Ellipse 3" cx="29" cy="29" r="29" transform="translate(21 1003)" fill="#fff"/>
                        </g>
                        <g id="speaker" transform="translate(410.279 1012.001)">
                            <g id="Group_505" data-name="Group 505" transform="translate(109.721 -0.001)">
                                <g id="Group_504" data-name="Group 504" transform="translate(0)">
                                    <path id="Path_83" data-name="Path 83" d="M265.149,188.561v3.246h8.117v-.957a2.147,2.147,0,0,0-1.116-1.864l-4.8-2.657Z" transform="translate(-252.929 -171.68)" fill="#343434"/>
                                    <path id="Path_84" data-name="Path 84" d="M199.776,9.522a6.745,6.745,0,0,0,1.2,2.072,1.131,1.131,0,0,1,.23.676V13.38l2.147,2.181L205.5,13.38V12.27a1.119,1.119,0,0,1,.222-.665,6.778,6.778,0,0,0,1.211-2.081,2.282,2.282,0,0,1,.657-1.181.8.8,0,0,0,.256-.583V6.285a.776.776,0,0,0-.091-.364l-.09-.171a2.237,2.237,0,0,1-.254-1.03V2.6A2.684,2.684,0,0,0,204.659,0h-2.606A2.684,2.684,0,0,0,199.3,2.6v2.12a2.234,2.234,0,0,1-.255,1.031l-.088.17a.773.773,0,0,0-.091.365V7.759a.8.8,0,0,0,.256.583A2.276,2.276,0,0,1,199.776,9.522Z" transform="translate(-191.855 0.001)" fill="#343434"/>
                                    <path id="Path_85" data-name="Path 85" d="M116.909,277.893h15.814V274.3h-23v3.594h4.313a.719.719,0,0,1,0,1.438h-1.965l3.252,13.658h11.8l3.252-13.658H116.909a.719.719,0,0,1,0-1.438Z" transform="translate(-109.721 -252.733)" fill="#343434"/>
                                    <path id="Path_86" data-name="Path 86" d="M151.739,188.559l-2.2-2.233-4.812,2.663a2.142,2.142,0,0,0-1.106,1.859v.957h8.117v-3.246Z" transform="translate(-140.957 -171.677)" fill="#343434"/>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>

                <span class="icon-title" id="speakers-profile-title">{{$setting->speakers_tab_name}}</span>
            </div>
        @endif
    </footer>
    <div id="tabs_container">
        <input ref="guest_id" type="hidden" style="display: none" value="{{auth('guest')->user()->id}}">
        <div class="overlay" id="resources-list">
            <div class="overlay__content">
                <img
                    src="{{asset('img/exit.svg')}}"
                    alt="exit"
                    class="exit"
                    onclick="offResourcesList()"
                />
                <div class="header">
                    <h1 class="overlay__content-header">Resources List</h1>
                    <div class="header__icons">
                        <img src="{{asset('img/thumbnail.svg')}}" alt="thumbnail" class="thumbnail" />
                        <img src="{{asset('img/list-view.svg')}}" alt="list-view" class="listview" />
                    </div>
                </div>
                <hr />
                <div class="resources-list">
                    @foreach($resources as $resource)
                        <div class="resources-list-card">
                            <div class="card-icons-box">
                                <img src="{{asset('img/eye.svg')}}" alt="eye" class="card-icon" />
                                <a href="{{$resource->getFirstMediaUrl('file')}}" target="_blank">
                                    <img src="{{asset('img/download.svg')}}" alt="download" class="card-icon" />
                                </a>
                            </div>
                            <img src="{{asset('img/pdf.svg')}}" alt="pdf" class="pdf-icon" />
                            <p class="card-text">{{$resource->name}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="overlay" id="polling">
            <div class="overlay__content">
                <loading :active.sync="isPolling"
                         :can-cancel="false"
                         :is-full-page="false"></loading>
                <img
                    src="{{asset('img/exit.svg')}}"
                    alt="exit"
                    class="exit"
                    onclick="offPolling()"
                />
                <div class="header">
                    <h1 class="overlay__content-header">Polling</h1>
                </div>
                <hr />
                <div v-if="current_poll" class="polling-content">
                    <h1 class="polling-question">
                        @{{ current_poll.question }}
                    </h1>
                    <div class="sm-hr"></div>
                    <div v-for="option in current_poll.options" @click="submitPolls(option.id)" class="polling-answer">
                        <p class="polling-answer__text">@{{ option.option }}</p>
                    </div>
                </div>
                <h1 v-else class="polling-question">Thanks for answering the questions.</h1>
            </div>
        </div>
        <div v-if="results" class="overlay" id="poll-answers" style="display: flex !important;">
            <div class="overlay__content">
                <loading :active.sync="isPolling"
                         :can-cancel="false"
                         :is-full-page="false"></loading>
                <img
                    src="{{asset('img/exit.svg')}}"
                    alt="exit"
                    class="exit"
                    @click="hideResults"
                />
                <div class="header">
                    <h1 class="overlay__content-header">Results</h1>
                </div>
                <hr />
                <div class="polling-content">
                    <h1 class="polling-question">
                        @{{ results.question }}
                    </h1>
                    <div class="sm-hr"></div>
                    <div v-for="option in results.options" class="polling-answer">
                        <p style="position: inherit; z-index: 78234" class="polling-answer__text">@{{ option.option }} (@{{ Math.round(option.votes/results.total*100) }}%)</p>
                        <span class="progress" :style="{width: Math.round(option.votes/results.total*100)+'%'}"></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="overlay" id="QA">
            <div class="overlay__content">
                <loading :active.sync="isAnswering"
                         :can-cancel="false"
                         :is-full-page="false"></loading>
                <img src="{{asset('img/exit.svg')}}" alt="exit" class="exit" onclick="offQA()" />
                <div class="header">
                    <h1 class="overlay__content-header">Questions and Answers</h1>
                </div>
                <hr />
                <div class="questions">
                    <form v-if="current_question" action="#" v-on:submit.prevent="submitQuestions" class="adding-question">
                        <h1 class="polling-question">
                            @{{ current_question.question }}
                        </h1>
                        <div class="sm-hr"></div>
                        <textarea
                            :name="'question_'+current_question.id"
                            id="question"
                            cols="30"
                            v-model="questions['question_'+current_question.id]"
                            rows="10"
                            class="question-text"
                            placeholder="Type your answer here"
                        ></textarea>
                        <button class="submit-btn">Submit</button>
                    </form>
                    <h1 v-else class="polling-question">{{$setting->after_question}}</h1>
                </div>
            </div>
        </div>
        {{--    <div class="overlay" id="social-feed">--}}
        {{--        <div class="overlay__content">--}}
        {{--            <img--}}
        {{--                src="{{asset('img/exit.svg')}}"--}}
        {{--                alt="exit"--}}
        {{--                class="exit"--}}
        {{--                onclick="offSocialFeed()"--}}
        {{--            />--}}
        {{--            <div class="header">--}}
        {{--                <h1 class="overlay__content-header">Social Feed</h1>--}}
        {{--            </div>--}}
        {{--            <hr />--}}
        {{--            <div class="types-social-media">--}}
        {{--                <span class="all-types">All</span>--}}
        {{--                <img src="{{asset('img/twttier.svg')}}" alt="twttier" class="social-icon" />--}}
        {{--                <img src="{{asset('img/facebook.svg')}}" alt="facebook" class="social-icon" />--}}
        {{--                <img src="{{asset('img/instgram.svg')}}" alt="instgram." class="social-icon" />--}}
        {{--            </div>--}}
        {{--            <div class="social-feed">--}}
        {{--                <div class="social-feed__card twitter-card">--}}
        {{--                    <img--}}
        {{--                        src="{{asset('img/twitter (2).svg')}}"--}}
        {{--                        alt="twitter"--}}
        {{--                        class="social-feed__card-icon"--}}
        {{--                    />--}}
        {{--                    <p class="feed-info">--}}
        {{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
        {{--                        Veritatis, beatae.--}}
        {{--                    </p>--}}
        {{--                    <span class="tweet-author">@alsayegh</span>--}}
        {{--                </div>--}}
        {{--                <div class="social-feed__card facebook-inst-card">--}}
        {{--                    <img--}}
        {{--                        src="{{asset('img/facebook (1).svg')}}"--}}
        {{--                        alt="facebook"--}}
        {{--                        class="social-feed__card-icon"--}}
        {{--                    />--}}
        {{--                    <p class="feed-info facebook-text">--}}
        {{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
        {{--                        Veritatis, beatae.--}}
        {{--                    </p>--}}
        {{--                </div>--}}
        {{--                <div class="social-feed__card twitter-card">--}}
        {{--                    <img--}}
        {{--                        src="{{asset('img/twitter (2).svg')}}"--}}
        {{--                        alt="twitter"--}}
        {{--                        class="social-feed__card-icon"--}}
        {{--                    />--}}
        {{--                    <p class="feed-info">--}}
        {{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
        {{--                        Veritatis, beatae.--}}
        {{--                    </p>--}}
        {{--                    <span class="tweet-author">@alsayegh</span>--}}
        {{--                </div>--}}
        {{--                <div class="social-feed__card facebook-inst-card">--}}
        {{--                    <img--}}
        {{--                        src="{{asset('img/facebook (1).svg')}}"--}}
        {{--                        alt="facebook"--}}
        {{--                        class="social-feed__card-icon"--}}
        {{--                    />--}}
        {{--                    <p class="feed-info facebook-text">--}}
        {{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
        {{--                        Veritatis, beatae.--}}
        {{--                    </p>--}}
        {{--                </div>--}}
        {{--                <div class="social-feed__card twitter-card">--}}
        {{--                    <img--}}
        {{--                        src="{{asset('img/twitter (2).svg')}}"--}}
        {{--                        alt="twitter"--}}
        {{--                        class="social-feed__card-icon"--}}
        {{--                    />--}}
        {{--                    <p class="feed-info">--}}
        {{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
        {{--                        Veritatis, beatae.--}}
        {{--                    </p>--}}
        {{--                    <span class="tweet-author">@alsayegh</span>--}}
        {{--                </div>--}}
        {{--                <div class="social-feed__card facebook-inst-card">--}}
        {{--                    <img--}}
        {{--                        src="{{asset('img/facebook (1).svg')}}"--}}
        {{--                        alt="facebook"--}}
        {{--                        class="social-feed__card-icon"--}}
        {{--                    />--}}
        {{--                    <p class="feed-info facebook-text">--}}
        {{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
        {{--                        Veritatis, beatae.--}}
        {{--                    </p>--}}
        {{--                </div>--}}
        {{--                <div class="social-feed__card facebook-inst-card">--}}
        {{--                    <img--}}
        {{--                        src="{{asset('img/facebook (1).svg')}}"--}}
        {{--                        alt="facebook"--}}
        {{--                        class="social-feed__card-icon"--}}
        {{--                    />--}}
        {{--                    <p class="feed-info facebook-text">--}}
        {{--                        Lorem ipsum dolor sit amet consectetur adipisicing elit.--}}
        {{--                        Veritatis, beatae.--}}
        {{--                    </p>--}}
        {{--                </div>--}}
        {{--            </div>--}}
        {{--        </div>--}}
        {{--    </div>--}}
        <div class="overlay" id="event-agenda">
            <div class="overlay__content">
                <img
                    src="{{asset('img/exit.svg')}}"
                    alt="exit"
                    class="exit"
                    onclick="offEventAgenda()"
                />
                <div class="header">
                    <h1 class="overlay__content-header">Event Agenda</h1>
                </div>
                <hr />
                <ul class="agenda-list">
                    @foreach($events as $event)
                        <li class="agenda-list-item">
                            <div class="from-to-time" style="background-image: linear-gradient(to bottom, {{$setting->gradient_from}}, {{$setting->gradient_to}})">
                                <p class="from">{{$event->from}}</p>
                                <hr />
                                <p class="to">{{$event->to}}</p>
                            </div>
                            <div class="appointment-info">
                                <h1 class="appointment-title">{{$event->title}}</h1>
                                <p class="appointment-summary">
                                    {!! $event->description !!}
                                </p>
                            </div>
                        </li>
                        <hr class="agenda-hr">
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="overlay" id="speakers-profiles" >
            <div class="overlay__content">
                <img
                    src="{{asset('img/exit.svg')}}"
                    alt="exit"
                    class="exit"
                    onclick="offSpeakersProfile()"
                />
                <div class="header">
                    <h1 class="overlay__content-header">Speakers Profiles</h1>
                </div>
                <hr />
                <div class="speakers-profile-section">
                    @foreach($speakers as $speaker)
                        <div class="speaker-profile-card">
                            <img src="{{$speaker->getFirstMediaUrl('image')}}" style="width: 160px; height: 160px; border-radius: 100%" alt="prof" class="prof-pic">
                            <h1 class="speaker-name">{{$speaker->name}}</h1>
                            <p class="bio-summary">{!! $speaker->description !!}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endif
<script src="{{asset("js/app.js")}}" defer></script>

@if ($now->lessThan(\Carbon\Carbon::parse($setting->event_time)))
    <script src="{{asset("js/timer.js")}}" defer></script>
@else
    <script src="{{asset("js/chat.js")}}" defer></script>
    <script src="{{asset("js/tabs.js")}}" defer></script>
@endif
</body>
</html>
