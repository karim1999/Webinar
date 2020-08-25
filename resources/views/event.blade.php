<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$setting->title}} | Event Page</title>
    <meta name="description" content="{{$setting->description}}">
    <meta name="keywords" content="{{$setting->keywords}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset("css/main.css")}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <script src="{{asset("js/main.js")}}" defer></script>
</head>
<body>
<style>
    [v-cloak] { display: none; }
</style>
<div class="top-bar">
    <img src="{{$setting->getFirstMediaUrl('logo')}}" alt="logo" style="height: 30px; width: 250px" class="top-bar__logo" />
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
    <div class="chat-window" id="chat">
        <div class="chat-window__title-box">
            <h1 class="chat-window__title">Chat Window</h1>
        </div>
        <div v-cloak class="chat-window__comments-box" id="chat_box">
            <div class="user-comments-box" v-for="message in messages" :key="message.id">
                <img
                    style="width: 32px; height: 32px;"
                    src="{{asset('img/profile-pic.png')}}"
                    alt="profile-pic"
                    class="user-comments-box__profile-pic"
                />
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
    <div class="footer-icon-box" id="resources_button" onclick="onResourcesList()">
        <img
            src="{{asset('img/icon-1.svg')}}"
            alt="resources-list"
            class="footer-icon"
            id="resouces-icon"
        />
        <span class="icon-title" id="resources">Resources List</span>
    </div>
    <div class="footer-icon-box" id="poll_button" onclick="onPolling()">
        <img
            src="{{asset('img/icon-2.svg')}}"
            alt="resources-list"
            class="footer-icon"
            id="polling-icon"
        />
        <span class="icon-title" id="polling-title">Polling</span>
    </div>
    <div class="footer-icon-box" id="question_button" onclick="onQA()">
        <img
            src="{{asset('img/icon-3.svg')}}"
            alt="resources-list"
            class="footer-icon"
            id="QA-icon"
        />
        <span class="icon-title" id="QA-title">Q&As</span>
    </div>
{{--    <div class="footer-icon-box" id="social_button" onclick="onSocialFeed()">--}}
{{--        <img--}}
{{--            src="{{asset('img/icon-4.svg')}}"--}}
{{--            alt="resources-list"--}}
{{--            class="footer-icon"--}}
{{--            id="social-feed-icon"--}}
{{--        />--}}
{{--        <span class="icon-title" id="social-feed-title">Social Feed</span>--}}
{{--    </div>--}}
    <div class="footer-icon-box" onclick="onEventAgenda()">
        <img
            src="{{asset('img/icon-5.svg')}}"
            alt="event-agenda"
            class="footer-icon"
            id="event-agena-icon"
        />
        <span class="icon-title" id="even-agena-title">Event Agenda</span>
    </div>
    <div class="footer-icon-box" id="speaker_button" onclick="onSpeakersProfile()">
        <img src="{{asset('img/icon-6.svg')}}" alt="resources-list" class="footer-icon" id="speakers-profile-icon" />
        <span class="icon-title" id="speakers-profile-title">Speakers Profile</span>
    </div>
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
                <h1 v-else class="polling-question">Thanks for answering the questions.</h1>
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
                        <div class="from-to-time">
                            <p class="from">{{$event->from}}</p>
                            <hr />
                            <p class="to">{{$event->to}}</p>
                        </div>
                        <div class="appointment-info">
                            <h1 class="appointment-title">{{$event->title}}</h1>
                            <p class="appointment-summary">
                                {{$event->description}}
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
<script src="{{asset("js/app.js")}}" defer></script>
<script src="{{asset("js/chat.js")}}" defer></script>
<script src="{{asset("js/tabs.js")}}" defer></script>
</body>
</html>
