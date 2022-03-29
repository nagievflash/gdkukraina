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
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
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
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (immutable) */ __webpack_exports__["a"] = debounce;
/* harmony export (immutable) */ __webpack_exports__["b"] = throttle;
/* unused harmony export getUrlVars */
/* unused harmony export getUrlVar */
/* unused harmony export scrollTopForce */
/* unused harmony export numberDivide */
/* unused harmony export declOfNum */
/*
    РџСЂРёРјРµСЂ РёСЃРїРѕР»СЊР·РѕРІР°РЅРёСЏ debounce:

    const debounceScroll = debounce(() => {
        do stuff...
    }, 100);

    App.W.on('scroll', () => {
        debounceScroll();
    });
*/
function debounce(func, wait, immediate) {
  let timeout;
  return function () {
    let context = this,
        args = arguments;

    let later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };

    let callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}
;
/*
    РџСЂРёРјРµСЂ РёСЃРїРѕР»СЊР·РѕРІР°РЅРёСЏ throttle:

    function throttleScroll() {
        do stuff...
    }

    App.W.on('scroll', throttle(throttleScroll, 100));
*/

function throttle(callable, wait) {
  let id;

  function call(context, list) {
    requestAnimationFrame(function () {
      callable.apply(context, list);
      id = 0;
    });
  }

  return function () {
    if (id) return;
    id = setTimeout(call, wait, this, arguments);
  };
}
/*
    РџРѕР»СѓС‡РµРЅРёРµ GET-РїР°СЂР°РјРµС‚СЂРѕРІ РёР· СЃС‚СЂРѕРєРё
*/

function getUrlVars() {
  let hashes = window.location.href.slice(window.location.href.indexOf('?') + 1).split('&');
  let vars = [];
  let hash;

  for (let i = 0; i < hashes.length; i++) {
    hash = hashes[i].split('=');
    vars.push(hash[0]);
    vars[hash[0]] = hash[1];
  }

  return vars;
}
function getUrlVar(name) {
  return getUrlVars()[name];
}
/*
    РЎРєСЂРѕР»Р» СЃС‚СЂР°РЅРёС†С‹ РІРІРµСЂС… РЅРµР·Р°РІРёСЃРёРјРѕ РѕС‚ РёСЃС‚РѕСЂРёРё Р±СЂР°СѓР·РµСЂР°
*/

function scrollTopForce() {
  if ('scrollRestoration' in history) {
    history.scrollRestoration = 'manual';
  }
}
/*
    Р Р°Р·Р±РёРµРЅРёРµ С‡РёСЃРµР» РЅР° СЂР°Р·СЂСЏРґС‹ (1000000 => 1 000 000)
*/

function numberDivide(string) {
  if (string) {
    return string.toString().replace(/(\d)(?=(\d{3})+([^\d]|$))/g, '$1 ');
  } else {
    return string;
  }
}
/*
    РЎРєР»РѕРЅРµРЅРёРµ С‡РёСЃР»РёС‚РµР»СЊРЅС‹С…
    РџСЂРёРјРµСЂ: declOfNum(count, ['РєРѕРјРЅР°С‚Р°', 'РєРѕРјРЅР°С‚С‹', 'РєРѕРјРЅР°С‚']);
*/

function declOfNum(number, titles) {
  const cases = [2, 0, 1, 1, 1, 2];
  return titles[number % 100 > 4 && number % 100 < 20 ? 2 : cases[number % 10 < 5 ? number % 10 : 5]];
}

/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * РР·РѕР±СЂР°Р¶РµРЅРёСЏ, РїР»Р°РІРЅРѕ РїРѕСЏРІР»СЏСЋС‰РёРµСЃСЏ РїСЂРё Р·Р°РіСЂСѓР·РєРµ
 */
class FadeInImage {
  constructor(el) {
    this.img = el;
    this.init();
  }

  init() {
    const bg = this.img.matches('[style]');
    const imgLoad = new imagesLoaded(this.img, {
      background: bg
    });
    imgLoad.on('always', () => {
      this.img.classList.add('_is-loaded');
    });
  }

}
/* harmony export (immutable) */ __webpack_exports__["a"] = FadeInImage;

document.querySelectorAll('[data-fadein]').forEach(el => {
  new FadeInImage(el);
});

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(3);


/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__App_js__ = __webpack_require__(4);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__App_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__App_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "App", function() { return __WEBPACK_IMPORTED_MODULE_0__App_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Cookie_js__ = __webpack_require__(5);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_1__Cookie_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_1__Cookie_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Cookie", function() { return __WEBPACK_IMPORTED_MODULE_1__Cookie_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__ViewportHeight__ = __webpack_require__(6);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_2__ViewportHeight___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_2__ViewportHeight__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "ViewportHeight", function() { return __WEBPACK_IMPORTED_MODULE_2__ViewportHeight___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_3__WindowEvents_js__ = __webpack_require__(7);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "WindowEvents", function() { return __WEBPACK_IMPORTED_MODULE_3__WindowEvents_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__LockScroll_js__ = __webpack_require__(8);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_4__LockScroll_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_4__LockScroll_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "LockScroll", function() { return __WEBPACK_IMPORTED_MODULE_4__LockScroll_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_5__FixedHeader_js__ = __webpack_require__(9);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "FixedHeader", function() { return __WEBPACK_IMPORTED_MODULE_5__FixedHeader_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_6__Menu_js__ = __webpack_require__(10);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "Menu", function() { return __WEBPACK_IMPORTED_MODULE_6__Menu_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_7__Form_js__ = __webpack_require__(11);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "Form", function() { return __WEBPACK_IMPORTED_MODULE_7__Form_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__Popup_js__ = __webpack_require__(13);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_8__Popup_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_8__Popup_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Popup", function() { return __WEBPACK_IMPORTED_MODULE_8__Popup_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__YoutubeVideo_js__ = __webpack_require__(14);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_9__YoutubeVideo_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_9__YoutubeVideo_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "YoutubeVideo", function() { return __WEBPACK_IMPORTED_MODULE_9__YoutubeVideo_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_10__Slider_js__ = __webpack_require__(15);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "Slider", function() { return __WEBPACK_IMPORTED_MODULE_10__Slider_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__PageProduct_js__ = __webpack_require__(16);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_11__PageProduct_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_11__PageProduct_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "PageProduct", function() { return __WEBPACK_IMPORTED_MODULE_11__PageProduct_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__ScrollUp_js__ = __webpack_require__(17);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_12__ScrollUp_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_12__ScrollUp_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "ScrollUp", function() { return __WEBPACK_IMPORTED_MODULE_12__ScrollUp_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__Similar_js__ = __webpack_require__(18);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_13__Similar_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_13__Similar_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Similar", function() { return __WEBPACK_IMPORTED_MODULE_13__Similar_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_14__Fullpage_js__ = __webpack_require__(19);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "Fullpage", function() { return __WEBPACK_IMPORTED_MODULE_14__Fullpage_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__ProductionSlider_js__ = __webpack_require__(21);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_15__ProductionSlider_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_15__ProductionSlider_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "ProductionSlider", function() { return __WEBPACK_IMPORTED_MODULE_15__ProductionSlider_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_16__FadeinImage_js__ = __webpack_require__(1);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "FadeinImage", function() { return __WEBPACK_IMPORTED_MODULE_16__FadeinImage_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__Tabs_js__ = __webpack_require__(22);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_17__Tabs_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_17__Tabs_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Tabs", function() { return __WEBPACK_IMPORTED_MODULE_17__Tabs_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18__Accordeon_js__ = __webpack_require__(23);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_18__Accordeon_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_18__Accordeon_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Accordeon", function() { return __WEBPACK_IMPORTED_MODULE_18__Accordeon_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19__VideoAutoplay_js__ = __webpack_require__(24);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_19__VideoAutoplay_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_19__VideoAutoplay_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "VideoAutoplay", function() { return __WEBPACK_IMPORTED_MODULE_19__VideoAutoplay_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_20__Select_js__ = __webpack_require__(25);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_20__Select_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_20__Select_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Select", function() { return __WEBPACK_IMPORTED_MODULE_20__Select_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_21__PageMain_js__ = __webpack_require__(26);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_21__PageMain_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_21__PageMain_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "PageMain", function() { return __WEBPACK_IMPORTED_MODULE_21__PageMain_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_22__Datepicker_js__ = __webpack_require__(27);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_22__Datepicker_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_22__Datepicker_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Datepicker", function() { return __WEBPACK_IMPORTED_MODULE_22__Datepicker_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_23__Filter_js__ = __webpack_require__(28);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_23__Filter_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_23__Filter_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Filter", function() { return __WEBPACK_IMPORTED_MODULE_23__Filter_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_24__Pagination_js__ = __webpack_require__(29);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_24__Pagination_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_24__Pagination_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Pagination", function() { return __WEBPACK_IMPORTED_MODULE_24__Pagination_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_25__TabFocus_js__ = __webpack_require__(30);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_25__TabFocus_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_25__TabFocus_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "TabFocus", function() { return __WEBPACK_IMPORTED_MODULE_25__TabFocus_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_26__PageNews_js__ = __webpack_require__(31);
/* harmony reexport (binding) */ __webpack_require__.d(__webpack_exports__, "PageNews", function() { return __WEBPACK_IMPORTED_MODULE_26__PageNews_js__["default"]; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_27__Fleet_js__ = __webpack_require__(32);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_27__Fleet_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_27__Fleet_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Fleet", function() { return __WEBPACK_IMPORTED_MODULE_27__Fleet_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_28__Language_js__ = __webpack_require__(33);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_28__Language_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_28__Language_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Language", function() { return __WEBPACK_IMPORTED_MODULE_28__Language_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_29__Reviews_js__ = __webpack_require__(34);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_29__Reviews_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_29__Reviews_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Reviews", function() { return __WEBPACK_IMPORTED_MODULE_29__Reviews_js___default.a; });
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_30__Preloader_js__ = __webpack_require__(35);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_30__Preloader_js___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_30__Preloader_js__);
/* harmony reexport (default from non-hamory) */ __webpack_require__.d(__webpack_exports__, "Preloader", function() { return __WEBPACK_IMPORTED_MODULE_30__Preloader_js___default.a; });






























 // Р”РѕР»Р¶РµРЅ Р±С‹С‚СЊ РїРѕСЃР»РµРґРЅРёРј

/***/ }),
/* 4 */
/***/ (function(module, exports) {

/**
 * Р“Р»РѕР±Р°Р»СЊРЅР°СЏ РїРµСЂРµРјРµРЅРЅР°СЏ App
 */
window.App = {
  W: $(window),
  H: $('html'),
  D: $(document),
  ie: false,
  edge: false,
  firefox: false
};
/**
 * Р“Р»РѕР±Р°Р»СЊРЅС‹Рµ РєР»Р°СЃСЃС‹ РґР»СЏ Р±СЂР°СѓР·РµСЂРѕРІ
 */

{
  const html = document.getElementsByTagName('html')[0];

  if (html.classList.contains('mobile')) {
    App.mobile = true;
  } else if (html.classList.contains('safari') && 'ontouchstart' in window) {
    /**
     * Р’ iPadOS СЃР°С„Р°СЂРё РѕРїСЂРµРґРµР»СЏРµС‚СЃСЏ РєР°Рє РґРµСЃРєС‚РѕРїРЅС‹Р№,
     * РёСЃРїСЂР°РІР»СЏРµРј СЌС‚Рѕ
     */
    App.mobile = true;
    html.classList.remove('osx');
    html.classList.add('mobile', 'ios');
  } else {
    html.classList.add('desktop');
  }

  if (html.classList.contains('ie')) {
    App.ie = true;
  }

  if (html.classList.contains('edge')) {
    App.edge = true;
  }

  if (html.classList.contains('firefox')) {
    App.firefox = true;
  }
}

/***/ }),
/* 5 */
/***/ (function(module, exports) {

/**
 * Р”РёСЃРєР»РµР№РјРµСЂ РѕР± РёСЃРїРѕР»СЊР·РѕРІР°РЅРёРё РєСѓРєРѕРІ
 */
class Cookie {
  constructor(el) {
    this.container = el;
    this.checkHistory(); // localStorage.clear(); // debug РґР»СЏ IE Рё РјРѕР±РёР»СЊРЅС‹С… СѓСЃС‚СЂРѕР№СЃС‚РІ
  }

  checkHistory() {
    /**
     * РџСЂРѕРІРµСЂСЏРµРј, РЅР°Р¶РёРјР°Р» Р»Рё РїРѕР»СЊР·РѕРІР°С‚РµР»СЊ РєРЅРѕРїРєСѓ
     */
    if (!window.localStorage.cookieAgree) {
      this.create();
    }
  }

  create() {
    /**
     * РЎРѕР·РґР°С‘Рј Р±Р»РѕРє РёР· С‚РµРјРїР»РµР№С‚Р°
     */
    const html = $(this.container).html();
    document.getElementsByTagName('body')[0].insertAdjacentHTML('beforeend', html);
    this.bind();
  }

  bind() {
    /**
     * РџРѕ РєР»РёРєСѓ РЅР° РєРЅРѕРїРєСѓ РїСЂСЏС‡РµРј Р±Р»РѕРє
     */
    document.querySelectorAll('.js-cookie-agree').forEach(btn => {
      btn.addEventListener('click', () => this.hide());
    });
  }

  hide() {
    /**
     * РџСЂСЏС‡РµРј Р±Р»РѕРє Рё Р·Р°РїРѕРјРёРЅР°РµРј СЌС‚Рѕ РІ localStorage
     */
    document.querySelectorAll('.js-cookie').forEach(el => {
      el.parentNode.removeChild(el);
    });
    window.localStorage.setItem('cookieAgree', true);
  }

}

document.querySelectorAll('.js-cookie-template').forEach(el => {
  new Cookie(el);
});

/***/ }),
/* 6 */
/***/ (function(module, exports) {

/*
    Р—Р°РґР°С‘Рј РїСЂР°РІРёР»СЊРЅСѓСЋ РІС‹СЃРѕС‚Сѓ 100vh РЅР° РјРѕР±РёР»СЊРЅС‹С…
    https://css-tricks.com/the-trick-to-viewport-units-on-mobile/

    .top {
        min-height: 100vh;
        min-height: calc(var(--vh, 1vh) * 100);
    }
*/
(function () {
  if (!App.mobile) {
    return;
  }

  let tmt;

  function setViewportHeight() {
    let vh = window.innerHeight * 0.01;
    document.documentElement.style.setProperty('--vh', `${vh}px`);
  }

  setViewportHeight();
  App.W.on('orientationchange', () => {
    /*
        РСЃРїРѕР»СЊР·СѓРµРј С‚Р°Р№РјР°СѓС‚, РёРЅР°С‡Рµ РІС‹С‡РёСЃР»РµРЅРёРµ РїСЂРѕРёСЃС…РѕРґРёС‚
        РґРѕ С‚РѕРіРѕ, РєР°Рє СЌРєСЂР°РЅ СЂР°Р·РІРµСЂРЅСѓР»СЃСЏ
    */
    clearTimeout(tmt);
    tmt = setTimeout(() => {
      setViewportHeight();
    }, 2000);
  });
})();

/***/ }),
/* 7 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Util__ = __webpack_require__(0);
 // РљРѕРЅРµС† СЃРєСЂРѕР»Р»Р°

const debounceScroll = Object(__WEBPACK_IMPORTED_MODULE_0__Util__["a" /* debounce */])(() => {
  App.W.trigger('scrolled');
}, 100);
App.W.on('scroll', () => {
  debounceScroll();
}); // РљРѕРЅРµС† СЂРµСЃР°Р№Р·Р°

const debounceResize = Object(__WEBPACK_IMPORTED_MODULE_0__Util__["a" /* debounce */])(() => {
  App.W.trigger('resized');
}, 200);
App.W.on('resize', () => {
  debounceResize();
}); // РљРѕР»РµСЃРѕ РјС‹С€Рё

if (App.firefox) {
  App.W.on('DOMMouseScroll', e => {
    if (e.originalEvent.detail > 0) {
      App.W.trigger('wheeldown');
    } else {
      App.W.trigger('wheelup');
    }
  });
} else {
  App.W.on('mousewheel', e => {
    if (e.originalEvent.wheelDelta < 0) {
      App.W.trigger('wheeldown');
    } else {
      App.W.trigger('wheelup');
    }
  });
} // РџРѕР»СЊР·РѕРІР°С‚РµР»СЊ РїРѕРєРёРґР°РµС‚ РІРєР»Р°РґРєСѓ Р±СЂР°СѓР·РµСЂР° РёР»Рё РІРѕР·РІСЂР°С‰Р°РµС‚СЃСЏ


{
  function handleVisibilityChange() {
    if (document.hidden) {
      App.W.trigger('tableave');
    } else {
      App.W.trigger('tabenter');
    }
  }

  document.addEventListener('visibilitychange', handleVisibilityChange, false);
}

/***/ }),
/* 8 */
/***/ (function(module, exports) {

/**
 * Р‘Р»РѕРєРёСЂРѕРІРєР°/СЂР°Р·Р±Р»РѕРєРёСЂРѕРІРєР° СЃРєСЂРѕР»Р»Р°
 */
class LockScroll {
  constructor() {
    this.scroll = 0;
  }

  lock() {
    /**
     * РўР°Рє РєР°Рє СЃС‚СЂР°РЅРёС†Р° РїРµСЂРµРїСЂС‹РіРёРІР°РµС‚ РІРІРµСЂС…,
     * РєРѕРіРґР° СЃСЂР°Р±Р°С‚С‹РІР°РµС‚ overflow:hidden,
     * РїСЂРёРЅСѓРґРёС‚РµР»СЊРЅРѕ СЃРєРѕР»Р»РёРј РµС‘ РґРѕ
     * Р·Р°РїРѕРјРЅРµРЅРЅРѕРіРѕ СЃРѕСЃС‚РѕСЏРЅРёСЏ
     */
    this.scroll = window.scrollY;
    document.querySelector('body').classList.add('_noscroll');
    window.scroll(0, this.scroll);
  }

  unlock() {
    document.querySelector('body').classList.remove('_noscroll');
    window.scroll(0, this.scroll);
  }

}

App.lockScroll = new LockScroll();

/***/ }),
/* 9 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Util_js__ = __webpack_require__(0);


class FixedHeader {
  constructor() {
    this.html = document.getElementsByTagName('html')[0];
    this.prevScroll = 0;
    this.bindEvents();
    this.detectTop();
  }
  /**
   * Р•СЃР»Рё СЌС‚Рѕ РЅРµ СЃР°РјС‹Р№ РІРµСЂС… СЃС‚СЂР°РЅРёС†С‹,
   * РґРѕР±Р°РІР»СЏРµРј С…РµРґРµСЂСѓ С‚РµРЅСЊ Рё С„РѕРЅ
   */


  detectTop() {
    if (window.scrollY > 0) {
      this.html.classList.add('_is-scroll-top');
    } else {
      this.html.classList.remove('_is-scroll-top');
    }
  }
  /**
   * РџСЂРё СЃРєСЂРѕР»Р»Рµ РІРЅРёР· РїСЂСЏС‡РµРј С…РµРґРµСЂ,
   * РїСЂРё СЃРєСЂРѕР»Рµ РІРІРµСЂС… вЂ” РїРѕРєР°Р·С‹РІР°РµРј
   */


  toggleVisible() {
    const scrollTop = window.scrollY;

    if (this.prevScroll > scrollTop || scrollTop < 1) {
      this.html.classList.remove('_is-header-hidden');
    } else {
      this.html.classList.add('_is-header-hidden'); // Р—Р°РєСЂС‹РІР°РµРј РІС‹Р±РѕСЂ СЏР·С‹РєР°

      document.querySelector(`.js-lang-dropdown`).classList.remove('_is-visible');
      App.langIsOpen = false;
    }

    this.prevScroll = scrollTop;
    this.detectTop();
  }

  bindEvents() {
    window.addEventListener('scroll', Object(__WEBPACK_IMPORTED_MODULE_0__Util_js__["b" /* throttle */])(this.toggleVisible.bind(this), 30));
  }

}

new FixedHeader();

/***/ }),
/* 10 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
class Menu {
  constructor() {
    this.menuFlag = false;
    this.menuWrap = document.querySelector('.js-menu');
    this.DURATION = 500;
    this.bindEvents();
  }
  /**
   * РћС‚РєСЂС‹РІР°РµРј
   */


  open() {
    if (this.menuFlag) {
      return;
    }

    this.menuFlag = true;
    App.menuIsOpen = true;
    document.getElementsByTagName('html')[0].classList.add('_is-open-menu');
    App.lockScroll.lock();
    setTimeout(() => {
      this.menuFlag = false;
    }, this.DURATION); // РЎС‚Р°РІРёРј С„РѕРєСѓСЃ РЅР° РїРµСЂРІСѓСЋ СЃСЃС‹Р»РєСѓ (РґР»СЏ Tab-РЅР°РІРёРіР°С†РёРё)

    if (!App.mobile) {
      setTimeout(() => {
        this.menuWrap.querySelector('a').focus();
      }, this.DURATION);
    }
  }
  /**
   * Р—Р°РєСЂС‹РІР°РµРј
   */


  close() {
    if (this.menuFlag) return;
    this.menuFlag = true;
    App.menuIsOpen = false;
    document.getElementsByTagName('html')[0].classList.remove('_is-open-menu');
    setTimeout(() => {
      this.menuFlag = false;
    }, this.DURATION);
    App.lockScroll.unlock(); // Р’РѕР·РІСЂР°С‰Р°РµРј С„РѕРєСѓСЃ РЅР° Р±СѓСЂРіРµСЂ (РґР»СЏ Tab-РЅР°РІРёРіР°С†РёРё)

    if (!App.mobile) {
      setTimeout(() => {
        document.querySelector('.js-burger').focus();
      }, this.DURATION);
    }
  }
  /**
   * Р‘РёРЅРґРёРј РѕС‚РєСЂС‹С‚РёРµ Рё Р·Р°РєСЂС‹С‚РёРµ
   */


  bindEvents() {
    // РћС‚РєСЂС‹С‚СЊ РєРЅРѕРїРєРѕР№
    document.querySelectorAll('.js-burger').forEach(btn => {
      btn.addEventListener('click', () => {
        if (App.menuIsOpen) {
          this.close();
        } else {
          this.open();
        }
      });
    }); // Р—Р°РєСЂС‹С‚СЊ РєР»Р°РІРёС€РµР№ Escape

    document.addEventListener('keyup', e => {
      const key = e.which || e.keyCode;

      if (key === 27) {
        this.close();
      }
    });
  }

}
/* unused harmony export Menu */

App.menu = new Menu();

/***/ }),
/* 11 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Validate_js__ = __webpack_require__(12);


class Form {
  constructor(form) {
    this.$form = $(form);
    this.$btn = this.$form.find('.js-submit');
    this.recaptcha;
    this.messages = window.formMessages || {
      success: {
        'title': 'РЈСЃРїРµС€РЅРѕ',
        'text': 'Р’Р°С€Р° Р·Р°СЏРІРєР° СѓСЃРїРµС€РЅРѕ РѕС‚РїСЂР°РІР»РµРЅР°!'
      },
      error: {
        'title': 'РћС€РёР±РєР°',
        'text': 'РџРѕР¶Р°Р»СѓР№СЃС‚Р°, РїРѕРїСЂРѕР±СѓР№С‚Рµ РїРѕР·Р¶Рµ'
      }
    };
    this.iti();
    this.validate();
    this.bindSubmit();
    this.bindClose();
    this.disableAutoFill();
    this.disableIEautocomplete();
    this.fileUpload(); // this.filterPhone();
  } // Р’Р°Р»РёРґР°С†РёСЏ


  validate() {
    new __WEBPACK_IMPORTED_MODULE_0__Validate_js__["a" /* default */](this.$form);
  } // РЎРѕР±С‹С‚РёРµ РѕС‚РїСЂР°РІРєРё


  bindSubmit() {
    const key = this.$form.data('recaptcha-key');
    const $input = this.$form.find('.js-recaptcha-input');
    $input.val('');
    this.$form.on('submit', e => {
      e.preventDefault(); // Р‘Р»РѕРєРёСЂСѓРµРј РєРЅРѕРїРєСѓ СЃР°Р±РјРёС‚Р°

      this.$btn.attr('disabled', true); // Р—Р°РїСѓСЃРєР°РµРј РїСЂРѕРІРµСЂРєСѓ СЂРµРєР°РїС‡Рё

      try {
        grecaptcha.execute(key, {
          action: 'ajax_submit'
        }).then(token => {
          $input.val(token);
          this.sendForm();
        });
      } catch (error) {
        // РћС€РёР±РєР° РЅР° СЃС‚РѕСЂРѕРЅРµ СЂРµРєР°РїС‡Рё
        this.$form.removeClass('_is-success').addClass('_is-error');
        console.error('recaptcha error');
      }
    });
  } // РћС‚РїСЂР°РІРєР°


  sendForm() {
    this.$form.ajaxSubmit({
      url: this.$form.attr('action'),
      dataType: 'json',
      // data: this.$form.serialize(),
      type: this.$form.attr('method') || 'GET',
      cache: false,
      success: response => {
        if (!response.success) {
          // РћС€РёР±РєР° РЅР° СЃРµСЂРІРµСЂРµ
          this.renderMessage('error', response);
          this.$form.removeClass('_is-success').addClass('_is-error'); // Р Р°Р·Р±Р»РѕРєРёСЂСѓРµРј РєРЅРѕРїРєСѓ

          this.$btn.removeAttr('disabled');
        } else {
          // РЈСЃРїРµС…!
          this.resetForm();
          this.renderMessage('success', response);
          this.$form.removeClass('_is-error').addClass('_is-success');
        }
      },
      error: () => {
        // РћС€РёР±РєР° РѕС‚РїСЂР°РІРєРё
        this.renderMessage('error');
        this.$form.removeClass('_is-success').addClass('_is-error');
        console.log('РћС€РёР±РєР° РѕС‚РїСЂР°РІРєРё С„РѕСЂРјС‹'); // Р Р°Р·Р±Р»РѕРєРёСЂСѓРµРј РєРЅРѕРїРєСѓ

        this.$btn.removeAttr('disabled'); // РђРІС‚РѕРјР°С‚РёС‡РµСЃРєРё Р·Р°РєСЂС‹РІР°РµРј СЃРѕРѕР±С‰РµРЅРёСЏ
        // setTimeout(() => {
        // this.$form.removeClass('_success _error');
        // }, 5000);
      }
    });
  }

  renderMessage(result, response = {}) {
    let title, text;
    /**
     * РџРѕРґСЃС‚Р°РІР»СЏРµРј С‚РµРєСЃС‚С‹ РёР· РѕС‚РІРµС‚Р° СЃРµСЂРІРµСЂР°, РµСЃР»Рё РµСЃС‚СЊ.
     * РРЅР°С‡Рµ вЂ” С‚РµРєСЃС‚С‹ РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ.
     */

    if (result === 'success') {
      title = response.title || this.messages.success.title;
      text = response.message || this.messages.success.text;
    } else {
      title = response.title || this.messages.error.title;
      text = response.message || this.messages.error.text;
    }

    this.$form.find('.js-form-message-title').html(title);
    this.$form.find('.js-form-message-text').html(text);
  } // Р—Р°РєСЂС‹С‚РёРµ С„РѕСЂРјС‹


  bindClose() {
    App.H.find('.js-form-ok').on('click', e => {
      e.preventDefault();
      this.$form.removeClass('_is-success _is-error');
    });
  } // Р—Р°РіСЂСѓР·РєР° С„Р°Р№Р»Р°


  fileUpload() {
    this.$form.find('.js-upload').on('change', function () {
      const $input = $(this);
      const $parent = $input.closest('.js-input-wrap');
      const $label = $parent.find('.js-upload-label');
      const $sizeText = $parent.find('.js-upload-filesize');
      const $formatText = $parent.find('.js-upload-format');
      const val = $input.val();
      let fileName;
      let filesize;

      if (val.length) {
        // РРјСЏ С„Р°Р№Р»Р°
        fileName = val.split('\\').pop() || '';
        $label.text(fileName);
        $input.addClass('_active');
        $parent.addClass('_active'); // Р Р°Р·РјРµСЂ С„Р°Р№Р»Р°

        filesize = $input[0].files[0].size; // РџРѕРґРїРёСЃСЊ Рє СЂР°Р·РјРµСЂСѓ РњР±/РљР± РЅР° СЏР·С‹РєР°С… rus/eng

        const sign = App.H.attr('lang') === 'ru' ? [' РњР±', ' РљР±'] : [' Mb', ' Kb'];

        if (filesize > 1048576) {
          // РњР±
          filesize = (filesize / 1024 / 1024).toFixed(1) + sign[0];
        } else {
          // РљР±
          filesize = Math.ceil(filesize / 1024) + sign[1];
        }

        $sizeText.text(filesize); // Р Р°СЃС€РёСЂРµРЅРёРµ С„Р°Р№Р»Р°

        const fileExt = fileName.split('.').pop();
        $formatText.text(fileExt); // $parent.find('.form__file-preview').attr('data-ext', fileExt);
      } else {
        $input.removeClass('_active');
        $label.text('');
        $sizeText.text('');
        $formatText.text(''); // $parent.removeClass('_active');
      }
    });
    this.$form.find('.js-upload-clear').on('click', function () {
      $(this).siblings('.js-upload').val('').change();
    });
  } // Р”Р»СЏ РїРѕР»СЏ С‚РµР»РµС„РѕРЅР° РґРѕРїСѓСЃРєР°РµРј С‚РѕР»СЊРєРѕ С†РёС„СЂС‹, РїСЂРѕР±РµР» Рё +-()


  filterPhone() {
    this.$form.find('[data-phone]').on('input', function () {
      const val = $(this).val().replace(/[^0-9\s()+-]/g, '');
      $(this).val(val);
    });
  } // РЎР±СЂРѕСЃ С„РѕСЂРјС‹


  resetForm() {
    this.$form[0].reset();
    this.$form.find('.js-upload').val('').change().closest('.js-input-wrap').removeClass('_active'); // this.$form.removeClass('_success _error');

    this.$form.find('[data-required]').not(':checkbox').addClass('_notvalidated').removeClass('_error');
    this.$form.find(':checkbox[data-required]').not(':checked').addClass('_notvalidated');
    this.$form.find('.js-submit').attr('disabled', true);
    this.$form.find('.js-input-wrap').removeClass('_focused');
    this.$form.find('.js-dropdown').trigger('dropdown:reset');
  } // РћС‚РєР»СЋС‡Р°РµРј Р°РІС‚РѕР·Р°РїРѕР»РЅРµРЅРёРµ РїРѕР»РµР№ РІ С…СЂРѕРјРµ


  disableAutoFill() {
    this.$form.find('[type="text"], [type="email"], [type="tel"], [type="password"]').attr('autocomplete', 'new-password');
  } // Р¤РёРєСЃ autocomplete="off" РґР»СЏ IE Рё Edge


  disableIEautocomplete() {
    if (App.ie || App.edge) {
      window.onbeforeunload = function () {
        $('form[autocomplete="off"]').each(function () {
          this.reset();
        });
      };
    }
  } // РњР°СЃРєРё Рё СЃРїРёСЃРѕРє СЃС‚СЂР°РЅ РґР»СЏ С‚РµР»РµС„РѕРЅРѕРІ


  iti() {
    this.$form[0].querySelectorAll('.js-iti').forEach(input => {
      const countries = input.getAttribute('data-countries') ? input.getAttribute('data-countries').split(',') : null;
      const preferredCountries = input.getAttribute('data-preferred-countries') ? input.getAttribute('data-preferred-countries').split(',') : null;
      const defCountry = input.getAttribute('data-default-country');
      input.value = '';
      const iti = intlTelInput(input, {
        onlyCountries: countries ? countries : [],
        preferredCountries: preferredCountries ? preferredCountries : [],
        initialCountry: defCountry,
        nationalMode: false,
        autoPlaceholder: 'aggressive'
      });
      iti.promise.then(function () {
        setMask();
        input.addEventListener('countrychange', () => setMask());
      });

      function setMask() {
        let dialCode = iti.getSelectedCountryData().dialCode;
        let placeholder = input.getAttribute('placeholder');
        placeholder = placeholder.replace(dialCode, '&').replace(/[0-9]/g, '9').replace('&', dialCode.replace(/9/g, '\\9'));
        input.value = '';
        $(input).inputmask('placeholder', {
          showMaskOnHover: false,
          mask: placeholder,
          placeholder: '_'
        });
      }
    });
  }

}

grecaptcha.ready(() => {
  document.querySelectorAll('.js-form').forEach(el => {
    new Form(el);
  });
});

/***/ }),
/* 12 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
class Validate {
  constructor(form) {
    this.form = $(form);
    this.inputs = this.form.find('input, select, textarea');
    this.required = this.form.find('[data-required]');
    this.email = this.form.find('[data-email]');
    this.minlength = this.form.find('[data-minlength]');
    this.fileformat = this.form.find('[data-fileformat]');
    this.submitBtn = this.form.find('[data-submit]');
    this.messages = window.validateMessages || {
      required: 'РќРµ Р·Р°РїРѕР»РЅРµРЅРѕ РїРѕР»Рµ',
      minlength: 'РќРµ РјРµРЅРµРµ %min% СЃРёРјРІРѕР»РѕРІ',
      email: 'РќРµРїСЂР°РІРёР»СЊРЅС‹Р№ С„РѕСЂРјР°С‚',
      fileformat: 'РќРµРґРѕРїСѓСЃС‚РёРјС‹Р№ С‚РёРї С„Р°Р№Р»Р°',
      filesize: 'Р¤Р°Р№Р» РґРѕР»Р¶РµРЅ Р±С‹С‚СЊ РґРѕ %max% РњР‘'
    };
    /**
        РўР°Рє РєР°Рє РјРѕРіСѓС‚ Р±С‹С‚СЊ РїРѕР»СЏ РѕР±СЏР·Р°С‚РµР»СЊРЅС‹Рµ,
        РЅРѕ РµС‰С‘ РЅРµ РїСЂРѕРІРµСЂРµРЅРЅС‹Рµ, РїСЂРёС…РѕРґРёС‚СЃСЏ РІРІРѕРґРёС‚СЊ
        РґР»СЏ РЅРёС… РґРѕРїРѕР»РЅРёС‚РµР»СЊРЅС‹Р№ РєР»Р°СЃСЃ
    */

    this.form.find('[data-required]').not(':checkbox').addClass('_notvalidated'); // РґР»СЏ РѕР±СЏР·Р°С‚РµР»СЊРЅС‹С… С‡РµРєР±РѕРєСЃРѕРІ С‚РѕР»СЊРєРѕ С‚Рµ, С‡С‚Рѕ РЅРµ РѕС‚РјРµС‡РµРЅС‹ РїРѕ СѓРјРѕР»С‡Р°РЅРёСЋ

    this.form.find(':checkbox[data-required]').not(':checked').addClass('_notvalidated');
    this.handleChange();
  }

  handleChange() {
    const eventName = App.ie ? 'change blur' : 'change';
    this.inputs.on(eventName, e => {
      const $input = $(e.target); // Р—Р°РїСѓСЃРєР°РµРј РїСЂРѕРІРµСЂРєРё

      if ($input.is(':checkbox[data-required]')) {
        this.validateRequiredCheckbox($input);
      } else if ($input.is('[data-required]')) {
        this.validateRequired($input);
      }

      if ($input.is('[type=email]') || $input.is('[data-email]')) {
        this.validateEmail($input);
      }

      if ($input.is('[data-minlength]')) {
        this.validateMinLength($input);
      }

      if ($input.is('[data-fileformat]')) {
        this.validateFileFormat($input);
      }
      /*if ( $input.is('[data-filesize]') ) {
          this.validateFileSize($input);
      }*/

      /**
          РўРµРїРµСЂСЊ РїРѕР»Рµ Р»РёР±Рѕ РІР°Р»РёРґРЅРѕ, Р»РёР±Рѕ Сѓ РЅРµРіРѕ
          РµСЃС‚СЊ РєР»Р°СЃСЃ _error, Рё Р»РѕР¶РЅРѕР№ СЂР°Р·Р±Р»РѕРєРёСЂРѕРІРєРё
          РєРЅРѕРїРєРё СЃР°Р±РјРёС‚Р° РЅРµ Р±СѓРґРµС‚
      */


      $input.removeClass('_notvalidated'); // РЎС‡РёС‚Р°РµРј РѕС€РёР±РєРё

      this.calculateErrors();
    });
  }

  validateRequired($input) {
    // РџСЂРѕРІРµСЂСЏРµРј РѕР±СЏР·Р°С‚РµР»СЊРЅС‹Рµ РїРѕР»СЏ
    const $label = $input.closest('.input-wrap').find('[data-label]');
    const val = $input.val().replace(/\s/g, '');
    /**
        РЈР±РёСЂР°РµРј РёР»Рё РїРѕРґСЃС‚Р°РІР»СЏРµРј РєР»Р°СЃСЃ _error,
        Р° С‚Р°РєР¶Рµ С‚РµРєСЃС‚ РѕР± РѕС€РёР±РєРµ
    */

    if (val.length > 0) {
      $input.removeClass('_error');
      $label.text('');
    } else {
      $input.addClass('_error');
      $label.text(this.messages.required);
    }
  }

  validateRequiredCheckbox($input) {
    // РџСЂРѕРІРµСЂСЏРµРј РѕР±СЏР·Р°С‚РµР»СЊРЅС‹Рµ С‡РµРєР±РѕРєСЃС‹
    const $label = $input.parent().siblings('[data-label]');

    if ($input.is(':checked')) {
      $input.removeClass('_error');
      $label.text('');
    } else {
      $input.addClass('_error');
      $label.text(this.messages.required);
    }
  }

  validateMinLength($input) {
    // РџСЂРѕРІРµСЂСЏРµРј РјРёРЅРёРјР°Р»СЊРЅРѕРµ РєРѕР»РёС‡РµСЃС‚РІРѕ СЃРёРјРІРѕР»РѕРІ
    const $label = $input.closest('.input-wrap').find('[data-label]');
    const min = $input.data('minlength');
    const val = $.trim($input.val());
    /**
        РЈР±РёСЂР°РµРј РёР»Рё РїРѕРґСЃС‚Р°РІР»СЏРµРј РєР»Р°СЃСЃ _error,
        Р° С‚Р°РєР¶Рµ С‚РµРєСЃС‚ РѕР± РѕС€РёР±РєРµ
    */

    if (val.length >= min) {
      // Р”РѕСЃС‚Р°С‚РѕС‡РЅРѕ СЃРёРјРІРѕР»РѕРІ
      $input.removeClass('_error');
      $label.text('');
    } else if (val.length > 0) {
      // РќРµРґРѕСЃС‚Р°С‚РѕС‡РЅРѕ СЃРёРјРІРѕР»РѕРІ
      const message = this.messages.minlength.replace('%min%', min);
      $input.addClass('_error');
      $label.text(message);
    } else if (val.length == 0 && $input.is(':not([data-required])')) {
      // РџРѕР»Рµ РїСѓСЃС‚РѕРµ Рё РЅРµРѕР±СЏР·Р°С‚РµР»СЊРЅРѕРµ

      /**
          Р•СЃР»Рё РѕРЅРѕ РѕР±СЏР·Р°С‚РµР»СЊРЅРѕРµ, РІ СЌС‚РѕРј СЃР»СѓС‡Р°Рµ Р·Р° РЅРµРіРѕ
          Р±СѓРґРµС‚ РѕС‚РІРµС‡Р°С‚СЊ validateRequired()
      */
      $input.removeClass('_error');
      $label.text('');
    }
  }

  validateEmail($input) {
    // РџСЂРѕРІРµСЂСЏРµРј email
    const $label = $input.closest('.input-wrap').find('[data-label]');
    const val = $input.val().replace(/\s/g, '');
    /**
        Р•СЃР»Рё РїРѕР»Рµ РїСѓСЃС‚РѕРµ, С‚Рѕ РЅРµ РІР°Р»РёРґРёСЂСѓРµРј РµРіРѕ,
        РѕСЃС‚Р°РІР»СЏРµРј СЌС‚Сѓ СЂР°Р±РѕС‚Сѓ РґР»СЏ validateRequired()
    */

    if (!val.length) return;
    /**
        РЈР±РёСЂР°РµРј РёР»Рё РїРѕРґСЃС‚Р°РІР»СЏРµРј РєР»Р°СЃСЃ _error,
        Р° С‚Р°РєР¶Рµ С‚РµРєСЃС‚ РѕР± РѕС€РёР±РєРµ
    */

    if (/^[a-z0-9](\.?[a-z0-9_-]){0,}@[a-z0-9-]+\.([a-z]{1,6}\.)?[a-z]{2,6}$/i.test(val)) {
      $input.removeClass('_error');
      $label.text('');
    } else {
      $input.addClass('_error');
      $label.text(this.messages.email);
    }
  }

  validateFileFormat($input) {
    // РџСЂРѕРІРµСЂСЏРµРј СЂР°СЃС€РёСЂРµРЅРёРµ С„Р°Р№Р»Р°
    const $label = $input.closest('.input-wrap').find('[data-label]');
    const accept = $input.attr('accept').split(',');
    const val = $input.val();
    /**
        Р•СЃР»Рё РїРѕР»Рµ РїСѓСЃС‚РѕРµ, С‚Рѕ РЅРµ РІР°Р»РёРґРёСЂСѓРµРј РµРіРѕ,
        РѕСЃС‚Р°РІР»СЏРµРј СЌС‚Сѓ СЂР°Р±РѕС‚Сѓ РґР»СЏ validateRequired()
    */

    if (!val.length && $input.is('[data-required]')) {
      return;
    } else if (!val.length) {
      $input.removeClass('_error');
      $label.text('');
      return;
    }
    /**
        РЈР±РёСЂР°РµРј РёР»Рё РїРѕРґСЃС‚Р°РІР»СЏРµРј РєР»Р°СЃСЃ _error,
        Р° С‚Р°РєР¶Рµ С‚РµРєСЃС‚ РѕР± РѕС€РёР±РєРµ
    */


    let ext = '.' + val.split('.').pop();
    ext = ext.toLowerCase();

    if ($.inArray(ext, accept) > -1) {
      $input.removeClass('_error');
      $label.text('');
      /**
          Р•СЃР»Рё С„РѕСЂРјР°С‚ С„Р°Р№Р»Р° РћРљ, РїРѕСЃР»Рµ СЌС‚РѕРіРѕ
          РїСЂРѕРІРµСЂСЏРµРј СЂР°Р·РјРµСЂ С„Р°Р№Р»Р°
      */

      if ($input.is('[data-filesize]')) {
        this.validateFileSize($input);
      }
    } else {
      $input.addClass('_error');
      $label.text(this.messages.fileformat);
    }
  }

  validateFileSize($input) {
    // РџСЂРѕРІРµСЂСЏРµРј СЂР°Р·РјРµСЂ Р·Р°РіСЂСѓР¶РµРЅРЅРѕРіРѕ С„Р°Р№Р»Р°
    const $label = $input.closest('.input-wrap').find('[data-label]');
    const max = +$input.data('filesize');

    if ($input[0].files.length) {
      const size = $input[0].files[0].size / 1024 / 1024;

      if (size > max) {
        const message = this.messages.filesize.replace('%max%', max);
        $input.addClass('_error');
        $label.text(message);
      }
    }
  }

  calculateErrors() {
    // РџРѕРґРІРѕРґРёРј РёС‚РѕРіРё РїСЂРѕРІРµСЂРѕРє
    const errors = this.form.find('._error, ._notvalidated').length;
    /**
        РЎС‡РёС‚Р°РµРј РѕС€РёР±РєРё РІ С„РѕСЂРјРµ,
        Рё Р±Р»РѕРєРёСЂСѓРµРј РёР»Рё СЂР°Р·Р±Р»РѕРєРёСЂСѓРµРј
        РєРЅРѕРїРєСѓ СЃР°Р±РјРёС‚Р°
    */

    if (errors > 0) {
      this.submitBtn.attr('disabled', true);
    } else {
      this.submitBtn.removeAttr('disabled');
    }
  }

}
/* harmony export (immutable) */ __webpack_exports__["a"] = Validate;


/***/ }),
/* 13 */
/***/ (function(module, exports) {

/**
 * РџРѕРїР°РїС‹
 */
let trigger;
/**
 * РћС‚РєСЂС‹РІР°РµРј
 */

function openPopup(name) {
  closePopups();
  const popup = document.querySelector(`.js-popup[data-name="${name}"]`);

  if (App.menuIsOpen) {
    App.menu.close();
  }

  if (popup) {
    popup.classList.add('_is-visible');
    App.lockScroll.lock();
  }
}
/**
 * Р—Р°РєСЂС‹РІР°РµРј
 */


function closePopups() {
  document.querySelectorAll('.js-popup._is-visible').forEach(el => {
    el.classList.remove('_is-visible');
  });
  App.lockScroll.unlock(); // Р’РѕР·РІСЂР°С‰Р°РµРј С„РѕРєСѓСЃ РЅР° РєРЅРѕРїРєСѓ, РєРѕС‚РѕСЂРѕР№ РѕС‚РєСЂС‹Р»Рё (РґР»СЏ Tab-РЅР°РІРёРіР°С†РёРё)

  if (trigger) {
    trigger.focus();
  }
}
/**
 * Р‘РёРЅРґРёРј РєРЅРѕРїРєРё
 */


document.querySelectorAll('.js-open-popup').forEach(btn => {
  const name = btn.getAttribute('data-popup-name');
  btn.addEventListener('click', e => {
    e.preventDefault();
    openPopup(name);
    trigger = btn;
  });
});
document.querySelectorAll('.js-close-popup').forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    closePopups();
  });
});

/***/ }),
/* 14 */
/***/ (function(module, exports) {

/*
    Р’РёРґРµРѕ СЃ СЋС‚СѓР±Р°/РІРёРјРµРѕ РЅР° СЃС‚СЂР°РЅРёС†Рµ
*/
class YoutubeVideo {
  constructor(el) {
    this.container = el;
    this.inner = this.container.querySelector('.js-video-inner');
    this.src = this.container.getAttribute('data-url');
    this.active = false;
    this.bindClick();
  }

  bindClick() {
    if (!this.src) {
      return;
    }

    this.inner.addEventListener('click', () => {
      // Р•СЃР»Рё РІРёРґРµРѕ СѓР¶Рµ Р±С‹Р»Рѕ Р·Р°РїСѓС‰РµРЅРѕ, РЅРёС‡РµРіРѕ РЅРµ РґРµР»Р°РµРј
      if (this.active) {
        return;
      } // Р”РѕР±Р°РІР»СЏРµРј Р°Р№С„СЂРµР№Рј СЃ РІРёРґРµРѕ


      this.inner.insertAdjacentHTML('beforeend', '<iframe src="' + this.getIframeSrc() + this.getVideoId() + '?rel=0&title=0&byline=0&portrait=0&autoplay=1" width="100%" height="100%" frameborder="0" allowfullscreen></iframe>');
      this.container.classList.add('_is-active');
    });
  }
  /**
   * РџРѕР»СѓС‡Р°РµРј id РІРёРґРµРѕ РёР· СЃСЃС‹Р»РѕРє СЋС‚СѓР±Р° Рё РІРёРјРµРѕ
   */


  getVideoId() {
    const parts = this.src.split('/');
    const id = parts[parts.length - 1];
    return id;
  }
  /**
   * РџРѕР»СѓС‡Р°РµРј Р°С‚СЂРёР±СѓС‚ src РґР»СЏ Р°Р№С„СЂРµР№РјР°
   */


  getIframeSrc() {
    if (this.src.indexOf('youtube.com/') !== -1 || this.src.indexOf('youtu.be/') !== -1) {
      // Р•СЃР»Рё СЌС‚Рѕ Youtube
      return 'https://www.youtube.com/embed/';
    } else {
      // Р•СЃР»Рё Vimeo
      return 'https://player.vimeo.com/video/';
    }
  }

}

document.querySelectorAll('.js-video').forEach(el => {
  new YoutubeVideo(el);
});

/***/ }),
/* 15 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * РЎР»Р°Р№РґРµСЂС‹
 */
class Slider {
  constructor(slider) {
    this.container = slider;
    this.slider = this.container.querySelector('.js-slider-swiper');
    this.init();
  } // РРЅРёС†РёР°Р»РёР·Р°С†РёСЏ РѕР±С‹С‡РЅРѕРіРѕ СЃР»Р°Р№РґРµСЂР°


  init() {
    this.swiper = new Swiper(this.slider, {
      loop: false,
      slidesPerView: 1,
      spaceBetween: 8,
      threshold: 10,
      roundLengths: true,
      speed: 700,
      watchOverflow: true,
      watchSlidesVisibility: true,
      a11y: true,
      lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 1,
        loadOnTransitionStart: true
      },
      pagination: {
        el: this.container.querySelector('.js-slider-pagination'),
        clickable: true
      },
      navigation: {
        prevEl: this.container.querySelector('.js-slider-prev'),
        nextEl: this.container.querySelector('.js-slider-next'),
        disabledClass: '_is-disabled'
      },
      on: {
        slideChange: () => {
          this.stopVideo();
        }
      },
      breakpoints: {
        768: {
          spaceBetween: 15
        }
      }
    });
  } // РћСЃС‚Р°РЅР°РІР»РёРІР°РµРј Р·Р°РїСѓС‰РµРЅРЅРѕРµ РІ СЃР»Р°Р№РґРµСЂРµ РІРёРґРµРѕ


  stopVideo() {
    const videos = this.slider.querySelectorAll('.js-video._is-active');
    videos.forEach(video => {
      video.classList.remove('_is-active');
      video.querySelectorAll('iframe').forEach(iframe => iframe.remove());
    });
  }

}
/* unused harmony export Slider */

document.querySelectorAll('.js-slider').forEach(el => {
  new Slider(el);
});

/***/ }),
/* 16 */
/***/ (function(module, exports) {

class PageProduct {
  constructor() {
    this.productInner = document.querySelector('.js-product-inner');
    this.sliderContainer = document.querySelector('.js-product-slider');
    this.imgContainer = document.querySelector('.js-product-img');
    this.smController = new ScrollMagic.Controller();
    this.bindBtnMore();
    this.initSlider();
    this.pinSlider();
    this.pinBar();
  }
  /**
   * Р Р°Р·РІРѕСЂР°С‡РёРІР°РµРј РёРЅС„РѕСЂРјР°С†РёСЋ
   */


  bindBtnMore() {
    document.querySelectorAll('.js-product-more').forEach(btn => {
      btn.addEventListener('click', () => {
        let currentText = btn.classList.contains('_is-open') ? btn.getAttribute('data-text') : btn.getAttribute('data-replace');
        btn.classList.toggle('_is-open');
        btn.innerHTML = currentText; //document.querySelector('.js-product-text').classList.add('_is-open');

        document.querySelector('.js-product-text').classList.toggle('_is-open');
        this.updateState();
      });
    });
  }
  /**
   * РЎР»Р°Р№РґРµСЂ РёР·РѕР±СЂР°Р¶РµРЅРёР№
   */


  initSlider() {
    if (!this.sliderContainer) return;
    this.swiper = new Swiper(this.sliderContainer.querySelector('.js-product-swiper'), {
      loop: false,
      slidesPerView: 1,
      spaceBetween: 10,
      threshold: 10,
      roundLengths: true,
      speed: 500,
      watchOverflow: true,
      watchSlidesVisibility: true,
      a11y: true,
      lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 1,
        loadOnTransitionStart: true
      },
      pagination: {
        el: this.sliderContainer.querySelector('.js-pagination'),
        clickable: true
      }
    });
  }
  /**
   * РџСЂРёР»РµРїР»СЏРµРј СЃР»Р°Р№РґРµСЂ РїСЂРё СЃРєСЂРѕР»Р»Рµ
   */


  pinSlider() {
    if (App.mobile || !this.sliderContainer || window.innerHeight < 700 || window.innerWidth < 1000 || this.getDuration() <= 100) return;
    this.createScene();
    this.bindResize();
  }

  createScene() {
    this.scene = new ScrollMagic.Scene({
      triggerElement: document.querySelector('.content'),
      duration: this.getDuration(),
      triggerHook: 0,
      offset: 100
    }).setPin(this.imgContainer).addTo(this.smController);
  }
  /**
   * РџРѕР»СѓС‡Р°РµРј С‚РѕС‡РєСѓ, РІ РєРѕС‚РѕСЂРѕР№ СЃР»Р°Р№РґРµСЂ РґРѕР»Р¶РµРЅ РѕС‚Р»РёРїРЅСѓС‚СЊ
   */


  getDuration() {
    return this.productInner.clientHeight - this.imgContainer.clientHeight;
  }
  /**
   * РћР±РЅРѕРІР»СЏРµРј СЂР°Р·РјРµСЂС‹ СЃС†РµРЅС‹ РїСЂРё СЂРµСЃР°Р№Р·Рµ
   */


  bindResize() {
    App.W.on('resized', () => {
      this.updateState();
    });
  }

  updateState() {
    const duration = this.getDuration();

    if (window.innerWidth > 999 && window.innerHeight > 699 && duration > 100) {
      if (this.scene) {
        // Р•СЃР»Рё СЃС†РµРЅР° РµСЃС‚СЊ, РѕР±РЅРѕРІР»СЏРµРј РµС‘
        this.scene.duration(duration);
        this.scene.refresh();
      } else {
        // Р•СЃР»Рё СЃС†РµРЅС‹ РЅРµС‚, СЃРѕР·РґР°С‘Рј
        this.createScene();
      }
    } else {
      // Р”Р»СЏ РІРµСЂС‚РёРєР°Р»СЊРЅС‹С… РїР»Р°РЅС€РµС‚РѕРІ Рё РјРµРЅРµРµ СѓРЅРёС‡С‚РѕР¶Р°РµРј СЃС†РµРЅСѓ
      try {
        this.scene = this.scene.destroy(true);
      } catch (error) {
        console.log(error);
      }
    }
  }

  pinBar() {
    new ScrollMagic.Scene({
      triggerElement: document.querySelector('.js-product-header'),
      triggerHook: 0,
      offset: 0,
      duration: 0
    }).addTo(this.smController).on('enter', () => {
      document.querySelector('.js-product-bar').classList.add('_is-visible');
      document.getElementsByTagName('html')[0].classList.add('_is-open-pbar');
    }).on('leave', () => {
      document.querySelector('.js-product-bar').classList.remove('_is-visible');
      document.getElementsByTagName('html')[0].classList.add('_is-open-pbar');
    });
  }

}

if (document.querySelector('html.page-product')) {
  new PageProduct();
}

/***/ }),
/* 17 */
/***/ (function(module, exports) {

/**
 * РЎРєСЂРѕР»Р» Рє РІРµСЂС…Сѓ СЃС‚СЂР°РЅРёС†С‹
 */
class ScrollUp {
  constructor(btn) {
    this.btn = btn;
    this.smController = new ScrollMagic.Controller();
    this.bindClick();
    this.pinButton();
  }

  bindClick() {
    this.btn.addEventListener('click', () => {
      $('html, body').animate({
        scrollTop: 0
      }, 500);

      if (App.H.is('._is-fullpage')) {
        App.H.trigger('fullpage.scrollTop');
      }
    });
  }

  pinButton() {
    const scene = new ScrollMagic.Scene({
      triggerElement: document.querySelector('.footer'),
      triggerHook: 1,
      offset: 0,
      duration: 0
    });
    scene.addTo(this.smController).on('enter', () => this.btn.classList.remove('_is-fixed')).on('leave', () => this.btn.classList.add('_is-fixed'));
  }

}

document.querySelectorAll('.js-scroll-up').forEach(btn => {
  new ScrollUp(btn);
});

/***/ }),
/* 18 */
/***/ (function(module, exports) {

/**
 * РЎР»Р°Р№РґРµСЂ РїРѕС…РѕР¶РёС… С‚РѕРІР°СЂРѕРІ
 */
class Similar {
  constructor(el) {
    this.container = el;
    this.slider = this.container.querySelector('.js-similar-swiper');
    this.initSlider();
  }

  initSlider() {
    this.swiper = new Swiper(this.slider, {
      loop: false,
      slidesPerView: 2,
      spaceBetween: 16,
      threshold: 10,
      roundLengths: true,
      speed: 700,
      watchOverflow: true,
      watchSlidesVisibility: true,
      a11y: true,
      lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 1,
        loadOnTransitionStart: true
      },
      breakpoints: {
        768: {
          slidesPerView: 2.5
        },
        1000: {
          slidesPerView: 3
        }
      },
      navigation: {
        prevEl: this.container.querySelector('.js-slider-prev'),
        nextEl: this.container.querySelector('.js-slider-next'),
        disabledClass: '_is-disabled'
      }
    });
  }

}

document.querySelectorAll('.js-similar').forEach(el => {
  new Similar(el);
});

/***/ }),
/* 19 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__Box_js__ = __webpack_require__(20);


class Fullpage {
  constructor() {
    this.container = document.querySelector('.js-fullpage');
    this.inner = this.container.querySelector('.js-fp-inner');
    this.screens = this.container.querySelectorAll('.js-fp-screen');
    this.slidesLength = this.screens.length;
    this.allowSlides = false;
    this.DURATIONCHANGE = 1000;
    this.DURATIONBOX = 700;
    this.indexActive = 0;
    this.indexOld = 0;
    this.indexNext = 1;
    this.indexPrev = -1;
    this.isBox = false;

    if (this.container.querySelector('.js-fp-box')) {
      this.box = new __WEBPACK_IMPORTED_MODULE_0__Box_js__["a" /* Box */](this.container.querySelector('.js-fp-box'));
    }

    this.checkSize();
    this.bindScrollTop();
    this.bindResize();
    this.bindMouseWheel();
    this.bindClick();
    this.bindTouchMove();
  }
  /**
   * РџСЂРёРІСЏР·С‹РІР°РµРј СЃРѕР±С‹С‚РёРµ СЃРєСЂРѕР»Р»Р° РЅР°РІРµСЂС…, РґР»СЏ РїРѕСЌРєСЂР°РЅРЅРѕРіРѕ СЃРєСЂРѕР»Р»Р°
   * */


  bindScrollTop() {
    App.H.on('fullpage.scrollTop', () => {
      this.scrollToFirstSlide();
    });
  }
  /**
   * Р”РµР»Р°РµРј РїРѕСЌРєСЂР°РЅРЅС‹Р№ СЃРєСЂРѕР»Р» С‚РѕР»СЊРєРѕ
   * РЅР° СЌРєСЂР°РЅР°С… РґРѕСЃС‚Р°С‚РѕС‡РЅРѕРіРѕ СЂР°Р·РјРµСЂР°
   */


  checkSize() {
    const w = window.innerWidth;
    const h = window.innerHeight;

    if (!App.mobile && w > 999 && h > 650) {
      this.allowSlides = true;
      document.querySelector('html').classList.add('_is-fullpage');
    } else {
      this.allowSlides = false;
      document.querySelector('html').classList.remove('_is-fullpage');
    }
  }
  /**
   * РџРµСЂРµРїСЂРѕРІРµСЂСЏРµРј РїСЂРё СЂРµСЃР°Р№Р·Рµ
   */


  bindResize() {
    App.W.on('resized orientationchange', () => {
      this.checkSize();
    });
  }
  /**
   * РџРµСЂРµРєР»СЋС‡РµРЅРёРµ РєРѕР»РµСЃРѕРј РјС‹С€Рё
   */


  bindMouseWheel() {
    App.W.on('wheeldown', () => {
      this.nextSlide();
    });
    App.W.on('wheelup', () => {
      this.prevSlide();
    });
  }

  scrollToFirstSlide() {
    this.indexOld = -1;
    this.indexActive = 0;
    this.changeSlide('top');
  }
  /**
   * РџРµСЂРµРєР»СЋС‡Р°РµРј
   */


  nextSlide() {
    if (this.animationFlag || App.menuIsOpen || !this.allowSlides) {
      return;
    }

    if (this.isBox) {
      this.nextBox();
      return;
    }

    this.indexOld = this.indexActive;
    this.indexActive++;
    this.orderIndexes();
    this.changeSlide('forward');
  }

  prevSlide() {
    if (this.animationFlag || App.menuIsOpen || !this.allowSlides) {
      return;
    }

    if (this.isBox) {
      this.prevBox();
      return;
    }

    this.indexOld = this.indexActive;
    this.indexActive--;
    this.orderIndexes();
    this.changeSlide('backward');
  }

  changeSlide(direction) {
    if (this.animationFlag || !this.allowSlides) {
      return;
    }

    if (this.indexActive == this.indexOld) {
      return;
    }

    if (this.indexActive >= 1) {
      App.H.addClass('_is-scroll-top');
    } else {
      App.H.removeClass('_is-scroll-top');
    } // РћРїСЂРµРґРµР»СЏРµРј, РЅР°С…РѕРґРёРјСЃСЏ Р»Рё РјС‹ РЅР° СЃР»Р°Р№РґРµ СЃ РєРѕСЂРѕР±РєРѕР№


    this.isBox = [...this.screens].filter(s => +s.getAttribute('data-id') === this.indexActive)[0].classList.contains('js-fp-box'); // Р”РµР»Р°РµРј Р·Р°РґРµСЂР¶РєСѓ, С‡С‚РѕР±С‹ РЅРµ Р±С‹Р»Рѕ РѕРґРЅРѕРІСЂРµРјРµРЅРЅС‹С… Р°РЅРёРјР°С†РёР№

    this.animationFlag = true; // Р”РІРёРіР°РµРј РєРѕРЅС‚РµР№РЅРµСЂ

    this.inner.style.transform = `translateY(calc(var(--vh, 1vh) * 100 * -${this.indexActive}))`; // РџРѕРґСЃС‚Р°РІР»СЏРµРј РєР»Р°СЃСЃС‹ Р°РєС‚РёРІРЅРѕРјСѓ СЃР»Р°Р№РґСѓ Рё СЃРѕСЃРµРґРЅРёРј

    this.screens.forEach(screen => {
      const id = +screen.getAttribute('data-id');

      if (id === this.indexActive) {
        screen.classList.add('_is-active');
        screen.classList.remove('_is-prev', '_is-next');
      } else if (id < this.indexActive) {
        screen.classList.remove('_is-active', '_is-next');
        screen.classList.add('_is-prev');
      } else {
        screen.classList.remove('_is-active', '_is-prev');
        screen.classList.add('_is-next');
      }
    }); // РЎРєСЂС‹РІР°РµРј РёР»Рё РїРѕРєР°Р·С‹РІР°РµРј С…РµРґРµСЂ РІ Р·Р°РІРёСЃРёРјРѕСЃС‚Рё РѕС‚ РЅР°РїСЂР°РІР»РµРЅРёСЏ СЃРєСЂРѕР»Р»Р°

    if (direction === 'top') {
      this.indexOld = 0;
      document.querySelector('html').classList.remove('_is-header-hidden');
    } else if (direction === 'forward') {
      document.querySelector('html').classList.add('_is-header-hidden');
    } else if (direction === 'backward') {
      document.querySelector('html').classList.remove('_is-header-hidden');
    }

    setTimeout(() => {
      this.checkHeader();
    }, this.DURATIONCHANGE * 0.5);
    setTimeout(() => {
      this.animationFlag = false;
    }, this.DURATIONCHANGE);
  }
  /**
   * РћРіСЂР°РЅРёС‡РёРІР°РµРј РїРµСЂРµРјРѕС‚РєСѓ РєРѕР»-РІРѕРј СЃР»Р°Р№РґРѕРІ
   */


  orderIndexes() {
    if (this.indexActive >= this.slidesLength) {
      this.indexActive = this.slidesLength - 1;
    }

    if (this.indexActive < 0) {
      this.indexActive = 0;
    }
  }
  /**
   * РџРµСЂРµРєР»СЋС‡РµРЅРёРµ С‚Р°С‡РµРј РЅР° РјРѕР±РёР»СЊРЅС‹С…
   */


  bindTouchMove() {
    let event = null;
    this.container.addEventListener('touchstart', e => {
      event = e;
    });
    this.container.addEventListener('touched', () => {
      event = null;
    });
    this.container.addEventListener('touchmove', e => {
      if (event) {
        const delta = e.touches[0].pageY - event.touches[0].pageY;

        if (delta > 10) {
          this.prevSlide();
        } else if (delta < -10) {
          this.nextSlide();
        }
      }
    });
  }
  /**
   * РџРµСЂРµРєР»СЋС‡Р°РµРј РєР»РёРєРѕРј РїРѕ РєРЅРѕРїРєРµ
   */


  bindClick() {
    this.container.querySelectorAll('.js-fp-next').forEach(btn => {
      btn.addEventListener('click', () => {
        if (this.allowSlides) {
          /**
           * РџСЂРё РїРѕСЌРєСЂР°РЅРЅРѕРј СЃРєСЂРѕР»Р»Рµ РІСЃРµРіРґР° РїСЂРѕРєСЂСѓС‡РёРІР°РµРј
           * РґРѕ СЃР»РµРґСѓСЋС‰РµРіРѕ РѕСЃРЅРѕРІРЅРѕРіРѕ СЃР»Р°Р№РґР°, РґР°Р¶Рµ РµСЃР»Рё
           * РєРЅРѕРїРєР° РЅР°С…РѕРґРёС‚СЃСЏ РІ РєР°РґСЂРµ СЃ РєРѕСЂРѕР±РєРѕР№
           */
          this.isBox = false;
          this.nextSlide();
        } else {
          /**
           * РџСЂРё РѕР±С‹С‡РЅРѕРј СЃРєСЂРѕР»Р»Рµ СЃРЅР°С‡Р°Р»Р° РѕРїСЂРµРґРµР»СЏРµРј,
           * РєСѓРґР° РЅР°Рј РЅСѓР¶РЅРѕ РґРѕСЃРєСЂРѕР»Р»РёС‚СЊ (РїРѕС‚РѕРјСѓ С‡С‚Рѕ
           * РЅСѓРјРµСЂР°С†РёСЏ Сѓ РІСЃРµС… СЃР»Р°Р№РґРѕРІ, РІРєР»СЋС‡Р°СЏ РєР°РґСЂС‹
           * СЃ РєРѕСЂРѕР±РєРѕР№, РїРѕР»СѓС‡Р°РµС‚СЃСЏ РЅРµ СЃРєРІРѕР·РЅР°СЏ вЂ” РѕРЅРё
           * РЅР° СЂР°Р·РЅС‹С… СѓСЂРѕРІРЅСЏС…)
           */
          const parent = btn.closest('.js-fp-screen') || btn.closest('.js-fp-box');

          if (parent.classList.contains('js-fp-box')) {
            /**
             * Р­С‚Рѕ РєРЅРѕРїРєР° РІ РєР°РґСЂРµ СЃ РєРѕСЂРѕР±РєРѕР№, РїРѕСЌС‚РѕРјСѓ РѕРїСЂРµРґРµР»СЏРµРј,
             * РєСѓРґР° РґР°Р»СЊС€Рµ СЃРєСЂРѕР»Р»РёС‚СЊ вЂ” РґРѕ СЃР»РµРґСѓСЋС‰РµРіРѕ РєР°РґСЂР°
             * РёР»Рё РґРѕ СЃР»РµРґСѓСЋС€РµРіРѕ РѕСЃРЅРѕРІРЅРѕРіРѕ СЃР»Р°Р№РґР°,
             * РµСЃР»Рё СЌС‚Рѕ РїРѕСЃР»РµРґРЅРёР№ РєР°РґСЂ СЃ РєРѕСЂРѕР±РєРѕР№
             */
            const screen = btn.closest('.js-fp-box-screen');

            if (screen.matches(':last-child')) {
              // Рљ СЃР»РµРґСѓСЋС‰РµРјСѓ РѕСЃРЅРѕРІРЅРѕРјСѓ СЃР»Р°Р№РґСѓ
              const id = +parent.getAttribute('data-id');
              this.scrollToNext(id);
            } else {
              // Рљ СЃР»РµРґСѓСЋС‰РµРјСѓ РєР°РґСЂСѓ СЃ РєРѕСЂРѕР±РєРѕР№
              const id = +screen.getAttribute('data-box');
              this.scrollToNextBox(id);
            }
          } else {
            /**
             * Р­С‚Рѕ РєРЅРѕРїРєР° РІ РѕСЃРЅРѕРІРЅРѕРј СЃР»Р°Р№РґРµСЂ, РїРѕСЌС‚РѕРјСѓ
             * Рё СЃРєСЂРѕР»Р»РёРј СЃСЂР°Р·Сѓ Рє СЃР»РµРґСѓСЋС‰РµРјСѓ РѕСЃРЅРѕРІРЅРѕРјСѓ
             */
            const id = +parent.getAttribute('data-id');
            this.scrollToNext(id);
          }
        }
      });
    });
  }
  /**
   * РџСЂРё РѕР±С‹С‡РЅРѕРј СЃРєСЂРѕР»Р»Рµ РїСЂРѕРјР°С‚С‹РІР°РµРј
   * РґРѕ СЃР»РµРґСѓСЋС‰РµРіРѕ Р±Р»РѕРєР°
   */


  scrollToNext(id) {
    const target = this.container.querySelector(`.js-fp-screen[data-id="${id + 1}"]`);

    if (target) {
      const top = target.offsetTop;
      $('html, body').animate({
        scrollTop: top
      }, 500);
    }
  }

  scrollToNextBox(id) {
    const target = this.container.querySelector(`.js-fp-box-screen[data-box="${id + 1}"]`);

    if (target) {
      const top = target.offsetTop;
      $('html, body').animate({
        scrollTop: top
      }, 500);
    }
  }
  /**
   * РњРµРЅСЏРµРј РїРѕРґР»РѕР¶РєСѓ С…РµРґРµСЂР° РїСЂРё РїРѕСЌРєСЂР°РЅРЅРѕРј СЃРєСЂРѕР»Р»Рµ
   */


  checkHeader() {
    const screen = this.container.querySelector('.js-fp-screen._is-active');

    if (screen.classList.contains('fp-screen--img') && !screen.classList.contains('fp-screen--text')) {
      document.querySelector('html').classList.add('page-tr');
    } else {
      document.querySelector('html').classList.remove('page-tr');
    }
  }
  /**
   * Р’ Р·Р°РІРёСЃРёРјРѕСЃС‚Рё РѕС‚ С‚РѕРіРѕ, РЅР°С…РѕРґРёРјСЃСЏ РјС‹ РЅР° СЃР»Р°Р№РґРµ
   * СЃ РєРѕСЂРѕР±РєРѕР№ РёР»Рё РЅРµС‚, РјРµРЅСЏРµРј Р»РёР±Рѕ РєР°РґСЂС‹ РєРѕСЂРѕР±РєРё,
   * Р»РёР±Рѕ РѕР±С‰РёР№ СЃР»Р°Р№Рґ. Р”СЂСѓРіРёРјРё СЃР»РѕРІР°РјРё, РїРѕРєР° РјРѕР¶РЅРѕ
   * РїСЂРѕРєСЂСѓС‡РёРІР°С‚СЊ РєР°РґСЂС‹ СЃ РєРѕСЂРѕР±РєРѕР№ вЂ” РїСЂРѕРєСЂСѓС‡РёРІР°РµРј РёС…,
   * РєРѕРіРґР° СѓРїРёСЂР°РµРјСЃСЏ РІ РєСЂР°Р№РЅРёР№ РєР°РґСЂ РєРѕСЂРѕР±РєРё вЂ” СЃРєСЂРѕР»Р»РёРј
   * РґР°Р»СЊС€Рµ РѕСЃРЅРѕРІРЅС‹Рµ СЃР»Р°Р№РґС‹
   */


  nextBox() {
    /**
     * Р•СЃР»Рё СЌС‚Рѕ РїРѕСЃР»РµРґРЅРёР№ СЃР»Р°Р№Рґ Сѓ РєРѕСЂРѕР±РєРё,
     * С‚Рѕ РїСЂРѕР»РёСЃС‚С‹РІР°РµРј РґР°Р»СЊС€Рµ РѕР±С‰РёР№ СЃР»Р°Р№РґРµСЂ
     */
    if (this.box.isOnLast()) {
      this.isBox = false;
      this.nextSlide();
    } else {
      /**
       * Р•СЃР»Рё РЅРµС‚, С‚Рѕ РјРµРЅСЏРµРј СЃР»Р°Р№Рґ Сѓ РєРѕСЂРѕР±РєРё
       */
      this.animationFlag = true;
      this.box.nextSlide();
      setTimeout(() => {
        this.animationFlag = false;
      }, this.DURATIONBOX);
    }
  }
  /**
   * РўРѕ Р¶Рµ СЃР°РјРѕРµ, С‚РѕР»СЊРєРѕ РІ РѕР±СЂР°С‚РЅРѕРј РЅР°РїСЂР°РІР»РµРЅРёРё
   */


  prevBox() {
    if (this.box.isOnFirst()) {
      this.isBox = false;
      this.prevSlide();
    } else {
      this.animationFlag = true;
      this.box.prevSlide();
      setTimeout(() => {
        this.animationFlag = false;
      }, this.DURATIONBOX);
    }
  }

}

if (document.querySelector('.js-fullpage')) {
  new Fullpage();
}

/***/ }),
/* 20 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/**
 * РЎР»Р°Р№РґРµСЂ РІРЅСѓС‚СЂРё СЃР»Р°Р№РґРµСЂР° РґР»СЏ Р°РЅРёРјР°С†РёРё СЃ РєРѕСЂРѕР±РєРѕР№
 * (Р·Р°РјРѕСЂРѕРЅР¶РµРЅРЅР°СЏ РїСЂРѕРґСѓРєС†РёСЏ)
 */
class Box {
  constructor(el) {
    this.container = el;
    this.screens = this.container.querySelectorAll('[data-box]');
    this.slidesLength = this.screens.length;
    this.indexActive = 0;
    this.indexOld = 0;
    this.indexNext = 1;
    this.indexPrev = -1;
    this.isFirst = true;
    this.isLast = false;
  }
  /**
   * РћРіСЂР°РЅРёС‡РёРІР°РµРј РїРµСЂРµРјРѕС‚РєСѓ РєРѕР»-РІРѕРј СЃР»Р°Р№РґРѕРІ
   */


  orderIndexes() {
    if (this.indexActive >= this.slidesLength) {
      this.indexActive = this.slidesLength - 1;
    }

    if (this.indexActive < 0) {
      this.indexActive = 0;
    }
  }
  /**
   * РџРµСЂРµРєР»СЋС‡Р°РµРј
   */


  nextSlide() {
    this.indexOld = this.indexActive;
    this.indexActive++;
    this.orderIndexes();
    this.changeSlide();
  }

  prevSlide() {
    this.indexOld = this.indexActive;
    this.indexActive--;
    this.orderIndexes();
    this.changeSlide();
  }

  changeSlide() {
    if (this.indexActive == this.indexOld) {
      return;
    } // РџРѕРґСЃС‚Р°РІР»СЏРµРј РєР»Р°СЃСЃ Р°РєС‚РёРІРЅРѕРјСѓ СЃР»Р°Р№РґСѓ


    this.screens.forEach(screen => {
      if (+screen.getAttribute('data-box') === this.indexActive) {
        screen.classList.add('_is-visible');
      } else {
        screen.classList.remove('_is-visible');
      }
    });
  }
  /**
   * РћРїСЂРµРґРµР»СЏРµРј, РЅР°С…РѕРґРёРјСЃСЏ Р»Рё РјС‹ РЅР° РїРµСЂРІРѕРј РёР»Рё РїРѕСЃР»РµРґРЅРµРј РєР°РґСЂРµ
   */


  isOnFirst() {
    return this.indexActive <= 0;
  }

  isOnLast() {
    return this.indexActive >= this.slidesLength - 1;
  }

}
/* harmony export (immutable) */ __webpack_exports__["a"] = Box;


/***/ }),
/* 21 */
/***/ (function(module, exports) {

/**
 * РЎР»Р°Р№РґРµСЂ РїРѕС…РѕР¶РёС… С‚РѕРІР°СЂРѕРІ
 */
class ProductionSlider {
  constructor(el) {
    this.container = el;
    this.slider = this.container.querySelector('.js-production-swiper');
    this.initSlider();
  }

  initSlider() {
    this.swiper = new Swiper(this.slider, {
      loop: false,
      slidesPerView: 1.3,
      spaceBetween: 16,
      threshold: 10,
      roundLengths: true,
      speed: 700,
      watchOverflow: true,
      watchSlidesVisibility: true,
      a11y: true,
      lazy: {
        loadPrevNext: true,
        loadPrevNextAmount: 1,
        loadOnTransitionStart: true
      },
      breakpoints: {
        768: {
          slidesPerView: 2
        }
      },
      navigation: {
        prevEl: this.container.querySelector('.js-slider-prev'),
        nextEl: this.container.querySelector('.js-slider-next'),
        disabledClass: '_is-disabled'
      }
    });
  }

}

document.querySelectorAll('.js-production-slider').forEach(el => {
  new ProductionSlider(el);
});

/***/ }),
/* 22 */
/***/ (function(module, exports) {

class Tabs {
  constructor(tabs) {
    this.tabs = tabs;
    this.id = this.tabs.getAttribute('data-container');
    this.links = this.tabs.querySelectorAll('[data-tab]');
    this.containers = document.querySelectorAll(`#${this.id} [data-tab]`);
    this.bindClick();
  }

  bindClick() {
    this.links.forEach(btn => {
      btn.addEventListener('click', e => {
        e.preventDefault();
        this.filter(+btn.getAttribute('data-tab'));
      });
    });
  }

  filter(id) {
    this.containers.forEach(ct => {
      if (id === +ct.getAttribute('data-tab')) {
        ct.classList.add('_is-active');
      } else {
        ct.classList.remove('_is-active');
      }
    });
    this.links.forEach(ct => {
      if (id === +ct.getAttribute('data-tab')) {
        ct.classList.add('_is-active');
      } else {
        ct.classList.remove('_is-active');
      }
    });
  }

}

document.querySelectorAll('.js-tabs').forEach(tab => {
  new Tabs(tab);
});

/***/ }),
/* 23 */
/***/ (function(module, exports) {

class Accordeon {
  constructor(el) {
    this.container = el;
    this.titles = this.container.querySelectorAll('.js-acc-title');
    this.bindClick();
  }

  bindClick() {
    this.titles.forEach(title => {
      const $text = $(title.nextElementSibling);
      title.addEventListener('click', () => {
        if (title.classList.contains('_is-open')) {
          title.classList.remove('_is-open');
          $text.clearQueue().slideUp(200);
        } else {
          title.classList.add('_is-open');
          $text.clearQueue().slideDown(200);
        }
      });
    });
  }

}

document.querySelectorAll('.js-accordeon').forEach(el => {
  new Accordeon(el);
});

/***/ }),
/* 24 */
/***/ (function(module, exports) {

/**
 * Р—Р°РїСѓСЃРє С„РѕРЅРѕРІС‹С… РІРёРґРµРѕ С‚РѕР»СЊРєРѕ РЅР° РґРµСЃРєС‚РѕРїР°С…
 */
if (!App.mobile) {
  document.querySelectorAll('.js-autoplay-video').forEach(video => {
    video.play();
    video.closest('.js-autoplay-video-container').classList.add('_is-visible');
  });
}

/***/ }),
/* 25 */
/***/ (function(module, exports) {

/**
 * РќР°С‚РёРІРЅС‹Рµ СЃРµР»РµРєС‚С‹ РІ РѕР±РѕР»РѕС‡РєРµ
 */
class Select {
  constructor(el) {
    this.container = el;
    this.select = this.container.querySelector('select');
    this.value = this.container.querySelector('.js-select-value');
    this.bindChange(this.select);
  }

  bindChange() {
    /**
     * РџРѕРґСЃС‚Р°РІР»СЏРµРј Р·РЅР°С‡РµРЅРёРµ РІ Р·Р°РіРѕР»РѕРІРѕРє СЃРµР»РµРєС‚Р°
     */
    this.select.addEventListener('change', e => {
      const val = e.target.value;
      const text = this.select.querySelector(`[value="${val}"]`).innerText;
      this.value.innerText = text;
    });
  }

}

document.querySelectorAll('.js-select').forEach(el => {
  new Select(el);
});

/***/ }),
/* 26 */
/***/ (function(module, exports) {

class PageMain {
  constructor() {
    this.factoidsContainer = document.querySelector('.js-factoids');
    this.factoids = document.querySelectorAll('.js-map-factoid');
    this.mapLayers = document.querySelectorAll('.js-map-layer');
    this.map = document.querySelector('.js-map');
    this.bindClick();
    this.bindFactoids();
    this.bindFactoidsMobile();
  }
  /**
   * РЎРєСЂРѕР»Р»РёРј РєР»РёРєРѕРј РїРѕ СЃС‚СЂРµР»РєРµ
   */


  bindClick() {
    document.querySelectorAll('.js-mp-next').forEach(btn => {
      btn.addEventListener('click', () => {
        const top = btn.closest('.js-mp-screen').nextElementSibling.offsetTop;
        $('html, body').animate({
          scrollTop: top
        }, 500);
      });
    });
  }

  bindFactoids() {
    if (App.mobile) return;
    this.factoids.forEach(factoid => {
      factoid.addEventListener('mouseenter', () => {
        this.changeMapLayer(+factoid.getAttribute('data-id'));
      });
      factoid.addEventListener('mouseleave', () => {
        this.changeMapLayer();
      });
    });
  }

  bindFactoidsMobile() {
    if (!App.mobile) return;
    this.factoids.forEach(factoid => {
      factoid.addEventListener('click', () => {
        this.changeMapLayer(+factoid.getAttribute('data-id'));
      });
    });
    document.addEventListener('click', e => {
      if (!this.factoidsContainer.contains(e.target)) {
        this.changeMapLayer();
      }
    });
  }
  /**
   * РњРµРЅСЏРµРј СЃР»РѕРё РєР°СЂС‚С‹
   */


  changeMapLayer(id = 1) {
    /**
     * Р•СЃР»Рё РЅРёС‡РµРіРѕ РЅРµ РІС‹Р±СЂР°РЅРѕ, РІС‹РґРµР»СЏРµРј РїРµСЂРІС‹Р№ СЃР»РѕР№
     */
    this.map.classList.remove('_is-layer-1', '_is-layer-2', '_is-layer-3');
    this.map.classList.add('_is-layer-' + id);
    this.factoids.forEach(f => {
      if (+f.getAttribute('data-id') === id) {
        f.classList.add('_is-active');
      } else {
        f.classList.remove('_is-active');
      }
    });
  }

}

if (document.querySelector('html.page-main')) {
  new PageMain();
}

/***/ }),
/* 27 */
/***/ (function(module, exports) {

/**
 * Р”Р°С‚Р°РїРёРєРµСЂ РґР»СЏ Р±СЂР°СѓР·РµСЂРѕРІ, РєРѕС‚РѕСЂС‹Рµ РЅРµ РїРѕРґРґРµСЂР¶РёРІР°СЋС‚ input type="date"
 * TODO: РїРµСЂРµРїРёСЃР°С‚СЊ РЅРѕСЂРјР°Р»СЊРЅРѕ
 */
var isDateSupported = function () {
  var input = document.createElement('input');
  var value = 'a';
  input.setAttribute('type', 'date');
  input.setAttribute('value', value);
  return input.value !== value;
};

if (!isDateSupported()) {
  document.querySelectorAll('.js-datepicker').forEach(input => {
    const lang = document.getElementsByTagName('html')[0].getAttribute('lang');
    const picker = datepicker(input, {
      customDays: lang === 'ru' ? ['Р’СЃ', 'РџРЅ', 'Р’С‚', 'РЎСЂ', 'Р§С‚', 'РџС‚', 'РЎР±'] : null,
      customMonths: lang === 'ru' ? ['РЇРЅРІР°СЂСЊ', 'Р¤РµРІСЂР°Р»СЊ', 'РњР°СЂС‚', 'РђРїСЂРµР»СЊ', 'РњР°Р№', 'РСЋРЅСЊ', 'РСЋР»СЊ', 'РђРІРіСѓСЃС‚', 'РЎРµРЅС‚СЏР±СЂСЊ', 'РћРєС‚СЏР±СЂСЊ', 'РќРѕСЏР±СЂСЊ', 'Р”РµРєР°Р±СЂСЊ'] : null,
      formatter: (inp, date) => {
        /**
         * РџСЂРёРІРѕРґРёРј РґР°С‚Сѓ Рє С„РѕСЂРјР°С‚Сѓ "2020-09-31"
         */
        const y = new Intl.DateTimeFormat('en', {
          year: 'numeric'
        }).format(date);
        const m = new Intl.DateTimeFormat('en', {
          month: '2-digit'
        }).format(date);
        const d = new Intl.DateTimeFormat('en', {
          day: '2-digit'
        }).format(date);
        inp.value = `${y}-${m}-${d}`;
      }
    });

    picker.onSelect = () => {
      /**
      * Р’СЂРµРјРµРЅРЅС‹Р№ РєРѕСЃС‚С‹Р»СЊ РґР»СЏ С„РёР»СЊС‚СЂР°
      */
      input.closest('.js-filter').querySelectorAll('[type="submit"]').forEach(btn => btn.disabled = false);
      /**
       * Р•С‰С‘ РѕРґРёРЅ РєРѕСЃС‚С‹Р»СЊ T_T
       * Р·Р°РєСЂС‹РІР°РµРј РїРёРєРµСЂ
       */

      setTimeout(() => {
        try {
          input.closest('.js-input-date').querySelector('.qs-datepicker-container').classList.add('qs-hidden');
        } catch (error) {
          console.log(error);
        }
      }, 0);
    };
    /**
     * Р—Р°РґР°С‘Рј РјРёРЅРёРјР°Р»СЊРЅРѕРµ Рё РјР°РєСЃРёРјР°Р»СЊРЅРѕРµ Р·РЅР°С‡РµРЅРёСЏ
     */


    const min = input.getAttribute('min').split(/\s*\-\s*/g);
    picker.setMin(new Date(min[0], min[1], min[2]));
    const max = input.getAttribute('max').split(/\s*\-\s*/g);
    picker.setMax(new Date(max[0], max[1], max[2]));
    /**
     * Р—Р°РґР°С‘Рј РєР»Р°СЃСЃ СЂРѕРґРёС‚РµР»СЋ
     */

    try {
      input.closest('.js-input-date').classList.add('_is-datepicker');
    } catch (error) {
      console.log(error);
    }
  });
}

;

/***/ }),
/* 28 */
/***/ (function(module, exports) {

/**
 * Р¤РёР»СЊС‚СЂС‹
 */
class Filter {
  constructor(el) {
    this.container = el;
    this.inputs = this.container.querySelectorAll('select, input');
    this.bindChange();
  }

  bindChange() {
    this.inputs.forEach(input => {
      input.addEventListener('change', () => {
        /**
         * Р Р°Р·РґРёСЃРµР№Р±Р»РёРІР°РµРј РєРЅРѕРїРєСѓ СЃР°Р±РјРёС‚Р°
         * РїСЂРё РёР·РјРµРЅРµРЅРёРё РїР°СЂР°РјРµС‚СЂРѕРІ
         */
        this.container.querySelectorAll('[type="submit"]').forEach(btn => btn.disabled = false);
      });
    });
  }

}

document.querySelectorAll('.js-filter').forEach(el => new Filter(el));

/***/ }),
/* 29 */
/***/ (function(module, exports) {

/**
 * РџР°РіРёРЅР°С†РёСЏ
 */
class Pagination {
  constructor(el) {
    this.container = el;
    this.links = el.querySelectorAll('.js-pagination-link');
    this.filter = document.getElementById(this.container.getAttribute('data-filter'));
    this.bindLinks();
  } // РљР»РёРєР°РµРј СЃСЃС‹Р»РєРё РІРїРµСЂС‘Рґ-РЅР°Р·Р°Рґ


  bindLinks() {
    if (!this.filter) return;
    this.links.forEach(el => {
      const page = el.getAttribute('data-page');
      el.addEventListener('click', e => {
        e.preventDefault();
        this.updatePage(page);
      });
    });
  } // РћС‚РїСЂР°РІР»СЏРµРј С„РѕСЂРјСѓ


  updatePage(page) {
    /**
     * РЎР±СЂР°СЃС‹РІР°РµРј С„РѕСЂРјСѓ РЅР° СЃР»СѓС‡Р°Р№, РµСЃР»Рё РїРѕР»СЊР·РѕРІР°С‚РµР»СЊ
     * С‚Р°Рј С‡С‚Рѕ-С‚Рѕ РІС‹Р±СЂР°Р», РЅРѕ РЅРµ РЅР°Р¶Р°Р» СЃР°Р±РјРёС‚
     */
    this.filter.reset();
    /**
     * РџРѕРґСЃС‚Р°РІР»СЏРµРј РІ С„РѕСЂРјСѓ Р·РЅР°С‡РµРЅРёРµ СЃС‚СЂР°РЅРёС†С‹ Рё РѕС‚РїСЂР°РІР»СЏРµРј РµС‘
     */

    const pageInput = this.filter.querySelector('.js-input-page');
    pageInput.disabled = false;
    pageInput.value = page;
    this.filter.submit();
  }

}

document.querySelectorAll('.js-pagination').forEach(el => {
  new Pagination(el);
});

/***/ }),
/* 30 */
/***/ (function(module, exports) {

/*
    РЈР±РёСЂР°РµРј РІРёРґРёРјРѕРµ СЃРѕСЃС‚РѕСЏРЅРёРµ С„РѕРєСѓСЃР° РґРѕ С‚РµС… РїРѕСЂ,
    РїРѕРєР° РЅРµ РЅР°Р¶РјС‘С‚СЃСЏ РєР»Р°РІРёС€Р° TAB

    Р’ CSS:
    html._no-visible-focus * {
        outline: 0 !important;
    }
*/
if (!App.mobile) {
  App.H.addClass('_no-visible-focus');
  App.W.on('keydown.tabfocus', function (e) {
    const keyCode = e.keyCode || e.which;

    if (keyCode == 9) {
      App.H.removeClass('_no-visible-focus');
      App.W.off('keydown.tabfocus');
    }
  });
}

/***/ }),
/* 31 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__FadeinImage__ = __webpack_require__(1);


class PageNews {
  constructor() {
    this.filter = document.querySelector('.js-filter');
    this.offsetInput = this.filter.querySelector('.js-input-offset');
    this.newsContainer = document.querySelector('.js-news');
    this.ajaxUrl = this.filter.getAttribute('data-ajax-url');
    this.trigger = document.querySelector('.js-news-more');

    if (this.filter) {
      this.bindFilter();
    }

    if (this.trigger && this.filter) {
      this.bindBtnMore();
    }
  }
  /**
   * Р¤РёР»СЊС‚СЂ
   */


  bindFilter() {
    this.filter.querySelectorAll('select, input').forEach(input => {
      input.addEventListener('change', () => {
        this.filter.submit();
      });
    });
  }
  /**
   * РџРѕРґРіСЂСѓР·РєР° РЅРѕРІРѕСЃС‚РµР№
   */


  bindBtnMore() {
    this.trigger.addEventListener('click', () => {
      this.loadMore();
    });
  }

  loadMore() {
    this.offsetInput.value = this.newsContainer.querySelectorAll('.news-item').length;
    this.offsetInput.disabled = false;
    this.trigger.classList.add('_is-active');
    /**
     * Р“СЂСѓР·РёРј
     */

    $.ajax({
      url: this.ajaxUrl,
      data: $(this.filter).serialize(),
      type: this.filter.getAttribute('method') || 'GET',
      cache: false,
      success: response => {
        if (response) {
          /**
           * Р’С‹С‚Р°СЃРєРёРІР°РµРј СЂР°Р·РјРµС‚РєСѓ РёР· РѕС‚РІРµС‚Р°
           */
          const tmp = document.createElement('div');
          tmp.innerHTML = response;
          const inner = tmp.querySelector('[data-html]');
          if (!inner) return;
          /**
           * Р”РѕР±Р°РІР»СЏРµРј РєР°СЂС‚РѕС‡РєРё РІ РєР°С‚Р°Р»РѕРі
           */

          this.newsContainer.insertAdjacentHTML('beforeend', inner.innerHTML);
          this.updateLazyLoad();
          /**
           * Р•СЃР»Рё РµСЃС‚СЊ РјР°СЂРєРµСЂ, С‡С‚Рѕ СЌС‚Рѕ РїРѕСЃР»РµРґРЅРёРµ СЌР»РµРјРµРЅС‚С‹,
           * РѕС‚РєР»СЋС‡Р°РµРј С‚СЂРёРіРіРµСЂ
           */

          if (inner.getAttribute('data-last') === 'true') {
            this.trigger.style.display = 'none';
          }
        } else {
          console.log('РћС€РёР±РєР° РїРѕР»СѓС‡РµРЅРёСЏ РєР°С‚Р°Р»РѕРіР°');
        }

        this.trigger.classList.remove('_is-active');
        this.offsetInput.disabled = true;
      },
      error: () => {
        console.log('РћС€РёР±РєР° РЅР° СЃРµСЂРІРµСЂРµ');
        this.trigger.classList.remove('_is-active');
        this.offsetInput.disabled = true;
      }
    });
  }
  /**
   * РћР±РЅРѕРІР»СЏРµРј lazy-load Р·Р°РіСЂСѓР·РєСѓ РґР»СЏ РІРЅРѕРІСЊ РґРѕР±Р°РІР»РµРЅРЅС‹С… РЅРѕРІРѕСЃС‚РµР№
   */


  updateLazyLoad() {
    this.newsContainer.querySelectorAll('[data-fadein]').forEach(el => {
      new __WEBPACK_IMPORTED_MODULE_0__FadeinImage__["a" /* FadeInImage */](el);
    });
  }

}

if (document.querySelector('html.page-news')) {
  new PageNews();
}

/***/ }),
/* 32 */
/***/ (function(module, exports) {

/**
 * Р¤Р»РѕС‚
 */
class Fleet {
  constructor() {
    this.seas = document.querySelectorAll('.js-fleet-sea');
    this.stats = document.querySelectorAll('.js-fleet-stat');

    if (this.seas.length && this.stats.length) {
      this.bindAreaHover();
      this.bindAreaClickMobile();
    }
  }
  /**
   * РҐРѕРІРµСЂ РЅР° РґРµСЃРєС‚РѕРїР°С…
   */


  bindAreaHover() {
    if (App.mobile) return;
    this.seas.forEach(sea => {
      sea.addEventListener('mouseenter', () => {
        this.changeStatistic(sea.getAttribute('data-id'));
      });
      sea.addEventListener('mouseleave', () => {
        this.changeStatistic();
      });
    });
  }
  /**
   * РљР»РёРє РЅР° С‚Р°С‡Р°С…
   */


  bindAreaClickMobile() {
    if (!App.mobile) return;
    this.seas.forEach(sea => {
      sea.addEventListener('click', () => {
        this.changeStatistic(sea.getAttribute('data-id'));
      });
    });
  }
  /**
   * РџРµСЂРµРєР»СЋС‡Р°РµРј Р±Р»РѕРєРё СЃС‚Р°С‚РёСЃС‚РёРєРё
   * (Р•СЃР»Рё РЅРёС‡РµРіРѕ РЅРµ РІС‹Р±СЂР°РЅРѕ, РІС‹РґРµР»СЏРµРј РћС…РѕС‚СЃРєРѕРµ РјРѕСЂРµ)
   */


  changeStatistic(id = 1) {
    this.seas.forEach(s => {
      if (s.getAttribute('data-id') === id) {
        s.classList.add('_is-active');
      } else {
        s.classList.remove('_is-active');
      }
    });
    this.stats.forEach(s => {
      if (s.getAttribute('data-id') === id) {
        s.classList.add('_is-active');
      } else {
        s.classList.remove('_is-active');
      }
    });
  }

}

if (document.querySelector('html.page-fleet')) {
  new Fleet();
}

/***/ }),
/* 33 */
/***/ (function(module, exports) {

const dropdown = document.querySelector('.js-lang-dropdown');
document.querySelectorAll('.js-lang-btn').forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault();

    if (App.langIsOpen) {
      closeLanguage(dropdown);
    } else {
      openLanguage(dropdown);
    }
  });
});
document.querySelectorAll('.js-lang-close').forEach(btn => {
  btn.addEventListener('click', e => {
    e.preventDefault();
    closeLanguage(dropdown);
  });
});
/**
 * РћС‚РєСЂС‹РІР°РµРј
 */

function openLanguage(dropdown) {
  dropdown.classList.add('_is-visible');
  App.langIsOpen = true;

  if (window.innerWidth < 768) {
    App.lockScroll.lock();
  }
}
/**
 * Р—Р°РєСЂС‹РІР°РµРј
 */


function closeLanguage(dropdown) {
  dropdown.classList.remove('_is-visible');
  App.langIsOpen = false;

  if (window.innerWidth < 768) {
    App.lockScroll.unlock();
  }
}

/***/ }),
/* 34 */
/***/ (function(module, exports) {

class Reviews {
  constructor(el) {
    this.container = $(el);
    this.reviews = this.container.find('.js-reviews-item');
    this.offsetInput = this.container.find('.js-input-offset');
    this.trigger = $('.js-reviews-more');
    this.moreUrl = this.container.data('url');
    this.showClick();

    if (this.trigger) {
      this.bindBtnMore();
    }
  }

  showClick() {
    App.D.on('click', '.js-review-show', function () {
      let $link = $(this);
      let $text = $link.parents('.js-reviews-item').find('.js-review-text');

      if ($text.hasClass('_is-open')) {
        $text.removeClass('_is-open');
        $link.text($link.data('more-text'));
      } else {
        $text.addClass('_is-open');
        $link.text($link.data('less-text'));
      }
    });
  }
  /**
   * РџРѕРґРіСЂСѓР·РєР° РѕС‚Р·С‹РІРѕРІ
   */


  bindBtnMore() {
    this.trigger.on('click', () => {
      this.loadMore();
    });
  }

  loadMore() {
    this.offsetInput.value = this.container.find('.js-reviews-item').length;
    this.offsetInput.disabled = false;
    this.trigger.addClass('_is-active');
    /**
     * Р“СЂСѓР·РёРј
     */

    $.ajax({
      url: this.moreUrl,
      type: this.container.data('method') || 'GET',
      data: {
        'offset': this.offsetInput.value
      },
      success: response => {
        if (response) {
          /**
           * Р’С‹С‚Р°СЃРєРёРІР°РµРј СЂР°Р·РјРµС‚РєСѓ РёР· РѕС‚РІРµС‚Р°
           */
          const tmp = document.createElement('div');
          tmp.innerHTML = response;
          const inner = tmp.querySelector('[data-html]');
          if (!inner) return;
          /**
           * Р”РѕР±Р°РІР»СЏРµРј РєР°СЂС‚РѕС‡РєРё РІ РєР°С‚Р°Р»РѕРі
           */

          this.container.append(inner.innerHTML);
          /**
           * Р•СЃР»Рё РµСЃС‚СЊ РјР°СЂРєРµСЂ, С‡С‚Рѕ СЌС‚Рѕ РїРѕСЃР»РµРґРЅРёРµ СЌР»РµРјРµРЅС‚С‹,
           * РѕС‚РєР»СЋС‡Р°РµРј С‚СЂРёРіРіРµСЂ
           */

          if (inner.getAttribute('data-last') === 'true') {
            this.trigger.css('display', 'none');
          }
        } else {
          console.log('РћС€РёР±РєР° РїРѕР»СѓС‡РµРЅРёСЏ РєР°С‚Р°Р»РѕРіР°');
        }

        this.trigger.removeClass('_is-active');
        this.offsetInput.disabled = true;
      },
      error: () => {
        console.log('РћС€РёР±РєР° РЅР° СЃРµСЂРІРµСЂРµ');
        this.trigger.removeClass('_is-active');
        this.offsetInput.disabled = true;
      }
    });
  }

}

$('.js-reviews').each(function (ind, el) {
  new Reviews(el);
});

/***/ }),
/* 35 */
/***/ (function(module, exports) {

/**
 * РљРѕРіРґР° РІРµСЃСЊ js РѕС‚СЂР°Р±РѕС‚Р°Р» Рё СЃС‚СЂР°РЅРёС†Р° РїРѕСЃС‚СЂРѕРёР»Р°СЃСЊ,
 * РїРѕРєР°Р·С‹РІР°РµРј РµС‘
 */
setTimeout(() => {
  document.getElementsByTagName('html')[0].classList.add('_is-preloaded'); // Р—Р°Р¶РёРіР°РµРј СЃРѕР±С‹С‚РёРµ

  const event = new CustomEvent('preloaded');
  window.dispatchEvent(event);
}, 500);

/***/ })
/******/ ]);
//# sourceMappingURL=main.js.map
