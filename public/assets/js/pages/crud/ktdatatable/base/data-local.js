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
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = "../demo11/src/js/pages/crud/ktdatatable/base/data-local.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "../demo11/src/js/pages/crud/ktdatatable/base/data-local.js":
/*!******************************************************************!*\
  !*** ../demo11/src/js/pages/crud/ktdatatable/base/data-local.js ***!
  \******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// Class definition

var KTDatatableDataLocalDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {
        var dataJSONArray = JSON.parse('[{"RecordID":1,"OrderID":"0374-5070","Country":"China","ShipCountry":"CN","ShipCity":"Jiujie","ShipName":"Rempel Inc","ShipAddress":"60310 Schiller Center","CompanyEmail":"cdodman0@wsj.com","CompanyAgent":"Cordi Dodman","CompanyName":"Kris-Wehner","Currency":"CNY","Notes":"sed vel enim sit amet nunc viverra dapibus nulla suscipit ligula in lacus curabitur at ipsum ac tellus","Department":"Kids","Website":"tripadvisor.com","Latitude":39.952319,"Longitude":119.598195,"ShipDate":"8/27/2017","PaymentDate":"2016-09-15 22:18:06","TimeZone":"Asia/Chongqing","TotalPayment":"$336309.10","Status":6,"Type":2,"Actions":null},\n' +
            '{"RecordID":2,"OrderID":"63868-257","Country":"Philippines","ShipCountry":"PH","ShipCity":"Gibgos","ShipName":"Muller, Leannon and McKenzie","ShipAddress":"26734 Mitchell Drive","CompanyEmail":"kscritch1@google.es","CompanyAgent":"Katrinka Scritch","CompanyName":"Stanton, Friesen and Grant","Currency":"PHP","Notes":"ante vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur","Department":"Tools","Website":"elpais.com","Latitude":13.8503992,"Longitude":123.7585154,"ShipDate":"9/3/2017","PaymentDate":"2016-09-05 16:27:07","TimeZone":"Asia/Manila","TotalPayment":"$786612.37","Status":1,"Type":2,"Actions":null},\n' +
            '{"RecordID":3,"OrderID":"49288-0815","Country":"Paraguay","ShipCountry":"PY","ShipCity":"General Elizardo Aquino","ShipName":"Fahey, Rosenbaum and Leannon","ShipAddress":"9 Daystar Center","CompanyEmail":"neberlein2@google.ca","CompanyAgent":"Nevin Eberlein","CompanyName":"Cartwright, Hilpert and Hartmann","Currency":"PYG","Notes":"bibendum imperdiet nullam orci pede venenatis non sodales sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris","Department":"Electronics","Website":"bing.com","Latitude":-24.4436327,"Longitude":-56.9014072,"ShipDate":"4/23/2016","PaymentDate":"2016-01-01 08:03:07","TimeZone":"America/Asuncion","TotalPayment":"$216102.85","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":4,"OrderID":"49288-0039","Country":"Azerbaijan","ShipCountry":"AZ","ShipCity":"Maştağa","ShipName":"Gaylord-Aufderhar","ShipAddress":"68 Bunker Hill Street","CompanyEmail":"sdenge3@discuz.net","CompanyAgent":"Syd Denge","CompanyName":"Bednar-Grant","Currency":"AZN","Notes":"suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus","Department":"Computers","Website":"nbcnews.com","Latitude":40.5329933,"Longitude":50.0035678,"ShipDate":"9/6/2017","PaymentDate":"2016-08-26 05:27:20","TimeZone":"Asia/Baku","TotalPayment":"$555545.40","Status":1,"Type":2,"Actions":null},\n' +
            '{"RecordID":5,"OrderID":"59762-0009","Country":"Brazil","ShipCountry":"BR","ShipCity":"Corrego Grande","ShipName":"Zemlak-Ward","ShipAddress":"8 Orin Terrace","CompanyEmail":"mtreanor4@histats.com","CompanyAgent":"Mallory Treanor","CompanyName":"Feeney Inc","Currency":"BRL","Notes":"luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat","Department":"Computers","Website":"rediff.com","Latitude":-27.593609,"Longitude":-48.5027406,"ShipDate":"10/28/2017","PaymentDate":"2017-02-20 12:31:25","TimeZone":"America/Sao_Paulo","TotalPayment":"$968744.59","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":6,"OrderID":"43419-020","Country":"Honduras","ShipCountry":"HN","ShipCity":"San Juan Pueblo","ShipName":"Marvin-D\'Amore","ShipAddress":"660 Riverside Place","CompanyEmail":"lyankishin5@jiathis.com","CompanyAgent":"Lanae Yankishin","CompanyName":"Bechtelar, Wisoky and Homenick","Currency":"HNL","Notes":"tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis","Department":"Beauty","Website":"wordpress.org","Latitude":15.5973118,"Longitude":-87.2145498,"ShipDate":"4/6/2017","PaymentDate":"2017-10-22 02:33:29","TimeZone":"America/Tegucigalpa","TotalPayment":"$1119199.00","Status":5,"Type":3,"Actions":null},\n' +
            '{"RecordID":7,"OrderID":"33261-641","Country":"China","ShipCountry":"CN","ShipCity":"Yihe","ShipName":"MacGyver, Witting and Gleason","ShipAddress":"757 Daystar Crossing","CompanyEmail":"mmangeot6@harvard.edu","CompanyAgent":"Margy Mangeot","CompanyName":"Towne, MacGyver and Greenholt","Currency":"CNY","Notes":"metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet","Department":"Garden","Website":"huffingtonpost.com","Latitude":23.2196922,"Longitude":113.3138804,"ShipDate":"4/15/2017","PaymentDate":"2016-01-30 06:42:56","TimeZone":"Asia/Chongqing","TotalPayment":"$629781.98","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":8,"OrderID":"68462-221","Country":"France","ShipCountry":"FR","ShipCity":"Saint-Leu-la-Forêt","ShipName":"Turner-Parisian","ShipAddress":"21390 Golf Course Lane","CompanyEmail":"apolo7@opera.com","CompanyAgent":"Aubree Polo","CompanyName":"Lubowitz Inc","Currency":"EUR","Notes":"blandit nam nulla integer pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse","Department":"Clothing","Website":"dell.com","Latitude":49.0301146,"Longitude":2.2509675,"ShipDate":"6/13/2016","PaymentDate":"2017-03-01 14:18:47","TimeZone":"Europe/Paris","TotalPayment":"$1106347.34","Status":6,"Type":2,"Actions":null},\n' +
            '{"RecordID":9,"OrderID":"68084-555","Country":"Mexico","ShipCountry":"MX","ShipCity":"Hidalgo","ShipName":"O\'Kon, Heller and Flatley","ShipAddress":"960 Vahlen Avenue","CompanyEmail":"lsneddon8@hugedomains.com","CompanyAgent":"Leif Sneddon","CompanyName":"Larson Inc","Currency":"MXN","Notes":"rutrum neque aenean auctor gravida sem praesent id massa id nisl venenatis lacinia aenean sit amet justo morbi ut","Department":"Sports","Website":"ifeng.com","Latitude":20.0910963,"Longitude":-98.7623874,"ShipDate":"11/14/2016","PaymentDate":"2016-09-21 23:32:43","TimeZone":"America/Mexico_City","TotalPayment":"$677621.03","Status":4,"Type":2,"Actions":null},\n' +
            '{"RecordID":10,"OrderID":"10565-013","Country":"Greece","ShipCountry":"GR","ShipCity":"Emporeío","ShipName":"Gutkowski Group","ShipAddress":"42 Reindahl Court","CompanyEmail":"rjerrold9@ucla.edu","CompanyAgent":"Roy Jerrold","CompanyName":"Hoeger-Waelchi","Currency":"EUR","Notes":"tristique in tempus sit amet sem fusce consequat nulla nisl nunc nisl duis bibendum felis sed","Department":"Toys","Website":"stumbleupon.com","Latitude":36.3573462,"Longitude":25.4459308,"ShipDate":"8/2/2017","PaymentDate":"2016-10-29 23:25:04","TimeZone":"Europe/Athens","TotalPayment":"$910133.41","Status":6,"Type":1,"Actions":null},\n' +
            '{"RecordID":11,"OrderID":"68026-422","Country":"United States","ShipCountry":"US","ShipCity":"Cleveland","ShipName":"Gaylord-Parker","ShipAddress":"8072 Waywood Crossing","CompanyEmail":"keffnerta@marketwatch.com","CompanyAgent":"Kane Effnert","CompanyName":"Legros, Oberbrunner and Gleason","Currency":"USD","Notes":"enim leo rhoncus sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis","Department":"Tools","Website":"java.com","Latitude":41.451118,"Longitude":-81.6309078,"ShipDate":"3/11/2017","PaymentDate":"2017-03-17 12:57:30","TimeZone":"America/New_York","TotalPayment":"$936141.99","Status":5,"Type":2,"Actions":null},\n' +
            '{"RecordID":12,"OrderID":"0264-7780","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Amerta","ShipName":"Braun, Spinka and Haley","ShipAddress":"8 Chive Junction","CompanyEmail":"ecavellb@miibeian.gov.cn","CompanyAgent":"Elwyn Cavell","CompanyName":"Kassulke and Sons","Currency":"IDR","Notes":"aliquet massa id lobortis convallis tortor risus dapibus augue vel accumsan tellus nisi eu","Department":"Clothing","Website":"china.com.cn","Latitude":-6.2629253,"Longitude":106.7826245,"ShipDate":"9/29/2016","PaymentDate":"2017-10-31 02:33:49","TimeZone":"Asia/Jakarta","TotalPayment":"$583287.30","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":13,"OrderID":"50813-0001","Country":"Tunisia","ShipCountry":"TN","ShipCity":"Kairouan","ShipName":"Kirlin LLC","ShipAddress":"26 West Park","CompanyEmail":"pbacherc@independent.co.uk","CompanyAgent":"Pier Bacher","CompanyName":"Cole-Hamill","Currency":"TND","Notes":"quam a odio in hac habitasse platea dictumst maecenas ut massa","Department":"Clothing","Website":"yellowpages.com","Latitude":35.6759137,"Longitude":10.0919243,"ShipDate":"3/4/2016","PaymentDate":"2017-11-24 17:22:53","TimeZone":"Africa/Tunis","TotalPayment":"$1182339.20","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":14,"OrderID":"21695-353","Country":"Argentina","ShipCountry":"AR","ShipCity":"Unquillo","ShipName":"Rempel and Sons","ShipAddress":"098 Hagan Crossing","CompanyEmail":"smuckiand@is.gd","CompanyAgent":"Spence Muckian","CompanyName":"Frami Inc","Currency":"ARS","Notes":"elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus metus arcu","Department":"Grocery","Website":"seesaa.net","Latitude":-31.372506,"Longitude":-64.182416,"ShipDate":"10/4/2017","PaymentDate":"2017-06-13 14:50:30","TimeZone":"America/Argentina/Cordoba","TotalPayment":"$658920.05","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":15,"OrderID":"63304-791","Country":"Poland","ShipCountry":"PL","ShipCity":"Kąty Wrocławskie","ShipName":"Rodriguez, Lindgren and Collier","ShipAddress":"90016 Susan Place","CompanyEmail":"dgervaisee@buzzfeed.com","CompanyAgent":"Darcy Gervaise","CompanyName":"Bauch LLC","Currency":"PLN","Notes":"sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae mauris viverra diam vitae","Department":"Movies","Website":"mysql.com","Latitude":51.0309199,"Longitude":16.7675963,"ShipDate":"8/3/2016","PaymentDate":"2017-08-15 01:48:22","TimeZone":"Europe/Warsaw","TotalPayment":"$361414.46","Status":1,"Type":2,"Actions":null},\n' +
            '{"RecordID":16,"OrderID":"42352-1001","Country":"Azerbaijan","ShipCountry":"AZ","ShipCity":"Saray","ShipName":"Raynor and Sons","ShipAddress":"4 4th Drive","CompanyEmail":"epaffordf@prweb.com","CompanyAgent":"Eli Pafford","CompanyName":"Moen, Walsh and Bednar","Currency":"AZN","Notes":"in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque","Department":"Health","Website":"wordpress.org","Latitude":40.5323093,"Longitude":49.710366,"ShipDate":"6/13/2017","PaymentDate":"2017-09-17 04:40:17","TimeZone":"Asia/Baku","TotalPayment":"$69543.85","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":17,"OrderID":"68275-320","Country":"Estonia","ShipCountry":"EE","ShipCity":"Narva-Jõesuu","ShipName":"Emard-Von","ShipAddress":"37 Fremont Lane","CompanyEmail":"yjoriozg@icq.com","CompanyAgent":"Yovonnda Jorioz","CompanyName":"Connelly Group","Currency":"EUR","Notes":"lacus at velit vivamus vel nulla eget eros elementum pellentesque quisque porta volutpat erat quisque erat eros","Department":"Sports","Website":"google.ca","Latitude":59.4609192,"Longitude":28.0395999,"ShipDate":"10/13/2016","PaymentDate":"2016-12-26 09:59:48","TimeZone":"Europe/Tallinn","TotalPayment":"$137265.28","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":18,"OrderID":"41190-308","Country":"Panama","ShipCountry":"PA","ShipCity":"Puerto Obaldía","ShipName":"Howell Inc","ShipAddress":"8751 Lighthouse Bay Terrace","CompanyEmail":"jsollarsh@seattletimes.com","CompanyAgent":"Judy Sollars","CompanyName":"Johns-Lueilwitz","Currency":"PAB","Notes":"rutrum nulla tellus in sagittis dui vel nisl duis ac nibh fusce lacus purus aliquet at feugiat","Department":"Movies","Website":"nationalgeographic.com","Latitude":8.6663907,"Longitude":-77.420826,"ShipDate":"8/1/2016","PaymentDate":"2017-10-05 17:04:04","TimeZone":"America/Bogota","TotalPayment":"$827677.19","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":19,"OrderID":"51655-802","Country":"Iran","ShipCountry":"IR","ShipCity":"Eyvān","ShipName":"Monahan, Pacocha and Effertz","ShipAddress":"1 Anthes Place","CompanyEmail":"cpericoi@springer.com","CompanyAgent":"Cobbie Perico","CompanyName":"Mosciski-Williamson","Currency":"IRR","Notes":"sit amet eleifend pede libero quis orci nullam molestie nibh in lectus pellentesque at","Department":"Baby","Website":"nymag.com","Latitude":33.8297993,"Longitude":46.3073161,"ShipDate":"11/15/2016","PaymentDate":"2017-12-22 08:07:51","TimeZone":"Asia/Tehran","TotalPayment":"$171018.99","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":20,"OrderID":"68151-2713","Country":"Costa Rica","ShipCountry":"CR","ShipCity":"Pital","ShipName":"Romaguera-Batz","ShipAddress":"6 Schlimgen Lane","CompanyEmail":"labeauj@mashable.com","CompanyAgent":"Lucretia Abeau","CompanyName":"Vandervort, Lesch and Bins","Currency":"CRC","Notes":"habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo nec condimentum neque","Department":"Clothing","Website":"naver.com","Latitude":10.4492758,"Longitude":-84.2725621,"ShipDate":"4/22/2017","PaymentDate":"2016-10-31 13:12:03","TimeZone":"America/Costa_Rica","TotalPayment":"$444445.05","Status":1,"Type":1,"Actions":null},\n' +
            '{"RecordID":21,"OrderID":"68382-161","Country":"Japan","ShipCountry":"JP","ShipCity":"Itoman","ShipName":"Kessler, Boyle and Volkman","ShipAddress":"9 Lawn Point","CompanyEmail":"mlinkletk@wp.com","CompanyAgent":"Mireielle Linklet","CompanyName":"Maggio-Friesen","Currency":"JPY","Notes":"venenatis lacinia aenean sit amet justo morbi ut odio cras mi pede malesuada in imperdiet","Department":"Computers","Website":"reference.com","Latitude":26.1288392,"Longitude":127.6681281,"ShipDate":"4/26/2017","PaymentDate":"2016-05-13 03:10:54","TimeZone":"Asia/Tokyo","TotalPayment":"$469295.83","Status":5,"Type":3,"Actions":null},\n' +
            '{"RecordID":22,"OrderID":"51345-061","Country":"Russia","ShipCountry":"RU","ShipCity":"Mirny","ShipName":"Baumbach Group","ShipAddress":"4649 Clarendon Terrace","CompanyEmail":"bbigmorel@nationalgeographic.com","CompanyAgent":"Belita Bigmore","CompanyName":"Rath Group","Currency":"RUB","Notes":"diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam","Department":"Industrial","Website":"tiny.cc","Latitude":62.5412431,"Longitude":113.9960031,"ShipDate":"6/6/2017","PaymentDate":"2017-04-07 03:26:21","TimeZone":"Asia/Yakutsk","TotalPayment":"$1097247.60","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":23,"OrderID":"33342-072","Country":"Philippines","ShipCountry":"PH","ShipCity":"Lepanto","ShipName":"VonRueden, Satterfield and Pacocha","ShipAddress":"9 Green Way","CompanyEmail":"fdurramm@themeforest.net","CompanyAgent":"Fabio Durram","CompanyName":"Gutkowski-Bartell","Currency":"PHP","Notes":"posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec","Department":"Beauty","Website":"smugmug.com","Latitude":9.3136403,"Longitude":123.3036704,"ShipDate":"6/14/2017","PaymentDate":"2016-08-01 06:55:55","TimeZone":"Asia/Manila","TotalPayment":"$335706.25","Status":1,"Type":2,"Actions":null},\n' +
            '{"RecordID":24,"OrderID":"0113-0274","Country":"Philippines","ShipCountry":"PH","ShipCity":"Kolambugan","ShipName":"Grady, Barton and Mosciski","ShipAddress":"832 Loftsgordon Court","CompanyEmail":"hheseyn@bandcamp.com","CompanyAgent":"Haskel Hesey","CompanyName":"Brown, Glover and Bednar","Currency":"PHP","Notes":"diam cras pellentesque volutpat dui maecenas tristique est et tempus semper est quam pharetra magna","Department":"Movies","Website":"apple.com","Latitude":8.1113884,"Longitude":123.8961588,"ShipDate":"10/6/2017","PaymentDate":"2016-10-15 21:51:09","TimeZone":"Asia/Manila","TotalPayment":"$298650.19","Status":1,"Type":1,"Actions":null},\n' +
            '{"RecordID":25,"OrderID":"60637-013","Country":"Sweden","ShipCountry":"SE","ShipCity":"Vallentuna","ShipName":"Bednar-Wyman","ShipAddress":"9945 Old Gate Way","CompanyEmail":"gdurringtono@fda.gov","CompanyAgent":"Gregorius Durrington","CompanyName":"Haag Inc","Currency":"SEK","Notes":"potenti nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam","Department":"Jewelery","Website":"sbwire.com","Latitude":59.6535297,"Longitude":18.3648033,"ShipDate":"4/28/2017","PaymentDate":"2017-07-19 06:11:51","TimeZone":"Europe/Stockholm","TotalPayment":"$52391.03","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":26,"OrderID":"0781-5626","Country":"China","ShipCountry":"CN","ShipCity":"Kertai","ShipName":"Weissnat Group","ShipAddress":"0 Shoshone Hill","CompanyEmail":"bdolbyp@comcast.net","CompanyAgent":"Berky Dolby","CompanyName":"Hodkiewicz-Ledner","Currency":"CNY","Notes":"scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis","Department":"Toys","Website":"google.com.hk","Latitude":46.900546,"Longitude":124.214976,"ShipDate":"9/27/2017","PaymentDate":"2016-05-14 03:23:30","TimeZone":"Asia/Harbin","TotalPayment":"$327211.21","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":27,"OrderID":"10742-8095","Country":"Philippines","ShipCountry":"PH","ShipCity":"Malinta","ShipName":"Powlowski and Sons","ShipAddress":"8569 Laurel Hill","CompanyEmail":"ccollettq@themeforest.net","CompanyAgent":"Cobbie Collett","CompanyName":"Emard Group","Currency":"PHP","Notes":"lobortis sapien sapien non mi integer ac neque duis bibendum morbi non","Department":"Electronics","Website":"newyorker.com","Latitude":14.6925451,"Longitude":120.9653066,"ShipDate":"9/20/2016","PaymentDate":"2016-11-04 21:58:05","TimeZone":"Asia/Manila","TotalPayment":"$111977.88","Status":4,"Type":3,"Actions":null},\n' +
            '{"RecordID":28,"OrderID":"49288-0426","Country":"Hungary","ShipCountry":"HU","ShipCity":"Budapest","ShipName":"Bahringer-Kautzer","ShipAddress":"532 Donald Street","CompanyEmail":"ssangwiner@bizjournals.com","CompanyAgent":"Sheilakathryn Sangwine","CompanyName":"Morar, Bosco and Rosenbaum","Currency":"HUF","Notes":"in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus","Department":"Toys","Website":"vkontakte.ru","Latitude":47.53708,"Longitude":19.127509,"ShipDate":"12/5/2017","PaymentDate":"2017-11-17 07:49:20","TimeZone":"Europe/Budapest","TotalPayment":"$808043.78","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":29,"OrderID":"59091-2001","Country":"Netherlands","ShipCountry":"NL","ShipCity":"Arnhem","ShipName":"Kreiger, Hermiston and Maggio","ShipAddress":"395 Maple Road","CompanyEmail":"blents@goo.ne.jp","CompanyAgent":"Bernadene Lent","CompanyName":"Heathcote-Lueilwitz","Currency":"EUR","Notes":"in lectus pellentesque at nulla suspendisse potenti cras in purus eu","Department":"Computers","Website":"howstuffworks.com","Latitude":51.9489686,"Longitude":5.8564699,"ShipDate":"7/8/2016","PaymentDate":"2016-05-23 20:05:31","TimeZone":"Europe/Amsterdam","TotalPayment":"$940709.22","Status":6,"Type":2,"Actions":null},\n' +
            '{"RecordID":30,"OrderID":"63629-1299","Country":"Russia","ShipCountry":"RU","ShipCity":"Naro-Fominsk","ShipName":"Klocko Inc","ShipAddress":"8 Mitchell Way","CompanyEmail":"mrivallantt@nyu.edu","CompanyAgent":"Miquela Rivallant","CompanyName":"Harber-Hyatt","Currency":"RUB","Notes":"mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam orci pede venenatis non","Department":"Health","Website":"yale.edu","Latitude":55.4211657,"Longitude":36.6585689,"ShipDate":"8/10/2017","PaymentDate":"2017-03-22 16:45:31","TimeZone":"Europe/Moscow","TotalPayment":"$1158882.77","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":31,"OrderID":"49527-022","Country":"French Polynesia","ShipCountry":"PF","ShipCity":"Anau","ShipName":"Renner, Metz and Kuphal","ShipAddress":"3 4th Road","CompanyEmail":"epickersgillu@mapy.cz","CompanyAgent":"Erie Pickersgill","CompanyName":"Hermiston, Stanton and Weissnat","Currency":"XPF","Notes":"elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non interdum in ante vestibulum ante ipsum","Department":"Movies","Website":"canalblog.com","Latitude":-17.3878955,"Longitude":-145.582949,"ShipDate":"8/10/2017","PaymentDate":"2016-01-13 22:56:10","TimeZone":"Pacific/Tahiti","TotalPayment":"$865927.89","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":32,"OrderID":"44523-535","Country":"Argentina","ShipCountry":"AR","ShipCity":"Palpalá","ShipName":"Sanford Inc","ShipAddress":"397 Mendota Lane","CompanyEmail":"htawsev@desdev.cn","CompanyAgent":"Harriett Tawse","CompanyName":"Zboncak, Hickle and McLaughlin","Currency":"ARS","Notes":"ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel sem sed sagittis nam congue risus semper porta","Department":"Games","Website":"theguardian.com","Latitude":-31.4561755,"Longitude":-64.2111608,"ShipDate":"2/16/2017","PaymentDate":"2016-04-21 02:02:40","TimeZone":"America/Argentina/Jujuy","TotalPayment":"$1168618.71","Status":1,"Type":3,"Actions":null},\n' +
            '{"RecordID":33,"OrderID":"63402-306","Country":"Sweden","ShipCountry":"SE","ShipCity":"Olofström","ShipName":"Zboncak Inc","ShipAddress":"248 Reindahl Alley","CompanyEmail":"rcrafterw@sina.com.cn","CompanyAgent":"Richie Crafter","CompanyName":"Larkin-Armstrong","Currency":"SEK","Notes":"sapien urna pretium nisl ut volutpat sapien arcu sed augue aliquam erat volutpat in congue etiam justo etiam","Department":"Garden","Website":"barnesandnoble.com","Latitude":56.2462038,"Longitude":14.6265298,"ShipDate":"1/29/2016","PaymentDate":"2016-09-30 20:24:13","TimeZone":"Europe/Stockholm","TotalPayment":"$966796.75","Status":3,"Type":1,"Actions":null},\n' +
            '{"RecordID":34,"OrderID":"63629-3798","Country":"El Salvador","ShipCountry":"SV","ShipCity":"Guaymango","ShipName":"Koelpin-Jast","ShipAddress":"62878 Maple Wood Plaza","CompanyEmail":"yjotchamx@bloglovin.com","CompanyAgent":"Yolanthe Jotcham","CompanyName":"Kohler Inc","Currency":"USD","Notes":"tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus","Department":"Baby","Website":"washington.edu","Latitude":13.748419,"Longitude":-89.8452348,"ShipDate":"11/29/2017","PaymentDate":"2016-05-26 22:12:21","TimeZone":"America/El_Salvador","TotalPayment":"$62449.09","Status":6,"Type":1,"Actions":null},\n' +
            '{"RecordID":35,"OrderID":"49981-010","Country":"Philippines","ShipCountry":"PH","ShipCity":"Sindangan","ShipName":"Eichmann, Hills and McCullough","ShipAddress":"3201 Katie Street","CompanyEmail":"bwoosnamy@zdnet.com","CompanyAgent":"Barthel Woosnam","CompanyName":"Goodwin and Sons","Currency":"PHP","Notes":"felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed nisl nunc rhoncus dui vel","Department":"Outdoors","Website":"stumbleupon.com","Latitude":8.3104933,"Longitude":122.9938347,"ShipDate":"11/27/2017","PaymentDate":"2016-01-14 10:54:05","TimeZone":"Asia/Manila","TotalPayment":"$320289.72","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":36,"OrderID":"0023-4383","Country":"Philippines","ShipCountry":"PH","ShipCity":"Tiguha","ShipName":"Schmidt and Sons","ShipAddress":"912 Lyons Street","CompanyEmail":"crayez@kickstarter.com","CompanyAgent":"Christean Raye","CompanyName":"Witting, Lindgren and Kessler","Currency":"PHP","Notes":"non velit donec diam neque vestibulum eget vulputate ut ultrices vel augue vestibulum","Department":"Books","Website":"ft.com","Latitude":7.7151954,"Longitude":123.2089252,"ShipDate":"1/29/2017","PaymentDate":"2016-12-05 19:36:44","TimeZone":"Asia/Manila","TotalPayment":"$922800.64","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":37,"OrderID":"50988-254","Country":"Philippines","ShipCountry":"PH","ShipCity":"Manila","ShipName":"Glover Inc","ShipAddress":"661 Mesta Crossing","CompanyEmail":"lfronzek10@addtoany.com","CompanyAgent":"Lida Fronzek","CompanyName":"Yundt-Jacobs","Currency":"PHP","Notes":"dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae nulla dapibus","Department":"Jewelery","Website":"elegantthemes.com","Latitude":14.3641338,"Longitude":120.9314495,"ShipDate":"12/12/2016","PaymentDate":"2016-08-16 01:47:41","TimeZone":"Asia/Manila","TotalPayment":"$64883.89","Status":6,"Type":2,"Actions":null},\n' +
            '{"RecordID":38,"OrderID":"68788-9924","Country":"Norway","ShipCountry":"NO","ShipCity":"Kristiansand S","ShipName":"Treutel, Hirthe and Runolfsson","ShipAddress":"2312 Upham Pass","CompanyEmail":"friehm11@army.mil","CompanyAgent":"Fax Riehm","CompanyName":"Schulist Inc","Currency":"NOK","Notes":"fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet","Department":"Computers","Website":"toplist.cz","Latitude":58.1348867,"Longitude":8.006095,"ShipDate":"9/15/2017","PaymentDate":"2016-01-08 14:30:49","TimeZone":"Europe/Oslo","TotalPayment":"$435466.56","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":39,"OrderID":"31722-500","Country":"Philippines","ShipCountry":"PH","ShipCity":"Salcedo","ShipName":"Larson-Vandervort","ShipAddress":"8 Red Cloud Plaza","CompanyEmail":"tbowry12@statcounter.com","CompanyAgent":"Taddeusz Bowry","CompanyName":"Koelpin Inc","Currency":"PHP","Notes":"massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida","Department":"Tools","Website":"youtu.be","Latitude":14.5560877,"Longitude":121.0155081,"ShipDate":"5/4/2017","PaymentDate":"2017-04-18 17:53:19","TimeZone":"Asia/Manila","TotalPayment":"$677626.59","Status":3,"Type":1,"Actions":null},\n' +
            '{"RecordID":40,"OrderID":"50436-7053","Country":"Poland","ShipCountry":"PL","ShipCity":"Iłowo -Osada","ShipName":"Batz LLC","ShipAddress":"9434 Packers Road","CompanyEmail":"kdunmuir13@ucoz.ru","CompanyAgent":"Kayley Dunmuir","CompanyName":"Lockman-Baumbach","Currency":"PLN","Notes":"faucibus accumsan odio curabitur convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor","Department":"Garden","Website":"theguardian.com","Latitude":53.1664955,"Longitude":20.2914434,"ShipDate":"2/5/2016","PaymentDate":"2016-04-25 10:48:48","TimeZone":"Europe/Warsaw","TotalPayment":"$123550.24","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":41,"OrderID":"63736-027","Country":"China","ShipCountry":"CN","ShipCity":"Bazi","ShipName":"Stark-Brown","ShipAddress":"3 Gerald Park","CompanyEmail":"tlotte14@histats.com","CompanyAgent":"Tim Lotte","CompanyName":"Larson Inc","Currency":"CNY","Notes":"pede justo lacinia eget tincidunt eget tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat lectus","Department":"Garden","Website":"salon.com","Latitude":30.7959602,"Longitude":120.6060568,"ShipDate":"10/21/2016","PaymentDate":"2016-07-23 01:21:17","TimeZone":"Asia/Shanghai","TotalPayment":"$326161.60","Status":4,"Type":2,"Actions":null},\n' +
            '{"RecordID":42,"OrderID":"54575-228","Country":"China","ShipCountry":"CN","ShipCity":"Dongyang","ShipName":"Effertz LLC","ShipAddress":"7311 Hollow Ridge Trail","CompanyEmail":"smcintee15@google.pl","CompanyAgent":"Sterne McIntee","CompanyName":"Robel, Hegmann and Grimes","Currency":"CNY","Notes":"condimentum curabitur in libero ut massa volutpat convallis morbi odio odio elementum eu interdum eu tincidunt in leo maecenas pulvinar","Department":"Garden","Website":"nbcnews.com","Latitude":29.289648,"Longitude":120.241565,"ShipDate":"11/13/2017","PaymentDate":"2017-10-01 15:42:11","TimeZone":"Asia/Chongqing","TotalPayment":"$875336.96","Status":1,"Type":1,"Actions":null},\n' +
            '{"RecordID":43,"OrderID":"52125-370","Country":"China","ShipCountry":"CN","ShipCity":"Changzheng","ShipName":"Kozey, Roob and Howell","ShipAddress":"3591 Oxford Plaza","CompanyEmail":"tepperson16@dagondesign.com","CompanyAgent":"Thedrick Epperson","CompanyName":"Armstrong, Shields and Osinski","Currency":"CNY","Notes":"vitae nisi nam ultrices libero non mattis pulvinar nulla pede","Department":"Movies","Website":"cloudflare.com","Latitude":31.23285,"Longitude":121.467218,"ShipDate":"3/25/2016","PaymentDate":"2016-04-05 06:38:33","TimeZone":"Asia/Chongqing","TotalPayment":"$89415.23","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":44,"OrderID":"36987-3290","Country":"South Africa","ShipCountry":"ZA","ShipCity":"Tugela Ferry","ShipName":"Ward, Little and Flatley","ShipAddress":"7627 Sycamore Crossing","CompanyEmail":"pilsley17@nba.com","CompanyAgent":"Patty Ilsley","CompanyName":"Larson-Kunze","Currency":"ZAR","Notes":"nisi eu orci mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula","Department":"Health","Website":"wordpress.com","Latitude":-28.7415512,"Longitude":30.461686,"ShipDate":"7/9/2016","PaymentDate":"2017-08-08 07:23:41","TimeZone":"Africa/Johannesburg","TotalPayment":"$12440.25","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":45,"OrderID":"68737-236","Country":"Russia","ShipCountry":"RU","ShipCity":"Omutninsk","ShipName":"Wisoky-Huels","ShipAddress":"5647 Vahlen Way","CompanyEmail":"apolding18@domainmarket.com","CompanyAgent":"Amandy Polding","CompanyName":"Cronin-Purdy","Currency":"RUB","Notes":"ut nulla sed accumsan felis ut at dolor quis odio consequat varius integer ac leo pellentesque","Department":"Beauty","Website":"dyndns.org","Latitude":58.6772898,"Longitude":52.190142,"ShipDate":"5/31/2016","PaymentDate":"2016-02-19 06:37:37","TimeZone":"Europe/Volgograd","TotalPayment":"$107259.06","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":46,"OrderID":"54868-5511","Country":"Portugal","ShipCountry":"PT","ShipCity":"Cabeça Gorda","ShipName":"Kilback Group","ShipAddress":"526 Springview Crossing","CompanyEmail":"eroset19@businessweek.com","CompanyAgent":"Estella Roset","CompanyName":"Skiles-McCullough","Currency":"EUR","Notes":"molestie hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc","Department":"Books","Website":"squarespace.com","Latitude":39.1955731,"Longitude":-9.263539,"ShipDate":"5/16/2017","PaymentDate":"2017-06-16 22:18:36","TimeZone":"Europe/Lisbon","TotalPayment":"$607759.63","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":47,"OrderID":"51389-112","Country":"Poland","ShipCountry":"PL","ShipCity":"Lubenia","ShipName":"Pacocha-Wolff","ShipAddress":"4 Reindahl Hill","CompanyEmail":"ssanderson1a@sciencedaily.com","CompanyAgent":"Stillman Sanderson","CompanyName":"Kub LLC","Currency":"PLN","Notes":"luctus et ultrices posuere cubilia curae donec pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien","Department":"Music","Website":"istockphoto.com","Latitude":49.9409133,"Longitude":21.9374619,"ShipDate":"9/5/2016","PaymentDate":"2016-11-01 20:40:41","TimeZone":"Europe/Warsaw","TotalPayment":"$940344.95","Status":5,"Type":2,"Actions":null},\n' +
            '{"RecordID":48,"OrderID":"53346-1330","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Wonocolo","ShipName":"Hudson and Sons","ShipAddress":"523 Namekagon Trail","CompanyEmail":"lhoyland1b@sphinn.com","CompanyAgent":"Lynn Hoyland","CompanyName":"Mraz-Spinka","Currency":"IDR","Notes":"volutpat convallis morbi odio odio elementum eu interdum eu tincidunt","Department":"Industrial","Website":"examiner.com","Latitude":-7.3198199,"Longitude":112.7420274,"ShipDate":"5/8/2016","PaymentDate":"2017-12-24 00:13:05","TimeZone":"Asia/Jakarta","TotalPayment":"$612744.04","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":49,"OrderID":"11410-803","Country":"China","ShipCountry":"CN","ShipCity":"Baimajing","ShipName":"Reynolds, Botsford and MacGyver","ShipAddress":"6 Summit Road","CompanyEmail":"estansfield1c@webs.com","CompanyAgent":"Emmalee Stansfield","CompanyName":"Cartwright-Cole","Currency":"CNY","Notes":"posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet diam in magna bibendum imperdiet nullam","Department":"Home","Website":"bbc.co.uk","Latitude":19.696407,"Longitude":109.218734,"ShipDate":"12/24/2017","PaymentDate":"2016-03-20 19:34:44","TimeZone":"Asia/Chongqing","TotalPayment":"$427176.05","Status":3,"Type":3,"Actions":null},\n' +
            '{"RecordID":50,"OrderID":"54473-254","Country":"Australia","ShipCountry":"AU","ShipCity":"Sydney","ShipName":"Schroeder-Schulist","ShipAddress":"84 2nd Place","CompanyEmail":"hleyban1d@cocolog-nifty.com","CompanyAgent":"Henrietta Leyban","CompanyName":"Ankunding-Hudson","Currency":"AUD","Notes":"potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient montes nascetur","Department":"Health","Website":"pinterest.com","Latitude":-33.8688197,"Longitude":151.2092955,"ShipDate":"9/6/2016","PaymentDate":"2017-07-30 00:54:38","TimeZone":"Australia/Sydney","TotalPayment":"$269139.08","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":51,"OrderID":"49967-106","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Margasari","ShipName":"Watsica and Sons","ShipAddress":"2004 Scofield Drive","CompanyEmail":"uruddlesden1e@meetup.com","CompanyAgent":"Ulrike Ruddlesden","CompanyName":"Koch and Sons","Currency":"IDR","Notes":"dui maecenas tristique est et tempus semper est quam pharetra","Department":"Baby","Website":"angelfire.com","Latitude":-7.0976672,"Longitude":109.0215438,"ShipDate":"12/6/2017","PaymentDate":"2016-03-24 02:22:17","TimeZone":"Asia/Jakarta","TotalPayment":"$511041.28","Status":4,"Type":2,"Actions":null},\n' +
            '{"RecordID":52,"OrderID":"65649-501","Country":"Philippines","ShipCountry":"PH","ShipCity":"Buenavista","ShipName":"Larkin Inc","ShipAddress":"7 Maple Trail","CompanyEmail":"wmancktelow1f@princeton.edu","CompanyAgent":"Wilone Mancktelow","CompanyName":"Marvin Group","Currency":"PHP","Notes":"erat quisque erat eros viverra eget congue eget semper rutrum nulla nunc purus phasellus in","Department":"Health","Website":"tamu.edu","Latitude":8.972681,"Longitude":125.408732,"ShipDate":"8/19/2016","PaymentDate":"2017-06-29 22:18:35","TimeZone":"Asia/Manila","TotalPayment":"$945403.35","Status":5,"Type":2,"Actions":null},\n' +
            '{"RecordID":53,"OrderID":"11695-1405","Country":"Albania","ShipCountry":"AL","ShipCity":"Rrasa e Sipërme","ShipName":"Smith, Kovacek and Bogan","ShipAddress":"7633 Towne Street","CompanyEmail":"dlees1g@barnesandnoble.com","CompanyAgent":"Deidre Lees","CompanyName":"Sanford, Hoeger and Stanton","Currency":"ALL","Notes":"sed ante vivamus tortor duis mattis egestas metus aenean fermentum donec ut mauris eget massa tempor","Department":"Grocery","Website":"nationalgeographic.com","Latitude":"40.96778","Longitude":"19.82111","ShipDate":"3/14/2017","PaymentDate":"2016-10-10 16:32:23","TimeZone":"Europe/Tirane","TotalPayment":"$455561.49","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":54,"OrderID":"68788-6760","Country":"China","ShipCountry":"CN","ShipCity":"Xiaping","ShipName":"Dickinson Group","ShipAddress":"2985 Merry Plaza","CompanyEmail":"mbourne1h@macromedia.com","CompanyAgent":"Malorie Bourne","CompanyName":"Blick-Farrell","Currency":"CNY","Notes":"orci vehicula condimentum curabitur in libero ut massa volutpat convallis","Department":"Computers","Website":"1und1.de","Latitude":27.568278,"Longitude":117.562238,"ShipDate":"8/13/2017","PaymentDate":"2016-09-11 19:00:24","TimeZone":"Asia/Chongqing","TotalPayment":"$147162.27","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":55,"OrderID":"0268-1441","Country":"China","ShipCountry":"CN","ShipCity":"Zhangjiawan","ShipName":"Welch-Gislason","ShipAddress":"31 Mcbride Place","CompanyEmail":"hgammie1i@globo.com","CompanyAgent":"Horton Gammie","CompanyName":"Hegmann-Hettinger","Currency":"CNY","Notes":"rutrum at lorem integer tincidunt ante vel ipsum praesent blandit lacinia erat vestibulum sed magna at nunc","Department":"Music","Website":"yandex.ru","Latitude":31.686188,"Longitude":104.969819,"ShipDate":"5/27/2016","PaymentDate":"2016-08-19 17:30:11","TimeZone":"Asia/Harbin","TotalPayment":"$974736.80","Status":4,"Type":2,"Actions":null},\n' +
            '{"RecordID":56,"OrderID":"62032-524","Country":"Israel","ShipCountry":"IL","ShipCity":"Ramat Gan","ShipName":"Stokes-Homenick","ShipAddress":"95694 Clove Crossing","CompanyEmail":"fsante1j@php.net","CompanyAgent":"Frannie Sante","CompanyName":"Kerluke, Witting and Zboncak","Currency":"ILS","Notes":"gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam","Department":"Movies","Website":"deliciousdays.com","Latitude":32.068424,"Longitude":34.824785,"ShipDate":"5/6/2017","PaymentDate":"2016-10-29 15:41:43","TimeZone":"Asia/Jerusalem","TotalPayment":"$939821.62","Status":6,"Type":2,"Actions":null},\n' +
            '{"RecordID":57,"OrderID":"42291-218","Country":"Yemen","ShipCountry":"YE","ShipCity":"Raydah","ShipName":"Pfannerstill LLC","ShipAddress":"4867 Warner Lane","CompanyEmail":"onazer1k@github.com","CompanyAgent":"Orlando Nazer","CompanyName":"Barton-Mann","Currency":"YER","Notes":"consequat nulla nisl nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in porttitor pede justo","Department":"Automotive","Website":"nytimes.com","Latitude":15.8161032,"Longitude":44.041335,"ShipDate":"12/6/2017","PaymentDate":"2017-07-15 23:15:32","TimeZone":"Asia/Aden","TotalPayment":"$971056.71","Status":1,"Type":1,"Actions":null},\n' +
            '{"RecordID":58,"OrderID":"0536-3233","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Krajan Srigonco","ShipName":"Torphy, Bosco and Ortiz","ShipAddress":"8379 Shopko Circle","CompanyEmail":"platliff1l@theatlantic.com","CompanyAgent":"Pavel Latliff","CompanyName":"Feil, Mante and Becker","Currency":"IDR","Notes":"sit amet consectetuer adipiscing elit proin interdum mauris non ligula pellentesque ultrices phasellus id sapien","Department":"Garden","Website":"angelfire.com","Latitude":"-8.3418","Longitude":"112.5618","ShipDate":"3/10/2016","PaymentDate":"2017-03-06 12:26:09","TimeZone":"Asia/Jakarta","TotalPayment":"$1176948.84","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":59,"OrderID":"0143-1265","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Panggungasri","ShipName":"Schiller LLC","ShipAddress":"75 Barnett Crossing","CompanyEmail":"bpackwood1m@salon.com","CompanyAgent":"Benetta Packwood","CompanyName":"Zboncak-Hettinger","Currency":"IDR","Notes":"lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst maecenas ut massa quis augue","Department":"Music","Website":"issuu.com","Latitude":-8.2182795,"Longitude":112.2950314,"ShipDate":"7/7/2017","PaymentDate":"2017-09-23 10:42:52","TimeZone":"Asia/Jakarta","TotalPayment":"$214315.57","Status":3,"Type":2,"Actions":null},\n' +
            '{"RecordID":60,"OrderID":"64980-119","Country":"Macedonia","ShipCountry":"MK","ShipCity":"Јегуновце","ShipName":"Hyatt, Kovacek and Schulist","ShipAddress":"1562 Mesta Center","CompanyEmail":"mcolliar1n@hugedomains.com","CompanyAgent":"Merilee Colliar","CompanyName":"Moore, Toy and McCullough","Currency":"MKD","Notes":"turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi","Department":"Tools","Website":"craigslist.org","Latitude":42.0733374,"Longitude":21.1202878,"ShipDate":"2/3/2017","PaymentDate":"2016-05-12 12:43:48","TimeZone":"Europe/Skopje","TotalPayment":"$526035.07","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":61,"OrderID":"0363-0198","Country":"Philippines","ShipCountry":"PH","ShipCity":"Nagrumbuan","ShipName":"Hills-Mayert","ShipAddress":"505 Cardinal Drive","CompanyEmail":"epoyner1o@zimbio.com","CompanyAgent":"Ennis Poyner","CompanyName":"Simonis and Sons","Currency":"PHP","Notes":"odio in hac habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque","Department":"Tools","Website":"mayoclinic.com","Latitude":16.8991985,"Longitude":121.7075195,"ShipDate":"8/30/2017","PaymentDate":"2017-04-05 11:19:31","TimeZone":"Asia/Manila","TotalPayment":"$925471.01","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":62,"OrderID":"65862-142","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Leuwipicung","ShipName":"Schultz-Cronin","ShipAddress":"306 Beilfuss Parkway","CompanyEmail":"apetherick1p@hatena.ne.jp","CompanyAgent":"Ailyn Petherick","CompanyName":"Dach-Ernser","Currency":"IDR","Notes":"sed tincidunt eu felis fusce posuere felis sed lacus morbi sem mauris laoreet ut rhoncus","Department":"Garden","Website":"house.gov","Latitude":-7.71725,"Longitude":108.07666,"ShipDate":"3/4/2016","PaymentDate":"2017-01-12 13:27:43","TimeZone":"Asia/Jakarta","TotalPayment":"$300684.83","Status":6,"Type":1,"Actions":null},\n' +
            '{"RecordID":63,"OrderID":"67510-1561","Country":"Peru","ShipCountry":"PE","ShipCity":"Patambuco","ShipName":"Crist and Sons","ShipAddress":"90561 Superior Parkway","CompanyEmail":"sgasking1q@sun.com","CompanyAgent":"Saba Gasking","CompanyName":"Wisozk-Ratke","Currency":"PEN","Notes":"leo pellentesque ultrices mattis odio donec vitae nisi nam ultrices libero non mattis pulvinar nulla pede","Department":"Jewelery","Website":"apple.com","Latitude":-14.27079,"Longitude":-69.567879,"ShipDate":"6/27/2017","PaymentDate":"2017-02-14 05:11:52","TimeZone":"America/Lima","TotalPayment":"$296798.64","Status":5,"Type":2,"Actions":null},\n' +
            '{"RecordID":64,"OrderID":"67877-169","Country":"Brazil","ShipCountry":"BR","ShipCity":"Sananduva","ShipName":"Koss, Yost and Wintheiser","ShipAddress":"76 Di Loreto Place","CompanyEmail":"kmatitiaho1r@networkadvertising.org","CompanyAgent":"Kelly Matitiaho","CompanyName":"Schuster, Flatley and Ledner","Currency":"BRL","Notes":"hendrerit at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci eget orci","Department":"Automotive","Website":"squidoo.com","Latitude":-27.950568,"Longitude":-51.8148609,"ShipDate":"9/21/2017","PaymentDate":"2016-04-14 15:50:12","TimeZone":"America/Sao_Paulo","TotalPayment":"$683140.08","Status":4,"Type":2,"Actions":null},\n' +
            '{"RecordID":65,"OrderID":"13537-402","Country":"Uganda","ShipCountry":"UG","ShipCity":"Pader Palwo","ShipName":"Konopelski, Goyette and Borer","ShipAddress":"34 Charing Cross Junction","CompanyEmail":"dgasperi1s@newsvine.com","CompanyAgent":"Daron Gasperi","CompanyName":"Kuphal Inc","Currency":"UGX","Notes":"curabitur gravida nisi at nibh in hac habitasse platea dictumst aliquam augue quam","Department":"Electronics","Website":"com.com","Latitude":2.7798518,"Longitude":33.0057261,"ShipDate":"7/8/2016","PaymentDate":"2016-12-02 10:21:48","TimeZone":"Africa/Kampala","TotalPayment":"$245786.01","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":66,"OrderID":"48951-8237","Country":"Portugal","ShipCountry":"PT","ShipCity":"Portela","ShipName":"Marks-Batz","ShipAddress":"114 Barnett Avenue","CompanyEmail":"meustes1t@nsw.gov.au","CompanyAgent":"Marketa Eustes","CompanyName":"Kautzer Inc","Currency":"EUR","Notes":"proin leo odio porttitor id consequat in consequat ut nulla sed accumsan","Department":"Outdoors","Website":"paypal.com","Latitude":41.1604713,"Longitude":-7.7452871,"ShipDate":"12/6/2016","PaymentDate":"2016-01-03 07:39:20","TimeZone":"Europe/Lisbon","TotalPayment":"$148246.67","Status":1,"Type":1,"Actions":null},\n' +
            '{"RecordID":67,"OrderID":"36987-3279","Country":"Spain","ShipCountry":"ES","ShipCity":"Badajoz","ShipName":"Osinski, Nitzsche and Schaden","ShipAddress":"6 Commercial Center","CompanyEmail":"bshowl1u@lycos.com","CompanyAgent":"Bernita Showl","CompanyName":"Jacobson-Brakus","Currency":"EUR","Notes":"odio porttitor id consequat in consequat ut nulla sed accumsan felis ut at dolor quis odio consequat varius","Department":"Movies","Website":"wikimedia.org","Latitude":38.8794495,"Longitude":-6.9706535,"ShipDate":"11/2/2016","PaymentDate":"2016-09-19 10:42:38","TimeZone":"Europe/Madrid","TotalPayment":"$1145811.38","Status":2,"Type":3,"Actions":null},\n' +
            '{"RecordID":68,"OrderID":"36987-3092","Country":"Belarus","ShipCountry":"BY","ShipCity":"Hlybokaye","ShipName":"Fahey-Jones","ShipAddress":"43 Scott Lane","CompanyEmail":"dohoey1v@sitemeter.com","CompanyAgent":"Danielle O\'Hoey","CompanyName":"Sipes, Schaden and Larkin","Currency":"BYR","Notes":"nullam porttitor lacus at turpis donec posuere metus vitae ipsum aliquam non mauris morbi","Department":"Toys","Website":"joomla.org","Latitude":55.1391321,"Longitude":27.6842905,"ShipDate":"4/12/2017","PaymentDate":"2017-01-03 22:32:16","TimeZone":"Europe/Minsk","TotalPayment":"$1075453.72","Status":3,"Type":3,"Actions":null},\n' +
            '{"RecordID":69,"OrderID":"17271-503","Country":"Slovenia","ShipCountry":"SI","ShipCity":"Slovenska Bistrica","ShipName":"Padberg, West and Hoeger","ShipAddress":"48462 Jackson Avenue","CompanyEmail":"sstanistrete1w@samsung.com","CompanyAgent":"Susana Stanistrete","CompanyName":"Reinger Inc","Currency":"EUR","Notes":"tortor quis turpis sed ante vivamus tortor duis mattis egestas metus aenean","Department":"Clothing","Website":"people.com.cn","Latitude":46.3919813,"Longitude":15.5727869,"ShipDate":"6/26/2017","PaymentDate":"2016-10-01 11:26:13","TimeZone":"Europe/Ljubljana","TotalPayment":"$1113114.34","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":70,"OrderID":"49288-0206","Country":"France","ShipCountry":"FR","ShipCity":"Aix-en-Provence","ShipName":"Johnson, Beahan and McCullough","ShipAddress":"8 Bartillon Pass","CompanyEmail":"domrod1x@ihg.com","CompanyAgent":"Denys Omrod","CompanyName":"Dicki and Sons","Currency":"EUR","Notes":"vestibulum proin eu mi nulla ac enim in tempor turpis nec euismod scelerisque quam","Department":"Electronics","Website":"lulu.com","Latitude":43.5190858,"Longitude":5.4431946,"ShipDate":"11/18/2017","PaymentDate":"2016-07-28 12:41:30","TimeZone":"Europe/Paris","TotalPayment":"$264342.99","Status":6,"Type":3,"Actions":null},\n' +
            '{"RecordID":71,"OrderID":"55312-118","Country":"Belarus","ShipCountry":"BY","ShipCity":"Pyetrykaw","ShipName":"Howell, Swaniawski and Mosciski","ShipAddress":"16514 Glendale Road","CompanyEmail":"pmallall1y@cnet.com","CompanyAgent":"Phillipe Mallall","CompanyName":"Jacobs, Blanda and Dickinson","Currency":"BYR","Notes":"quis lectus suspendisse potenti in eleifend quam a odio in hac habitasse platea dictumst","Department":"Movies","Website":"desdev.cn","Latitude":52.1267722,"Longitude":28.4919521,"ShipDate":"10/13/2017","PaymentDate":"2017-06-17 12:58:28","TimeZone":"Europe/Minsk","TotalPayment":"$366433.13","Status":3,"Type":1,"Actions":null},\n' +
            '{"RecordID":72,"OrderID":"49035-111","Country":"Brazil","ShipCountry":"BR","ShipCity":"Caieiras","ShipName":"Skiles, Mayert and Huels","ShipAddress":"551 Briar Crest Drive","CompanyEmail":"fmantha1z@usatoday.com","CompanyAgent":"Flinn Mantha","CompanyName":"Zboncak-Dooley","Currency":"BRL","Notes":"justo morbi ut odio cras mi pede malesuada in imperdiet et commodo vulputate justo in blandit ultrices","Department":"Beauty","Website":"wired.com","Latitude":-23.3711864,"Longitude":-46.7575221,"ShipDate":"1/18/2016","PaymentDate":"2016-06-28 10:50:05","TimeZone":"America/Sao_Paulo","TotalPayment":"$623396.37","Status":2,"Type":3,"Actions":null},\n' +
            '{"RecordID":73,"OrderID":"33261-888","Country":"China","ShipCountry":"CN","ShipCity":"Yicheng","ShipName":"Boyer, Koepp and O\'Hara","ShipAddress":"1 Blue Bill Park Way","CompanyEmail":"mgange20@wix.com","CompanyAgent":"Melodie Gange","CompanyName":"Lemke Inc","Currency":"CNY","Notes":"eros elementum pellentesque quisque porta volutpat erat quisque erat eros","Department":"Garden","Website":"yellowpages.com","Latitude":31.719806,"Longitude":112.257788,"ShipDate":"11/24/2016","PaymentDate":"2017-06-17 19:57:08","TimeZone":"Asia/Chongqing","TotalPayment":"$668062.14","Status":5,"Type":2,"Actions":null},\n' +
            '{"RecordID":74,"OrderID":"60709-105","Country":"Philippines","ShipCountry":"PH","ShipCity":"Babug","ShipName":"Muller-Rosenbaum","ShipAddress":"69 Northview Parkway","CompanyEmail":"rdabner21@indiatimes.com","CompanyAgent":"Randi Dabner","CompanyName":"Schimmel, Mohr and Kutch","Currency":"PHP","Notes":"eu sapien cursus vestibulum proin eu mi nulla ac enim in","Department":"Sports","Website":"wikimedia.org","Latitude":14.8744012,"Longitude":120.8130073,"ShipDate":"5/21/2017","PaymentDate":"2017-09-15 19:14:19","TimeZone":"Asia/Manila","TotalPayment":"$990135.61","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":75,"OrderID":"63629-2679","Country":"Finland","ShipCountry":"FI","ShipCity":"Koski Tl","ShipName":"Crona, Halvorson and Larkin","ShipAddress":"0 Vernon Center","CompanyEmail":"ggabbat22@newsvine.com","CompanyAgent":"Ginnie Gabbat","CompanyName":"Bergnaum-Kozey","Currency":"EUR","Notes":"donec quis orci eget orci vehicula condimentum curabitur in libero ut massa volutpat convallis morbi odio odio","Department":"Jewelery","Website":"newyorker.com","Latitude":60.6569706,"Longitude":23.1385333,"ShipDate":"11/20/2016","PaymentDate":"2017-06-21 16:16:24","TimeZone":"Europe/Helsinki","TotalPayment":"$232536.81","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":76,"OrderID":"36800-277","Country":"Serbia","ShipCountry":"RS","ShipCity":"Radenka","ShipName":"Hahn LLC","ShipAddress":"0 Erie Plaza","CompanyEmail":"jadnett23@about.com","CompanyAgent":"Josi Adnett","CompanyName":"Schulist-Yost","Currency":"RSD","Notes":"ipsum dolor sit amet consectetuer adipiscing elit proin risus praesent lectus vestibulum quam sapien varius ut blandit non","Department":"Computers","Website":"google.de","Latitude":44.5847556,"Longitude":21.7503934,"ShipDate":"9/19/2017","PaymentDate":"2017-11-09 17:37:52","TimeZone":"Europe/Belgrade","TotalPayment":"$830071.82","Status":1,"Type":3,"Actions":null},\n' +
            '{"RecordID":77,"OrderID":"52125-910","Country":"Armenia","ShipCountry":"AM","ShipCity":"Gogaran","ShipName":"Will-Dooley","ShipAddress":"57 Arapahoe Way","CompanyEmail":"nyerill24@rediff.com","CompanyAgent":"Nathanial Yerill","CompanyName":"Rosenbaum Inc","Currency":"AMD","Notes":"volutpat in congue etiam justo etiam pretium iaculis justo in hac habitasse platea dictumst etiam faucibus cursus urna ut tellus","Department":"Baby","Website":"webmd.com","Latitude":40.894048,"Longitude":44.1992229,"ShipDate":"5/24/2017","PaymentDate":"2017-04-15 08:51:50","TimeZone":"Asia/Yerevan","TotalPayment":"$97687.69","Status":5,"Type":3,"Actions":null},\n' +
            '{"RecordID":78,"OrderID":"24236-120","Country":"France","ShipCountry":"FR","ShipCity":"Mâcon","ShipName":"Okuneva, Metz and Stamm","ShipAddress":"40389 Buell Alley","CompanyEmail":"pbrewin25@timesonline.co.uk","CompanyAgent":"Priscilla Brewin","CompanyName":"Witting-Von","Currency":"EUR","Notes":"sociis natoque penatibus et magnis dis parturient montes nascetur ridiculus mus","Department":"Movies","Website":"hp.com","Latitude":46.2993504,"Longitude":4.8265786,"ShipDate":"2/5/2016","PaymentDate":"2017-07-02 14:21:54","TimeZone":"Europe/Paris","TotalPayment":"$892539.18","Status":6,"Type":1,"Actions":null},\n' +
            '{"RecordID":79,"OrderID":"76173-1008","Country":"Pakistan","ShipCountry":"PK","ShipCity":"Kandhkot","ShipName":"Quigley-Halvorson","ShipAddress":"9 1st Alley","CompanyEmail":"ballard26@google.ca","CompanyAgent":"Barbabas Allard","CompanyName":"Kunde-Veum","Currency":"PKR","Notes":"cras non velit nec nisi vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla eget eros","Department":"Music","Website":"trellian.com","Latitude":28.1771009,"Longitude":68.7257945,"ShipDate":"1/29/2016","PaymentDate":"2017-08-08 19:08:11","TimeZone":"Asia/Karachi","TotalPayment":"$64027.72","Status":6,"Type":2,"Actions":null},\n' +
            '{"RecordID":80,"OrderID":"41163-146","Country":"China","ShipCountry":"CN","ShipCity":"Dadianzi","ShipName":"Hilll Inc","ShipAddress":"4569 Heath Street","CompanyEmail":"mcassie27@canalblog.com","CompanyAgent":"Marshall Cassie","CompanyName":"Brown-Hudson","Currency":"CNY","Notes":"ut erat id mauris vulputate elementum nullam varius nulla facilisi cras","Department":"Toys","Website":"tripadvisor.com","Latitude":43.661922,"Longitude":128.500964,"ShipDate":"3/5/2016","PaymentDate":"2016-02-25 11:11:16","TimeZone":"Asia/Harbin","TotalPayment":"$620902.30","Status":2,"Type":2,"Actions":null},\n' +
            '{"RecordID":81,"OrderID":"68084-198","Country":"Philippines","ShipCountry":"PH","ShipCity":"Pagatin","ShipName":"Nikolaus, Zulauf and Gutkowski","ShipAddress":"70 Coolidge Hill","CompanyEmail":"wferneley28@studiopress.com","CompanyAgent":"William Ferneley","CompanyName":"Adams, Macejkovic and Little","Currency":"PHP","Notes":"sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam nam tristique tortor","Department":"Jewelery","Website":"netvibes.com","Latitude":6.7640051,"Longitude":124.3754414,"ShipDate":"10/4/2017","PaymentDate":"2016-10-19 03:43:03","TimeZone":"Asia/Manila","TotalPayment":"$33879.28","Status":2,"Type":3,"Actions":null},\n' +
            '{"RecordID":82,"OrderID":"60512-1043","Country":"Portugal","ShipCountry":"PT","ShipCity":"Cimo de Vila","ShipName":"Cole-Daniel","ShipAddress":"08329 Marcy Trail","CompanyEmail":"jjallin29@latimes.com","CompanyAgent":"Josy Jallin","CompanyName":"Osinski LLC","Currency":"EUR","Notes":"pharetra magna vestibulum aliquet ultrices erat tortor sollicitudin mi sit amet lobortis sapien sapien","Department":"Grocery","Website":"imgur.com","Latitude":41.3389801,"Longitude":-8.1591621,"ShipDate":"8/23/2017","PaymentDate":"2016-11-17 23:27:10","TimeZone":"Europe/Lisbon","TotalPayment":"$45465.01","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":83,"OrderID":"21695-139","Country":"Slovenia","ShipCountry":"SI","ShipCity":"Kobarid","ShipName":"Wuckert-Corkery","ShipAddress":"9576 Russell Alley","CompanyEmail":"tbuxton2a@seesaa.net","CompanyAgent":"Tomasine Buxton","CompanyName":"Schaefer-Smith","Currency":"EUR","Notes":"in faucibus orci luctus et ultrices posuere cubilia curae duis","Department":"Books","Website":"fda.gov","Latitude":46.2476549,"Longitude":13.5791749,"ShipDate":"4/27/2017","PaymentDate":"2016-02-14 15:10:51","TimeZone":"Europe/Rome","TotalPayment":"$271185.36","Status":3,"Type":3,"Actions":null},\n' +
            '{"RecordID":84,"OrderID":"0228-3003","Country":"Dominican Republic","ShipCountry":"DO","ShipCity":"Bajos de Haina","ShipName":"Grady-Connelly","ShipAddress":"2079 Larry Way","CompanyEmail":"cpaskerful2b@i2i.jp","CompanyAgent":"Cairistiona Paskerful","CompanyName":"Wiegand and Sons","Currency":"DOP","Notes":"habitasse platea dictumst morbi vestibulum velit id pretium iaculis diam erat fermentum justo","Department":"Computers","Website":"china.com.cn","Latitude":18.4091399,"Longitude":-70.031039,"ShipDate":"11/14/2016","PaymentDate":"2017-11-01 16:40:06","TimeZone":"America/Santo_Domingo","TotalPayment":"$612602.70","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":85,"OrderID":"36800-124","Country":"Mexico","ShipCountry":"MX","ShipCity":"El Rosario","ShipName":"Rogahn Group","ShipAddress":"5332 Cambridge Way","CompanyEmail":"gboggis2c@sbwire.com","CompanyAgent":"Godwin Boggis","CompanyName":"Cartwright, Mante and Kris","Currency":"MXN","Notes":"ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur","Department":"Automotive","Website":"flickr.com","Latitude":30.059549,"Longitude":-115.725753,"ShipDate":"1/13/2016","PaymentDate":"2016-01-24 18:48:06","TimeZone":"America/Mexico_City","TotalPayment":"$1014910.05","Status":5,"Type":2,"Actions":null},\n' +
            '{"RecordID":86,"OrderID":"59746-175","Country":"Philippines","ShipCountry":"PH","ShipCity":"Concepcion","ShipName":"Tromp, Wisozk and Stiedemann","ShipAddress":"74705 Oakridge Point","CompanyEmail":"khayzer2d@marriott.com","CompanyAgent":"Kirbie Hayzer","CompanyName":"Nicolas-Bayer","Currency":"PHP","Notes":"commodo vulputate justo in blandit ultrices enim lorem ipsum dolor sit amet consectetuer adipiscing","Department":"Computers","Website":"issuu.com","Latitude":14.6688068,"Longitude":121.1138058,"ShipDate":"5/20/2016","PaymentDate":"2017-03-14 05:05:26","TimeZone":"Asia/Manila","TotalPayment":"$201601.94","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":87,"OrderID":"0268-1481","Country":"Palestinian Territory","ShipCountry":"PS","ShipCity":"‘Aşīrah al Qiblīyah","ShipName":"Morissette Inc","ShipAddress":"4339 Armistice Circle","CompanyEmail":"cgresley2e@wsj.com","CompanyAgent":"Cherlyn Gresley","CompanyName":"Langosh, Kris and Ernser","Currency":"ILS","Notes":"sed vestibulum sit amet cursus id turpis integer aliquet massa id lobortis convallis tortor risus dapibus augue vel","Department":"Jewelery","Website":"google.co.uk","Latitude":"32.17842","Longitude":"35.21569","ShipDate":"4/2/2016","PaymentDate":"2017-01-21 06:18:17","TimeZone":"Asia/Hebron","TotalPayment":"$435115.69","Status":3,"Type":3,"Actions":null},\n' +
            '{"RecordID":88,"OrderID":"58411-157","Country":"China","ShipCountry":"CN","ShipCity":"Baisha","ShipName":"Morissette-Schoen","ShipAddress":"2 Menomonie Terrace","CompanyEmail":"hshorto2f@imdb.com","CompanyAgent":"Horatio Shorto","CompanyName":"Lueilwitz-Cole","Currency":"CNY","Notes":"vestibulum velit id pretium iaculis diam erat fermentum justo nec","Department":"Sports","Website":"about.me","Latitude":26.641315,"Longitude":100.222545,"ShipDate":"9/11/2017","PaymentDate":"2017-03-30 06:17:36","TimeZone":"Asia/Chongqing","TotalPayment":"$428954.11","Status":1,"Type":1,"Actions":null},\n' +
            '{"RecordID":89,"OrderID":"54569-6438","Country":"Portugal","ShipCountry":"PT","ShipCity":"Brejieira","ShipName":"Nikolaus-Lesch","ShipAddress":"1 Union Park","CompanyEmail":"lcrayden2g@multiply.com","CompanyAgent":"Lorrin Crayden","CompanyName":"Price Group","Currency":"EUR","Notes":"ultricies eu nibh quisque id justo sit amet sapien dignissim vestibulum vestibulum ante ipsum primis in faucibus orci luctus et","Department":"Industrial","Website":"csmonitor.com","Latitude":39.764261,"Longitude":-8.7386338,"ShipDate":"9/17/2016","PaymentDate":"2017-05-24 15:56:55","TimeZone":"Europe/Lisbon","TotalPayment":"$101625.67","Status":3,"Type":3,"Actions":null},\n' +
            '{"RecordID":90,"OrderID":"64720-141","Country":"China","ShipCountry":"CN","ShipCity":"Xiangtan","ShipName":"Wilderman and Sons","ShipAddress":"54779 Talisman Pass","CompanyEmail":"mlilburn2h@fotki.com","CompanyAgent":"Marci Lilburn","CompanyName":"Hackett-Olson","Currency":"CNY","Notes":"hac habitasse platea dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at lorem integer tincidunt ante","Department":"Electronics","Website":"microsoft.com","Latitude":27.829795,"Longitude":112.944026,"ShipDate":"7/2/2017","PaymentDate":"2016-11-02 16:08:14","TimeZone":"Asia/Chongqing","TotalPayment":"$453268.63","Status":5,"Type":2,"Actions":null},\n' +
            '{"RecordID":91,"OrderID":"53145-059","Country":"Brazil","ShipCountry":"BR","ShipCity":"Penedo","ShipName":"Torp, Brekke and Mitchell","ShipAddress":"994 Heffernan Alley","CompanyEmail":"gsoaper2i@dailymotion.com","CompanyAgent":"Giavani Soaper","CompanyName":"Pfeffer, Harber and Hintz","Currency":"BRL","Notes":"et ultrices posuere cubilia curae mauris viverra diam vitae quam suspendisse potenti nullam porttitor","Department":"Electronics","Website":"prnewswire.com","Latitude":-10.2735517,"Longitude":-36.5536172,"ShipDate":"6/26/2017","PaymentDate":"2017-08-01 21:21:10","TimeZone":"America/Maceio","TotalPayment":"$461213.42","Status":2,"Type":1,"Actions":null},\n' +
            '{"RecordID":92,"OrderID":"57520-0396","Country":"China","ShipCountry":"CN","ShipCity":"Wanshi","ShipName":"Lockman-Davis","ShipAddress":"75440 Loftsgordon Avenue","CompanyEmail":"kgowenlock2j@a8.net","CompanyAgent":"Karine Gowenlock","CompanyName":"Kirlin, Goldner and Upton","Currency":"CNY","Notes":"posuere felis sed lacus morbi sem mauris laoreet ut rhoncus aliquet pulvinar sed","Department":"Kids","Website":"behance.net","Latitude":31.471686,"Longitude":119.934764,"ShipDate":"9/11/2017","PaymentDate":"2016-05-06 03:36:46","TimeZone":"Asia/Shanghai","TotalPayment":"$290389.01","Status":5,"Type":3,"Actions":null},\n' +
            '{"RecordID":93,"OrderID":"24236-184","Country":"Azerbaijan","ShipCountry":"AZ","ShipCity":"Lökbatan","ShipName":"Morissette-Gislason","ShipAddress":"8338 Saint Paul Plaza","CompanyEmail":"tsandon2k@trellian.com","CompanyAgent":"Tallie Sandon","CompanyName":"Herman-Erdman","Currency":"AZN","Notes":"at vulputate vitae nisl aenean lectus pellentesque eget nunc donec quis orci","Department":"Games","Website":"ebay.co.uk","Latitude":40.3281802,"Longitude":49.7355969,"ShipDate":"9/16/2016","PaymentDate":"2016-12-24 08:27:33","TimeZone":"Asia/Baku","TotalPayment":"$525119.41","Status":3,"Type":1,"Actions":null},\n' +
            '{"RecordID":94,"OrderID":"11822-9854","Country":"Indonesia","ShipCountry":"ID","ShipCity":"Pasirpanjang","ShipName":"Dietrich-Langworth","ShipAddress":"5 Hollow Ridge Plaza","CompanyEmail":"mtrayhorn2l@sciencedirect.com","CompanyAgent":"Marcos Trayhorn","CompanyName":"Pacocha-Kling","Currency":"IDR","Notes":"justo sollicitudin ut suscipit a feugiat et eros vestibulum ac est","Department":"Sports","Website":"chicagotribune.com","Latitude":0.845865,"Longitude":108.8796091,"ShipDate":"3/27/2016","PaymentDate":"2017-06-08 14:15:50","TimeZone":"Asia/Jakarta","TotalPayment":"$362198.01","Status":4,"Type":3,"Actions":null},\n' +
            '{"RecordID":95,"OrderID":"49643-120","Country":"Russia","ShipCountry":"RU","ShipCity":"Muchkapskiy","ShipName":"Conn LLC","ShipAddress":"68 5th Drive","CompanyEmail":"fmunford2m@tiny.cc","CompanyAgent":"Francis Munford","CompanyName":"Smith-Stokes","Currency":"RUB","Notes":"tempus vel pede morbi porttitor lorem id ligula suspendisse ornare consequat","Department":"Beauty","Website":"ox.ac.uk","Latitude":51.8478427,"Longitude":42.4697909,"ShipDate":"9/12/2016","PaymentDate":"2017-01-27 16:06:13","TimeZone":"Europe/Moscow","TotalPayment":"$1001206.62","Status":4,"Type":1,"Actions":null},\n' +
            '{"RecordID":96,"OrderID":"56062-393","Country":"Guam","ShipCountry":"GU","ShipCity":"Agana Heights Village","ShipName":"Mayer-Cole","ShipAddress":"04373 Golden Leaf Center","CompanyEmail":"ckahler2n@histats.com","CompanyAgent":"Catriona Kahler","CompanyName":"Lynch-Satterfield","Currency":"USD","Notes":"ullamcorper purus sit amet nulla quisque arcu libero rutrum ac lobortis vel dapibus at diam","Department":"Jewelery","Website":"newyorker.com","Latitude":13.4677672,"Longitude":144.7453228,"ShipDate":"7/18/2017","PaymentDate":"2016-06-21 16:10:22","TimeZone":"Pacific/Guam","TotalPayment":"$717532.21","Status":5,"Type":1,"Actions":null},\n' +
            '{"RecordID":97,"OrderID":"50436-0120","Country":"Dominica","ShipCountry":"DM","ShipCity":"Soufrière","ShipName":"Ernser, Miller and Barton","ShipAddress":"7 Canary Crossing","CompanyEmail":"gkleinplatz2o@naver.com","CompanyAgent":"Giuseppe Kleinplatz","CompanyName":"Denesik-Wyman","Currency":"XCD","Notes":"congue elementum in hac habitasse platea dictumst morbi vestibulum velit id","Department":"Kids","Website":"miibeian.gov.cn","Latitude":15.2338798,"Longitude":-61.3567483,"ShipDate":"12/20/2017","PaymentDate":"2016-08-13 23:06:00","TimeZone":"America/Dominica","TotalPayment":"$630409.34","Status":2,"Type":3,"Actions":null},\n' +
            '{"RecordID":98,"OrderID":"42507-004","Country":"Mexico","ShipCountry":"MX","ShipCity":"Rancho Nuevo","ShipName":"Borer and Sons","ShipAddress":"424 Birchwood Terrace","CompanyEmail":"lgrinishin2p@hubpages.com","CompanyAgent":"Lucky Grinishin","CompanyName":"O\'Reilly, Block and Goyette","Currency":"MXN","Notes":"mauris lacinia sapien quis libero nullam sit amet turpis elementum ligula vehicula consequat morbi a ipsum integer a nibh","Department":"Tools","Website":"hexun.com","Latitude":22.2222241,"Longitude":-100.9256085,"ShipDate":"12/22/2017","PaymentDate":"2016-04-09 03:07:19","TimeZone":"America/Mexico_City","TotalPayment":"$314052.63","Status":2,"Type":3,"Actions":null},\n' +
            '{"RecordID":99,"OrderID":"49230-191","Country":"Japan","ShipCountry":"JP","ShipCity":"Yokosuka","ShipName":"White, Legros and Carroll","ShipAddress":"8 Annamark Place","CompanyEmail":"mellse2q@xinhuanet.com","CompanyAgent":"Meade Ellse","CompanyName":"Purdy-Carroll","Currency":"JPY","Notes":"magna ac consequat metus sapien ut nunc vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia","Department":"Sports","Website":"abc.net.au","Latitude":34.6830797,"Longitude":137.9865313,"ShipDate":"12/12/2016","PaymentDate":"2016-08-30 12:27:38","TimeZone":"Asia/Tokyo","TotalPayment":"$1127673.96","Status":1,"Type":1,"Actions":null},\n' +
            '{"RecordID":100,"OrderID":"50865-056","Country":"Honduras","ShipCountry":"HN","ShipCity":"Yuscarán","ShipName":"Anderson, Pfannerstill and Miller","ShipAddress":"116 Bay Way","CompanyEmail":"hensley2r@businessweek.com","CompanyAgent":"Hamil Ensley","CompanyName":"Kessler, Greenfelder and Gaylord","Currency":"HNL","Notes":"nulla ac enim in tempor turpis nec euismod scelerisque quam turpis adipiscing lorem vitae mattis","Department":"Kids","Website":"dell.com","Latitude":13.9448964,"Longitude":-86.8508942,"ShipDate":"1/14/2016","PaymentDate":"2016-12-27 22:25:10","TimeZone":"America/Tegucigalpa","TotalPayment":"$386091.31","Status":6,"Type":3,"Actions":null}]');

        var datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'local',
                source: dataJSONArray,
                pageSize: 10,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                // height: 450, // datatable's body's fixed height
                footer: false, // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [{
                field: 'RecordID',
                title: '#',
                sortable: false,
                width: 20,
                type: 'number',
                selector: {
                    class: ''
                },
                textAlign: 'center',
            }, {
                field: 'OrderID',
                title: 'Order ID',
            }, {
                field: 'Country',
                title: 'Country',
                template: function(row) {
                    return row.Country + ' ' + row.ShipCountry;
                },
            }, {
                field: 'ShipDate',
                title: 'Ship Date',
                type: 'date',
                format: 'MM/DD/YYYY',
            }, {
                field: 'CompanyName',
                title: 'Company Name',
            }, {
                field: 'Status',
                title: 'Status',
                // callback function support for column rendering
                template: function(row) {
                    var status = {
                        1: {
                            'title': 'Pending',
                            'class': ' label-light-success'
                        },
                        2: {
                            'title': 'Delivered',
                            'class': ' label-light-danger'
                        },
                        3: {
                            'title': 'Canceled',
                            'class': ' label-light-primary'
                        },
                        4: {
                            'title': 'Success',
                            'class': ' label-light-success'
                        },
                        5: {
                            'title': 'Info',
                            'class': ' label-light-info'
                        },
                        6: {
                            'title': 'Danger',
                            'class': ' label-light-danger'
                        },
                        7: {
                            'title': 'Warning',
                            'class': ' label-light-warning'
                        },
                    };
                    return '<span class="label font-weight-bold label-lg ' + status[row.Status].class + ' label-inline">' + status[row.Status].title + '</span>';
                },
            }, {
                field: 'Type',
                title: 'Type',
                autoHide: false,
                // callback function support for column rendering
                template: function(row) {
                    var status = {
                        1: {
                            'title': 'Online',
                            'state': 'danger'
                        },
                        2: {
                            'title': 'Retail',
                            'state': 'primary'
                        },
                        3: {
                            'title': 'Direct',
                            'state': 'success'
                        },
                    };
                    return '<span class="label label-' + status[row.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + status[row.Type].state + '">' +
                        status[row.Type].title + '</span>';
                },
            }, {
                field: 'Actions',
                title: 'Actions',
                sortable: false,
                width: 125,
                overflow: 'visible',
                autoHide: false,
                template: function() {
                    return '\
							<div class="dropdown dropdown-inline">\
								<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" data-toggle="dropdown">\
	                                <span class="svg-icon svg-icon-md">\
	                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	                                            <rect x="0" y="0" width="24" height="24"/>\
	                                            <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>\
	                                        </g>\
	                                    </svg>\
	                                </span>\
	                            </a>\
							  	<div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">\
	                                <ul class="navi flex-column navi-hover py-2">\
	                                    <li class="navi-header font-weight-bolder text-uppercase font-size-xs text-primary pb-2">\
	                                        Choose an action:\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-print"></i></span>\
	                                            <span class="navi-text">Print</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-copy"></i></span>\
	                                            <span class="navi-text">Copy</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-file-excel-o"></i></span>\
	                                            <span class="navi-text">Excel</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-file-text-o"></i></span>\
	                                            <span class="navi-text">CSV</span>\
	                                        </a>\
	                                    </li>\
	                                    <li class="navi-item">\
	                                        <a href="#" class="navi-link">\
	                                            <span class="navi-icon"><i class="la la-file-pdf-o"></i></span>\
	                                            <span class="navi-text">PDF</span>\
	                                        </a>\
	                                    </li>\
	                                </ul>\
							  	</div>\
							</div>\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon mr-2" title="Edit details">\
	                            <span class="svg-icon svg-icon-md">\
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	                                        <rect x="0" y="0" width="24" height="24"/>\
	                                        <path d="M8,17.9148182 L8,5.96685884 C8,5.56391781 8.16211443,5.17792052 8.44982609,4.89581508 L10.965708,2.42895648 C11.5426798,1.86322723 12.4640974,1.85620921 13.0496196,2.41308426 L15.5337377,4.77566479 C15.8314604,5.0588212 16,5.45170806 16,5.86258077 L16,17.9148182 C16,18.7432453 15.3284271,19.4148182 14.5,19.4148182 L9.5,19.4148182 C8.67157288,19.4148182 8,18.7432453 8,17.9148182 Z" fill="#000000" fill-rule="nonzero"\ transform="translate(12.000000, 10.707409) rotate(-135.000000) translate(-12.000000, -10.707409) "/>\
	                                        <rect fill="#000000" opacity="0.3" x="5" y="20" width="15" height="2" rx="1"/>\
	                                    </g>\
	                                </svg>\
	                            </span>\
							</a>\
							<a href="javascript:;" class="btn btn-sm btn-clean btn-icon" title="Delete">\
	                            <span class="svg-icon svg-icon-md">\
	                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">\
	                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">\
	                                        <rect x="0" y="0" width="24" height="24"/>\
	                                        <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero"/>\
	                                        <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3"/>\
	                                    </g>\
	                                </svg>\
	                            </span>\
							</a>\
						';
                },
            }],
        });

        $('#kt_datatable_search_status').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Status');
        });

        $('#kt_datatable_search_type').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Type');
        });

        $('#kt_datatable_search_status, #kt_datatable_search_type').selectpicker();
    };

    return {
        // Public functions
        init: function() {
            // init dmeo
            demo();
        },
    };
}();

jQuery(document).ready(function() {
    KTDatatableDataLocalDemo.init();
});


/***/ })

/******/ });
//# sourceMappingURL=data-local.js.map