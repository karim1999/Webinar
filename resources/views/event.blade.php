<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webinar | Event Page</title>
    <link rel="stylesheet" href="{{asset("css/main.css")}}" />
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet"
    />
    <script src="{{asset("js/main.js")}}" defer></script>
</head>
<body>
<div class="top-bar">
    <img src="{{$setting->getFirstMediaUrl('logo')}}" alt="logo" style="height: 30px; width: 250px" class="top-bar__logo" />
</div>
<main>
    <div class="video-box">
        <iframe
            width="100%"
            height="100%"
            src="https://www.youtube.com/embed/Z4vD9ppAQhw"
            frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen
        ></iframe>
    </div>
    <div class="chat-window">
        <div class="chat-window__title-box">
            <h1 class="chat-window__title">Chat Window</h1>
        </div>
        <div class="chat-window__comments-box">
            <div class="user-comments-box">
                <img
                    src="{{asset('img/profile-pic.png')}}"
                    alt="profile-pic"
                    class="user-comments-box__profile-pic"
                />
                <div class="user-comments-box__content">
                    <h2 class="user-name">Anwar Osman</h2>
                    <p class="user-comment">
                        Proin eget volutpat ante, quis tempor eros. Duis fermentum, est
                        eget elementum porta, nisi ipsum gravida velit
                    </p>
                </div>
            </div>
            <div class="user-comments-box">
                <img
                    src="{{asset('img/profile-pic.png')}}"
                    alt="profile-pic"
                    class="user-comments-box__profile-pic"
                />
                <div class="user-comments-box__content">
                    <h2 class="user-name">Anwar Osman</h2>
                    <p class="user-comment">
                        Proin eget volutpat ante, quis tempor eros. Duis fermentum, est
                        eget elementum porta, nisi ipsum gravida velit
                    </p>
                </div>
            </div>
            <div class="user-comments-box">
                <img
                    src="{{asset('img/profile-pic.png')}}"
                    alt="profile-pic"
                    class="user-comments-box__profile-pic"
                />
                <div class="user-comments-box__content">
                    <h2 class="user-name">Anwar Osman</h2>
                    <p class="user-comment">
                        Proin eget volutpat ante, quis tempor eros. Duis fermentum, est
                        eget elementum porta, nisi ipsum gravida velit
                    </p>
                </div>
            </div>
            <div class="user-comments-box">
                <img
                    src="{{asset('img/profile-pic.png')}}"
                    alt="profile-pic"
                    class="user-comments-box__profile-pic"
                />
                <div class="user-comments-box__content">
                    <h2 class="user-name">Anwar Osman</h2>
                    <p class="user-comment">
                        Proin eget volutpat ante, quis tempor eros. Duis fermentum, est
                        eget elementum porta, nisi ipsum gravida velit
                    </p>
                </div>
            </div>
            <form action="#" class="add-comment">
                <input
                    type="text"
                    name="add-comment"
                    id="add-comment"
                    class="add-comment__input"
                    placeholder="Type your message here"
                />
                <button type="submit" class="add-comment__btn">
                    <img src="img/send.png" alt="send-button" />
                </button>
            </form>
        </div>
    </div>
</main>
<footer>
    <div class="footer-icon-box" onclick="onResourcesList()">
        <img
            src="{{asset('img/icon-1.svg')}}"
            alt="resources-list"
            class="footer-icon"
            id="resouces-icon"
        />
        <span class="icon-title" id="resources">Resources List</span>
    </div>
    <div class="footer-icon-box" onclick="onPolling()">
        <img
            src="{{asset('img/icon-2.svg')}}"
            alt="resources-list"
            class="footer-icon"
            id="polling-icon"
        />
        <span class="icon-title" id="polling-title">Polling</span>
    </div>
    <div class="footer-icon-box" onclick="onQA()">
        <img
            src="{{asset('img/icon-3.svg')}}"
            alt="resources-list"
            class="footer-icon"
            id="QA-icon"
        />
        <span class="icon-title" id="QA-title">Q&As</span>
    </div>
    <div class="footer-icon-box" onclick="onSocialFeed()">
        <img
            src="{{asset('img/icon-4.svg')}}"
            alt="resources-list"
            class="footer-icon"
            id="social-feed-icon"
        />
        <span class="icon-title" id="social-feed-title">Social Feed</span>
    </div>
    <div class="footer-icon-box" onclick="onEventAgenda()">
        <img
            src="{{asset('img/icon-5.svg')}}"
            alt="event-agenda"
            class="footer-icon"
            id="event-agena-icon"
        />
        <span class="icon-title" id="even-agena-title">Event Agenda</span>
    </div>
    <div class="footer-icon-box" onclick="onSpeakersProfile()">
        <img src="{{asset('img/icon-6.svg')}}" alt="resources-list" class="footer-icon" id="speakers-profile-icon" />
        <span class="icon-title" id="speakers-profile-title">Speakers Profile</span>
    </div>
</footer>
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
        @foreach($polls as $poll)
            <div class="polling-content">
                <h1 class="polling-question">
                    {{$poll->question}}
                </h1>
                <div class="sm-hr"></div>
                @foreach($poll->options as $option)
                <div class="polling-answer">
                    <p class="polling-answer__text">{{$option->option}}</p>
                </div>
                @endforeach
            </div>
        @endforeach
    </div>
</div>
<div class="overlay" id="QA">
    <div class="overlay__content">
        <img src="{{asset('img/exit.svg')}}" alt="exit" class="exit" onclick="offQA()" />
        <div class="header">
            <h1 class="overlay__content-header">Questions and Answers</h1>
        </div>
        <hr />
        @foreach($questions as $question)
            <div class="questions">
                <h1 class="polling-question">
                    {{$question->question}}
                </h1>
                <div class="sm-hr"></div>
                <form action="#" class="adding-question">
                <textarea
                    name="question_{{$question->id}}"
                    id="question"
                    cols="30"
                    rows="10"
                    class="question-text"
                    placeholder="Type your answer here"
                ></textarea>
                    <button class="submit-btn">Submit</button>
                </form>
            </div>
        @endforeach
    </div>
</div>
<div class="overlay" id="social-feed">
    <div class="overlay__content">
        <img
            src="{{asset('img/exit.svg')}}"
            alt="exit"
            class="exit"
            onclick="offSocialFeed()"
        />
        <div class="header">
            <h1 class="overlay__content-header">Social Feed</h1>
        </div>
        <hr />
        <div class="types-social-media">
            <span class="all-types">All</span>
            <img src="{{asset('img/twttier.svg')}}" alt="twttier" class="social-icon" />
            <img src="img/facebook.svg" alt="facebook" class="social-icon" />
            <img src="img/instgram.svg" alt="instgram." class="social-icon" />
        </div>
        <div class="social-feed">
            <div class="social-feed__card twitter-card">
                <img
                    src="img/twitter (2).svg"
                    alt="twitter"
                    class="social-feed__card-icon"
                />
                <p class="feed-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis, beatae.
                </p>
                <span class="tweet-author">@alsayegh</span>
            </div>
            <div class="social-feed__card facebook-inst-card">
                <img
                    src="img/facebook (1).svg"
                    alt="facebook"
                    class="social-feed__card-icon"
                />
                <p class="feed-info facebook-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis, beatae.
                </p>
            </div>
            <div class="social-feed__card twitter-card">
                <img
                    src="img/twitter (2).svg"
                    alt="twitter"
                    class="social-feed__card-icon"
                />
                <p class="feed-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis, beatae.
                </p>
                <span class="tweet-author">@alsayegh</span>
            </div>
            <div class="social-feed__card facebook-inst-card">
                <img
                    src="img/facebook (1).svg"
                    alt="facebook"
                    class="social-feed__card-icon"
                />
                <p class="feed-info facebook-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis, beatae.
                </p>
            </div>
            <div class="social-feed__card twitter-card">
                <img
                    src="img/twitter (2).svg"
                    alt="twitter"
                    class="social-feed__card-icon"
                />
                <p class="feed-info">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis, beatae.
                </p>
                <span class="tweet-author">@alsayegh</span>
            </div>
            <div class="social-feed__card facebook-inst-card">
                <img
                    src="img/facebook (1).svg"
                    alt="facebook"
                    class="social-feed__card-icon"
                />
                <p class="feed-info facebook-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis, beatae.
                </p>
            </div>
            <div class="social-feed__card facebook-inst-card">
                <img
                    src="img/facebook (1).svg"
                    alt="facebook"
                    class="social-feed__card-icon"
                />
                <p class="feed-info facebook-text">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veritatis, beatae.
                </p>
            </div>
        </div>
    </div>
</div>
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
            <li class="agenda-list-item">
                <div class="from-to-time">
                    <p class="from">20:30</p>
                    <hr />
                    <p class="to">21:30</p>
                </div>
                <div class="appointment-info">
                    <h1 class="appointment-title">Duis Sagittis Nisi Aliquet</h1>
                    <p class="appointment-summary">
                        Intro: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin eu maximus odio, vitae
                    </p>
                </div>
            </li>
            <hr class="agenda-hr">
            <li class="agenda-list-item">
                <div class="from-to-time">
                    <p class="from">20:30</p>
                    <hr />
                    <p class="to">21:30</p>
                </div>
                <div class="appointment-info">
                    <h1 class="appointment-title">Duis Sagittis Nisi Aliquet</h1>
                    <p class="appointment-summary">
                        Intro: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin eu maximus odio, vitae
                    </p>
                </div>
            </li>
            <hr class="agenda-hr">
            <li class="agenda-list-item">
                <div class="from-to-time">
                    <p class="from">20:30</p>
                    <hr />
                    <p class="to">21:30</p>
                </div>
                <div class="appointment-info">
                    <h1 class="appointment-title">Duis Sagittis Nisi Aliquet</h1>
                    <p class="appointment-summary">
                        Intro: Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Proin eu maximus odio, vitae
                    </p>
                </div>
            </li>
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
            <div class="speaker-profile-card">
                <img src="{{asset("img/speaker-prof-pic.png")}}" alt="prof" class="prof-pic">
                <h1 class="speaker-name">Mostafa Saad</h1>
                <p class="bio-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui odio tenetur numquam! Eum vitae laborum illo iure ullam nisi! Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusantium consequatur laborum, officia expedita modi.</p>
            </div>
            <div class="speaker-profile-card">
                <img src="{{asset("img/speaker-prof-pic.png")}}" alt="prof" class="prof-pic">
                <h1 class="speaker-name">Mostafa Saad</h1>
                <p class="bio-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui odio tenetur numquam! Eum vitae laborum illo iure ullam nisi! Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusantium consequatur laborum, officia expedita modi.</p>
            </div>
            <div class="speaker-profile-card">
                <img src="{{asset("img/speaker-prof-pic.png")}}" alt="prof" class="prof-pic">
                <h1 class="speaker-name">Mostafa Saad</h1>
                <p class="bio-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui odio tenetur numquam! Eum vitae laborum illo iure ullam nisi! Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusantium consequatur laborum, officia expedita modi.</p>
            </div>
            <div class="speaker-profile-card">
                <img src="{{asset("img/speaker-prof-pic.png")}}" alt="prof" class="prof-pic">
                <h1 class="speaker-name">Mostafa Saad</h1>
                <p class="bio-summary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores qui odio tenetur numquam! Eum vitae laborum illo iure ullam nisi! Lorem ipsum dolor sit amet consectetur adipisicing elit. In accusantium consequatur laborum, officia expedita modi.</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
