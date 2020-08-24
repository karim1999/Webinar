const resources = document.getElementById('resources')
const resIcon = document.getElementById('resouces-icon')
const pollingTitle = document.getElementById('polling-title')
const QATitle = document.getElementById('QA-title')
const socialFeedTitle = document.getElementById('social-feed-title')
const eventAgendaTitle = document.getElementById('even-agena-title')
const speakersProfTitle = document.getElementById('speakers-profile-title')

function onResourcesList() {
    document.getElementById("resources-list").style.display = "flex";
    resources.style.display = "block";
    resIcon.src= 'img/icon-1-selected.svg'; 
}

function offResourcesList() {
    document.getElementById("resources-list").style.display = "none";
    resources.style.display = "none";
    resIcon.src= 'img/icon-1.svg';

}
function onPolling() {
    document.getElementById("polling").style.display = "flex";
    pollingTitle.style.display = "block";
    // resIcon.src= 'img/icon-1-selected.svg'; 

}
function offPolling() {
    document.getElementById("polling").style.display = "none";
    pollingTitle.style.display = "none";
    // resIcon.src= 'img/icon-1.svg';
}
function onQA() {
    document.getElementById("QA").style.display = "flex";
    QATitle.style.display = "block";
    // resIcon.src= 'img/icon-1-selected.svg'; 
}
function offQA() {
    document.getElementById("QA").style.display = "none";
    QATitle.style.display = "none";
    // resIcon.src= 'img/icon-1.svg';
}
function onSocialFeed() {
    document.getElementById("social-feed").style.display = "flex";
    socialFeedTitle.style.display = "block";
    // resIcon.src= 'img/icon-1-selected.svg'; 
}
function offSocialFeed() {
    document.getElementById("social-feed").style.display = "none";
    socialFeedTitle.style.display = "none";
    // resIcon.src= 'img/icon-1.svg';
}
function onEventAgenda() {
    document.getElementById("event-agenda").style.display = "flex";
    eventAgendaTitle.style.display = "block";
    // resIcon.src= 'img/icon-1-selected.svg'; 
}
function offEventAgenda() {
    document.getElementById("event-agenda").style.display = "none";
    eventAgendaTitle.style.display = "none";
    // resIcon.src= 'img/icon-1.svg';
}
function onSpeakersProfile() {
    document.getElementById("speakers-profiles").style.display = "flex";
    speakersProfTitle.style.display = "block";
    // resIcon.src= 'img/icon-1-selected.svg'; 
}
function offSpeakersProfile() {
    document.getElementById("speakers-profiles").style.display = "none";
    speakersProfTitle.style.display = "none";
    // resIcon.src= 'img/icon-1.svg';
}

// function showText() {
//     iconTitle.style.display = "block"
// }
// function removeText() {
//     iconTitle.style.display = "none"
// }