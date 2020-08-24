/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/main.js":
/*!******************************!*\
  !*** ./resources/js/main.js ***!
  \******************************/
/*! no static exports found */
/***/ (function(module, exports) {

var resources = document.getElementById('resources');
var resIcon = document.getElementById('resouces-icon');
var pollingTitle = document.getElementById('polling-title');
var QATitle = document.getElementById('QA-title');
var socialFeedTitle = document.getElementById('social-feed-title');
var eventAgendaTitle = document.getElementById('even-agena-title');
var speakersProfTitle = document.getElementById('speakers-profile-title');

function onResourcesList() {
  document.getElementById("resources-list").style.display = "flex";
  resources.style.display = "block";
  resIcon.src = 'img/icon-1-selected.svg';
}

function offResourcesList() {
  document.getElementById("resources-list").style.display = "none";
  resources.style.display = "none";
  resIcon.src = 'img/icon-1.svg';
}

function onPolling() {
  document.getElementById("polling").style.display = "flex";
  pollingTitle.style.display = "block"; // resIcon.src= 'img/icon-1-selected.svg'; 
}

function offPolling() {
  document.getElementById("polling").style.display = "none";
  pollingTitle.style.display = "none"; // resIcon.src= 'img/icon-1.svg';
}

function onQA() {
  document.getElementById("QA").style.display = "flex";
  QATitle.style.display = "block"; // resIcon.src= 'img/icon-1-selected.svg'; 
}

function offQA() {
  document.getElementById("QA").style.display = "none";
  QATitle.style.display = "none"; // resIcon.src= 'img/icon-1.svg';
}

function onSocialFeed() {
  document.getElementById("social-feed").style.display = "flex";
  socialFeedTitle.style.display = "block"; // resIcon.src= 'img/icon-1-selected.svg'; 
}

function offSocialFeed() {
  document.getElementById("social-feed").style.display = "none";
  socialFeedTitle.style.display = "none"; // resIcon.src= 'img/icon-1.svg';
}

function onEventAgenda() {
  document.getElementById("event-agenda").style.display = "flex";
  eventAgendaTitle.style.display = "block"; // resIcon.src= 'img/icon-1-selected.svg'; 
}

function offEventAgenda() {
  document.getElementById("event-agenda").style.display = "none";
  eventAgendaTitle.style.display = "none"; // resIcon.src= 'img/icon-1.svg';
}

function onSpeakersProfile() {
  document.getElementById("speakers-profiles").style.display = "flex";
  speakersProfTitle.style.display = "block"; // resIcon.src= 'img/icon-1-selected.svg'; 
}

function offSpeakersProfile() {
  document.getElementById("speakers-profiles").style.display = "none";
  speakersProfTitle.style.display = "none"; // resIcon.src= 'img/icon-1.svg';
} // function showText() {
//     iconTitle.style.display = "block"
// }
// function removeText() {
//     iconTitle.style.display = "none"
// }

/***/ }),

/***/ 1:
/*!************************************!*\
  !*** multi ./resources/js/main.js ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\projects\web\Webinar\resources\js\main.js */"./resources/js/main.js");


/***/ })

/******/ });