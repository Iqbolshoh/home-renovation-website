<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Дизайн интерьера</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-zero-form-errorbox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-grid-3.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-blocks-page38850329.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-animation-2.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-cover-1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-popup-1.1.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-menusub-1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-forms-1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-slds-1.4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tilda-zero-gallery-1.0.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts-tildasans.css') }}">

    <!-- JS -->
    <script src="{{ asset('js/tilda-stat-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-fallback-1.0.min.js') }}" async></script>
    <script nomodule src="{{ asset('js/tilda-polyfill-1.0.min.js') }}"></script>
    <script src="{{ asset('js/tilda-scripts-3.0.min.js') }}" defer></script>
    <script src="{{ asset('js/tilda-blocks-page38850329.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-lazyload-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-animation-2.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-zero-1.1.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-cover-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-video-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-video-processor-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-popup-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-text-clamp.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-menusub-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-menu-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-submenublocks-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-forms-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-slds-1.4.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-zero-gallery-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/hammer.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-zero-forms-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-animation-sbs-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-zero-scale-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-zero-fixed-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-skiplink-1.0.min.js') }}" async></script>
    <script src="{{ asset('js/tilda-events-1.0.min.js') }}" async></script>
    <script>function t_onReady(t) { "loading" != document.readyState ? t() : document.addEventListener("DOMContentLoaded", t) } function t_onFuncLoad(t, e, a) { "function" == typeof window[t] ? e() : setTimeout(function () { t_onFuncLoad(t, e, a) }, a || 100) } function t396_initialScale(t) { if ((t = document.getElementById("rec" + t)) && (t = t.querySelector(".t396__artboard"))) { var e, a = document.documentElement.clientWidth, r = []; if (i = t.getAttribute("data-artboard-screens")) for (var i = i.split(","), o = 0; o < i.length; o++)r[o] = parseInt(i[o], 10); else r = [320, 480, 640, 960, 1200]; for (o = 0; o < r.length; o++) { var n = r[o]; n <= a && (e = n) } var l = "edit" === window.allrecords.getAttribute("data-tilda-mode"), d = "center" === t396_getFieldValue(t, "valign", e, r), c = "grid" === t396_getFieldValue(t, "upscale", e, r), s = t396_getFieldValue(t, "height_vh", e, r), u = t396_getFieldValue(t, "height", e, r), f = !!window.opr && !!window.opr.addons || !!window.opera || -1 !== navigator.userAgent.indexOf(" OPR/"); if (!l && d && !c && !s && u && !f) { for (var g = parseFloat((a / e).toFixed(3)), b = [t, t.querySelector(".t396__carrier"), t.querySelector(".t396__filter")], o = 0; o < b.length; o++)b[o].style.height = Math.floor(parseInt(u, 10) * g) + "px"; t396_scaleInitial__getElementsToScale(t).forEach(function (t) { t.style.zoom = g }) } } } function t396_scaleInitial__getElementsToScale(t) { return t ? Array.prototype.slice.call(t.children).filter(function (t) { return t && (t.classList.contains("t396__elem") || t.classList.contains("t396__group")) }) : [] } function t396_getFieldValue(t, e, a, r) { var i = r[r.length - 1], o = a === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + a); if (!o) for (var n = 0; n < r.length; n++) { var l = r[n]; if (!(l <= a) && (o = l === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + l))) break } return o } window.dataLayer = window.dataLayer || [], !1 === /bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent) && "undefined" != typeof sessionStorage && "y" !== sessionStorage.getItem("visited") && document.visibilityState && document.addEventListener("DOMContentLoaded", function t() { var e = document.querySelectorAll(".t-records"); Array.prototype.forEach.call(e, function (t) { t.classList.add("t-records_animated") }), setTimeout(function () { Array.prototype.forEach.call(e, function (t) { t.classList.add("t-records_visible") }), sessionStorage.setItem("visited", "y") }, 400) });</script>
</head>

<body class="t-body" style="margin:0;"> <!--allrecords-->
    <div id="allrecords" class="t-records t-records_animated t-records_visible"
        data-hook="blocks-collection-content-node" data-tilda-project-id="7378990" data-tilda-page-id="38850329"
        data-tilda-formskey="5fd665d1bd81ccc3f894e0dfe7378990" data-tilda-lazy="yes" data-tilda-root-zone="com"
        style="overflow: hidden;">
        <noindex>
            <a href="#t-main-content" class="t-skiplink" rel="nofollow" aria-label="Skip to main content"
                style="opacity:0;">To main content</a>
        </noindex> <!--header-->
        <header id="t-header" class="t-records" data-hook="blocks-collection-content-node"
            data-tilda-project-id="7378990" data-tilda-page-id="40381961" data-tilda-page-alias="header"
            data-tilda-formskey="5fd665d1bd81ccc3f894e0dfe7378990" data-tilda-lazy="yes" data-tilda-root-zone="com">
            <div id="rec653298887" class="r t-rec" style="opacity: 1;" data-animationappear="off"
                data-record-type="360"> <!-- T360 -->
                <script>t_onReady(function () { var allRecords = document.querySelector('.t-records'); window.addEventListener('pageshow', function (event) { if (event.persisted) { allRecords.classList.add('t-records_visible'); } }); var rec = document.querySelector('#rec653298887'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = '1'; allRecords.classList.add('t-records_animated'); setTimeout(function () { allRecords.classList.add('t-records_visible'); }, 200); });</script>
                <script>t_onReady(function () {
                        var selects = 'button:not(.t-submit):not(.t835__btn_next):not(.t835__btn_prev):not(.t835__btn_result):not(.t862__btn_next):not(.t862__btn_prev):not(.t862__btn_result):not(.t854__news-btn):not(.t862__btn_next),' +
                            'a:not([href*="#"]):not(.carousel-control):not(.t-carousel__control):not(.t807__btn_reply):not([href^="#price"]):not([href^="javascript"]):not([href^="mailto"]):not([href^="tel"]):not([href^="link_sub"]):not(.js-feed-btn-show-more):not(.t367__opener):not([href^="https://www.dropbox.com/"])'; var elements = document.querySelectorAll(selects); Array.prototype.forEach.call(elements, function (element) {
                                if (element.getAttribute('data-menu-submenu-hook')) return; element.addEventListener('click', function (event) {
                                    var goTo = this.getAttribute('href'); if (goTo !== null) {
                                        var ctrl = event.ctrlKey; var cmd = event.metaKey && navigator.platform.indexOf('Mac') !== -1; if (!ctrl && !cmd) {
                                            var target = this.getAttribute('target'); if (target !== '_blank') {
                                                event.preventDefault(); var allRecords = document.querySelector('.t-records'); if (allRecords) { allRecords.classList.remove('t-records_visible'); }
                                                setTimeout(function () { window.location = goTo; }, 500);
                                            }
                                        }
                                    }
                                });
                            });
                    });</script>
            </div>
            <div id="rec653298888" class="r t-rec t-rec_pt_0 t-rec_pb_0"
                style="padding-top: 0px; padding-bottom: 0px; --zoom: 1;" data-animationappear="off"
                data-record-type="396"> <!-- T396 -->
                <div class="t396">
                    <div class="t396__artboard rendered" data-artboard-recid="653298888"
                        data-artboard-screens="320,640,960,1200" data-artboard-height="0" data-artboard-valign="center"
                        data-artboard-upscale="grid" data-artboard-ovrflw="visible"
                        data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="0"
                        data-artboard-proxy-max-height="0">
                        <div class="t396__carrier" data-artboard-recid="653298888"></div>
                        <div class="t396__filter" data-artboard-recid="653298888"></div>
                        <div class="t396__elem tn-elem tn-elem__6532988881695802957135" data-elem-id="1695802957135"
                            data-elem-type="image" data-field-top-value="30" data-field-left-value="27"
                            data-field-width-value="25" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.6,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-filewidth-value="25" data-field-fileheight-value="25"
                            data-field-top-res-640-value="-302" data-field-left-res-640-value="25"
                            data-field-top-res-960-value="27" data-field-left-res-960-value="25"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 27px; top: 30px; width: 25px; transition: none;">
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532988881695802963736" data-elem-id="1695802963736"
                            data-elem-type="image" data-field-top-value="100" data-field-left-value="27"
                            data-field-width-value="25" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.6,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-filewidth-value="25" data-field-fileheight-value="25"
                            data-field-top-res-640-value="-232" data-field-left-res-640-value="25"
                            data-field-top-res-960-value="97" data-field-left-res-960-value="25"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 27px; top: 100px; width: 25px; transition: none;">
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532988881696008238634" data-elem-id="1696008238634"
                            data-elem-type="image" data-field-top-value="-299" data-field-left-value="290"
                            data-field-width-value="47" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-field-filewidth-value="512"
                            data-field-fileheight-value="512" data-field-top-res-320-value="23"
                            data-field-left-res-320-value="-10" data-field-width-res-320-value="40"
                            data-field-top-res-640-value="25" data-field-left-res-640-value="-21"
                            data-field-axisx-res-640-value="right" data-field-container-res-640-value="window"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 450.5px; top: -299px; width: 47px;"> <a class="tn-atom" href="#menuopen">
                                <img class="tn-atom__img t-img loaded"
                                    data-original="https://static.tildacdn.com/tild3064-3761-4033-b737-353963626662/svg-gobbler_-_2023-0.svg"
                                    alt="" imgfield="tn_img_1696008238634" src="./src/images/svg-gobbler_-_2023-0.svg">
                            </a> </div>
                        <div class="t396__elem tn-elem tn-elem__6532988881695797803922 t-sbs-anim_started t-sbs-anim_reversed"
                            data-elem-id="1695797803922" data-elem-type="text" data-field-top-value="30"
                            data-field-left-value="-433" data-field-width-value="56" data-field-axisy-value="top"
                            data-field-axisx-value="right" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="" data-field-widthunits-value="px"
                            data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-290" data-field-left-res-640-value="-434"
                            data-field-top-res-960-value="27" data-field-left-res-960-value="-435"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            data-planned-dir=""
                            style="top: 30px; left: 1032px; width: 56px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-653298888-1695797803922"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="#about"
                                        style="color: inherit">О нас</a></div>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532988881695797803924" data-elem-id="1695797803924"
                            data-elem-type="text" data-field-top-value="30" data-field-left-value="-295"
                            data-field-width-value="108" data-field-axisy-value="top" data-field-axisx-value="right"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-291" data-field-left-res-640-value="-305"
                            data-field-top-res-960-value="27" data-field-left-res-960-value="-298"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 30px; left: 1118px; width: 108px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-653298888-1695797803924"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;">
                                    <a href="#price" style="color: inherit" class="t794__tm-link"
                                        data-tooltip-menu-id="671035158">Стоимость</a>
                                </div>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532988881695797803926" data-elem-id="1695797803926"
                            data-elem-type="text" data-field-top-value="30" data-field-left-value="-177"
                            data-field-width-value="94" data-field-axisy-value="top" data-field-axisx-value="right"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-291" data-field-left-res-640-value="-181"
                            data-field-top-res-960-value="27"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 30px; left: 1250px; width: 94px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-653298888-1695797803926"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;">
                                    <a href="#projects" style="color: inherit">Портфолио</a>
                                </div>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532988881695797803928" data-elem-id="1695797803928"
                            data-elem-type="text" data-field-top-value="30" data-field-left-value="-70"
                            data-field-width-value="77" data-field-axisy-value="top" data-field-axisx-value="right"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-291" data-field-left-res-640-value="-73"
                            data-field-top-res-960-value="27" data-field-left-res-960-value="-71"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 30px; left: 1374px; width: 77px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-653298888-1695797803928"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a
                                        href="#contacts" style="color: inherit">Контакты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('653298888'); }); });</script>
                <!-- /T396 -->
            </div>
            <div id="rec653298889" class="r t-rec t-rec_pt_0 t-rec_pb_0"
                style="padding-top: 0px; padding-bottom: 0px; opacity: 1;" data-animationappear="off"
                data-record-type="450"> <!-- t450 -->
                <div id="nav653298889marker"></div>
                <div class="t450__overlay">
                    <div class="t450__overlay_bg"> </div>
                </div>
                <div id="nav653298889" class="t450" data-tooltip-hook="#menuopen"
                    style="max-width: 260px;background-color: #6c7177;"> <button type="button"
                        class="t450__close-button t450__close t450_opened " style="background-color: #6c7177;"
                        aria-label="Закрыть меню">
                        <div class="t450__close_icon"> <span style="background-color:#ffffff;"></span> <span
                                style="background-color:#ffffff;"></span> <span
                                style="background-color:#ffffff;"></span> <span
                                style="background-color:#ffffff;"></span> </div>
                    </button>
                    <div class="t450__container t-align_left">
                        <div class="t450__top">
                            <nav class="t450__menu">
                                <ul role="list" class="t450__list t-menu__list">
                                    <li class="t450__list_item"> <a class="t-menu__link-item t-active" href="./"
                                            data-menu-submenu-hook="" data-menu-item-number="1">
                                            Главная
                                        </a> </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="#about"
                                            data-menu-submenu-hook="" data-menu-item-number="2">
                                            О нас
                                        </a>
                                    </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="#projects"
                                            data-menu-submenu-hook="" data-menu-item-number="4">
                                            Портфолио
                                        </a>
                                    </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="#price"
                                            data-menu-submenu-hook="" data-menu-item-number="4">
                                            Стоимость
                                        </a>
                                    </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="#contacts"
                                            data-menu-submenu-hook="" data-menu-item-number="5">
                                            Контакты
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <div class="t450__rightside">
                            <div class="t450__rightcontainer">
                                <div class="t450__right_social_links">
                                    <div class="t-sociallinks">
                                        <ul role="list" class="t-sociallinks__wrapper" aria-label="Соц. сети">
                                            <!-- new soclinks -->
                                            <li class="t-sociallinks__item t-sociallinks__item_vk"><a
                                                    href="https://m.vk.com/id759066" target="_blank"
                                                    rel="nofollow noopener" aria-label="vk"
                                                    style="width: 30px; height: 30px;"><svg class="t-sociallinks__svg"
                                                        role="presentation" width="30px" height="30px"
                                                        viewBox="0 0 100 100" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M50 100c27.614 0 50-22.386 50-50S77.614 0 50 0 0 22.386 0 50s22.386 50 50 50ZM25 34c.406 19.488 10.15 31.2 27.233 31.2h.968V54.05c6.278.625 11.024 5.216 12.93 11.15H75c-2.436-8.87-8.838-13.773-12.836-15.647C66.162 47.242 71.783 41.62 73.126 34h-8.058c-1.749 6.184-6.932 11.805-11.867 12.336V34h-8.057v21.611C40.147 54.362 33.838 48.304 33.556 34H25Z"
                                                            fill="#ffffff"></path>
                                                    </svg></a></li>&nbsp;<li
                                                class="t-sociallinks__item t-sociallinks__item_behance"><a
                                                    href="https://www.behance.net/dikii-design" target="_blank"
                                                    rel="nofollow noopener" aria-label="behance"
                                                    style="width: 30px; height: 30px;"><svg class="t-sociallinks__svg"
                                                        role="presentation" width="30px" height="30px"
                                                        viewBox="0 0 100 100" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M50 100c27.6142 0 50-22.3858 50-50S77.6142 0 50 0 0 22.3858 0 50s22.3858 50 50 50Zm-1.4722-51.0072c1.0869-.5533 1.9078-1.167 2.4634-1.8412.9991-1.2023 1.4951-2.7852 1.4951-4.7637 0-1.9173-.4897-3.5669-1.4794-4.9411-1.6488-2.2414-4.4411-3.3824-8.38-3.4468H27v32.3572h14.5721c1.6395 0 3.162-.1468 4.5683-.4371 1.4017-.2904 2.6212-.8327 3.6517-1.6246.915-.6843 1.6763-1.5343 2.2892-2.5412.9638-1.5217 1.4378-3.2435 1.4378-5.1631 0-1.8561-.4207-3.4374-1.2612-4.7394-.835-1.3067-2.0836-2.2555-3.7301-2.859Zm-14.066-9.3729h6.0226c1.5476 0 2.8229.1719 3.8196.5062 1.1599.4803 1.7383 1.4794 1.7383 2.9846 0 1.3624-.4363 2.3112-1.3122 2.8449-.8766.5344-2.0138.8021-3.4209.8021h-6.8474v-7.1378Zm10.1153 20.5507c-.7848.3838-1.8717.5674-3.2765.5674h-6.838v-8.6233h6.9455c1.3867.0133 2.469.1938 3.2357.5486 1.371.6239 2.0577 1.7854 2.0577 3.4664 0 1.9926-.7094 3.3354-2.1244 4.0409Zm29.3836-24.827v3.2365H60.9299v-3.2365h13.0308Zm2.9849 10.7282c.9504 1.3797 1.5625 2.976 1.8474 4.7936.1578 1.0587.2284 2.5945.1994 4.602H62.1169c.0934 2.3293.897 3.9585 2.4227 4.8901.9197.5847 2.0349.8703 3.3408.8703 1.3766 0 2.4988-.3484 3.3629-1.0634.4709-.379.886-.9143 1.2447-1.59h6.1857c-.1616 1.3758-.9064 2.7712-2.2453 4.1893-2.0734 2.2539-4.9819 3.384-8.7167 3.384-3.085 0-5.8044-.9527-8.165-2.8519-2.3521-1.9063-3.534-4.9968-3.534-9.285 0-4.0205 1.0611-7.0985 3.1894-9.2402 2.1363-2.1464 4.8933-3.2145 8.2922-3.2145 2.0146 0 3.8298.3602 5.4504 1.0838 1.6151.7244 2.9493 1.8647 4.0009 3.4319Zm-13.0669 1.8098c-.8609.8789-1.3961 2.075-1.6159 3.5881h10.4426c-.1138-1.6104-.6514-2.83-1.6199-3.6627-.9606-.8358-2.1597-1.2549-3.5912-1.2549-1.5578 0-2.7609.4481-3.6156 1.3295Z"
                                                            fill="#ffffff"></path>
                                                    </svg></a></li>&nbsp;<li
                                                class="t-sociallinks__item t-sociallinks__item_instagram"><a
                                                    href="https://www.instagram.com/dikiidesign/" target="_blank"
                                                    rel="nofollow noopener" aria-label="instagram"
                                                    style="width: 30px; height: 30px;"><svg class="t-sociallinks__svg"
                                                        role="presentation" width="30px" height="30px"
                                                        viewBox="0 0 100 100" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M50 100C77.6142 100 100 77.6142 100 50C100 22.3858 77.6142 0 50 0C22.3858 0 0 22.3858 0 50C0 77.6142 22.3858 100 50 100ZM25 39.3918C25 31.4558 31.4566 25 39.3918 25H60.6082C68.5442 25 75 31.4566 75 39.3918V60.8028C75 68.738 68.5442 75.1946 60.6082 75.1946H39.3918C31.4558 75.1946 25 68.738 25 60.8028V39.3918ZM36.9883 50.0054C36.9883 42.8847 42.8438 37.0922 50.0397 37.0922C57.2356 37.0922 63.0911 42.8847 63.0911 50.0054C63.0911 57.1252 57.2356 62.9177 50.0397 62.9177C42.843 62.9177 36.9883 57.1252 36.9883 50.0054ZM41.7422 50.0054C41.7422 54.5033 45.4641 58.1638 50.0397 58.1638C54.6153 58.1638 58.3372 54.5041 58.3372 50.0054C58.3372 45.5066 54.6145 41.8469 50.0397 41.8469C45.4641 41.8469 41.7422 45.5066 41.7422 50.0054ZM63.3248 39.6355C65.0208 39.6355 66.3956 38.2606 66.3956 36.5646C66.3956 34.8687 65.0208 33.4938 63.3248 33.4938C61.6288 33.4938 60.2539 34.8687 60.2539 36.5646C60.2539 38.2606 61.6288 39.6355 63.3248 39.6355Z"
                                                            fill="#ffffff"></path>
                                                    </svg></a></li><!-- /new soclinks -->
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () { var rec = document.querySelector('#rec653298889'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = 1; t_onFuncLoad('t450_initMenu', function () { t450_initMenu('653298889'); }); });</script>
                <script>t_onReady(function () { setTimeout(function () { t_onFuncLoad('t_menusub_init', function () { t_menusub_init('653298889'); }); }, 500); });</script>
            </div>
            <div id="rec671023936" class="r t-rec t-rec_pt_0 t-rec_pb_0"
                style="padding-top: 0px; padding-bottom: 0px; --zoom: 1;" data-animationappear="off"
                data-record-type="396"> <!-- T396 -->
                <div class="t396">
                    <div class="t396__artboard rendered" data-artboard-recid="671023936"
                        data-artboard-screens="320,640,960,1200" data-artboard-height="70" data-artboard-valign="center"
                        data-artboard-upscale="grid" data-artboard-ovrflw="visible" data-artboard-pos="fixed"
                        data-artboard-fixed-trigger="600" data-artboard-appear-anim="fixslide"
                        data-artboard-fixed-need-js="y" data-artboard-height-res-320="60"
                        data-artboard-height-res-960="70" data-artboard-proxy-min-offset-top="0"
                        data-artboard-proxy-min-height="70" data-artboard-proxy-max-height="70">
                        <div class="t396__carrier" data-artboard-recid="671023936"></div>
                        <div class="t396__filter" data-artboard-recid="671023936"></div>
                        <div class="t396__elem tn-elem tn-elem__6710239361700654144326" data-elem-id="1700654144326"
                            data-elem-type="shape" data-field-top-value="0" data-field-left-value="0"
                            data-field-height-value="70" data-field-width-value="100" data-field-axisy-value="top"
                            data-field-axisx-value="left" data-field-container-value="window"
                            data-field-topunits-value="px" data-field-leftunits-value="px"
                            data-field-heightunits-value="px" data-field-widthunits-value="%"
                            data-field-height-res-320-value="60" data-field-top-res-640-value="0"
                            data-field-left-res-640-value="0" data-field-top-res-960-value="0"
                            data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                            style="width: 1521px; left: 0px; top: 0px; height: 70px;">
                            <div class="tn-atom"> </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361696255455067" data-elem-id="1696255455067"
                            data-elem-type="image" data-field-top-value="5" data-field-left-value="40"
                            data-field-width-value="100" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-field-filewidth-value="139"
                            data-field-fileheight-value="81" data-field-top-res-320-value="3"
                            data-field-left-res-320-value="10" data-field-width-res-320-value="92"
                            data-field-top-res-640-value="4" data-field-left-res-640-value="10"
                            data-field-width-res-640-value="109" data-field-top-res-960-value="5"
                            data-field-left-res-960-value="20"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 40px; top: 5px; width: 100px;"> <a class="tn-atom" href="./"> <img
                                    class="tn-atom__img t-img loaded"
                                    data-original="https://static.tildacdn.com/tild3865-6163-4735-a238-636339653435/Layer_7.svg"
                                    alt="" imgfield="tn_img_1696255455067" src="./src/images/Layer_7.svg"> </a> </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361695802957135" data-elem-id="1695802957135"
                            data-elem-type="image" data-field-top-value="23" data-field-left-value="-100"
                            data-field-width-value="25" data-field-axisy-value="top" data-field-axisx-value="right"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.6,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-302" data-field-left-res-640-value="25"
                            data-field-top-res-960-value="23" data-field-left-res-960-value="919"
                            data-field-axisx-res-960-value="left" data-field-container-res-960-value="window"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 1396px; top: 23px; width: 25px; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1695802957135"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;"><a
                                    class="tn-atom" href="https://www.behance.net/dikii-design" target="_blank"
                                    rel="noopener" style="pointer-events: auto;"> <img class="tn-atom__img t-img loaded"
                                        data-original="https://static.tildacdn.com/tild3063-3534-4830-a163-343931323464/svg-gobbler_84_1_1.svg"
                                        alt="" imgfield="tn_img_1695802957135"
                                        src="./src/images/svg-gobbler_84_1_1.svg"> </a>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361695802960725" data-elem-id="1695802960725"
                            data-elem-type="image" data-field-top-value="23" data-field-left-value="-70"
                            data-field-width-value="25" data-field-axisy-value="top" data-field-axisx-value="right"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.6,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-filewidth-value="25" data-field-fileheight-value="25"
                            data-field-top-res-640-value="-267" data-field-left-res-640-value="25"
                            data-field-top-res-960-value="23" data-field-left-res-960-value="-50"
                            data-field-axisx-res-960-value="right" data-field-container-res-960-value="window"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 1426px; top: 23px; width: 25px; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1695802960725"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;"><a
                                    class="tn-atom" href="https://m.vk.com/id759066" target="_blank" rel="noopener"
                                    style="pointer-events: auto;"> <img class="tn-atom__img t-img loaded"
                                        data-original="https://static.tildacdn.com/tild3435-6438-4136-b265-343437373339/19vk_1.svg"
                                        alt="" imgfield="tn_img_1695802960725" src="./src/images/19vk_1.svg"> </a>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361695802963736" data-elem-id="1695802963736"
                            data-elem-type="image" data-field-top-value="23" data-field-left-value="-40"
                            data-field-width-value="25" data-field-axisy-value="top" data-field-axisx-value="right"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.6,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-filewidth-value="25" data-field-fileheight-value="25"
                            data-field-top-res-640-value="-232" data-field-left-res-640-value="25"
                            data-field-top-res-960-value="23" data-field-left-res-960-value="-20"
                            data-field-axisx-res-960-value="right" data-field-container-res-960-value="window"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 1456px; top: 23px; width: 25px; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1695802963736"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;"><a
                                    class="tn-atom" href="https://www.instagram.com/dikiidesign/" target="_blank"
                                    rel="noopener" style="pointer-events: auto;"> <img class="tn-atom__img t-img loaded"
                                        data-original="https://static.tildacdn.com/tild6164-3634-4033-b562-656264646638/Group_6_1.svg"
                                        alt="" imgfield="tn_img_1695802963736" src="./src/images/Group_6_1.svg"> </a>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361696008238634" data-elem-id="1696008238634"
                            data-elem-type="image" data-field-top-value="-299" data-field-left-value="290"
                            data-field-width-value="47" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-field-filewidth-value="512"
                            data-field-fileheight-value="512" data-field-top-res-320-value="10"
                            data-field-left-res-320-value="-5" data-field-width-res-320-value="40"
                            data-field-top-res-640-value="12" data-field-left-res-640-value="-5"
                            data-field-axisx-res-640-value="right" data-field-container-res-640-value="window"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 450.5px; top: -299px; width: 47px;"> <a class="tn-atom" href="#menuopen">
                                <img class="tn-atom__img t-img loaded"
                                    data-original="https://static.tildacdn.com/tild3365-3337-4739-a331-366532336162/svg-gobbler_-_2023-0.svg"
                                    alt="" imgfield="tn_img_1696008238634"
                                    src="./src/images/svg-gobbler_-_2023-0(1).svg"> </a>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361695797803922" data-elem-id="1695797803922"
                            data-elem-type="text" data-field-top-value="25" data-field-left-value="261"
                            data-field-width-value="56" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-290" data-field-left-res-640-value="-434"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="162"
                            data-field-axisx-res-960-value="left" data-field-container-res-960-value="grid"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 25px; left: 421.5px; width: 56px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1695797803922"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="./"
                                        style="color: inherit">Главная</a></div>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361700654464285" data-elem-id="1700654464285"
                            data-elem-type="text" data-field-top-value="25" data-field-left-value="411"
                            data-field-width-value="66" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-291" data-field-left-res-640-value="-181"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="312"
                            data-field-axisx-res-960-value="left" data-field-container-res-960-value="grid"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 25px; left: 571.5px; width: 66px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1700654464285"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="#about"
                                        style="color: inherit">О нас</a></div>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361695797803926" data-elem-id="1695797803926"
                            data-elem-type="text" data-field-top-value="25" data-field-left-value="561"
                            data-field-width-value="102" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-291" data-field-left-res-640-value="-181"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="462"
                            data-field-axisx-res-960-value="left" data-field-container-res-960-value="grid"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 25px; left: 721.5px; width: 102px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1695797803926"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="#price"
                                        style="color: inherit">Стоимость</a>
                                </div>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361695797803924" data-elem-id="1695797803924"
                            data-elem-type="text" data-field-top-value="25" data-field-left-value="711"
                            data-field-width-value="114" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-291" data-field-left-res-640-value="-305"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="612"
                            data-field-axisx-res-960-value="left" data-field-container-res-960-value="grid"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 25px; left: 871.5px; width: 114px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1695797803924"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a
                                        href="#projects" style="color: inherit" class="t794__tm-link"
                                        data-tooltip-menu-id="671035158">Портфолио</a>
                                </div>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6710239361695797803928" data-elem-id="1695797803928"
                            data-elem-type="text" data-field-top-value="25" data-field-left-value="861"
                            data-field-width-value="77" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-640-value="-291" data-field-left-res-640-value="-73"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="762"
                            data-field-axisx-res-960-value="left" data-field-container-res-960-value="grid"
                            data-field-topunits-res-960-value="px" data-field-leftunits-res-960-value="px"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 25px; left: 1021.5px; width: 77px; height: auto; transition: none;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-671023936-1695797803928"
                                style="display: table; width: inherit; height: inherit; pointer-events: none;">
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a
                                        href="#contacts" style="color: inherit">Контакты</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('671023936'); }); });</script>
                <!-- /T396 -->
            </div>
        </header>

        <div id="t-main-content"></div> <!--/header-->
        <div id="rec661730604" class="r t-rec t-rec_pt_0 t-rec_pb_0"
            style="padding-top: 0px; padding-bottom: 0px; --zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="661730604"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="800" data-artboard-valign="center"
                    data-artboard-height_vh="100" data-artboard-upscale="grid" data-artboard-height-res-640="500"
                    data-artboard-height-res-960="600" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="800" data-artboard-proxy-max-height="800">
                    <div class="t396__carrier" data-artboard-recid="661730604"></div>
                    <div class="t396__filter" data-artboard-recid="661730604"></div>
                    <div class="t396__elem tn-elem tn-elem__6617306041698922282904 t-sbs-anim_started tn-elem__gallery_arrows-none"
                        data-elem-id="1698922282904" data-elem-type="gallery" data-field-top-value="0"
                        data-field-left-value="0" data-field-height-value="100" data-field-width-value="100"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':30000,'mx':'0','my':'0','sx':1.3,'sy':1.3,'op':'1','ro':'0','bl':'0','ea':'easeInOut','dt':'0'},{'ti':20000,'mx':'0','my':'0','sx':1,'sy':1,'op':'1','ro':'0','bl':'0','ea':'easeInOut','dt':'0'}]"
                        data-field-imgs-value='[{&quot;lid&quot;:1698922282904,&quot;li_img&quot;:&quot;https://static.tildacdn.com/tild6163-3430-4632-a132-643039386563/1-1.jpg&quot;,&quot;li_imgalt&quot;:&quot;&quot;,&quot;li_imgtitle&quot;:&quot;&quot;,&quot;li_youtube&quot;:&quot;&quot;,&quot;li_vimeo&quot;:&quot;&quot;,&quot;li_imgurl&quot;:&quot;&quot;,&quot;li_imgtarget&quot;:false,&quot;li_imgnofollow&quot;:false},{&quot;lid&quot;:1698922282905,&quot;li_img&quot;:&quot;https://static.tildacdn.com/tild6535-3533-4063-a437-306264343938/2-2.jpg&quot;,&quot;li_imgalt&quot;:&quot;&quot;,&quot;li_imgtitle&quot;:&quot;&quot;,&quot;li_youtube&quot;:&quot;&quot;,&quot;li_vimeo&quot;:&quot;&quot;,&quot;li_imgurl&quot;:&quot;&quot;,&quot;li_imgtarget&quot;:false,&quot;li_imgnofollow&quot;:false}]'
                        data-field-slds_arrowcolor-value="#000000" data-field-slds_arrowbgcolor-value="#e8e8e8"
                        data-field-slds_dotsbgcolor-value="#999999" data-field-slds_dotsbgcoloractive-value="#222222"
                        data-field-slds_speed-value="fast" data-field-slds_autoplay-value="3"
                        data-field-slds_playiconcolor-value="#ffffff" data-field-slds_stretch-value="cover"
                        data-field-slds_imgposition-value="center center" data-field-slds_loop-value="loop"
                        data-field-slds_arrowalign-value="center" data-field-slds_arrowbetweenmargin-value="10"
                        data-field-slds_playiconsize-value="70" data-field-slds_dotssize-value="8"
                        data-field-slds_dotscontrols-value="none" data-field-slds_arrowcontrols-value="none"
                        data-field-slds_arrowsize-value="s" data-field-slds_arrowlinesize-value="1"
                        data-field-slds_captiontopmargin-value="20" data-field-slds_dotsvmargin-value="10"
                        data-field-slds_captionwidth-value="80" data-field-slds_arrowhmargin-value="20"
                        data-field-slds_dotshmargin-value="15" data-field-slds_arrowvmargin-value="10"
                        data-field-borderstyle-value="solid"
                        data-fields="width,height,top,left,imgs,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: calc(1521px * var(--zoom, 1)); left: calc(0px * var(--zoom, 1)); top: calc(0px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-661730604-1698922282904"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom tn-atom__gallery">
                                <div class="t-slds" style="visibility: visible;">
                                    <div class="t-slds__main"
                                        style="width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1)); touch-action: pan-y; -webkit-user-drag: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">
                                        <div class="t-slds__container">
                                            <div class="t-slds__items-wrapper t-slds_animated-fast"
                                                data-slider-transition="300" data-slider-with-cycle="true"
                                                data-slider-correct-height="true" data-auto-correct-mobile-width="false"
                                                data-slider-is-preview="true" data-slider-initialized="true"
                                                data-slider-totalslides="2" data-slider-pos="1" data-slider-cycle="yes"
                                                data-slider-animated="" data-swiper-initialized="true"
                                                style="width: 6084px; height: 800px; transform: translateX(-1521px);"
                                                data-slider-timeout="3000" data-slider-interval-id="268"
                                                data-slider-stopped="">
                                                <div class="t-slds__item t-slds__item-loaded" data-slide-index="0"
                                                    aria-hidden="true" style="width: 1521px; opacity: 0;">
                                                    <div class="t-width">
                                                        <div itemscope=""
                                                            class="t-null__slds-wrapper t-slds__wrapper t-slds__wrapper_100 t-align_center">
                                                            <meta itemprop="image" content="">
                                                            <meta itemprop="caption" content="SEO">
                                                            <div data-img-lid="1698922282905"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="https://static.tildacdn.com/tild6535-3533-4063-a437-306264343938/2-2.jpg"
                                                                style="background-image: url(&quot;https://optim.tildacdn.com/tild6535-3533-4063-a437-306264343938/-/format/webp/2-2.jpg.webp&quot;); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282905"
                                                                data-tu-noclick="yes" data-tu-is-image="yes"
                                                                data-tu-multiple="no"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-slds__item t-slds__item-loaded t-slds__item_active"
                                                    data-slide-index="1" aria-hidden="false"
                                                    style="width: 1521px; opacity: 1;">
                                                    <div class="t-width">
                                                        <div itemscope=""
                                                            class="t-null__slds-wrapper t-slds__wrapper t-slds__wrapper_100 t-align_center">
                                                            <meta itemprop="image" content="">
                                                            <meta itemprop="caption" content="SEO">
                                                            <div data-img-lid="1698922282904"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="https://static.tildacdn.com/tild6163-3430-4632-a132-643039386563/1-1.jpg"
                                                                style="background-image: url(&quot;https://optim.tildacdn.com/tild6163-3430-4632-a132-643039386563/-/format/webp/1-1.jpg.webp&quot;); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282904"
                                                                data-tu-noclick="yes" data-tu-is-image="yes"
                                                                data-tu-multiple="no"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-slds__item t-slds__item-loaded" data-slide-index="2"
                                                    aria-hidden="true" style="width: 1521px; opacity: 0;">
                                                    <div class="t-width">
                                                        <div itemscope=""
                                                            class="t-null__slds-wrapper t-slds__wrapper t-slds__wrapper_100 t-align_center">
                                                            <meta itemprop="image" content="">
                                                            <meta itemprop="caption" content="SEO">
                                                            <div data-img-lid="1698922282905"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="https://static.tildacdn.com/tild6535-3533-4063-a437-306264343938/2-2.jpg"
                                                                style="background-image: url(&quot;https://optim.tildacdn.com/tild6535-3533-4063-a437-306264343938/-/format/webp/2-2.jpg.webp&quot;); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282905"
                                                                data-tu-noclick="yes" data-tu-is-image="yes"
                                                                data-tu-multiple="no"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-slds__item t-slds__item-loaded" data-slide-index="3"
                                                    aria-hidden="true" style="width: 1521px; opacity: 0;">
                                                    <div class="t-width">
                                                        <div itemscope=""
                                                            class="t-null__slds-wrapper t-slds__wrapper t-slds__wrapper_100 t-align_center">
                                                            <meta itemprop="image" content="">
                                                            <meta itemprop="caption" content="SEO">
                                                            <div data-img-lid="1698922282904"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="https://static.tildacdn.com/tild6163-3430-4632-a132-643039386563/1-1.jpg"
                                                                style="background-image: url(&quot;https://optim.tildacdn.com/tild6163-3430-4632-a132-643039386563/-/format/webp/1-1.jpg.webp&quot;); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282904"
                                                                data-tu-noclick="yes" data-tu-is-image="yes"
                                                                data-tu-multiple="no"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-slds__bullet_wrapper"
                                        style="display: none; margin-bottom: 0px; padding-bottom: 10px;">
                                        <div class="t-slds__bullet t-slds__bullet_active" data-slide-bullet-for="1">
                                            <div class="t-slds__bullet_body"
                                                style="width: calc(8px * var(--zoom, 1)); height: calc(8px * var(--zoom, 1)); background-color: rgb(153, 153, 153);"
                                                aria-current="true"></div>
                                        </div>
                                        <div class="t-slds__bullet" data-slide-bullet-for="2">
                                            <div class="t-slds__bullet_body"
                                                style="width: calc(8px * var(--zoom, 1)); height: calc(8px * var(--zoom, 1)); background-color: rgb(153, 153, 153);">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-slds__caption__container"></div>
                                    <div class="t-slds__arrow_container t-slds__arrow_container-center"
                                        style="width: 100%;">
                                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-left"
                                            data-slide-direction="left" style="height: 800px;">
                                            <div class="t-slds__arrow t-slds__arrow-left"
                                                style="margin-top: 0px; width: calc(30px * var(--zoom, 1)); height: calc(30px * var(--zoom, 1)); background-color: rgb(232, 232, 232); left: calc(20px * var(--zoom, 1)); right: auto;">
                                                <div class="t-slds__arrow_body t-slds__arrow_body-left"
                                                    style="width: calc(30px * var(--zoom, 1)) !important;"><svg
                                                        class="t-null__slds-arrow t-null__slds-arrow_1" width="94"
                                                        height="94" viewBox="0 0 94 94" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" style="display: block;">
                                                        <path d="M39 68L60 47L39 26" stroke="black"
                                                            vector-effect="non-scaling-stroke"
                                                            style="stroke-width: 1px; stroke: rgb(0, 0, 0);"></path>
                                                    </svg><svg class="t-null__slds-arrow t-null__slds-arrow_2"
                                                        width="94" height="94" viewBox="0 0 94 94" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <path d="M63 47.917H30" stroke="black"
                                                            vector-effect="non-scaling-stroke"
                                                            style="stroke-width: 1px; stroke: rgb(0, 0, 0);"></path>
                                                        <path d="M46.917 64L63 47.917L46.917 31.834" stroke="black"
                                                            vector-effect="non-scaling-stroke"
                                                            style="stroke-width: 1px; stroke: rgb(0, 0, 0);"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                        <div class="t-slds__arrow_wrapper t-slds__arrow_wrapper-right"
                                            data-slide-direction="right" style="height: 800px;">
                                            <div class="t-slds__arrow t-slds__arrow-right "
                                                style="margin-top: 0px; width: calc(30px * var(--zoom, 1)); height: calc(30px * var(--zoom, 1)); background-color: rgb(232, 232, 232); left: auto; right: calc(20px * var(--zoom, 1));">
                                                <div class="t-slds__arrow_body t-slds__arrow_body-right"
                                                    style="width: calc(30px * var(--zoom, 1)) !important;"><svg
                                                        class="t-null__slds-arrow t-null__slds-arrow_1" width="94"
                                                        height="94" viewBox="0 0 94 94" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" style="display: block;">
                                                        <path d="M39 68L60 47L39 26" stroke="black"
                                                            vector-effect="non-scaling-stroke"
                                                            style="stroke-width: 1px; stroke: rgb(0, 0, 0);"></path>
                                                    </svg><svg class="t-null__slds-arrow t-null__slds-arrow_2"
                                                        width="94" height="94" viewBox="0 0 94 94" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg" style="display: none;">
                                                        <path d="M63 47.917H30" stroke="black"
                                                            vector-effect="non-scaling-stroke"
                                                            style="stroke-width: 1px; stroke: rgb(0, 0, 0);"></path>
                                                        <path d="M46.917 64L63 47.917L46.917 31.834" stroke="black"
                                                            vector-effect="non-scaling-stroke"
                                                            style="stroke-width: 1px; stroke: rgb(0, 0, 0);"></path>
                                                    </svg></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="t-slds__caption t-slds__caption-active" data-slide-caption="1">
                                        <div class="t-slds__caption_wrapper">
                                            <div class="t-slds__title"></div>
                                        </div>
                                    </div>
                                    <div class="t-slds__caption" data-slide-caption="2">
                                        <div class="t-slds__caption_wrapper">
                                            <div class="t-slds__title"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041696253442236" data-elem-id="1696253442236"
                        data-elem-type="shape" data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="100" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="%" data-field-widthunits-value="%"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1521px; left: 0px; top: 0px; height: 800px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041695797803907" data-elem-id="1695797803907"
                        data-elem-type="text" data-field-top-value="-222" data-field-left-value="176"
                        data-field-width-value="986" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-221" data-field-left-res-320-value="18"
                        data-field-width-res-320-value="294" data-field-top-res-640-value="-185"
                        data-field-left-res-640-value="47" data-field-top-res-960-value="-168"
                        data-field-left-res-960-value="118" data-field-width-res-960-value="566"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 386px; left: 176px; width: 986px; height: auto;">
                        <h1 class="tn-atom" field="tn_text_1695797803907" style="line-height: 96px;">Дизайн интерьера
                        </h1>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041695797803912" data-elem-id="1695797803912"
                        data-elem-type="text" data-field-top-value="-124" data-field-left-value="180"
                        data-field-width-value="446" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-165" data-field-left-res-320-value="20"
                        data-field-width-res-320-value="272" data-field-top-res-640-value="-109"
                        data-field-left-res-640-value="47" data-field-top-res-960-value="-92"
                        data-field-left-res-960-value="120" data-field-width-res-960-value="361"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 619px; left: 180px; width: 446px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695797803912" style="line-height: 29px;">Разрабатываем
                            грамотные проекты квартир, домов и офисов под ваш бюджет</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041695797803957" data-elem-id="1695797803957"
                        data-elem-type="text" data-field-top-value="-134" data-field-left-value="-108"
                        data-field-width-value="322" data-field-axisy-value="bottom" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-64" data-field-left-res-320-value="20"
                        data-field-top-res-640-value="-57" data-field-left-res-640-value="47"
                        data-field-axisx-res-640-value="left" data-field-top-res-960-value="-93"
                        data-field-left-res-960-value="-99" data-field-width-res-960-value="242"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 640px; left: 1091px; width: 322px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695797803957" style="line-height: 26px;">Бесплатная
                            консультация</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041695797803958" data-elem-id="1695797803958"
                        data-elem-type="shape" data-field-top-value="-123" data-field-left-value="-70"
                        data-field-height-value="2" data-field-width-value="360" data-field-axisy-value="bottom"
                        data-field-axisx-value="right" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="-58"
                        data-field-left-res-320-value="20" data-field-width-res-320-value="280"
                        data-field-top-res-640-value="-51" data-field-left-res-640-value="47"
                        data-field-axisx-res-640-value="left" data-field-top-res-960-value="-87"
                        data-field-left-res-960-value="-41" data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 360px; left: 1091px; top: 675px; height: 2px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041695802954755" data-elem-id="1695802954755"
                        data-elem-type="image" data-field-top-value="-139" data-field-left-value="-74"
                        data-field-width-value="16" data-field-axisy-value="bottom" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1633960220381,1695798587077,1697392484171"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':45,'bl':'0','ea':'','dt':'0'}]"
                        data-field-filewidth-value="16" data-field-fileheight-value="16"
                        data-field-top-res-320-value="-69" data-field-left-res-320-value="281"
                        data-field-top-res-640-value="-62" data-field-left-res-640-value="337"
                        data-field-axisx-res-640-value="left" data-field-top-res-960-value="-98"
                        data-field-left-res-960-value="-40"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1431px; top: 645px; width: 16px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-661730604-1695802954755"
                            style="display: inherit; width: inherit; height: inherit;">
                            <div class="tn-atom"> <img class="tn-atom__img t-img loaded"
                                    data-original="https://static.tildacdn.com/tild3762-6564-4061-a231-376432646366/arrow_1.svg"
                                    alt="" imgfield="tn_img_1695802954755" src="./src/images/arrow_1.svg"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041695909801635" data-elem-id="1695909801635"
                        data-elem-type="shape" data-field-top-value="0" data-field-left-value="80"
                        data-field-height-value="100" data-field-width-value="1" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="px" data-field-top-res-640-value="-710"
                        data-field-left-res-640-value="60" data-field-left-res-960-value="70"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1px; left: 80px; top: 0px; height: 800px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041696001042438" data-elem-id="1696001042438"
                        data-elem-type="text" data-field-top-value="-151" data-field-left-value="13"
                        data-field-width-value="52" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="-658" data-field-top-res-960-value="-118"
                        data-field-left-res-960-value="5"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 635px; left: 13px; width: 52px; height: auto; transition: none;">
                        <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                            id="sbs-661730604-1696001042438"
                            style="display: table; width: inherit; height: inherit; pointer-events: none;">
                            <div class="tn-atom" style="pointer-events: auto; line-height: 14px;"><a href="./"
                                    style="color: inherit">Главная</a></div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041697392484171 js-sbs-anim-trigger_hover"
                        data-elem-id="1697392484171" data-elem-type="shape" data-field-top-value="-123"
                        data-field-left-value="-70" data-field-height-value="35" data-field-width-value="360"
                        data-field-axisy-value="bottom" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="-61"
                        data-field-left-res-320-value="20" data-field-width-res-320-value="280"
                        data-field-top-res-640-value="-52" data-field-left-res-640-value="46"
                        data-field-width-res-640-value="303" data-field-axisx-res-640-value="left"
                        data-field-top-res-960-value="-90" data-field-left-res-960-value="-40"
                        data-field-height-res-960-value="27" data-field-width-res-960-value="301"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 360px; left: 1091px; top: 642px; height: 35px; pointer-events: none;"> <a
                            class="tn-atom" href="#popup:consultation" role="button" aria-haspopup="dialog"
                            style="pointer-events: auto;"> </a> </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('661730604'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec645329257" class="r t-rec t-rec_pt_0 t-rec_pb_0"
            style="padding-top: 0px; padding-bottom: 0px; --zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396" id="about">
                <div class="t396__artboard rendered" data-artboard-recid="645329257"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="870" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1130" data-artboard-height-res-640="1020"
                    data-artboard-height-res-960="770" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="870" data-artboard-proxy-max-height="870">
                    <div class="t396__carrier" data-artboard-recid="645329257"></div>
                    <div class="t396__filter" data-artboard-recid="645329257"></div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194411" data-elem-id="1695798194411"
                        data-elem-type="shape" data-field-top-value="186" data-field-left-value="57"
                        data-field-height-value="34" data-field-width-value="401" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="92" data-field-left-res-320-value="35"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="183"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="45"
                        data-field-width-res-640-value="300"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="167" data-field-left-res-960-value="47"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 401px; left: 217.5px; top: 186px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645329257-1695798194411"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194419" data-elem-id="1695798194419"
                        data-elem-type="text" data-field-top-value="125" data-field-left-value="20"
                        data-field-width-value="474" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="67" data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="87" data-field-top-res-960-value="107"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 125px; left: 180.5px; width: 474px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645329257-1695798194419"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695798194419" style="line-height: 98px;">Обо мне</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194421" data-elem-id="1695798194421"
                        data-elem-type="text" data-field-top-value="282" data-field-left-value="20"
                        data-field-width-value="612" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="467" data-field-width-res-320-value="301"
                        data-field-top-res-640-value="522" data-field-width-res-640-value="458"
                        data-field-top-res-960-value="252" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="507"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 282px; left: 180.5px; width: 612px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194421" style="line-height: 39px;">Привет, я —
                            Николай Дикий, дизайнер и руководитель студии</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194424" data-elem-id="1695798194424"
                        data-elem-type="text" data-field-top-value="162" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="77" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="110" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="143" data-field-left-res-960-value="897"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 162px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645329257-1695798194424"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695798194424" style="line-height: 25px;"></div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194433" data-elem-id="1695798194433"
                        data-elem-type="text" data-field-top-value="421" data-field-left-value="22"
                        data-field-width-value="88" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="581" data-field-top-res-640-value="642"
                        data-field-top-res-960-value="368" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 421px; left: 182.5px; width: 88px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194433" style="line-height: 20px;">2000-2003 г.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194436" data-elem-id="1695798194436"
                        data-elem-type="text" data-field-top-value="406" data-field-left-value="152"
                        data-field-width-value="526" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="604" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="301" data-field-top-res-640-value="632"
                        data-field-top-res-960-value="355" data-field-left-res-960-value="120"
                        data-field-width-res-960-value="459"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 406px; left: 312.5px; width: 526px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194436" style="line-height: 25px;">Академический
                            художественный лицей им. Иогансона Российской академии художеств (СПГАХЛ РАХ, бывш. СХШ)
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194438" data-elem-id="1695798194438"
                        data-elem-type="text" data-field-top-value="482" data-field-left-value="152"
                        data-field-width-value="522" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="715" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="302" data-field-top-res-640-value="702"
                        data-field-top-res-960-value="424" data-field-left-res-960-value="120"
                        data-field-width-res-960-value="456"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 482px; left: 312.5px; width: 522px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194438" style="line-height: 25px;">Индустриальный
                            техникум строительных материалов и деталей (СПИТСМиД) по специальности
                            архитектор-проектировщик.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194440" data-elem-id="1695798194440"
                        data-elem-type="text" data-field-top-value="497" data-field-left-value="22"
                        data-field-width-value="98" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="692" data-field-top-res-640-value="712"
                        data-field-top-res-960-value="437" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 497px; left: 182.5px; width: 98px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194440" style="line-height: 20px;">2003-2006 г.
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194442" data-elem-id="1695798194442"
                        data-elem-type="text" data-field-top-value="573" data-field-left-value="22"
                        data-field-width-value="91" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="803" data-field-top-res-640-value="782"
                        data-field-top-res-960-value="506" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 573px; left: 182.5px; width: 91px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194442" style="line-height: 20px;">2009-2013 г.
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194444" data-elem-id="1695798194444"
                        data-elem-type="text" data-field-top-value="636" data-field-left-value="22"
                        data-field-width-value="93" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="914" data-field-top-res-640-value="837"
                        data-field-top-res-960-value="564" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 636px; left: 182.5px; width: 93px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194444" style="line-height: 20px;">2006-2010 г.
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194446" data-elem-id="1695798194446"
                        data-elem-type="text" data-field-top-value="558" data-field-left-value="152"
                        data-field-width-value="520" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="826" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="303" data-field-top-res-640-value="767"
                        data-field-top-res-960-value="493" data-field-left-res-960-value="120"
                        data-field-width-res-960-value="454"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 558px; left: 312.5px; width: 520px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194446" style="line-height: 25px;">
                            Санкт-Петербургский государственный университет технологии и дизайна (СПГУТД) факультет
                            дизайна-интерьера.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194449" data-elem-id="1695798194449"
                        data-elem-type="text" data-field-top-value="634" data-field-left-value="152"
                        data-field-width-value="528" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="937" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="304" data-field-top-res-640-value="837"
                        data-field-top-res-960-value="562" data-field-left-res-960-value="120"
                        data-field-width-res-960-value="461"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 634px; left: 312.5px; width: 528px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194449" style="line-height: 25px;">Работал по
                            специальности главный архитектор-проектировщик.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194450" data-elem-id="1695798194450"
                        data-elem-type="text" data-field-top-value="689" data-field-left-value="22"
                        data-field-width-value="106" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="1006" data-field-top-res-640-value="887"
                        data-field-top-res-960-value="613" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 689px; left: 182.5px; width: 106px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194450" style="line-height: 16px;">2010 - наст. вр.
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194452" data-elem-id="1695798194452"
                        data-elem-type="text" data-field-top-value="685" data-field-left-value="152"
                        data-field-width-value="285" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="1026" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="887" data-field-top-res-960-value="609"
                        data-field-left-res-960-value="120" data-field-width-res-960-value="249"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 685px; left: 312.5px; width: 285px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798194452" style="line-height: 25px;">Частный
                            дизайнер-архитектор.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194454" data-elem-id="1695798194454"
                        data-elem-type="shape" data-field-top-value="393" data-field-left-value="22"
                        data-field-height-value="1" data-field-width-value="660" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="565"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="617"
                        data-field-top-res-960-value="342" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="559"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 660px; left: 182.5px; top: 393px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194462" data-elem-id="1695798194462"
                        data-elem-type="shape" data-field-top-value="469" data-field-left-value="22"
                        data-field-height-value="1" data-field-width-value="660" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="676"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="687"
                        data-field-top-res-960-value="411" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="559"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 660px; left: 182.5px; top: 469px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194465" data-elem-id="1695798194465"
                        data-elem-type="shape" data-field-top-value="545" data-field-left-value="22"
                        data-field-height-value="1" data-field-width-value="660" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="787"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="757"
                        data-field-top-res-960-value="480" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="559"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 660px; left: 182.5px; top: 545px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194467" data-elem-id="1695798194467"
                        data-elem-type="shape" data-field-top-value="621" data-field-left-value="22"
                        data-field-height-value="1" data-field-width-value="660" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="898"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="827"
                        data-field-top-res-960-value="549" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="559"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 660px; left: 182.5px; top: 621px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194470" data-elem-id="1695798194470"
                        data-elem-type="shape" data-field-top-value="672" data-field-left-value="22"
                        data-field-height-value="1" data-field-width-value="660" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="990"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="872"
                        data-field-top-res-960-value="596" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="559"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 660px; left: 182.5px; top: 672px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194472" data-elem-id="1695798194472"
                        data-elem-type="shape" data-field-top-value="723" data-field-left-value="22"
                        data-field-height-value="1" data-field-width-value="660" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="1060"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="917"
                        data-field-top-res-960-value="643" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="559"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 660px; left: 182.5px; top: 723px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453292571695798194496" data-elem-id="1695798194496"
                        data-elem-type="shape" data-field-top-value="282" data-field-left-value="820"
                        data-field-height-value="448" data-field-width-value="360" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="147"
                        data-field-top-res-640-value="202" data-field-left-res-640-value="10"
                        data-field-height-res-640-value="281" data-field-width-res-640-value="225"
                        data-field-top-res-960-value="252" data-field-left-res-960-value="630"
                        data-field-height-res-960-value="398" data-field-width-res-960-value="319"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 360px; left: 980.5px; top: 282px; height: 448px;">
                        <div class="tn-atom t-bgimg loaded"
                            data-original="https://static.tildacdn.com/tild3765-6237-4334-b862-636564613364/fbb96baa-488b-4fe4-a.png"
                            aria-label="" role="img"
                            style="background-image: url(&quot;https://optim.tildacdn.com/tild3765-6237-4334-b862-636564613364/-/cover/720x896/center/center/-/format/webp/fbb96baa-488b-4fe4-a.png.webp&quot;);">
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('645329257'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec646113450" class="r t-rec r_hidden r_anim" data-record-type="215"> <a name="about"
                style="font-size:0;"></a> </div>
        <div id="rec645330936" class="r t-rec" data-animationappear="off" data-record-type="18">
            <!-- cover -->
            <div class="t-cover" id="recorddiv645330936" bgimgfield="img"
                style="background-image: url(&quot;https://thb.tildacdn.com/tild6638-3739-4437-b135-656565383530/-/resize/20x/5.jpg&quot;); height: 695px;">
                <div class="t-cover__carrier" id="coverCarry645330936" data-content-cover-id="645330936"
                    data-content-cover-bg="https://static.tildacdn.com/tild6638-3739-4437-b135-656565383530/5.jpg"
                    data-display-changed="true" data-content-cover-height="100vh" data-content-cover-parallax="fixed"
                    data-content-use-image-for-mobile-cover="" style="height: 695px;" itemscope=""
                    itemtype="http://schema.org/ImageObject" data-content-cover-updated-height="695px">
                    <meta itemprop="image"
                        content="https://static.tildacdn.com/tild6638-3739-4437-b135-656565383530/5.jpg">
                </div>
                <div class="t-cover__filter"
                    style="height: 695px; background-image: -webkit-linear-gradient(top, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4));">
                </div>
                <div class="t-container">
                    <div class="t-col t-col_12 ">
                        <div class="t-cover__wrapper t-valign_middle" style="height: 695px;">
                            <div class="t001 t-align_center">
                                <div class="t001__wrapper" data-hook-content="covercontent"> <span class="space"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="rec645331714" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="645331714"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="650" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="780" data-artboard-height-res-640="560"
                    data-artboard-height-res-960="560" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="650" data-artboard-proxy-max-height="650">
                    <div class="t396__carrier" data-artboard-recid="645331714"></div>
                    <div class="t396__filter" data-artboard-recid="645331714"></div>
                    <div class="t396__elem tn-elem tn-elem__6453317141695915153530" data-elem-id="1695915153530"
                        data-elem-type="shape" data-field-top-value="185" data-field-left-value="57"
                        data-field-height-value="34" data-field-width-value="451" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="87" data-field-left-res-320-value="37"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="185"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="45"
                        data-field-width-res-640-value="300"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="167" data-field-left-res-960-value="47"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 451px; left: 217.5px; top: 185px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645331714-1695915153530"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453317141695915153549" data-elem-id="1695915153549"
                        data-elem-type="text" data-field-top-value="125" data-field-left-value="20"
                        data-field-width-value="474" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="67" data-field-width-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="87" data-field-top-res-960-value="107"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 125px; left: 180.5px; width: 474px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645331714-1695915153549"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915153549" style="line-height: 98px;">О Студии</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453317141695798525868" data-elem-id="1695798525868"
                        data-elem-type="text" data-field-top-value="470" data-field-left-value="723"
                        data-field-width-value="456" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="565" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="352" data-field-left-res-640-value="330"
                        data-field-width-res-640-value="300" data-field-top-res-960-value="393"
                        data-field-left-res-960-value="570" data-field-width-res-960-value="380"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 470px; left: 883.5px; width: 456px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798525868" style="line-height: 24px;">Dikii-Design — это
                            команда профессионалов, Мы с радостью разработаем для Вас дизайн интерьера квартиры,
                            загородного дома, ресторана, кафе или офиса в любой точке мира, поможем подобрать отделочные
                            материалы, выполним ремонтно-отделочные работы любой сложности и осуществим авторский
                            надзор.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453317141695798525872" data-elem-id="1695798525872"
                        data-elem-type="text" data-field-top-value="470" data-field-left-value="20"
                        data-field-width-value="460" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="365" data-field-top-res-640-value="352"
                        data-field-left-res-640-value="10" data-field-width-res-640-value="301"
                        data-field-top-res-960-value="393" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="378"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 470px; left: 180.5px; width: 460px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798525872" style="line-height: 24px;">Именно поэтому
                            дизайн интерьера должен удовлетворять всем вашим требованиям, соответствовать стилю и образу
                            жизни. И тут каждый человек вправе выбирать: сделать все самостоятельно, допустив немало
                            ошибок и потратив драгоценное время на переделки, или обратиться за помощью к компетентным
                            специалистам, сэкономив время и деньги.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453317141695798525874" data-elem-id="1695798525874"
                        data-elem-type="text" data-field-top-value="288" data-field-left-value="20"
                        data-field-width-value="1141" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="142" data-field-width-res-320-value="302"
                        data-field-top-res-640-value="182" data-field-width-res-640-value="620"
                        data-field-top-res-960-value="247" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="907"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 288px; left: 180.5px; width: 1141px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798525874" style="line-height: 44px;">Дом для каждого из
                            нас — это место, где мы обретаем покой и уют. Огромную роль в обеспечении комфорта и
                            гармонии играет работа над дизайном вашего пространства. </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453317141695915153560" data-elem-id="1695915153560"
                        data-elem-type="text" data-field-top-value="162" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="77" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="110" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="143" data-field-left-res-960-value="897"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 162px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645331714-1695915153560"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915153560" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('645331714'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec646113818" class="r t-rec r_hidden r_anim" data-record-type="215"> <a id="projects" name="portfolio"
                style="font-size:0;"></a> </div>
        <div id="rec645332199" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="645332199"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="294.5" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="175" data-artboard-height-res-640="204"
                    data-artboard-height-res-960="274" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="294.5" data-artboard-proxy-max-height="294.5">
                    <div class="t396__carrier" data-artboard-recid="645332199"></div>
                    <div class="t396__filter" data-artboard-recid="645332199"></div>
                    <div class="t396__elem tn-elem tn-elem__6453321991695915204988" data-elem-id="1695915204988"
                        data-elem-type="shape" data-field-top-value="174" data-field-left-value="357"
                        data-field-height-value="34" data-field-width-value="454" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="115" data-field-left-res-320-value="22"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="204"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="245"
                        data-field-width-res-640-value="300"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="164" data-field-left-res-960-value="347"
                        data-field-width-res-960-value="450"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 454px; left: 517.5px; top: 174px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645332199-1695915204988"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453321991695915205005" data-elem-id="1695915205005"
                        data-elem-type="text" data-field-top-value="114" data-field-left-value="20"
                        data-field-width-value="780" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="65" data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="87" data-field-top-res-960-value="107"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 114px; left: 180.5px; width: 780px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645332199-1695915205005"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915205005" style="line-height: 98px;">Наши проекты
                            </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453321991695915205013" data-elem-id="1695915205013"
                        data-elem-type="text" data-field-top-value="154" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="73" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="110" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="143" data-field-left-res-960-value="897"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 154px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645332199-1695915205013"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915205013" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('645332199'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec653331134" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="653331134"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="545" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1080" data-artboard-height-res-640="1150"
                    data-artboard-height-res-960="450" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="545" data-artboard-proxy-max-height="545">
                    <div class="t396__carrier" data-artboard-recid="653331134"></div>
                    <div class="t396__filter" data-artboard-recid="653331134"></div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695798587077" data-elem-id="1695798587077"
                        data-elem-type="text" data-field-top-value="55" data-field-left-value="820"
                        data-field-width-value="156" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="986" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="137" data-field-top-res-640-value="1065"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="42"
                        data-field-left-res-960-value="650" data-field-width-res-960-value="299"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 55px; left: 980.5px; width: 156px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798587077" style="line-height: 20px;">смотреть проект
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341697391386752 js-sbs-anim-trigger_hover"
                        data-elem-id="1697391386752" data-elem-type="shape" data-field-top-value="50"
                        data-field-left-value="820" data-field-height-value="30" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="979"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="1057" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="300" data-field-top-res-960-value="35"
                        data-field-left-res-960-value="650" data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 360px; left: 980.5px; top: 50px; height: 30px; pointer-events: none;"> <a
                            class="tn-atom" href="./project-1" style="pointer-events: auto;">
                        </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695798587108 t-animate t-animate_wait"
                        data-elem-id="1695798587108" data-elem-type="shape" data-field-top-value="116"
                        data-field-left-value="820" data-field-height-value="350" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadeinup" data-animate-duration="2"
                        data-animate-distance="50" data-field-top-res-320-value="666" data-field-top-res-640-value="730"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="88"
                        data-field-left-res-960-value="650" data-field-height-res-960-value="294"
                        data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="width: 360px; left: 980.5px; top: 116px; height: 350px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom t-bgimg"
                            data-original="https://static.tildacdn.com/tild3038-6336-4763-a439-353766633531/_5.jpg"
                            aria-label="" role="img"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695798587105 t-animate t-animate_wait"
                        data-elem-id="1695798587105" data-elem-type="shape" data-field-top-value="116"
                        data-field-left-value="420" data-field-height-value="350" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadeinup" data-animate-duration="2"
                        data-animate-distance="50" data-field-top-res-320-value="362" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="417" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="88" data-field-left-res-960-value="330"
                        data-field-height-res-960-value="294" data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="width: 360px; left: 580.5px; top: 116px; height: 350px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom t-bgimg"
                            data-original="https://static.tildacdn.com/tild3130-6433-4261-b037-353634626165/-_6.jpg"
                            aria-label="" role="img"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695798587102 t-animate t-animate_wait"
                        data-elem-id="1695798587102" data-elem-type="shape" data-field-top-value="116"
                        data-field-left-value="20" data-field-height-value="350" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadeinup" data-animate-duration="2"
                        data-animate-distance="50" data-field-top-res-320-value="58" data-field-top-res-640-value="102"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="88"
                        data-field-left-res-960-value="10" data-field-height-res-960-value="294"
                        data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="width: 360px; left: 180.5px; top: 116px; height: 350px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom t-bgimg"
                            data-original="https://static.tildacdn.com/tild3836-3538-4665-a134-353962613535/-_4.jpg"
                            aria-label="" role="img"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695798587075" data-elem-id="1695798587075"
                        data-elem-type="text" data-field-top-value="41" data-field-left-value="20"
                        data-field-width-value="516" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="20" data-field-width-res-320-value="303"
                        data-field-top-res-960-value="40" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 41px; left: 180.5px; width: 516px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798587075" style="line-height: 45px;">Квартира в ЖК
                            “Жемчужная гавань”</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695798587099" data-elem-id="1695798587099"
                        data-elem-type="shape" data-field-top-value="0" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-width-res-320-value="300"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="0"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 0px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695798587079" data-elem-id="1695798587079"
                        data-elem-type="shape" data-field-top-value="80" data-field-left-value="820"
                        data-field-height-value="2" data-field-width-value="360" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="1008"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="1088"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="65"
                        data-field-left-res-960-value="650" data-field-width-res-960-value="299"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 360px; left: 980.5px; top: 80px; height: 2px;"> <a class="tn-atom"
                            href="./project1"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6533311341695804277528" data-elem-id="1695804277528"
                        data-elem-type="image" data-field-top-value="55" data-field-left-value="1165"
                        data-field-width-value="15" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1633960220381,1697391386752"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':45,'bl':'0','ea':'','dt':0}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-top-res-320-value="989" data-field-left-res-320-value="295"
                        data-field-top-res-640-value="1067" data-field-left-res-640-value="293"
                        data-field-top-res-960-value="43" data-field-left-res-960-value="931"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1325.5px; top: 55px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653331134-1695804277528"
                            style="display: inherit; width: inherit; height: inherit;"><a class="tn-atom"
                                href="./project1"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695804277528"> </a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('653331134'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec659342017" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="659342017"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="545" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1080" data-artboard-height-res-640="1150"
                    data-artboard-height-res-960="450" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="545" data-artboard-proxy-max-height="545">
                    <div class="t396__carrier" data-artboard-recid="659342017"></div>
                    <div class="t396__filter" data-artboard-recid="659342017"></div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695798587077" data-elem-id="1695798587077"
                        data-elem-type="text" data-field-top-value="55" data-field-left-value="820"
                        data-field-width-value="156" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="986" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="137" data-field-top-res-640-value="1065"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="42"
                        data-field-left-res-960-value="650" data-field-width-res-960-value="299"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 55px; left: 980.5px; width: 156px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798587077" style="line-height: 20px;">смотреть проект
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171697391386752 js-sbs-anim-trigger_hover"
                        data-elem-id="1697391386752" data-elem-type="shape" data-field-top-value="50"
                        data-field-left-value="820" data-field-height-value="30" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="979"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="1057" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="300" data-field-top-res-960-value="35"
                        data-field-left-res-960-value="650" data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 360px; left: 980.5px; top: 50px; height: 30px; pointer-events: none;"> <a
                            class="tn-atom" href="./page41052446.html" style="pointer-events: auto;"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695798587108 t-animate t-animate_wait"
                        data-elem-id="1695798587108" data-elem-type="shape" data-field-top-value="116"
                        data-field-left-value="820" data-field-height-value="350" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadeinup" data-animate-duration="2"
                        data-animate-distance="50" data-field-top-res-320-value="666" data-field-top-res-640-value="730"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="88"
                        data-field-left-res-960-value="650" data-field-height-res-960-value="294"
                        data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="width: 360px; left: 980.5px; top: 116px; height: 350px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom t-bgimg"
                            data-original="https://static.tildacdn.com/tild3763-3565-4134-b532-646438396166/_2.jpg"
                            aria-label="" role="img"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695798587105 t-animate t-animate_wait"
                        data-elem-id="1695798587105" data-elem-type="shape" data-field-top-value="116"
                        data-field-left-value="420" data-field-height-value="350" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadeinup" data-animate-duration="2"
                        data-animate-distance="50" data-field-top-res-320-value="362" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="417" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="88" data-field-left-res-960-value="330"
                        data-field-height-res-960-value="294" data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="width: 360px; left: 580.5px; top: 116px; height: 350px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom t-bgimg"
                            data-original="https://static.tildacdn.com/tild3730-6630-4434-a365-636533383464/-_5.jpg"
                            aria-label="" role="img"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695798587102 t-animate t-animate_wait"
                        data-elem-id="1695798587102" data-elem-type="shape" data-field-top-value="116"
                        data-field-left-value="20" data-field-height-value="350" data-field-width-value="360"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadeinup" data-animate-duration="2"
                        data-animate-distance="50" data-field-top-res-320-value="58" data-field-top-res-640-value="102"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="88"
                        data-field-left-res-960-value="10" data-field-height-res-960-value="294"
                        data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="width: 360px; left: 180.5px; top: 116px; height: 350px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom t-bgimg"
                            data-original="https://static.tildacdn.com/tild3436-3262-4439-b163-653332656262/-_3.jpg"
                            aria-label="" role="img"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695798587075" data-elem-id="1695798587075"
                        data-elem-type="text" data-field-top-value="41" data-field-left-value="20"
                        data-field-width-value="516" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="20" data-field-width-res-320-value="303"
                        data-field-top-res-960-value="40" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 41px; left: 180.5px; width: 516px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798587075" style="line-height: 45px;">Квартира в ЖК
                            “Магелан”</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695798587099" data-elem-id="1695798587099"
                        data-elem-type="shape" data-field-top-value="0" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-width-res-320-value="300"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="0"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 0px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695798587079" data-elem-id="1695798587079"
                        data-elem-type="shape" data-field-top-value="80" data-field-left-value="820"
                        data-field-height-value="2" data-field-width-value="360" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="1008"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="1088"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="65"
                        data-field-left-res-960-value="650" data-field-width-res-960-value="299"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 360px; left: 980.5px; top: 80px; height: 2px;"> <a class="tn-atom"
                            href="./project1"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6593420171695804277528" data-elem-id="1695804277528"
                        data-elem-type="image" data-field-top-value="55" data-field-left-value="1165"
                        data-field-width-value="15" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1633960220381,1697391386752"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':45,'bl':'0','ea':'','dt':0}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-top-res-320-value="989" data-field-left-res-320-value="295"
                        data-field-top-res-640-value="1067" data-field-left-res-640-value="293"
                        data-field-top-res-960-value="43" data-field-left-res-960-value="931"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1325.5px; top: 55px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-659342017-1695804277528"
                            style="display: inherit; width: inherit; height: inherit;"><a class="tn-atom"
                                href="./project1"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695804277528"> </a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('659342017'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec671059438" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="671059438"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="213" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="134" data-artboard-height-res-640="163"
                    data-artboard-height-res-960="183" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="213" data-artboard-proxy-max-height="213">
                    <div class="t396__carrier" data-artboard-recid="671059438"></div>
                    <div class="t396__filter" data-artboard-recid="671059438"></div>
                    <div class="t396__elem tn-elem tn-elem__6710594381700656842259" data-elem-id="1700656842259"
                        data-elem-type="button" data-field-top-value="0" data-field-left-value="20"
                        data-field-height-value="70" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-width-res-320-value="300"
                        data-field-width-res-640-value="620" data-field-left-res-960-value="10"
                        data-field-height-res-960-value="60" data-field-width-res-960-value="940"
                        data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits"
                        style="top: 0px; left: 180.5px; width: 1160px; height: 70px;"> <a class="tn-atom"
                            href="./projects.html">Смотреть все проекты</a>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('671059438'); }); });</script>
            <!-- /T396 -->
        </div>

        <div id="rec645333613" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="645333613"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="1612" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1233" data-artboard-height-res-640="1424"
                    data-artboard-height-res-960="1320" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="1612" data-artboard-proxy-max-height="1612">
                    <div class="t396__carrier" data-artboard-recid="645333613"></div>
                    <div class="t396__filter" data-artboard-recid="645333613"></div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695915301480" data-elem-id="1695915301480"
                        data-elem-type="shape" data-field-top-value="198" data-field-left-value="446"
                        data-field-height-value="34" data-field-width-value="493" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="122" data-field-left-res-320-value="21"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="215"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="170" data-field-left-res-640-value="45"
                        data-field-width-res-640-value="321"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="236" data-field-left-res-960-value="66"
                        data-field-width-res-960-value="450"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 493px; left: 606.5px; top: 198px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645333613-1695915301480"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695915301499" data-elem-id="1695915301499"
                        data-elem-type="text" data-field-top-value="138" data-field-left-value="20"
                        data-field-width-value="908" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="69" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="75" data-field-left-res-640-value="8"
                        data-field-top-res-960-value="99" data-field-left-res-960-value="9"
                        data-field-width-res-960-value="495"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 138px; left: 180.5px; width: 908px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645333613-1695915301499"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915301499" style="line-height: 98px;">КАк мы
                                работаем</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666309" data-elem-id="1695798666309"
                        data-elem-type="text" data-field-top-value="355" data-field-left-value="46"
                        data-field-width-value="312" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="193" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="276" data-field-top-res-640-value="276"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="357"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 355px; left: 206.5px; width: 312px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666309" style="line-height: 45px;">ОСТАВЛЯЕТЕ ЗАЯВКУ
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666328" data-elem-id="1695798666328"
                        data-elem-type="text" data-field-top-value="352" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="233" data-field-left-res-320-value="13"
                        data-field-width-res-320-value="299" data-field-top-res-640-value="322"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="351"
                        data-field-left-res-960-value="490"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 352px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666328" style="line-height: 25px;">Вы звоните нам,
                            пишите на почту или оставляете заявку на сайте.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666312" data-elem-id="1695798666312"
                        data-elem-type="text" data-field-top-value="500" data-field-left-value="46"
                        data-field-width-value="412" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="312" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="292" data-field-top-res-640-value="411"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="469"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 500px; left: 206.5px; width: 412px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666312" style="line-height: 45px;">ЗАМЕРЫ И
                            КОНСУЛЬТАЦИЯ</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666331" data-elem-id="1695798666331"
                        data-elem-type="text" data-field-top-value="497" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="352" data-field-left-res-320-value="13"
                        data-field-width-res-320-value="299" data-field-top-res-640-value="456"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="463"
                        data-field-left-res-960-value="490"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 497px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666331" style="line-height: 25px;">Дизайнер бесплатно
                            приезжает к Вам для выполнения обмеров и фотофиксации.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666315" data-elem-id="1695798666315"
                        data-elem-type="text" data-field-top-value="645" data-field-left-value="46"
                        data-field-width-value="403" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="431" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="278" data-field-top-res-640-value="545"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="580"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 645px; left: 206.5px; width: 403px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666315" style="line-height: 45px;">ПОДПИСАНИЕ
                            ДОГОВОРА</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666333" data-elem-id="1695798666333"
                        data-elem-type="text" data-field-top-value="642" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="471" data-field-left-res-320-value="13"
                        data-field-width-res-320-value="299" data-field-top-res-640-value="590"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="574"
                        data-field-left-res-960-value="490"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 642px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666333" style="line-height: 25px;">Вы приезжаете к
                            нам в офис для подписания договора и уточнения всех нюансов.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666317" data-elem-id="1695798666317"
                        data-elem-type="text" data-field-top-value="790" data-field-left-value="46"
                        data-field-width-value="442" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="550" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="292" data-field-top-res-640-value="680"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="691"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 790px; left: 206.5px; width: 442px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666317" style="line-height: 45px;">ПЛАНИРОВОЧНЫЕ
                            РЕШЕНИЯ</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666334" data-elem-id="1695798666334"
                        data-elem-type="text" data-field-top-value="787" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="590" data-field-left-res-320-value="18"
                        data-field-width-res-320-value="299" data-field-top-res-640-value="726"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="685"
                        data-field-left-res-960-value="490"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 787px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666334" style="line-height: 25px;">Разрабатываем 2-3
                            варианта планировки, исходя из ваших пожеланий</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666320" data-elem-id="1695798666320"
                        data-elem-type="text" data-field-top-value="941" data-field-left-value="46"
                        data-field-width-value="423" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="669" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="292" data-field-top-res-640-value="815"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="802"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 941px; left: 206.5px; width: 423px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666320" style="line-height: 45px;">ВИЗУАЛИЗАЦИЯ
                            ИНТЕРЬЕРА</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666337" data-elem-id="1695798666337"
                        data-elem-type="text" data-field-top-value="936" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="709" data-field-left-res-320-value="13"
                        data-field-width-res-320-value="299" data-field-top-res-640-value="860"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="796"
                        data-field-left-res-960-value="490"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 936px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666337" style="line-height: 25px;">Разрабатываем 3D
                            визуализацию помещений фотореалистичного качества.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666322" data-elem-id="1695798666322"
                        data-elem-type="text" data-field-top-value="1085" data-field-left-value="46"
                        data-field-width-value="417" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="788" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="285" data-field-top-res-640-value="950"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="913"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1085px; left: 206.5px; width: 417px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666322" style="line-height: 45px;">ЧЕРТЕЖИ ДЛЯ
                            СТРОИТЕЛЕЙ</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666339" data-elem-id="1695798666339"
                        data-elem-type="text" data-field-top-value="1070" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="828" data-field-left-res-320-value="13"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="996"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="907"
                        data-field-left-res-960-value="490" data-field-width-res-960-value="408"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1070px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666339" style="line-height: 25px;">Разрабатываем
                            полный пакет чертежей для реализации дизайн-проекта интерьера "под ключ".</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666324" data-elem-id="1695798666324"
                        data-elem-type="text" data-field-top-value="1224" data-field-left-value="46"
                        data-field-width-value="387" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="926" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="283" data-field-top-res-640-value="1085"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="1024"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1224px; left: 206.5px; width: 387px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666324" style="line-height: 45px;">РЕАЛИЗАЦИЯ ПОД
                            КЛЮЧ</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666342" data-elem-id="1695798666342"
                        data-elem-type="text" data-field-top-value="1209" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="966" data-field-left-res-320-value="13"
                        data-field-width-res-320-value="298" data-field-top-res-640-value="1131"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="1018"
                        data-field-left-res-960-value="490" data-field-width-res-960-value="460"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1209px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666342" style="line-height: 25px;">Наши мастера с
                            большим опытом, именно в реализации дизайн-проектов, помогут Вам воплотить проект в жизнь.
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666326" data-elem-id="1695798666326"
                        data-elem-type="text" data-field-top-value="1370" data-field-left-value="46"
                        data-field-width-value="323" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="1064" data-field-left-res-320-value="28"
                        data-field-width-res-320-value="265" data-field-top-res-640-value="1220"
                        data-field-left-res-640-value="31" data-field-top-res-960-value="1135"
                        data-field-left-res-960-value="36"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1370px; left: 206.5px; width: 323px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666326" style="line-height: 45px;">АВТОРСКИЙ НАДЗОР
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666343" data-elem-id="1695798666343"
                        data-elem-type="text" data-field-top-value="1367" data-field-left-value="720"
                        data-field-width-value="360" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="1104" data-field-left-res-320-value="13"
                        data-field-width-res-320-value="299" data-field-top-res-640-value="1266"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="1129"
                        data-field-left-res-960-value="490"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1367px; left: 880.5px; width: 360px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666343" style="line-height: 25px;">Контроль
                            соблюдения дизайн-проекта интерьера в ходе выполнения работ.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666353" data-elem-id="1695798666353"
                        data-elem-type="shape" data-field-top-value="304" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="172"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="255" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="320"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 304px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666356" data-elem-id="1695798666356"
                        data-elem-type="shape" data-field-top-value="449" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="291"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="386" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="431"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 449px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666358" data-elem-id="1695798666358"
                        data-elem-type="shape" data-field-top-value="594" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="410"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="520" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="543"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 594px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666360" data-elem-id="1695798666360"
                        data-elem-type="shape" data-field-top-value="739" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="529"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="655" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="654"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 739px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666362" data-elem-id="1695798666362"
                        data-elem-type="shape" data-field-top-value="884" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="648"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="790" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="765"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 884px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666366" data-elem-id="1695798666366"
                        data-elem-type="shape" data-field-top-value="1029" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="767"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="925" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="876"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 1029px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666368" data-elem-id="1695798666368"
                        data-elem-type="shape" data-field-top-value="1174" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="905"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="1060" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="987"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 1174px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666371" data-elem-id="1695798666371"
                        data-elem-type="shape" data-field-top-value="1319" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="1043"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="1195" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="1098"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 1319px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666373" data-elem-id="1695798666373"
                        data-elem-type="shape" data-field-top-value="1464" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="1162"
                        data-field-left-res-320-value="11" data-field-width-res-320-value="299"
                        data-field-top-res-640-value="1331" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="1209"
                        data-field-left-res-960-value="9" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 1464px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666376" data-elem-id="1695798666376"
                        data-elem-type="text" data-field-top-value="358" data-field-left-value="20"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="195" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="280" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="358" data-field-left-res-960-value="11"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 358px; left: 180.5px; width: 16px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666376" style="line-height: 22px;">01</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666378" data-elem-id="1695798666378"
                        data-elem-type="text" data-field-top-value="503" data-field-left-value="20"
                        data-field-width-value="19" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="314" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="413" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="462" data-field-left-res-960-value="9"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 503px; left: 180.5px; width: 19px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666378" style="line-height: 22px;">02</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666380" data-elem-id="1695798666380"
                        data-elem-type="text" data-field-top-value="648" data-field-left-value="20"
                        data-field-width-value="19" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="431" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="546" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="576" data-field-left-res-960-value="9"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 648px; left: 180.5px; width: 19px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666380" style="line-height: 22px;">03</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666382" data-elem-id="1695798666382"
                        data-elem-type="text" data-field-top-value="793" data-field-left-value="20"
                        data-field-width-value="19" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="550" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="681" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="688" data-field-left-res-960-value="9"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 793px; left: 180.5px; width: 19px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666382" style="line-height: 22px;">04</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666384" data-elem-id="1695798666384"
                        data-elem-type="text" data-field-top-value="938" data-field-left-value="20"
                        data-field-width-value="19" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="668" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="816" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="797" data-field-left-res-960-value="9"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 938px; left: 180.5px; width: 19px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666384" style="line-height: 22px;">05</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666386" data-elem-id="1695798666386"
                        data-elem-type="text" data-field-top-value="1083" data-field-left-value="20"
                        data-field-width-value="19" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="788" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="953" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="908" data-field-left-res-960-value="9"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1083px; left: 180.5px; width: 19px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666386" style="line-height: 22px;">06</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666388" data-elem-id="1695798666388"
                        data-elem-type="text" data-field-top-value="1228" data-field-left-value="20"
                        data-field-width-value="17" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="926" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="1088" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="1017" data-field-left-res-960-value="9"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1228px; left: 180.5px; width: 17px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666388" style="line-height: 22px;">07</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695798666390" data-elem-id="1695798666390"
                        data-elem-type="text" data-field-top-value="1373" data-field-left-value="20"
                        data-field-width-value="19" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="1064" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="1222" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="1129" data-field-left-res-960-value="8"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 1373px; left: 180.5px; width: 19px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798666390" style="line-height: 22px;">08</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453336131695915301509" data-elem-id="1695915301509"
                        data-elem-type="text" data-field-top-value="178" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="74" data-field-left-res-320-value="258"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="100" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="136" data-field-left-res-960-value="896"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 178px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645333613-1695915301509"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915301509" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('645333613'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec645334068" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="645334068"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="800" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="920" data-artboard-height-res-640="800"
                    data-artboard-height-res-960="740" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="800" data-artboard-proxy-max-height="800">
                    <div class="t396__carrier-wrapper">
                        <div class="t396__carrier t-bgimg" data-artboard-recid="645334068"
                            data-original="https://static.tildacdn.com/tild3534-6437-4237-a237-626337663763/5.jpg">
                        </div>
                    </div>
                    <div class="t396__filter" data-artboard-recid="645334068"></div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728778" data-elem-id="1695798728778"
                        data-elem-type="shape" data-field-top-value="598" data-field-left-value="17"
                        data-field-height-value="1" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="242"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="440"
                        data-field-width-res-640-value="300" data-field-top-res-960-value="570"
                        data-field-left-res-960-value="7" data-field-width-res-960-value="220"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 177.5px; top: 598px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728780" data-elem-id="1695798728780"
                        data-elem-type="shape" data-field-top-value="598" data-field-left-value="317"
                        data-field-height-value="1" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="582"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="440"
                        data-field-left-res-640-value="327" data-field-width-res-640-value="300"
                        data-field-top-res-960-value="570" data-field-left-res-960-value="247"
                        data-field-width-res-960-value="220"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 477.5px; top: 598px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728783" data-elem-id="1695798728783"
                        data-elem-type="shape" data-field-top-value="598" data-field-left-value="617"
                        data-field-height-value="1" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="422"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="630"
                        data-field-left-res-640-value="7" data-field-width-res-640-value="300"
                        data-field-top-res-960-value="570" data-field-left-res-960-value="487"
                        data-field-width-res-960-value="220"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 777.5px; top: 598px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728786" data-elem-id="1695798728786"
                        data-elem-type="shape" data-field-top-value="598" data-field-left-value="917"
                        data-field-height-value="1" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="762"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="630"
                        data-field-left-res-640-value="327" data-field-width-res-640-value="300"
                        data-field-top-res-960-value="570" data-field-left-res-960-value="727"
                        data-field-width-res-960-value="220"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1077.5px; top: 598px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728789" data-elem-id="1695798728789"
                        data-elem-type="text" data-field-top-value="627" data-field-left-value="17"
                        data-field-width-value="202" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="262" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="462" data-field-top-res-960-value="592"
                        data-field-left-res-960-value="7" data-field-width-res-960-value="174"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 627px; left: 177.5px; width: 202px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798728789" style="line-height: 25px;">Качественный
                            дизайн-проект</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728791" data-elem-id="1695798728791"
                        data-elem-type="text" data-field-top-value="627" data-field-left-value="317"
                        data-field-width-value="228" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="602" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="206" data-field-top-res-640-value="462"
                        data-field-left-res-640-value="327" data-field-width-res-640-value="229"
                        data-field-top-res-960-value="592" data-field-left-res-960-value="247"
                        data-field-width-res-960-value="178"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 627px; left: 477.5px; width: 228px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798728791" style="line-height: 25px;">Соблюдение сроков
                            по договору</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728793" data-elem-id="1695798728793"
                        data-elem-type="text" data-field-top-value="627" data-field-left-value="617"
                        data-field-width-value="209" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="442" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="184" data-field-top-res-640-value="652"
                        data-field-left-res-640-value="7" data-field-width-res-640-value="213"
                        data-field-top-res-960-value="592" data-field-left-res-960-value="487"
                        data-field-width-res-960-value="176"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 627px; left: 777.5px; width: 209px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798728793" style="line-height: 25px;">Подбор материалов
                            и мебели</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695798728796" data-elem-id="1695798728796"
                        data-elem-type="text" data-field-top-value="627" data-field-left-value="917"
                        data-field-width-value="237" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="782" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="652" data-field-left-res-640-value="327"
                        data-field-top-res-960-value="592" data-field-left-res-960-value="727"
                        data-field-width-res-960-value="206"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 627px; left: 1077.5px; width: 237px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798728796" style="line-height: 25px;">Реализация
                            проектов под ключ</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695803919982" data-elem-id="1695803919982"
                        data-elem-type="image" data-field-top-value="527" data-field-left-value="918"
                        data-field-width-value="50" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="50"
                        data-field-fileheight-value="51" data-field-top-res-320-value="697"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="567"
                        data-field-left-res-640-value="327" data-field-width-res-640-value="46"
                        data-field-top-res-960-value="517" data-field-left-res-960-value="730"
                        data-field-width-res-960-value="41"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1078.5px; top: 527px; width: 50px;">
                        <div class="tn-atom"> <img class="tn-atom__img t-img"
                                data-original="https://static.tildacdn.com/tild6335-3631-4339-b161-376333323632/Group_9.svg"
                                alt="" imgfield="tn_img_1695803919982"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695803922416" data-elem-id="1695803922416"
                        data-elem-type="image" data-field-top-value="527" data-field-left-value="618"
                        data-field-width-value="51" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="51"
                        data-field-fileheight-value="51" data-field-top-res-320-value="357"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="567"
                        data-field-left-res-640-value="10" data-field-width-res-640-value="47"
                        data-field-top-res-960-value="517" data-field-left-res-960-value="490"
                        data-field-width-res-960-value="42"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 778.5px; top: 527px; width: 51px;">
                        <div class="tn-atom"> <img class="tn-atom__img t-img"
                                data-original="https://static.tildacdn.com/tild3232-3866-4434-a235-663332626366/Vector_5.svg"
                                alt="" imgfield="tn_img_1695803922416"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695803924899" data-elem-id="1695803924899"
                        data-elem-type="image" data-field-top-value="527" data-field-left-value="318"
                        data-field-width-value="48" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="48"
                        data-field-fileheight-value="51" data-field-top-res-320-value="522"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="380"
                        data-field-left-res-640-value="327" data-field-width-res-640-value="44"
                        data-field-top-res-960-value="517" data-field-left-res-960-value="250"
                        data-field-width-res-960-value="39"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 478.5px; top: 527px; width: 48px;">
                        <div class="tn-atom"> <img class="tn-atom__img t-img"
                                data-original="https://static.tildacdn.com/tild3638-6434-4532-b661-306530633234/Group_8.svg"
                                alt="" imgfield="tn_img_1695803924899"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695803927667" data-elem-id="1695803927667"
                        data-elem-type="image" data-field-top-value="527" data-field-left-value="18"
                        data-field-width-value="50" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-field-filewidth-value="50"
                        data-field-fileheight-value="51" data-field-top-res-320-value="182"
                        data-field-left-res-320-value="10" data-field-top-res-640-value="380"
                        data-field-width-res-640-value="46" data-field-top-res-960-value="517"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="41"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 178.5px; top: 527px; width: 50px;">
                        <div class="tn-atom"> <img class="tn-atom__img t-img"
                                data-original="https://static.tildacdn.com/tild6637-3162-4261-a439-656436323133/Group_7.svg"
                                alt="" imgfield="tn_img_1695803927667"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695915462785" data-elem-id="1695915462785"
                        data-elem-type="shape" data-field-top-value="247" data-field-left-value="62"
                        data-field-height-value="34" data-field-width-value="767" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="112" data-field-left-res-320-value="32"
                        data-field-height-res-320-value="18" data-field-width-res-320-value="279"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="152" data-field-left-res-640-value="35"
                        data-field-width-res-640-value="529"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="232" data-field-left-res-960-value="52"
                        data-field-width-res-960-value="763"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 767px; left: 222.5px; top: 247px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645334068-1695915462785"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695915462801" data-elem-id="1695915462801"
                        data-elem-type="text" data-field-top-value="114" data-field-left-value="20"
                        data-field-width-value="780" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="58" data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="67" data-field-width-res-640-value="535"
                        data-field-top-res-960-value="97" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 114px; left: 180.5px; width: 780px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645334068-1695915462801"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915462801" style="line-height: 84px;">Наши
                                пРеимущества</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453340681695915462811" data-elem-id="1695915462811"
                        data-elem-type="text" data-field-top-value="152" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="67" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="90" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="132" data-field-left-res-960-value="897"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 152px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645334068-1695915462811"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915462811" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('645334068'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec646637396" class="r t-rec r_hidden r_anim" style="opacity: 1;" data-record-type="390"
            data-animationappear="off">
            <div class="t390">
                <div class="t-popup" data-tooltip-hook="#popup:image" role="dialog" aria-modal="true" tabindex="-1">
                    <div class="t-popup__close t-popup__block-close"> <button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"> <svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg> </button> </div>
                </div>
            </div>
            <script
                type="text/javascript">t_onReady(function () { var rec = document.querySelector('#rec646637396'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = 1; t_onFuncLoad('t390_initPopup', function () { t390_initPopup('646637396'); }); });</script>
        </div>

        <div id="rec646114129" class="r t-rec r_hidden r_anim" data-record-type="215">
            <a name="price" style="font-size:0;"></a>
        </div>

        <div id="rec653332067" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="653332067"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="1135" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1064" data-artboard-height-res-640="876"
                    data-artboard-height-res-960="940" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="1135" data-artboard-proxy-max-height="1135">
                    <div class="t396__carrier" data-artboard-recid="653332067"></div>
                    <div class="t396__filter" data-artboard-recid="653332067"></div>
                    <div class="t396__elem tn-elem tn-elem__6533320671697390721980 js-sbs-anim-trigger_hover"
                        data-elem-id="1697390721980" data-elem-type="shape" data-field-top-value="894"
                        data-field-left-value="920" data-field-height-value="30" data-field-width-value="260"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="920"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="714" data-field-left-res-640-value="430"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="761"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 894px; height: 30px; pointer-events: none;"> <a
                            class="tn-atom" href="#popup:price-outher" role="button" aria-haspopup="dialog"
                            style="pointer-events: auto;"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671697390691590 js-sbs-anim-trigger_hover"
                        data-elem-id="1697390691590" data-elem-type="shape" data-field-top-value="734"
                        data-field-left-value="920" data-field-height-value="30" data-field-width-value="260"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="745"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="571" data-field-left-res-640-value="430"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="632"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 734px; height: 30px; pointer-events: none;"> <a
                            class="tn-atom" href="#popup:price-standart" role="button" aria-haspopup="dialog"
                            style="pointer-events: auto;"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671697390656398 js-sbs-anim-trigger_hover"
                        data-elem-id="1697390656398" data-elem-type="shape" data-field-top-value="551"
                        data-field-left-value="920" data-field-height-value="30" data-field-width-value="260"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="510"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="415" data-field-left-res-640-value="428"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="477"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 551px; height: 30px; pointer-events: none;"> <a
                            class="tn-atom" href="#popup:price-full" role="button" aria-haspopup="dialog"
                            style="pointer-events: auto;"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671697390520790 js-sbs-anim-trigger_hover"
                        data-elem-id="1697390520790" data-elem-type="shape" data-field-top-value="366"
                        data-field-left-value="920" data-field-height-value="30" data-field-width-value="260"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="274"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="255" data-field-left-res-640-value="430"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="318"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 366px; height: 30px; pointer-events: none;"> <a
                            class="tn-atom" href="#popup:price-autor" role="button" aria-haspopup="dialog"
                            style="pointer-events: auto;"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874550" data-elem-id="1695798874550"
                        data-elem-type="text" data-field-top-value="351" data-field-left-value="20"
                        data-field-height-value="48" data-field-width-value="340" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="220" data-field-width-res-320-value="265"
                        data-field-top-res-640-value="231" data-field-width-res-640-value="208"
                        data-field-top-res-960-value="309" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="325"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 351px; left: 180.5px; width: 340px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874550" style="line-height: 24px;">Оптимально для
                            Вас, если вы точно знаете что хотите и Вам не нужна визуализация</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874556" data-elem-id="1695798874556"
                        data-elem-type="text" data-field-top-value="535" data-field-left-value="20"
                        data-field-height-value="72" data-field-width-value="278" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="455" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="227" data-field-top-res-640-value="391"
                        data-field-width-res-640-value="198" data-field-top-res-960-value="464"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="255"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 535px; left: 180.5px; width: 278px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874556" style="line-height: 24px;">Оптимально для
                            Вас, если вам нужен полный проект с визуализацией и комплектация</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874559" data-elem-id="1695798874559"
                        data-elem-type="text" data-field-top-value="718" data-field-left-value="20"
                        data-field-height-value="72" data-field-width-value="259" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="690" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="556" data-field-width-res-640-value="204"
                        data-field-top-res-960-value="621" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 718px; left: 180.5px; width: 259px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874559" style="line-height: 24px;">Оптимально для
                            Вас, если вам нужно полное сопровождение на протяжении всего ремонта</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671736704907263" data-elem-id="1736704907263"
                        data-elem-type="text" data-field-top-value="950" data-field-left-value="20"
                        data-field-height-value="72" data-field-width-value="259" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="700px" data-field-left-res-320-value="20px"
                        data-field-top-res-640-value="566px" data-field-width-res-640-value="204"
                        data-field-top-res-960-value="631px" data-field-left-res-960-value="20px"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 950px; left: 180.5px; width: 259px; height: auto;">
                        <div class="tn-atom" field="tn_text_1736704907263" style="line-height: 24px;">Так же вы можете
                            заказать вы можете заказать некоторые услуги отдельно</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874562" data-elem-id="1695798874562"
                        data-elem-type="text" data-field-top-value="848" data-field-left-value="20"
                        data-field-height-value="90" data-field-width-value="384" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="854" data-field-top-res-640-value="674"
                        data-field-top-res-960-value="734" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="249"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 848px; left: 180.5px; width: 384px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874562" style="line-height: 45px;">Дополнительные
                            услуги</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874565" data-elem-id="1695798874565"
                        data-elem-type="text" data-field-top-value="293" data-field-left-value="17"
                        data-field-height-value="45" data-field-width-value="363" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="150" data-field-width-res-320-value="209"
                        data-field-top-res-640-value="196" data-field-top-res-960-value="264"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 293px; left: 177.5px; width: 363px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874565" style="line-height: 45px;">Пакет «‎эскизный»
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874568" data-elem-id="1695798874568"
                        data-elem-type="text" data-field-top-value="480" data-field-left-value="20"
                        data-field-height-value="45" data-field-width-value="340" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="385" data-field-top-res-640-value="357"
                        data-field-top-res-960-value="419" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 480px; left: 180.5px; width: 340px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874568" style="line-height: 45px;">Пакет «стандарт»
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874571" data-elem-id="1695798874571"
                        data-elem-type="text" data-field-top-value="663" data-field-left-value="20"
                        data-field-height-value="45" data-field-width-value="328" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="620" data-field-top-res-640-value="522"
                        data-field-top-res-960-value="576" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 663px; left: 180.5px; width: 328px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874571" style="line-height: 45px;">Пакет «максимум»
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874573" data-elem-id="1695798874573"
                        data-elem-type="text" data-field-top-value="366" data-field-left-value="620"
                        data-field-height-value="34" data-field-width-value="212" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="190" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="261" data-field-left-res-640-value="250"
                        data-field-top-res-960-value="316" data-field-left-res-960-value="470"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 366px; left: 780.5px; width: 212px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874573" style="line-height: 34px;">от 3000 руб./кв.м
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874575" data-elem-id="1695798874575"
                        data-elem-type="text" data-field-top-value="550" data-field-left-value="620"
                        data-field-height-value="34" data-field-width-value="212" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="425" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="421" data-field-left-res-640-value="250"
                        data-field-top-res-960-value="474" data-field-left-res-960-value="470"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 550px; left: 780.5px; width: 212px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874575" style="line-height: 34px;">от 4000 руб./кв.м
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874578" data-elem-id="1695798874578"
                        data-elem-type="text" data-field-top-value="733" data-field-left-value="620"
                        data-field-height-value="34" data-field-width-value="212" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="658" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="566" data-field-left-res-640-value="250"
                        data-field-top-res-960-value="631" data-field-left-res-960-value="470"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 733px; left: 780.5px; width: 212px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874578" style="line-height: 34px;">от 5000 руб./кв.м
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874580" data-elem-id="1695798874580"
                        data-elem-type="shape" data-field-top-value="440" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="345"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="326"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="386"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 440px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874589" data-elem-id="1695798874589"
                        data-elem-type="shape" data-field-top-value="623" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="580"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="482"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="542"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 623px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874591" data-elem-id="1695798874591"
                        data-elem-type="shape" data-field-top-value="806" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="815"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="639"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="699"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 806px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874594" data-elem-id="1695798874594"
                        data-elem-type="shape" data-field-top-value="1036" data-field-left-value="20"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-widthmode-value="fixed"
                        data-field-top-res-320-value="990" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="796" data-field-width-res-640-value="620"
                        data-field-top-res-960-value="839" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 180.5px; top: 1036px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874601" data-elem-id="1695798874601"
                        data-elem-type="text" data-field-top-value="371" data-field-left-value="920"
                        data-field-height-value="20" data-field-width-value="122" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="279" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="143" data-field-top-res-640-value="260"
                        data-field-left-res-640-value="430" data-field-width-res-640-value="200"
                        data-field-top-res-960-value="321" data-field-left-res-960-value="710"
                        data-field-width-res-960-value="119"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 371px; left: 1080.5px; width: 122px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874601" style="line-height: 20px;">Состав пакета
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874604" data-elem-id="1695798874604"
                        data-elem-type="shape" data-field-top-value="396" data-field-left-value="920"
                        data-field-height-value="2" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="305"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="286" data-field-left-res-640-value="430"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="349"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 396px; height: 2px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874622" data-elem-id="1695798874622"
                        data-elem-type="text" data-field-top-value="553" data-field-left-value="920"
                        data-field-height-value="20" data-field-width-value="130" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="514" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="143" data-field-top-res-640-value="420"
                        data-field-left-res-640-value="430" data-field-width-res-640-value="200"
                        data-field-top-res-960-value="480" data-field-left-res-960-value="710"
                        data-field-width-res-960-value="118"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 553px; left: 1080.5px; width: 130px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874622" style="line-height: 20px;">Состав пакета
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874624" data-elem-id="1695798874624"
                        data-elem-type="shape" data-field-top-value="580" data-field-left-value="920"
                        data-field-height-value="2" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="540"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="446" data-field-left-res-640-value="430"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="506"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 580px; height: 2px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874639" data-elem-id="1695798874639"
                        data-elem-type="text" data-field-top-value="738" data-field-left-value="920"
                        data-field-height-value="20" data-field-width-value="130" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="749" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="143" data-field-top-res-640-value="575"
                        data-field-left-res-640-value="430" data-field-width-res-640-value="200"
                        data-field-top-res-960-value="636" data-field-left-res-960-value="710"
                        data-field-width-res-960-value="124"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 738px; left: 1080.5px; width: 130px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874639" style="line-height: 20px;">Состав пакета
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874641" data-elem-id="1695798874641"
                        data-elem-type="shape" data-field-top-value="763" data-field-left-value="920"
                        data-field-height-value="2" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="775"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="601" data-field-left-res-640-value="430"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="662"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 763px; height: 2px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874657" data-elem-id="1695798874657"
                        data-elem-type="text" data-field-top-value="898" data-field-left-value="920"
                        data-field-height-value="20" data-field-width-value="87" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-textfit-value="autoheight"
                        data-field-top-res-320-value="927" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="143" data-field-top-res-640-value="718"
                        data-field-left-res-640-value="430" data-field-width-res-640-value="200"
                        data-field-top-res-960-value="765" data-field-left-res-960-value="710"
                        data-field-width-res-960-value="84"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 898px; left: 1080.5px; width: 87px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798874657" style="line-height: 20px;">Показать</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695798874658" data-elem-id="1695798874658"
                        data-elem-type="shape" data-field-top-value="923" data-field-left-value="920"
                        data-field-height-value="2" data-field-width-value="260" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="949"
                        data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="744" data-field-left-res-640-value="430"
                        data-field-width-res-640-value="200" data-field-top-res-960-value="791"
                        data-field-left-res-960-value="710" data-field-width-res-960-value="240"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 260px; left: 1080.5px; top: 923px; height: 2px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695915898197" data-elem-id="1695915898197"
                        data-elem-type="shape" data-field-top-value="190" data-field-left-value="55"
                        data-field-height-value="34" data-field-width-value="401" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':500,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="95" data-field-left-res-320-value="35"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="163"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="114" data-field-left-res-640-value="45"
                        data-field-width-res-640-value="300"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="159" data-field-left-res-960-value="46"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 401px; left: 215.5px; top: 190px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332067-1695915898197"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695915898209" data-elem-id="1695915898209"
                        data-elem-type="text" data-field-top-value="130" data-field-left-value="20"
                        data-field-height-value="98" data-field-width-value="394" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':60,'sx':0,'sy':0,'op':0,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':60,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':1000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-textfit-value="autoheight" data-field-top-res-320-value="70"
                        data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="79" data-field-top-res-960-value="99"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 130px; left: 180.5px; width: 394px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332067-1695915898209"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915898209" style="line-height: 98px;">Тарифы</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695915898213" data-elem-id="1695915898213"
                        data-elem-type="text" data-field-top-value="165" data-field-left-value="1130"
                        data-field-height-value="25" data-field-width-value="52" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':60,'sx':0,'sy':0,'op':0,'ro':0,'bl':'0','ea':'','dt':0},{'ti':0,'mx':0,'my':60,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':1000,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0}]"
                        data-field-textfit-value="autoheight" data-field-top-res-320-value="80"
                        data-field-left-res-320-value="255"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="101" data-field-left-res-640-value="576"
                        data-field-top-res-960-value="134" data-field-left-res-960-value="896"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 165px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332067-1695915898213"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915898213" style="line-height: 25px;"></div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695986863223" data-elem-id="1695986863223"
                        data-elem-type="image" data-field-top-value="373" data-field-left-value="1165"
                        data-field-height-value="15" data-field-width-value="15" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1633960220381,1695798587077,1697390520790"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':45,'bl':'0','ea':'','dt':0}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-heightmode-value="hug" data-field-top-res-320-value="283"
                        data-field-left-res-320-value="295" data-field-top-res-640-value="263"
                        data-field-left-res-640-value="615" data-field-top-res-960-value="325"
                        data-field-left-res-960-value="935"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1325.5px; top: 373px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332067-1695986863223"
                            style="display: inherit; width: inherit; height: inherit;">
                            <div class="tn-atom"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695986863223"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695986872790" data-elem-id="1695986872790"
                        data-elem-type="image" data-field-top-value="555" data-field-left-value="1162"
                        data-field-height-value="15" data-field-width-value="15" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1633960220381,1695798587077,1697390656398"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':45,'bl':'0','ea':'','dt':0}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-heightmode-value="hug" data-field-top-res-320-value="518"
                        data-field-left-res-320-value="295" data-field-top-res-640-value="423"
                        data-field-left-res-640-value="615" data-field-top-res-960-value="482"
                        data-field-left-res-960-value="935"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1322.5px; top: 555px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332067-1695986872790"
                            style="display: inherit; width: inherit; height: inherit;">
                            <div class="tn-atom"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695986872790"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695986889005" data-elem-id="1695986889005"
                        data-elem-type="image" data-field-top-value="740" data-field-left-value="1163"
                        data-field-height-value="15" data-field-width-value="15" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1633960220381,1695798587077,1697390691590"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':45,'bl':'0','ea':'','dt':0}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-heightmode-value="hug" data-field-top-res-320-value="753"
                        data-field-left-res-320-value="295" data-field-top-res-640-value="578"
                        data-field-left-res-640-value="615" data-field-top-res-960-value="640"
                        data-field-left-res-960-value="935"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1323.5px; top: 740px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332067-1695986889005"
                            style="display: inherit; width: inherit; height: inherit;">
                            <div class="tn-atom"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695986889005"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533320671695986845297" data-elem-id="1695986845297"
                        data-elem-type="image" data-field-top-value="900" data-field-left-value="1163"
                        data-field-height-value="15" data-field-width-value="15" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1633960220381,1695798587077,1697390721980"
                        data-animate-sbs-opts="[{'ti':0,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':0,'bl':'0','ea':'','dt':0},{'ti':200,'mx':0,'my':0,'sx':1,'sy':1,'op':1,'ro':45,'bl':'0','ea':'','dt':0}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-heightmode-value="hug" data-field-top-res-320-value="929"
                        data-field-left-res-320-value="295" data-field-top-res-640-value="720"
                        data-field-left-res-640-value="615" data-field-top-res-960-value="767"
                        data-field-left-res-960-value="935"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1323.5px; top: 900px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332067-1695986845297"
                            style="display: inherit; width: inherit; height: inherit;">
                            <div class="tn-atom"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695986845297"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('653332067'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec646638814" class="r t-rec r_hidden r_anim" style="opacity: 1;" data-record-type="390"
            data-animationappear="off">
            <div class="t390">
                <div class="t-popup" data-tooltip-hook="#popup:price-autor" role="dialog" aria-modal="true"
                    tabindex="-1" aria-label="Пакет «‎ЭСКИЗНЫЙ»">
                    <div class="t-popup__close t-popup__block-close"> <button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"> <svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg> </button> </div>
                    <div class="t-popup__container t-width t-width_6" style="background-color:#fbfbf9;">
                        <div class="t390__wrapper t-align_center">
                            <div class="t390__uptitle t-uptitle t-uptitle_xs">2500 руб./кв.м</div>
                            <div class="t390__title t-heading t-heading_lg" id="popuptitle_646638814">Пакет «‎ЭСКИЗНЫЙ»
                            </div>
                            <div class="t390__descr t-descr t-descr_xs">
                                <ul>
                                    <li data-list="bullet" style="text-align: left;">Обмер+Фото фиксация объекта</li>
                                    <li data-list="bullet" style="text-align: left;">Планировочные решения (2 варианта)
                                    </li>
                                    <li data-list="bullet" style="text-align: left;">Художественная концепция в виде
                                        коллажей</li>
                                    <li data-list="bullet" style="text-align: left;">Чертежи(планы) для строителей</li>
                                    <li data-list="bullet" style="text-align: left;">Рекомендации по основным чистовым
                                        материалам</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script
                type="text/javascript">t_onReady(function () { var rec = document.querySelector('#rec646638814'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = 1; t_onFuncLoad('t390_initPopup', function () { t390_initPopup('646638814'); }); });</script>
        </div>
        <div id="rec646639937" class="r t-rec r_hidden r_anim" style="opacity: 1;" data-record-type="390"
            data-animationappear="off">
            <div class="t390">
                <div class="t-popup" data-tooltip-hook="#popup:price-full" role="dialog" aria-modal="true" tabindex="-1"
                    aria-label="Пакет «‎Стандарт»">
                    <div class="t-popup__close t-popup__block-close"> <button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"> <svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg> </button> </div>
                    <div class="t-popup__container t-width t-width_6" style="background-color:#fbfbf9;">
                        <div class="t390__wrapper t-align_center">
                            <div class="t390__uptitle t-uptitle t-uptitle_xs">3500 руб./кв.м</div>
                            <div class="t390__title t-heading t-heading_lg" id="popuptitle_646639937">Пакет «‎Стандарт»
                            </div>
                            <div class="t390__descr t-descr t-descr_xs">
                                <ul>
                                    <li data-list="bullet" style="text-align: left;">Обмер+Фото фиксация объекта</li>
                                    <li data-list="bullet" style="text-align: left;">Планировочные решения (2 варианта)
                                    </li>
                                    <li data-list="bullet" style="text-align: left;">Визуализация объекта фото
                                        реалистичного качества</li>
                                    <li data-list="bullet" style="text-align: left;">Чертежи(планы) для строителей</li>
                                    <li data-list="bullet" style="text-align: left;">Развертки всех стен с указанием
                                        чистовых материалов</li>
                                    <li data-list="bullet" style="text-align: left;">Спецификация по основным чистовым
                                        материалам и элементам</li>
                                    <li data-list="bullet" style="text-align: left;">Одна плановая встреча с рабочими на
                                        объекте перед началом отделочных работ</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script
                type="text/javascript">t_onReady(function () { var rec = document.querySelector('#rec646639937'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = 1; t_onFuncLoad('t390_initPopup', function () { t390_initPopup('646639937'); }); });</script>
        </div>
        <div id="rec646639953" class="r t-rec r_hidden r_anim" style="opacity: 1;" data-record-type="390"
            data-animationappear="off">
            <div class="t390">
                <div class="t-popup" data-tooltip-hook="#popup:price-standart" role="dialog" aria-modal="true"
                    tabindex="-1" aria-label="Пакет «‎Максимум»">
                    <div class="t-popup__close t-popup__block-close"> <button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"> <svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg> </button> </div>
                    <div class="t-popup__container t-width t-width_6" style="background-color:#fbfbf9;">
                        <div class="t390__wrapper t-align_center">
                            <div class="t390__uptitle t-uptitle t-uptitle_xs">4500 руб./кв.м</div>
                            <div class="t390__title t-heading t-heading_lg" id="popuptitle_646639953">Пакет «‎Максимум»
                            </div>
                            <div class="t390__descr t-descr t-descr_xs">
                                <ul>
                                    <li data-list="bullet" style="text-align: left;">Обмер+Фото фиксация объекта</li>
                                    <li data-list="bullet" style="text-align: left;">Планировочное решение</li>
                                    <li data-list="bullet" style="text-align: left;">Визуализация объекта фото
                                        реалистичного качества</li>
                                    <li data-list="bullet" style="text-align: left;">Чертежи(планы) для строителей</li>
                                    <li data-list="bullet" style="text-align: left;">Развертки всех стен с указанием
                                        чистовых материалов</li>
                                    <li data-list="bullet" style="text-align: left;">Спецификация по основным чистовым
                                        материалам</li>
                                    <li data-list="bullet" style="text-align: left;">Помощь в подборе основных
                                        материалов (поездки по магазинам)</li>
                                    <li data-list="bullet" style="text-align: left;">Помощь в декорировании объекта
                                        (шторы, текстиль, элементы дизайна)</li>
                                    <li data-list="bullet" style="text-align: left;">Полное авторское сопровождение на
                                        протяжении всей стройки</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script
                type="text/javascript">t_onReady(function () { var rec = document.querySelector('#rec646639953'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = 1; t_onFuncLoad('t390_initPopup', function () { t390_initPopup('646639953'); }); });</script>
        </div>
        <div id="rec646639977" class="r t-rec r_hidden r_anim" style="opacity: 1;" data-record-type="390"
            data-animationappear="off">
            <div class="t390">
                <div class="t-popup" data-tooltip-hook="#popup:price-outher" role="dialog" aria-modal="true"
                    tabindex="-1" aria-label="ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ">
                    <div class="t-popup__close t-popup__block-close"> <button type="button"
                            class="t-popup__close-wrapper t-popup__block-close-button"
                            aria-label="Закрыть диалоговое окно"> <svg role="presentation" class="t-popup__close-icon"
                                width="23px" height="23px" viewBox="0 0 23 23" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    <rect
                                        transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                        x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                </g>
                            </svg> </button> </div>
                    <div class="t-popup__container t-width t-width_6" style="background-color:#fbfbf9;">
                        <div class="t390__wrapper t-align_center">
                            <div class="t390__uptitle t-uptitle t-uptitle_xs">также Вы можете заказать</div>
                            <div class="t390__title t-heading t-heading_lg" id="popuptitle_646639977">ДОПОЛНИТЕЛЬНЫЕ
                                УСЛУГИ</div>
                            <div class="t390__descr t-descr t-descr_xs">
                                <ul>
                                    <li style="text-align: left;">Авторский надзор в пределах КАД - 15-20000 руб./в
                                        месяц (в зависимости от района)</li>
                                    <li style="text-align: left;">Авторский надзор за пределами КАД - 20-25000 руб./в
                                        месяц (в зависимости от района)</li>
                                    <li style="text-align: left;">Обмер помещения+планировочные решение (2-3варианта) -
                                        1000 руб./кв.м</li>
                                    <li style="text-align: left;">Консультация (выезд на объект), перед покупкой, перед
                                        началом ремонта - 5000 руб./выезд.</li>
                                </ul><br><br><br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script
                type="text/javascript">t_onReady(function () { var rec = document.querySelector('#rec646639977'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = 1; t_onFuncLoad('t390_initPopup', function () { t390_initPopup('646639977'); }); });</script>
        </div>
        <div id="rec653332364" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="653332364"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="750" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="690" data-artboard-height-res-640="750"
                    data-artboard-height-res-960="650" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="750" data-artboard-proxy-max-height="750">
                    <div class="t396__carrier" data-artboard-recid="653332364"></div>
                    <div class="t396__filter" data-artboard-recid="653332364"></div>
                    <div class="t396__elem tn-elem tn-elem__6533323641697390419198 js-sbs-anim-trigger_hover"
                        data-elem-id="1697390419198" data-elem-type="shape" data-field-top-value="531"
                        data-field-left-value="20" data-field-height-value="30" data-field-width-value="460"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="575"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="635"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="460"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 460px; left: 180.5px; top: 531px; height: 30px; pointer-events: none;"> <a
                            class="tn-atom" href="#popup:consultation" role="button" aria-haspopup="dialog"
                            style="pointer-events: auto;"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695798911470" data-elem-id="1695798911470"
                        data-elem-type="text" data-field-top-value="398" data-field-left-value="20"
                        data-field-width-value="474" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="440" data-field-width-res-320-value="302"
                        data-field-top-res-640-value="542" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="343" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="380"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 398px; left: 180.5px; width: 474px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798911470" style="line-height: 24px;">
                            <ul>
                                <li>Согласуем цену на все этапы заранее и она не меняется в процессе ни на одном из
                                    этапов. </li>
                                <li>Для этого все полностью фиксируем в договоре.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695798911472" data-elem-id="1695798911472"
                        data-elem-type="text" data-field-top-value="293" data-field-left-value="20"
                        data-field-width-value="469" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="370" data-field-width-res-320-value="290"
                        data-field-top-res-640-value="195" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="354" data-field-top-res-960-value="253"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="372"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 293px; left: 180.5px; width: 469px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798911472" style="line-height: 42px;">Цена на дизайн и
                            ремонт не меняется в процессе</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695798911507 t-animate t-animate_wait"
                        data-elem-id="1695798911507" data-elem-type="shape" data-field-top-value="292"
                        data-field-left-value="690" data-field-height-value="315" data-field-width-value="490"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-style="fadeinleft" data-animate-duration="2"
                        data-animate-distance="50" data-field-top-res-320-value="147" data-field-left-res-320-value="10"
                        data-field-height-res-320-value="166" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="278" data-field-left-res-640-value="10"
                        data-field-height-res-640-value="214" data-field-width-res-640-value="387"
                        data-field-top-res-960-value="250" data-field-left-res-960-value="475"
                        data-field-height-res-960-value="261" data-field-width-res-960-value="471"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="width: 490px; left: 850.5px; top: 292px; height: 315px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom t-bgimg"
                            style="background-image:url('https://static.tildacdn.com/tild6634-3465-4166-a137-626464303731/5.jpg');"
                            aria-label="" role="img"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695916608576" data-elem-id="1695916608576"
                        data-elem-type="shape" data-field-top-value="188" data-field-left-value="57"
                        data-field-height-value="34" data-field-width-value="456" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="87" data-field-left-res-320-value="25"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="205"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="115" data-field-left-res-640-value="45"
                        data-field-width-res-640-value="300"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="160" data-field-left-res-960-value="47"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 456px; left: 217.5px; top: 188px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332364-1695916608576"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695916608598" data-elem-id="1695916608598"
                        data-elem-type="text" data-field-top-value="128" data-field-left-value="20"
                        data-field-width-value="474" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="65" data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="80" data-field-top-res-960-value="100"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 128px; left: 180.5px; width: 474px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332364-1695916608598"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695916608598" style="line-height: 98px;">Гарантии</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695798911482" data-elem-id="1695798911482"
                        data-elem-type="text" data-field-top-value="535" data-field-left-value="20"
                        data-field-width-value="157" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="580" data-field-top-res-640-value="640"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="465"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="303"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 535px; left: 180.5px; width: 157px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798911482" style="line-height: 20px;">Смотреть договор
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695916608606" data-elem-id="1695916608606"
                        data-elem-type="text" data-field-top-value="163" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="75" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="103" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="135" data-field-left-res-960-value="897"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 163px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332364-1695916608606"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695916608606" style="line-height: 25px;"></div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695798911484" data-elem-id="1695798911484"
                        data-elem-type="shape" data-field-top-value="560" data-field-left-value="20"
                        data-field-height-value="2" data-field-width-value="460" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="602"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="665"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="490"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="300"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 460px; left: 180.5px; top: 560px; height: 2px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695982160425 t-animate t-animate_wait"
                        data-elem-id="1695982160425" data-elem-type="image" data-field-top-value="455"
                        data-field-left-value="580" data-field-width-value="292" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-style="fadeinup" data-animate-duration="2" data-animate-distance="50"
                        data-field-filewidth-value="1016" data-field-fileheight-value="698"
                        data-field-top-res-320-value="230" data-field-left-res-320-value="170"
                        data-field-width-res-320-value="191" data-field-top-res-640-value="367"
                        data-field-left-res-640-value="250" data-field-top-res-960-value="388"
                        data-field-left-res-960-value="397" data-field-width-res-960-value="246"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        data-observer-ready="true"
                        style="left: 740.5px; top: 455px; width: 292px; transform: unset; transition-duration: 2s;">
                        <div class="tn-atom"> <img class="tn-atom__img t-img"
                                data-original="https://static.tildacdn.com/tild3764-3732-4632-b234-643361353063/nastenniy-kotel-doc4.png"
                                alt="" imgfield="tn_img_1695982160425"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6533323641695987518706" data-elem-id="1695987518706"
                        data-elem-type="image" data-field-top-value="535" data-field-left-value="460"
                        data-field-width-value="16" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-trgels="1633960220381,1695798587077,1695797803957,1697390419198"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':45,'bl':'0','ea':'','dt':'0'}]"
                        data-field-filewidth-value="16" data-field-fileheight-value="16"
                        data-field-top-res-320-value="581" data-field-left-res-320-value="292"
                        data-field-top-res-640-value="642" data-field-top-res-960-value="467"
                        data-field-left-res-960-value="293"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 620.5px; top: 535px; width: 16px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-653332364-1695987518706"
                            style="display: inherit; width: inherit; height: inherit;">
                            <div class="tn-atom"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild3762-6564-4061-a231-376432646366/arrow_1.svg"
                                    alt="" imgfield="tn_img_1695987518706"> </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('653332364'); }); });</script>
            <!-- /T396 -->
        </div>

        <div id="rec646114295" class="r t-rec t-rec_pb_0 r_hidden r_anim" style="padding-bottom:0px; "
            data-record-type="215"> <a name="contacts" style="font-size:0;"></a> </div>
        <div id="rec645336490" class="r t-rec t-rec_pb_0" style="padding-bottom: 0px; --zoom: 1;"
            data-animationappear="off" data-record-type="396"> <!-- T396 -->
            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="645336490"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="1050" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1135"
                    data-artboard-height-res-640="1116.5" data-artboard-height-res-960="958.5"
                    data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="1050"
                    data-artboard-proxy-max-height="1050">
                    <div class="t396__carrier" data-artboard-recid="645336490"></div>
                    <div class="t396__filter" data-artboard-recid="645336490"></div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695801104800 zero-form-rendered"
                        data-elem-id="1695801104800" data-elem-type="form" data-field-top-value="308"
                        data-field-left-value="420" data-field-width-value="762" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="240" data-field-width-res-320-value="300"
                        data-field-top-res-640-value="299" data-field-left-res-640-value="10"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="237"
                        data-field-left-res-960-value="330" data-field-width-res-960-value="621"
                        data-field-inputpos-value="v" data-field-inputfontfamily-value="TildaSans"
                        data-field-inputfontsize-value="16" data-field-inputfontweight-value="400"
                        data-field-inputcolor-value="#000" data-field-inputbgcolor-value="#fff"
                        data-field-inputbordercolor-value="#000" data-field-inputbordersize-value="1"
                        data-field-inputheight-value="50" data-field-inputmargbottom-value="20"
                        data-field-inputmargright-value="20" data-field-inputtitlefontsize-value="16"
                        data-field-inputtitlefontweight-value="400" data-field-inputtitlecolor-value="#000"
                        data-field-inputtitlemargbottom-value="5" data-field-inputelsfontweight-value="400"
                        data-field-inputelsfontsize-value="14" data-field-inputsstyle-value="y"
                        data-field-inputsstyle2-value="y" data-field-buttontitle-value="ОТПРАВИТЬ ЗАЯВКУ"
                        data-field-buttoncolor-value="#fff" data-field-buttonbgcolor-value="#252525"
                        data-field-buttonwidth-value="360" data-field-buttonheight-value="65"
                        data-field-buttonfontfamily-value="TildaSans" data-field-buttonfontsize-value="14"
                        data-field-buttonfontweight-value="600"
                        data-field-receivers-value="c4de4af61ab9f8b89f233a246af78632"
                        data-field-formbottomtext-value="&lt;span style='color: rgb(128, 128, 128); font-size: 14px;'&gt;Нажимая на кнопку, вы соглашаетесь с обработкой персональных данных и политикой конфиденциальности&lt;/span&gt;"
                        data-field-inputfontsize-res-320-value="16" data-field-buttonwidth-res-320-value="300"
                        data-fields="width,top,left,inputs,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="width: 762px; left: 580.5px; top: 308px;">
                        <div class="tn-atom tn-atom__form">
                            <form class="t-form t-form_inputs-total_4 t-form_bbonly js-form-proccess" id="form645336490"
                                name="form645336490" action="https://forms.tildacdn.com/procces/" method="POST"
                                role="form" data-formactiontype="2" data-inputbox=".t-input-group"
                                data-success-callback="t396_onSuccess" data-success-popup="y" data-error-popup="y">
                                <input type="hidden" tabindex="-1" value="c4de4af61ab9f8b89f233a246af78632"
                                    name="formservices[]" class="js-formaction-services"><input type="hidden"
                                    tabindex="-1" value="1695801104800" name="tildaspec-elemid">
                                <div class="js-successbox t-form__successbox t-text t-text_sm" style="display: none;">
                                </div>
                                <div class="t-form__inputsbox">
                                    <div class="t-input-group t-input-group_em" data-input-lid="1531306243545"
                                        style="margin-bottom: 20px;">
                                        <div class="t-input-block"><input aria-label="email" type="email" name="email"
                                                class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles t-input_pvis"
                                                data-tilda-rule="email" data-tilda-req="1"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;">
                                            <div class="t-input__vis-ph"
                                                style="top: 17px; font-weight: 400; font-size: 16px; height: 17px;">Имя
                                            </div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ph" data-input-lid="1531306540094"
                                        style="margin-bottom: 20px;" data-init-mask="yes" data-input-ready="true">
                                        <div class="t-input-block" style="overflow: visible;">
                                            <div class="t-input t-input-phonemask__wrap t-input_bbonly t-input-inline-styles"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;">
                                                <div class="t-input-phonemask__select"><span
                                                        class="t-input-phonemask__select-flag"
                                                        data-phonemask-flag="ru"></span><span
                                                        class="t-input-phonemask__select-triangle"></span><span
                                                        class="t-input-phonemask__select-code"
                                                        style="font-size: 16px; font-weight: 400;">+7</span></div><input
                                                    type="hidden" class="js-phonemask-result-iso"
                                                    name="tildaspec-phone-part[]-iso" value="" tabindex="-1"><input
                                                    type="tel" class="t-input t-input-phonemask"
                                                    name="tildaspec-phone-part[]" value="" placeholder="(999) 999-99-99"
                                                    id="input_1531306540094" data-phonemask-iso="ru"
                                                    data-phonemask-code="+7" data-phonemask-mask="+7(999) 999-99-99"
                                                    maxlength="15" data-phonemask-without-code="(999) 999-99-99"
                                                    style="font-size: 16px; font-weight: 400;"><input type="hidden"
                                                    class="js-phonemask-result js-tilda-rule" data-tilda-rule="phone"
                                                    name="Phone" value="" data-tilda-req="1" tabindex="-1"
                                                    data-tilda-rule-minlength="18">
                                            </div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_em" data-input-lid="1695801206434"
                                        style="margin-bottom: 20px;">
                                        <div class="t-input-block"><input aria-label="email" type="email" name="Email"
                                                class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles t-input_pvis"
                                                data-tilda-rule="email" data-tilda-req="1"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;">
                                            <div class="t-input__vis-ph"
                                                style="top: 17px; font-weight: 400; font-size: 16px; height: 17px;">
                                                Email</div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-input-group t-input-group_ta" data-input-lid="1695801219956"
                                        style="margin-bottom: 20px;">
                                        <div class="t-input-block"><textarea aria-label="textarea" name="Textarea"
                                                class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles t-input_pvis"
                                                data-rows="3" rows="3"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 85px;"></textarea>
                                            <div class="t-input__vis-ph"
                                                style="top: 17px; font-weight: 400; font-size: 16px; height: 17px;">
                                                Сообщение</div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>
                                    <div class="t-form__errorbox-middle">
                                        <div class="js-errorbox-all t-form__errorbox-wrapper" style="display: none;">
                                            <div class="t-form__errorbox-text t-text_xs t-text">
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                                <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                            </div>
                                            <div class="tn-form__errorbox-close js-errorbox-close">
                                                <div
                                                    class="tn-form__errorbox-close-line tn-form__errorbox-close-line-left">
                                                </div>
                                                <div
                                                    class="tn-form__errorbox-close-line tn-form__errorbox-close-line-right">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tn-form__submit"><button type="submit" class="t-submit"
                                            style="padding: 0px 15px; display: block; width: 360px; font-weight: 600; height: 65px;">ОТПРАВИТЬ
                                            ЗАЯВКУ</button></div>
                                </div>
                                <div
                                    style="text-align: left; color: rgb(0, 0, 0); font-weight: 400; font-family: TildaSans; margin-top: 15px; font-size: 13px;">
                                    <span><span style="color: rgb(128, 128, 128); font-size: 14px;">Нажимая на кнопку,
                                            вы соглашаетесь с обработкой персональных данных и политикой
                                            конфиденциальности</span></span>
                                </div>
                                <div class="t-form__errorbox-bottom">
                                    <div class="js-errorbox-all t-form__errorbox-wrapper" style="display: none;">
                                        <div class="t-form__errorbox-text t-text_xs t-text">
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-all"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-req"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-email"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-name"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-phone"></p>
                                            <p class="t-form__errorbox-item js-rule-error js-rule-error-string"></p>
                                        </div>
                                        <div class="tn-form__errorbox-close js-errorbox-close">
                                            <div class="tn-form__errorbox-close-line tn-form__errorbox-close-line-left">
                                            </div>
                                            <div
                                                class="tn-form__errorbox-close-line tn-form__errorbox-close-line-right">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="position: absolute; left: -5000px; bottom: 0px; display: none;"><input
                                        type="text" name="form-spec-comments" class="js-form-spec-comments"
                                        tabindex="-1"></div>
                            </form>
                        </div> <!--googleoff: all--> <!--noindex-->
                        <div data-nosnippet="true" class="tn-atom__inputs-wrapp" style="display:none;"> <textarea
                                class="tn-atom__inputs-textarea">[{"lid":"1531306243545","ls":"10","loff":"","li_type":"em","li_name":"email","li_ph":"\u0418\u043c\u044f","li_req":"y","li_nm":"email"},{"lid":"1531306540094","ls":"20","loff":"","li_type":"ph","li_req":"y","li_masktype":"a","li_maskcountry":"RU","li_nm":"Phone"},{"lid":"1695801206434","ls":"30","loff":"","li_type":"em","li_ph":"Email","li_req":"y","li_nm":"Email"},{"lid":"1695801219956","ls":"40","loff":"","li_type":"ta","li_ph":"\u0421\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435","li_rows":"3","li_nm":"Textarea"}]</textarea>
                        </div> <!--/noindex--> <!--googleon: all-->
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983908" data-elem-id="1695798983908"
                        data-elem-type="shape" data-field-top-value="792" data-field-left-value="22"
                        data-field-height-value="1" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-top-res-320-value="718"
                        data-field-width-res-320-value="300" data-field-top-res-640-value="778"
                        data-field-width-res-640-value="620" data-field-top-res-960-value="730"
                        data-field-left-res-960-value="10" data-field-width-res-960-value="940"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1160px; left: 182.5px; top: 792px; height: 1px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983914" data-elem-id="1695798983914"
                        data-elem-type="text" data-field-top-value="853" data-field-left-value="22"
                        data-field-width-value="144" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="778" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="169" data-field-top-res-640-value="840"
                        data-field-left-res-640-value="7" data-field-top-res-960-value="802"
                        data-field-left-res-960-value="12"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 853px; left: 182.5px; width: 144px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983914" style="line-height: 30px;"><a
                                href="tel:+79046164784">+7(904)616-47-84</a><br><a
                                href="tel:+78129814784">+7(812)981-47-84</a></div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983917" data-elem-id="1695798983917"
                        data-elem-type="text" data-field-top-value="822" data-field-left-value="22"
                        data-field-width-value="74" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="758" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="808" data-field-left-res-640-value="7"
                        data-field-top-res-960-value="760" data-field-left-res-960-value="12"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 822px; left: 182.5px; width: 74px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983917" style="line-height: 20px;">Телефон</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983919" data-elem-id="1695798983919"
                        data-elem-type="text" data-field-top-value="822" data-field-left-value="422"
                        data-field-width-value="45" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="871" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="808" data-field-left-res-640-value="322"
                        data-field-top-res-960-value="760" data-field-left-res-960-value="328"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 822px; left: 582.5px; width: 45px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983919" style="line-height: 20px;">Email</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983921" data-elem-id="1695798983921"
                        data-elem-type="text" data-field-top-value="822" data-field-left-value="822"
                        data-field-width-value="50" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="983" data-field-left-res-320-value="10"
                        data-field-top-res-640-value="938" data-field-left-res-640-value="10"
                        data-field-top-res-960-value="760" data-field-left-res-960-value="652"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 822px; left: 982.5px; width: 50px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983921" style="line-height: 20px;">Адрес</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983923" data-elem-id="1695798983923"
                        data-elem-type="text" data-field-top-value="853" data-field-left-value="422"
                        data-field-width-value="146" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="893" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="164" data-field-top-res-640-value="840"
                        data-field-left-res-640-value="322" data-field-top-res-960-value="802"
                        data-field-left-res-960-value="328"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 853px; left: 582.5px; width: 146px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983923" style="line-height: 30px;">6164784@mail.ru
                            <br>niklajj-dikijj@bk.ru
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983925" data-elem-id="1695798983925"
                        data-elem-type="text" data-field-top-value="853" data-field-left-value="822"
                        data-field-width-value="333" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="1006" data-field-left-res-320-value="10"
                        data-field-width-res-320-value="301" data-field-top-res-640-value="970"
                        data-field-left-res-640-value="10" data-field-top-res-960-value="802"
                        data-field-left-res-960-value="652" data-field-width-res-960-value="294"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 853px; left: 982.5px; width: 333px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983925" style="line-height: 30px;">г.
                            Санкт-Петербург, Ленинский проспект 144, корп. 1,стр. 2</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983927" data-elem-id="1695798983927"
                        data-elem-type="text" data-field-top-value="321" data-field-left-value="22"
                        data-field-width-value="308" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="153" data-field-left-res-320-value="8"
                        data-field-top-res-640-value="199" data-field-top-res-960-value="250"
                        data-field-left-res-960-value="12"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 321px; left: 182.5px; width: 308px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983927" style="line-height: 34px;">ОСТАЛИСЬ ВОПРОСЫ?
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695798983929" data-elem-id="1695798983929"
                        data-elem-type="text" data-field-top-value="365" data-field-left-value="22"
                        data-field-width-value="291" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="190" data-field-left-res-320-value="8"
                        data-field-top-res-640-value="239" data-field-top-res-960-value="295"
                        data-field-left-res-960-value="12"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 365px; left: 182.5px; width: 291px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798983929" style="line-height: 25px;">Вы можете задать
                            их прямо здесь.</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695916885326" data-elem-id="1695916885326"
                        data-elem-type="shape" data-field-top-value="195" data-field-left-value="57"
                        data-field-height-value="34" data-field-width-value="476" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="95" data-field-left-res-320-value="35"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="208"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="45"
                        data-field-width-res-640-value="300"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="167" data-field-left-res-960-value="47"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 476px; left: 217.5px; top: 195px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645336490-1695916885326"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695916885341" data-elem-id="1695916885341"
                        data-elem-type="text" data-field-top-value="135" data-field-left-value="20"
                        data-field-width-value="474" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="73" data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="87" data-field-top-res-960-value="107"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 135px; left: 180.5px; width: 474px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645336490-1695916885341"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695916885341" style="line-height: 98px;">Контакты</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6453364901695916885349" data-elem-id="1695916885349"
                        data-elem-type="text" data-field-top-value="172" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="83" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="110" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="143" data-field-left-res-960-value="897"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 172px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645336490-1695916885349"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695916885349" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('645336490'); }); });</script>
            <!-- /T396 -->
        </div> <!--footer-->

        <footer id="t-footer" class="t-records" data-hook="blocks-collection-content-node"
            data-tilda-project-id="7378990" data-tilda-page-id="40381991" data-tilda-page-alias="footer"
            data-tilda-formskey="5fd665d1bd81ccc3f894e0dfe7378990" data-tilda-lazy="yes" data-tilda-root-zone="com">
            <div id="rec653299401" class="r t-rec" style="background-color: rgb(37, 37, 37); --zoom: 1;"
                data-animationappear="off" data-record-type="396" data-bg-color="#252525"> <!-- T396 -->
                <div class="t396">
                    <div class="t396__artboard rendered" data-artboard-recid="653299401"
                        data-artboard-screens="320,480,640,960,1200" data-artboard-height="134.5"
                        data-artboard-valign="center" data-artboard-upscale="grid" data-artboard-height-res-320="240"
                        data-artboard-height-res-480="220.5" data-artboard-height-res-640="264"
                        data-artboard-height-res-960="114" data-artboard-proxy-min-offset-top="0"
                        data-artboard-proxy-min-height="134.5" data-artboard-proxy-max-height="134.5">
                        <div class="t396__carrier" data-artboard-recid="653299401"></div>
                        <div class="t396__filter" data-artboard-recid="653299401"></div>
                        <div class="t396__elem tn-elem tn-elem__6532994011475143840125" data-elem-id="1475143840125"
                            data-elem-type="text" data-field-top-value="30" data-field-left-value="40"
                            data-field-width-value="358" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-field-top-res-320-value="100"
                            data-field-left-res-320-value="10" data-field-width-res-320-value="300"
                            data-field-top-res-480-value="102" data-field-left-res-480-value="43"
                            data-field-top-res-640-value="99" data-field-left-res-640-value="123"
                            data-field-width-res-640-value="392" data-field-container-res-640-value="grid"
                            data-field-top-res-960-value="26" data-field-left-res-960-value="40"
                            data-field-width-res-960-value="314"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 30px; left: 40px; width: 358px; height: auto;">
                            <div class="tn-atom" field="tn_text_1475143840125" style="line-height: 27px;">© Студия
                                дизайна интерьеров Dikii-Design, 2023<br><a href="./privacy"
                                    style="color: rgb(255, 255, 255);">Политика конфиденциальности</a></div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532994011475145377912" data-elem-id="1475145377912"
                            data-elem-type="text" data-field-top-value="30" data-field-left-value="-41"
                            data-field-width-value="136" data-field-axisy-value="top" data-field-axisx-value="right"
                            data-field-container-value="window" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-field-top-res-320-value="148"
                            data-field-left-res-320-value="10" data-field-top-res-480-value="151"
                            data-field-left-res-480-value="90" data-field-top-res-640-value="159"
                            data-field-left-res-640-value="170" data-field-width-res-640-value="300"
                            data-field-axisx-res-640-value="left" data-field-container-res-640-value="grid"
                            data-field-top-res-960-value="26" data-field-left-res-960-value="-40"
                            data-field-width-res-960-value="220"
                            data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="top: 30px; left: 1344px; width: 136px; height: auto;">
                            <div class="tn-atom" style="line-height: 22px;"><a href="https://ihadieva.ru/"
                                    rel="nofollow noopener" target="_blank" style="color: inherit">Разработка сайта</a>
                            </div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532994011475158728637" data-elem-id="1475158728637"
                            data-elem-type="image" data-field-top-value="25" data-field-left-value="549"
                            data-field-width-value="30" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':1,'sy':1,'op':0.8,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-320-value="46" data-field-left-res-320-value="109"
                            data-field-top-res-480-value="46" data-field-left-res-480-value="189"
                            data-field-top-res-640-value="46" data-field-left-res-640-value="269"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="429"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 709.5px; top: 25px; width: 30px;">
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532994011475158776955" data-elem-id="1475158776955"
                            data-elem-type="image" data-field-top-value="25" data-field-left-value="621"
                            data-field-width-value="30" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':1,'sy':1,'op':0.8,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-320-value="46" data-field-left-res-320-value="181"
                            data-field-top-res-480-value="46" data-field-left-res-480-value="261"
                            data-field-top-res-640-value="46" data-field-left-res-640-value="341"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="501"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 781.5px; top: 25px; width: 30px;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-653299401-1475158776955"
                                style="display: inherit; width: inherit; height: inherit; pointer-events: none;"><a
                                    class="tn-atom" href="https://www.instagram.com/dikiidesign/" target="_blank"
                                    rel="noopener" style="pointer-events: auto;"> <img class="tn-atom__img t-img"
                                        data-original="https://static.tildacdn.com/tild3739-3362-4663-b034-666236313234/Group_6.svg"
                                        alt="" imgfield="tn_img_1475158776955"> </a></div>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('653299401'); }); });</script>
                <!-- /T396 -->
            </div>
            <div id="rec653299402" class="r t-rec" style="opacity: 1;" data-animationappear="off"
                data-record-type="890"> <!-- t890 -->
                <div class="t890"
                    style="display: none; opacity:1; position:fixed; z-index:99990; bottom:20px;right:20px;"> <button
                        type="button" class="t890__arrow" aria-label="Вернуться к началу страницы"
                        style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);"> <svg role="presentation" width="50"
                            height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect width="50" height="50" rx="50" fill="#ffffff" fill-opacity="0.90" stroke="none">
                            </rect>
                            <path d="M14 28L25 18l10 10" stroke="#17161c" stroke-width="1" fill="none"></path>
                        </svg> </button> </div>
                <script
                    type="text/javascript">t_onReady(function () { t_onFuncLoad('t890_init', function () { t890_init('653299402', '1000'); }); });</script>
            </div>
            <div id="rec653299529" class="r t-rec" style="opacity: 1;" data-animationappear="off" data-record-type="702"
                data-popup-subscribe-inited="y"> <!-- T702 -->
                <div class="t702">
                    <div class="t-popup" data-tooltip-hook="#popup:consultation" role="dialog" aria-modal="true"
                        tabindex="-1" aria-label="Бесплатная консультация">
                        <div class="t-popup__close t-popup__block-close"> <button type="button"
                                class="t-popup__close-wrapper t-popup__block-close-button"
                                aria-label="Закрыть диалоговое окно"> <svg role="presentation"
                                    class="t-popup__close-icon" width="23px" height="23px" viewBox="0 0 23 23"
                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                    <g stroke="none" stroke-width="1" fill="#fff" fill-rule="evenodd">
                                        <rect
                                            transform="translate(11.313708, 11.313708) rotate(-45.000000) translate(-11.313708, -11.313708) "
                                            x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                        <rect
                                            transform="translate(11.313708, 11.313708) rotate(-315.000000) translate(-11.313708, -11.313708) "
                                            x="10.3137085" y="-3.6862915" width="2" height="30"></rect>
                                    </g>
                                </svg> </button> </div>
                        <div class="t-popup__container t-width t-width_6">
                            <div class="t702__wrapper">
                                <div class="t702__text-wrapper t-align_center">
                                    <div class="t702__title t-title t-title_xxs" id="popuptitle_653299529">Бесплатная
                                        консультация</div>
                                    <div class="t702__descr t-descr t-descr_xs">Пожалуйста, заполните форму. И мы
                                        свяжемся с вами в ближайшее время.</div>
                                </div>
                                <form id="form653299529" name="form653299529" role="form" action="#" method="POST"
                                    data-formactiontype="2" data-inputbox=".t-input-group"
                                    class="t-form js-form-proccess t-form_inputs-total_3 "
                                    data-success-callback="t702_onSuccess"> <input type="hidden" name="formservices[]"
                                        value="c4de4af61ab9f8b89f233a246af78632" class="js-formaction-services">
                                    <div class="js-successbox t-form__successbox t-text t-text_md" aria-live="polite"
                                        style="display:none;"></div>
                                    <div
                                        class="t-form__inputsbox t-form__inputsbox_vertical-form t-form__inputsbox_inrow">
                                        <div class=" t-input-group t-input-group_nm " data-input-lid="3559215262381"
                                            data-field-type="nm" data-field-name="Name">
                                            <div class="t-input-block " style="border-radius:5px;"> <input type="text"
                                                    autocomplete="name" name="Name" id="input_3559215262381"
                                                    class="t-input js-tilda-rule" value="" placeholder="Имя"
                                                    data-tilda-req="1" aria-required="true" data-tilda-rule="name"
                                                    aria-describedby="error_3559215262381"
                                                    style="color:#000000;border:1px solid #c9c9c9;border-radius:5px;font-family:'TildaSans';font-weight:400;">
                                            </div>
                                            <div class="t-input-error" aria-live="polite" id="error_3559215262381">
                                            </div>
                                        </div>
                                        <div class=" t-input-group t-input-group_em " data-input-lid="3559215262380"
                                            data-field-type="em" data-field-name="Email">
                                            <div class="t-input-block " style="border-radius:5px;"> <input type="email"
                                                    autocomplete="email" name="Email" id="input_3559215262380"
                                                    class="t-input js-tilda-rule" value="" placeholder="Email"
                                                    data-tilda-req="1" aria-required="true" data-tilda-rule="email"
                                                    aria-describedby="error_3559215262380"
                                                    style="color:#000000;border:1px solid #c9c9c9;border-radius:5px;font-family:'TildaSans';font-weight:400;">
                                            </div>
                                            <div class="t-input-error" aria-live="polite" id="error_3559215262380">
                                            </div>
                                        </div>
                                        <div class=" t-input-group t-input-group_ph " data-input-lid="3559215262382"
                                            data-field-async="true" data-field-type="ph" data-field-name="Phone"
                                            data-init-mask="yes" data-input-ready="true">
                                            <div class="t-input-block " style="border-radius: 5px; overflow: visible;">
                                                <div class="t-input t-input-phonemask__wrap t-input-inline-styles"
                                                    style="color:#000000;border:1px solid #c9c9c9;border-radius:5px;font-family:'TildaSans';font-weight:400;">
                                                    <div class="t-input-phonemask__select"><span
                                                            class="t-input-phonemask__select-flag"
                                                            data-phonemask-flag="ru"></span><span
                                                            class="t-input-phonemask__select-triangle"></span><span
                                                            class="t-input-phonemask__select-code"
                                                            style="font-weight: 400;">+7</span></div><input
                                                        type="hidden" class="js-phonemask-result-iso"
                                                        name="tildaspec-phone-part[]-iso" value="" tabindex="-1"><input
                                                        type="tel" class="t-input t-input-phonemask"
                                                        name="tildaspec-phone-part[]" value=""
                                                        placeholder="(999) 999-99-99" id="input_3559215262382"
                                                        data-phonemask-iso="ru" data-phonemask-code="+7"
                                                        data-phonemask-mask="+7(999) 999-99-99" maxlength="15"
                                                        data-phonemask-without-code="(999) 999-99-99"
                                                        style="font-weight: 400; font-family: TildaSans;"><input
                                                        type="hidden" class="js-phonemask-result js-tilda-rule"
                                                        data-tilda-rule="phone" name="Phone" value="" data-tilda-req="1"
                                                        tabindex="-1" data-tilda-rule-minlength="18">
                                                </div>
                                                <script
                                                    type="text/javascript">t_onReady(function () { t_onFuncLoad('t_loadJsFile', function () { t_loadJsFile('https://static.tildacdn.com/js/tilda-phone-mask-1.1.min.js', function () { t_onFuncLoad('t_form_phonemask_load', function () { var phoneMasks = document.querySelectorAll('#rec653299529 [data-phonemask-lid="3559215262382"]'); t_form_phonemask_load(phoneMasks); }); }) }) });</script>
                                            </div>
                                            <div class="t-input-error" aria-live="polite" id="error_3559215262382">
                                            </div>
                                        </div>
                                        <div class="t-form__errorbox-middle"> <!--noindex-->
                                            <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;"
                                                data-nosnippet="" tabindex="-1"
                                                aria-label="Ошибки при заполнении формы">
                                                <ul role="list" class="t-form__errorbox-text t-text t-text_md">
                                                    <li class="t-form__errorbox-item js-rule-error js-rule-error-all">
                                                    </li>
                                                    <li class="t-form__errorbox-item js-rule-error js-rule-error-req">
                                                    </li>
                                                    <li class="t-form__errorbox-item js-rule-error js-rule-error-email">
                                                    </li>
                                                    <li class="t-form__errorbox-item js-rule-error js-rule-error-name">
                                                    </li>
                                                    <li class="t-form__errorbox-item js-rule-error js-rule-error-phone">
                                                    </li>
                                                    <li
                                                        class="t-form__errorbox-item js-rule-error js-rule-error-minlength">
                                                    </li>
                                                    <li
                                                        class="t-form__errorbox-item js-rule-error js-rule-error-string">
                                                    </li>
                                                </ul>
                                            </div> <!--/noindex-->
                                        </div>
                                        <div class="t-form__submit"> <button type="submit" class="t-submit"
                                                style="color:#ffffff;background-color:#252525;font-family:TildaSans;font-weight:500;text-transform:uppercase;"
                                                data-field="buttontitle" data-buttonfieldset="button">
                                                Отправить </button> </div>
                                    </div>
                                    <div class="t-form__errorbox-bottom"> <!--noindex-->
                                        <div class="js-errorbox-all t-form__errorbox-wrapper" style="display:none;"
                                            data-nosnippet="" tabindex="-1" aria-label="Ошибки при заполнении формы">
                                            <ul role="list" class="t-form__errorbox-text t-text t-text_md">
                                                <li class="t-form__errorbox-item js-rule-error js-rule-error-all"></li>
                                                <li class="t-form__errorbox-item js-rule-error js-rule-error-req"></li>
                                                <li class="t-form__errorbox-item js-rule-error js-rule-error-email">
                                                </li>
                                                <li class="t-form__errorbox-item js-rule-error js-rule-error-name"></li>
                                                <li class="t-form__errorbox-item js-rule-error js-rule-error-phone">
                                                </li>
                                                <li class="t-form__errorbox-item js-rule-error js-rule-error-minlength">
                                                </li>
                                                <li class="t-form__errorbox-item js-rule-error js-rule-error-string">
                                                </li>
                                            </ul>
                                        </div> <!--/noindex-->
                                    </div>
                                    <div style="position: absolute; left: -5000px; bottom: 0; display: none;"><input
                                            type="text" name="form-spec-comments" value="Its good"
                                            class="js-form-spec-comments" tabindex="-1"></div>
                                </form>
                                <div class="t702__form-bottom-text t-text t-text_xs t-align_center">Нажимая на кнопку,
                                    вы соглашаетесь с обработкой персональных данных и политикой конфиденциальности
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script>t_onReady(function () { t_onFuncLoad('t702_initPopup', function () { t702_initPopup('653299529'); }); });</script>
            </div>
        </footer>
    </div>
</body>

</html>