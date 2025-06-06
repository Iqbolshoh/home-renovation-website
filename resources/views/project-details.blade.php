<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подробности проекта</title>
    <!-- CSS fayllar -->
    <link rel="stylesheet" href="{{ asset('css/projects-details.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fonts-tildasans.css') }}" media="all" onerror="this.loaderr='y';">
    <link rel="stylesheet" href="{{ asset('css/tilda-grid-3.0.min.css') }}" media="all" onerror="this.loaderr='y';">
    <link rel="stylesheet" href="{{ asset('css/tilda-blocks-page41052446.min.css') }}" media="all"
        onerror="this.loaderr='y';">
    <link rel="stylesheet" href="{{ asset('css/tilda-animation-2.0.min.css') }}" media="all"
        onerror="this.loaderr='y';">
    <link rel="stylesheet" href="{{ asset('css/tilda-cover-1.0.min.css') }}" media="all" onerror="this.loaderr='y';">
    <link rel="stylesheet" href="{{ asset('css/tilda-slds-1.4.min.css') }}" media="all" onload="this.media='all';"
        onerror="this.loaderr='y';">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/tilda-slds-1.4.min.css') }}" media="all">
    </noscript>
    <link rel="stylesheet" href="{{ asset('css/tilda-menusub-1.0.min.css') }}" media="all" onload="this.media='all';"
        onerror="this.loaderr='y';">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/tilda-menusub-1.0.min.css') }}" media="all">
    </noscript>
    <link rel="stylesheet" href="{{ asset('css/tilda-popup-1.1.min.css') }}" media="all" onload="this.media='all';"
        onerror="this.loaderr='y';">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/tilda-popup-1.1.min.css') }}" media="all">
    </noscript>
    <link rel="stylesheet" href="{{ asset('css/tilda-forms-1.0.min.css') }}" media="all" onerror="this.loaderr='y';">
    <link rel="stylesheet" href="{{ asset('css/tilda-zoom-2.0.min.css') }}" media="all" onload="this.media='all';"
        onerror="this.loaderr='y';">
    <noscript>
        <link rel="stylesheet" href="{{ asset('css/tilda-zoom-2.0.min.css') }}" media="all">
    </noscript>
    <!-- JS fayllar -->
    <script async id="tildastatscript" src="{{ asset('js/tilda-stat-1.0.min.js') }}"></script>
    <script async id="t-phonemask-script" src="{{ asset('js/tilda-phone-mask-1.1.min.js') }}"></script>
    <script async src="{{ asset('js/tilda-fallback-1.0.min.js') }}" charset="utf-8"></script>
    <script nomodule src="{{ asset('js/tilda-polyfill-1.0.min.js') }}" charset="utf-8"></script>
    <script defer src="{{ asset('js/tilda-scripts-3.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-blocks-page41052446.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-lazyload-1.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-animation-2.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-zero-1.1.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-cover-1.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-slds-1.4.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/hammer.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-menusub-1.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-menu-1.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-submenublocks-1.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-popup-1.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-forms-1.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-zero-forms-1.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-animation-sbs-1.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-zoom-2.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-zero-scale-1.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-zero-fixed-1.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-skiplink-1.0.min.js') }}" charset="utf-8"
        onerror="this.loaderr='y';"></script>
    <script async src="{{ asset('js/tilda-events-1.0.min.js') }}" charset="utf-8" onerror="this.loaderr='y';"></script>
    <script>function t_onReady(t) { "loading" != document.readyState ? t() : document.addEventListener("DOMContentLoaded", t) } function t_onFuncLoad(t, e, a) { "function" == typeof window[t] ? e() : setTimeout(function () { t_onFuncLoad(t, e, a) }, a || 100) } function t396_initialScale(t) { if ((t = document.getElementById("rec" + t)) && (t = t.querySelector(".t396__artboard"))) { var e, a = document.documentElement.clientWidth, r = []; if (i = t.getAttribute("data-artboard-screens")) for (var i = i.split(","), o = 0; o < i.length; o++)r[o] = parseInt(i[o], 10); else r = [320, 480, 640, 960, 1200]; for (o = 0; o < r.length; o++) { var n = r[o]; n <= a && (e = n) } var l = "edit" === window.allrecords.getAttribute("data-tilda-mode"), d = "center" === t396_getFieldValue(t, "valign", e, r), c = "grid" === t396_getFieldValue(t, "upscale", e, r), s = t396_getFieldValue(t, "height_vh", e, r), u = t396_getFieldValue(t, "height", e, r), f = !!window.opr && !!window.opr.addons || !!window.opera || -1 !== navigator.userAgent.indexOf(" OPR/"); if (!l && d && !c && !s && u && !f) { for (var g = parseFloat((a / e).toFixed(3)), b = [t, t.querySelector(".t396__carrier"), t.querySelector(".t396__filter")], o = 0; o < b.length; o++)b[o].style.height = Math.floor(parseInt(u, 10) * g) + "px"; t396_scaleInitial__getElementsToScale(t).forEach(function (t) { t.style.zoom = g }) } } } function t396_scaleInitial__getElementsToScale(t) { return t ? Array.prototype.slice.call(t.children).filter(function (t) { return t && (t.classList.contains("t396__elem") || t.classList.contains("t396__group")) }) : [] } function t396_getFieldValue(t, e, a, r) { var i = r[r.length - 1], o = a === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + a); if (!o) for (var n = 0; n < r.length; n++) { var l = r[n]; if (!(l <= a) && (o = l === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + l))) break } return o } window.dataLayer = window.dataLayer || [], !1 === /bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent) && "undefined" != typeof sessionStorage && "y" !== sessionStorage.getItem("visited") && document.visibilityState && document.addEventListener("DOMContentLoaded", function t() { var e = document.querySelectorAll(".t-records"); Array.prototype.forEach.call(e, function (t) { t.classList.add("t-records_animated") }), setTimeout(function () { Array.prototype.forEach.call(e, function (t) { t.classList.add("t-records_visible") }), sessionStorage.setItem("visited", "y") }, 400) });</script>
</head>

<body class="t-body" style="margin:0;"> <!--allrecords-->
    <div id="allrecords" class="t-records t-records_animated t-records_visible"
        data-hook="blocks-collection-content-node" data-tilda-project-id="7378990" data-tilda-page-id="41052446"
        data-tilda-formskey="5fd665d1bd81ccc3f894e0dfe7378990" data-tilda-lazy="yes" data-tilda-root-zone="com"
        style="overflow: hidden;">
        <noindex><a href="https://dikii-design.com/page41052446.html#t-main-content" class="t-skiplink" rel="nofollow"
                aria-label="К основному контенту" style="opacity:0;">К основному контенту</a></noindex> <!--header-->
        <header id="t-header" class="t-records" data-hook="blocks-collection-content-node"
            data-tilda-project-id="7378990" data-tilda-page-id="40381961" data-tilda-page-alias="header"
            data-tilda-formskey="5fd665d1bd81ccc3f894e0dfe7378990" data-tilda-lazy="yes" data-tilda-root-zone="com">
            <div id="rec653298887" class="r t-rec" style="opacity: 1;" data-animationappear="off"
                data-record-type="360"> <!-- T360 -->
                <script>t_onReady(function () { var allRecords = document.querySelector('.t-records'); window.addEventListener('pageshow', function (event) { if (event.persisted) { allRecords.classList.add('t-records_visible'); } }); var rec = document.querySelector('#rec653298887'); if (!rec) return; rec.setAttribute('data-animationappear', 'off'); rec.style.opacity = '1'; allRecords.classList.add('t-records_animated'); setTimeout(function () { allRecords.classList.add('t-records_visible'); }, 200); });</script>
                <script>t_onReady(function () {
                        var selects = 'button:not(.t-submit):not(.t835__btn_next):not(.t835__btn_prev):not(.t835__btn_result):not(.t862__btn_next):not(.t862__btn_prev):not(.t862__btn_result):not(.t854__news-btn):not(.t862__btn_next),' +
                            'a:not([href*="#"]):not(.carousel-control):not(.t-carousel__control):not(.t807__btn_reply):not([href^="./#price"]):not([href^="javascript"]):not([href^="mailto"]):not([href^="tel"]):not([href^="link_sub"]):not(.js-feed-btn-show-more):not(.t367__opener):not([href^="https://www.dropbox.com/"])'; var elements = document.querySelectorAll(selects); Array.prototype.forEach.call(elements, function (element) {
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
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="./#about"
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
                                    <a href="./#price" style="color: inherit" class="t794__tm-link"
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
                                    <a href="./#projects" style="color: inherit">Портфолио</a>
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
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="./#about"
                                            data-menu-submenu-hook="" data-menu-item-number="2">
                                            О нас
                                        </a>
                                    </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="./#projects"
                                            data-menu-submenu-hook="" data-menu-item-number="4">
                                            Портфолио
                                        </a>
                                    </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="./#price"
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
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="./#about"
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
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="./#price"
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
                                        href="./#projects" style="color: inherit" class="t794__tm-link"
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
        <div id="rec663743558" class="r t-rec t-rec_pt_0 t-rec_pb_0"
            style="padding-top: 0px; padding-bottom: 0px; --zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->

            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="663743558"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="800" data-artboard-valign="center"
                    data-artboard-height_vh="100" data-artboard-upscale="grid" data-artboard-height-res-640="500"
                    data-artboard-height-res-960="600" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="800" data-artboard-proxy-max-height="800">
                    <div class="t396__carrier" data-artboard-recid="663743558"></div>
                    <div class="t396__filter" data-artboard-recid="663743558"></div>
                    <div class="t396__elem tn-elem tn-elem__6637435581696253402118 t-sbs-anim_started"
                        data-elem-id="1696253402118" data-elem-type="shape" data-field-top-value="0"
                        data-field-left-value="0" data-field-height-value="100" data-field-width-value="100"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="window"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="%"
                        data-field-widthunits-value="%" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0" data-animate-sbs-loop="loop"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':30000,'mx':'0','my':'0','sx':1.3,'sy':1.3,'op':'1','ro':'0','bl':'0','ea':'easeInOut','dt':'0'},{'ti':30000,'mx':'0','my':'0','sx':1,'sy':1,'op':'1','ro':'0','bl':'0','ea':'easeInOut','dt':'0'}]"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1521px; left: 0px; top: 0px; height: 800px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743558-1696253402118"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom t-bgimg"
                                data-original="https://static.tildacdn.com/tild3130-3131-4631-b263-353464613633/-_5.jpg">
                            </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435581696253442236" data-elem-id="1696253442236"
                        data-elem-type="shape" data-field-top-value="0" data-field-left-value="0"
                        data-field-height-value="100" data-field-width-value="100" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="%" data-field-widthunits-value="%"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 1521px; left: 0px; top: 0px; height: 800px;">
                        <div class="tn-atom"> </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435581695797803907" data-elem-id="1695797803907"
                        data-elem-type="text" data-field-top-value="-211" data-field-left-value="178"
                        data-field-width-value="955" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-118" data-field-left-res-320-value="20"
                        data-field-width-res-320-value="294" data-field-top-res-640-value="-133"
                        data-field-left-res-640-value="46" data-field-width-res-640-value="518"
                        data-field-axisy-res-640-value="bottom" data-field-container-res-640-value="window"
                        data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px"
                        data-field-top-res-960-value="-153" data-field-left-res-960-value="120"
                        data-field-width-res-960-value="751"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 395px; left: 178px; width: 955px; height: auto;">
                        <h1 class="tn-atom" field="tn_text_1695797803907" style="">дизайн проект квартиры в<br>жк
                            "МАГЕЛАН"</h1>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435581697101009215" data-elem-id="1697101009215"
                        data-elem-type="text" data-field-top-value="-132" data-field-left-value="180"
                        data-field-width-value="544" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-80" data-field-left-res-320-value="20"
                        data-field-width-res-320-value="272" data-field-top-res-640-value="-90"
                        data-field-left-res-640-value="47" data-field-axisy-res-640-value="bottom"
                        data-field-container-res-640-value="window" data-field-topunits-res-640-value="px"
                        data-field-leftunits-res-640-value="px" data-field-top-res-960-value="-100"
                        data-field-left-res-960-value="120" data-field-width-res-960-value="467"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 639px; left: 180px; width: 544px; height: auto;">
                        <div class="tn-atom" field="tn_text_1697101009215" style="">Трехкомнатная квартира, площадь 69
                            м²</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435581695909801635" data-elem-id="1695909801635"
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
                    <div class="t396__elem tn-elem tn-elem__6637435581696001042438" data-elem-id="1696001042438"
                        data-elem-type="text" data-field-top-value="-151" data-field-left-value="13"
                        data-field-width-value="52" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="-658" data-field-top-res-960-value="-118"
                        data-field-left-res-960-value="5"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 635px; left: 13px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                            id="sbs-663743558-1696001042438"
                            style="display: table; width: inherit; height: inherit; pointer-events: none;">
                            <div class="tn-atom" style="pointer-events: auto;"><a
                                    href="https://dikii-design.com/#portfolio" style="color: inherit">Главная</a></div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435581696001042449" data-elem-id="1696001042449"
                        data-elem-type="text" data-field-top-value="-286" data-field-left-value="-18"
                        data-field-width-value="117" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-sbs-event="hover"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':0.7,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="-775" data-field-left-res-640-value="-28"
                        data-field-top-res-960-value="-235" data-field-left-res-960-value="-27"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 500px; left: -18px; width: 117px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                            id="sbs-663743558-1696001042449"
                            style="display: table; width: inherit; height: inherit; pointer-events: none;">
                            <div class="tn-atom" style="pointer-events: auto;"><a href="./projects-details.html"
                                    style="color: inherit">Подробности проекта</a></div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435581695797803912" data-elem-id="1695797803912"
                        data-elem-type="text" data-field-top-value="-446" data-field-left-value="180"
                        data-field-width-value="294" data-field-axisy-value="bottom" data-field-axisx-value="left"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="253" data-field-left-res-320-value="20"
                        data-field-width-res-320-value="272" data-field-top-res-640-value="217"
                        data-field-left-res-640-value="47" data-field-width-res-640-value="186"
                        data-field-axisy-res-640-value="top" data-field-container-res-640-value="window"
                        data-field-topunits-res-640-value="px" data-field-leftunits-res-640-value="px"
                        data-field-top-res-960-value="-340" data-field-left-res-960-value="120"
                        data-field-width-res-960-value="361"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 336px; left: 180px; width: 294px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695797803912" style=""><a href="https://dikii-design.com/"
                                style="color: rgb(255, 255, 255);">Главная</a> → <a
                                href="https://dikii-design.com/portfolio-residential-interiors"
                                style="color: rgb(255, 255, 255);">Проекты</a> → Проект 2</div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('663743558'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec663743560" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->

            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="663743560"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="333" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="213" data-artboard-height-res-640="213"
                    data-artboard-height-res-960="293" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="333" data-artboard-proxy-max-height="333">
                    <div class="t396__carrier" data-artboard-recid="663743560"></div>
                    <div class="t396__filter" data-artboard-recid="663743560"></div>
                    <div class="t396__elem tn-elem tn-elem__6637435601695915204988 t-sbs-anim_started"
                        data-elem-id="1695915204988" data-elem-type="shape" data-field-top-value="195"
                        data-field-left-value="366" data-field-height-value="34" data-field-width-value="356"
                        data-field-axisy-value="top" data-field-axisx-value="left" data-field-container-value="grid"
                        data-field-topunits-value="px" data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="118" data-field-left-res-320-value="21"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="150"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="112" data-field-left-res-640-value="245"
                        data-field-width-res-640-value="248"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="165" data-field-left-res-960-value="346"
                        data-field-width-res-960-value="380"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 356px; left: 526.5px; top: 195px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743560-1695915204988"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435601695915205005 t-sbs-anim_started"
                        data-elem-id="1695915205005" data-elem-type="text" data-field-top-value="139"
                        data-field-left-value="20" data-field-width-value="1057" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="intoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="65" data-field-width-res-320-value="262"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="87" data-field-width-res-640-value="604"
                        data-field-top-res-960-value="109" data-field-left-res-960-value="10"
                        data-field-width-res-960-value="931"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 139px; left: 180.5px; width: 1057px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743560-1695915205005"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915205005" style="line-height: 84px;">Какие задачи
                                клиентов решили</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435601695915205013 t-sbs-anim_started"
                        data-elem-id="1695915205013" data-elem-type="text" data-field-top-value="172"
                        data-field-left-value="1130" data-field-width-value="52" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-animate-mobile="y" data-animate-sbs-event="intoview" data-animate-sbs-trg="1"
                        data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="73" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="108" data-field-left-res-640-value="576"
                        data-field-top-res-960-value="142" data-field-left-res-960-value="896"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 172px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743560-1695915205013"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915205013" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('663743560'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec663743561" class="r t-rec t-rec_pt_30 t-rec_pb_45 r_showed r_anim"
            style="padding-top:30px;padding-bottom:45px; " data-record-type="218"> <!-- T005 -->
            <div class="t005">
                <div class="t-container">
                    <div class="t-row">
                        <div class="t-col t-col_6 ">
                            <div class="t005__text t-text t-text_md" field="text">Проект для молодого человека,
                                расположенный у залива, недалеко от центра Санкт-Петербурга. Весь проект выполнен в
                                современном стиле, с применением современных материалов. Планировка от застройщика
                                полностью устроила заказчика, единственное что сделали-это объединили санузел и ванную.
                                Была демонтирована вся некачественная отделка от застройщика, разведена новая электрика,
                                разведена заново вся сантехника, заменены радиаторы от застройщика. Все работы выполнены
                                с соблюдением всех норм и правил.</div>
                        </div>
                        <div class="t-col t-col_6 ">
                            <div class="t005__text t-text t-text_md" field="text2">Интерьер квартиры выполнен в темных
                                тонах. Дизайн современный и минималистичный. Главной деталью является совмещенная кухня
                                и гостиная, которая создает пространство для отдыха, и благодаря встроенному биокамину,
                                уютную и домашнюю атмосферу. Также размещена небольшая но функциональная зона столовой,
                                с раздвижным обеденным столом. Для гостей в квартире предусмотрели отдельную комнату, с
                                раздвижным диваном. Также это помещение оборудовано вместительным встроенным шкафом и
                                рабочим местом, и выполняет роль кабинета. Спальня также выполнена в темных тонах, с
                                минимальным количеством мебели и максимально продуманным функционалом.<br><br>Предлагаем
                                не томить Вас описаниями и посмотреть все в живую!</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="rec663743567" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; "
            data-animationappear="off" data-record-type="552"> <!-- t552--> <!-- @classes: t-descr t-descr_xxs -->
            <div class="t552">
                <div class="t552__container t-container_100">
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3466-3734-4630-b662-306235333661/2.jpg"
                            bgimgfield="gi_img__0" data-zoom-target="0" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3466-3734-4630-b662-306235333661/2.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3466-3734-4630-b662-306235333661/-/resizeb/20x/2.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3466-3734-4630-b662-306235333661/2.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3136-3262-4163-a265-326464346562/3.jpg"
                            bgimgfield="gi_img__1" data-zoom-target="1" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3136-3262-4163-a265-326464346562/3.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3136-3262-4163-a265-326464346562/-/resizeb/20x/3.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3136-3262-4163-a265-326464346562/3.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3961-6364-4531-a233-313233353363/6.jpg"
                            bgimgfield="gi_img__2" data-zoom-target="2" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3961-6364-4531-a233-313233353363/6.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3961-6364-4531-a233-313233353363/-/resizeb/20x/6.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3961-6364-4531-a233-313233353363/6.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3133-3662-4139-b338-633831616239/_1.jpg"
                            bgimgfield="gi_img__3" data-zoom-target="3" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3133-3662-4139-b338-633831616239/_1.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3133-3662-4139-b338-633831616239/-/resizeb/20x/_1.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3133-3662-4139-b338-633831616239/_1.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6432-6333-4639-a466-323966626533/_2.jpg"
                            bgimgfield="gi_img__4" data-zoom-target="4" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6432-6333-4639-a466-323966626533/_2.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6432-6333-4639-a466-323966626533/-/resizeb/20x/_2.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6432-6333-4639-a466-323966626533/_2.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3266-3830-4435-a433-353264613938/_3.jpg"
                            bgimgfield="gi_img__5" data-zoom-target="5" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3266-3830-4435-a433-353264613938/_3.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3266-3830-4435-a433-353264613938/-/resizeb/20x/_3.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3266-3830-4435-a433-353264613938/_3.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6565-3265-4365-a235-323333353537/-_2.jpg"
                            bgimgfield="gi_img__6" data-zoom-target="6" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6565-3265-4365-a235-323333353537/-_2.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6565-3265-4365-a235-323333353537/-/resizeb/20x/-_2.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6565-3265-4365-a235-323333353537/-_2.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6332-3330-4561-b966-376661396336/-_3.jpg"
                            bgimgfield="gi_img__7" data-zoom-target="7" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6332-3330-4561-b966-376661396336/-_3.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6332-3330-4561-b966-376661396336/-/resizeb/20x/-_3.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6332-3330-4561-b966-376661396336/-_3.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6234-6137-4239-a236-383937353633/-_5.jpg"
                            bgimgfield="gi_img__8" data-zoom-target="8" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6234-6137-4239-a236-383937353633/-_5.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6234-6137-4239-a236-383937353633/-/resizeb/20x/-_5.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6234-6137-4239-a236-383937353633/-_5.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3663-3239-4533-b835-333635313232/1.jpg"
                            bgimgfield="gi_img__9" data-zoom-target="9" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3663-3239-4533-b835-333635313232/1.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3663-3239-4533-b835-333635313232/-/resizeb/20x/1.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3663-3239-4533-b835-333635313232/1.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6165-6463-4032-b933-306436383465/-_6.jpg"
                            bgimgfield="gi_img__10" data-zoom-target="10" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6165-6463-4032-b933-306436383465/-_6.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6165-6463-4032-b933-306436383465/-/resizeb/20x/-_6.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6165-6463-4032-b933-306436383465/-_6.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3261-3732-4237-a536-623065326636/-_8.jpg"
                            bgimgfield="gi_img__11" data-zoom-target="11" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3261-3732-4237-a536-623065326636/-_8.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3261-3732-4237-a536-623065326636/-/resizeb/20x/-_8.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3261-3732-4237-a536-623065326636/-_8.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3964-3533-4961-b862-316265346434/-_9.jpg"
                            bgimgfield="gi_img__12" data-zoom-target="12" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3964-3533-4961-b862-316265346434/-_9.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3964-3533-4961-b862-316265346434/-/resizeb/20x/-_9.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3964-3533-4961-b862-316265346434/-_9.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3334-6235-4731-b732-366638323738/-_11.jpg"
                            bgimgfield="gi_img__13" data-zoom-target="13" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3334-6235-4731-b732-366638323738/-_11.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3334-6235-4731-b732-366638323738/-/resizeb/20x/-_11.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3334-6235-4731-b732-366638323738/-_11.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3838-3032-4339-a137-313837633462/-_12.jpg"
                            bgimgfield="gi_img__14" data-zoom-target="14" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3838-3032-4339-a137-313837633462/-_12.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3838-3032-4339-a137-313837633462/-/resizeb/20x/-_12.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3838-3032-4339-a137-313837633462/-_12.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6230-3433-4235-a233-323737656634/_2.jpg"
                            bgimgfield="gi_img__15" data-zoom-target="15" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6230-3433-4235-a233-323737656634/_2.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6230-3433-4235-a233-323737656634/-/resizeb/20x/_2.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6230-3433-4235-a233-323737656634/_2.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6238-3466-4939-b164-396664343265/_3.jpg"
                            bgimgfield="gi_img__16" data-zoom-target="16" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6238-3466-4939-b164-396664343265/_3.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6238-3466-4939-b164-396664343265/-/resizeb/20x/_3.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6238-3466-4939-b164-396664343265/_3.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild3963-6263-4665-a664-323539313161/_1.jpg"
                            bgimgfield="gi_img__17" data-zoom-target="17" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild3963-6263-4665-a664-323539313161/_1.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild3963-6263-4665-a664-323539313161/-/resizeb/20x/_1.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild3963-6263-4665-a664-323539313161/_1.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6162-6339-4637-b338-616561383433/_2.jpg"
                            bgimgfield="gi_img__18" data-zoom-target="18" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6162-6339-4637-b338-616561383433/_2.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6162-6339-4637-b338-616561383433/-/resizeb/20x/_2.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6162-6339-4637-b338-616561383433/_2.jpg">
                        </div>
                    </div>
                    <div class="t552__tile t552__tile_50" itemscope="" itemtype="http://schema.org/ImageObject">
                        <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                            data-original="https://static.tildacdn.com/tild6130-3639-4333-b761-663962333362/_5.jpg"
                            bgimgfield="gi_img__19" data-zoom-target="19" data-zoomable="yes"
                            data-img-zoom-url="https://static.tildacdn.com/tild6130-3639-4333-b761-663962333362/_5.jpg"
                            style="background: url(&quot;https://thb.tildacdn.com/tild6130-3639-4333-b761-663962333362/-/resizeb/20x/_5.jpg&quot;) center center / cover no-repeat; height: 570px;"
                            data-lazy-rule="comm:resize,round:100">
                            <meta itemprop="image"
                                content="https://static.tildacdn.com/tild6130-3639-4333-b761-663962333362/_5.jpg">
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t552_init', function () { t552_init('663743567', '0.75'); }); });</script>
        </div>

        <div id="rec663743570" class="r t-rec t-rec_pb_0" style="padding-bottom: 0px; --zoom: 1;"
            data-animationappear="off" data-record-type="396"> <!-- T396 -->

            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="663743570"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="310" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="175" data-artboard-height-res-640="204"
                    data-artboard-height-res-960="270" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="310" data-artboard-proxy-max-height="310">
                    <div class="t396__carrier" data-artboard-recid="663743570"></div>
                    <div class="t396__filter" data-artboard-recid="663743570"></div>
                    <div class="t396__elem tn-elem tn-elem__6637435701695915204988" data-elem-id="1695915204988"
                        data-elem-type="shape" data-field-top-value="199" data-field-left-value="401"
                        data-field-height-value="34" data-field-width-value="454" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="115" data-field-left-res-320-value="22"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="185"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="270"
                        data-field-width-res-640-value="297"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="165" data-field-left-res-960-value="397"
                        data-field-width-res-960-value="450"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 454px; left: 561.5px; top: 199px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743570-1695915204988"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435701695915205005" data-elem-id="1695915205005"
                        data-elem-type="text" data-field-top-value="139" data-field-left-value="20"
                        data-field-width-value="919" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="65" data-field-width-res-320-value="236"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="87" data-field-width-res-640-value="544"
                        data-field-top-res-960-value="109" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 139px; left: 180.5px; width: 919px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743570-1695915205005"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915205005" style="line-height: 98px;">Другие проекты
                            </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435701695915205013" data-elem-id="1695915205013"
                        data-elem-type="text" data-field-top-value="180" data-field-left-value="1130"
                        data-field-width-value="52" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="73" data-field-left-res-320-value="257"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="110" data-field-left-res-640-value="577"
                        data-field-top-res-960-value="145" data-field-left-res-960-value="896"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 180px; left: 1290.5px; width: 52px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743570-1695915205013"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695915205013" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('663743570'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec663743571" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->

            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="663743571"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="545" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1080" data-artboard-height-res-640="1150"
                    data-artboard-height-res-960="450" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="545" data-artboard-proxy-max-height="545">
                    <div class="t396__carrier" data-artboard-recid="663743571"></div>
                    <div class="t396__filter" data-artboard-recid="663743571"></div>
                    <div class="t396__elem tn-elem tn-elem__6637435711695798587077" data-elem-id="1695798587077"
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
                    <div class="t396__elem tn-elem tn-elem__6637435711697391386752 js-sbs-anim-trigger_hover"
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
                            class="tn-atom" href="https://dikii-design.com/project-1" style="pointer-events: auto;">
                        </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6637435711695798587108 t-animate t-animate_wait"
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
                            data-original="https://static.tildacdn.com/tild3932-6665-4632-b535-613636613233/3289d83a-1503-4384-b.png">
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435711695798587105 t-animate t-animate_wait"
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
                            data-original="https://static.tildacdn.com/tild6663-6261-4265-b735-666566633733/13c25e16-8403-4175-b.png">
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435711695798587102 t-animate t-animate_wait"
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
                            data-original="https://static.tildacdn.com/tild3765-3531-4335-a533-623634613364/16718502-2b6a-4c57-9.png">
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435711695798587075" data-elem-id="1695798587075"
                        data-elem-type="text" data-field-top-value="41" data-field-left-value="20"
                        data-field-width-value="516" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="20" data-field-width-res-320-value="303"
                        data-field-top-res-960-value="40" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 41px; left: 180.5px; width: 516px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798587075" style="line-height: 45px;">Квартира в ЖК
                            “Парк победы”</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435711695798587099" data-elem-id="1695798587099"
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
                    <div class="t396__elem tn-elem tn-elem__6637435711695798587079" data-elem-id="1695798587079"
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
                            href="https://dikii-design.com/project1"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6637435711695804277528" data-elem-id="1695804277528"
                        data-elem-type="image" data-field-top-value="55" data-field-left-value="1165"
                        data-field-width-value="15" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1633960220381,1697391386752"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':45,'bl':'0','ea':'','dt':'0'}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-top-res-320-value="989" data-field-left-res-320-value="295"
                        data-field-top-res-640-value="1067" data-field-left-res-640-value="293"
                        data-field-top-res-960-value="43" data-field-left-res-960-value="931"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1325.5px; top: 55px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743571-1695804277528"
                            style="display: inherit; width: inherit; height: inherit;"><a class="tn-atom"
                                href="https://dikii-design.com/project1"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695804277528"> </a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('663743571'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec663743572" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->

            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="663743572"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="545" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1080" data-artboard-height-res-640="1150"
                    data-artboard-height-res-960="450" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="545" data-artboard-proxy-max-height="545">
                    <div class="t396__carrier" data-artboard-recid="663743572"></div>
                    <div class="t396__filter" data-artboard-recid="663743572"></div>
                    <div class="t396__elem tn-elem tn-elem__6637435721695798587077" data-elem-id="1695798587077"
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
                    <div class="t396__elem tn-elem tn-elem__6637435721697391386752 js-sbs-anim-trigger_hover"
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
                            class="tn-atom" href="https://dikii-design.com/project-1" style="pointer-events: auto;">
                        </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6637435721695798587108 t-animate t-animate_wait"
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
                            data-original="https://static.tildacdn.com/tild3932-6665-4632-b535-613636613233/3289d83a-1503-4384-b.png">
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435721695798587105 t-animate t-animate_wait"
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
                            data-original="https://static.tildacdn.com/tild6663-6261-4265-b735-666566633733/13c25e16-8403-4175-b.png">
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435721695798587102 t-animate t-animate_wait"
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
                            data-original="https://static.tildacdn.com/tild3765-3531-4335-a533-623634613364/16718502-2b6a-4c57-9.png">
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435721695798587075" data-elem-id="1695798587075"
                        data-elem-type="text" data-field-top-value="41" data-field-left-value="20"
                        data-field-width-value="516" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="20" data-field-width-res-320-value="303"
                        data-field-top-res-960-value="40" data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 41px; left: 180.5px; width: 516px; height: auto;">
                        <div class="tn-atom" field="tn_text_1695798587075" style="line-height: 45px;">Квартира в ЖК
                            “Парк победы”</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435721695798587099" data-elem-id="1695798587099"
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
                    <div class="t396__elem tn-elem tn-elem__6637435721695798587079" data-elem-id="1695798587079"
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
                            href="https://dikii-design.com/project1"> </a> </div>
                    <div class="t396__elem tn-elem tn-elem__6637435721695804277528" data-elem-id="1695804277528"
                        data-elem-type="image" data-field-top-value="55" data-field-left-value="1165"
                        data-field-width-value="15" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="hover" data-animate-sbs-trgels="1633960220381,1697391386752"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':45,'bl':'0','ea':'','dt':'0'}]"
                        data-field-filewidth-value="15" data-field-fileheight-value="15"
                        data-field-top-res-320-value="989" data-field-left-res-320-value="295"
                        data-field-top-res-640-value="1067" data-field-left-res-640-value="293"
                        data-field-top-res-960-value="43" data-field-left-res-960-value="931"
                        data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="left: 1325.5px; top: 55px; width: 15px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743572-1695804277528"
                            style="display: inherit; width: inherit; height: inherit;"><a class="tn-atom"
                                href="https://dikii-design.com/project1"> <img class="tn-atom__img t-img"
                                    data-original="https://static.tildacdn.com/tild6134-3135-4034-a333-616334336531/arrow.svg"
                                    alt="" imgfield="tn_img_1695804277528"> </a></div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('663743572'); }); });</script>
            <!-- /T396 -->
        </div>
        <div id="rec671070807" class="r t-rec" style="--zoom: 1;" data-animationappear="off" data-record-type="396">
            <!-- T396 -->

            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="671070807"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="213" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="134" data-artboard-height-res-640="163"
                    data-artboard-height-res-960="183" data-artboard-proxy-min-offset-top="0"
                    data-artboard-proxy-min-height="213" data-artboard-proxy-max-height="213">
                    <div class="t396__carrier" data-artboard-recid="671070807"></div>
                    <div class="t396__filter" data-artboard-recid="671070807"></div>
                    <div class="t396__elem tn-elem tn-elem__6710708071700656842259" data-elem-id="1700656842259"
                        data-elem-type="button" data-field-top-value="0" data-field-left-value="20"
                        data-field-height-value="70" data-field-width-value="1160" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-field-width-res-320-value="300"
                        data-field-width-res-640-value="620" data-field-left-res-960-value="10"
                        data-field-height-res-960-value="60" data-field-width-res-960-value="940"
                        data-fields="top,left,width,height,container,axisx,axisy,caption,leftunits,topunits"
                        style="top: 0px; left: 180.5px; width: 1160px; height: 70px;"> <a class="tn-atom"
                            href="https://dikii-design.com/portfolio-residential-interiors">Смотреть все проекты</a>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('671070807'); }); });</script>
            <!-- /T396 -->
        </div>

        <div id="rec663743575" class="r t-rec r_hidden r_anim" style=" " data-record-type="215"> <a name="contacts"
                style="font-size:0;"></a> </div>
        <div id="rec663743576" class="r t-rec t-rec_pb_0" style="padding-bottom: 0px; --zoom: 1;"
            data-animationappear="off" data-record-type="396"> <!-- T396 -->

            <div class="t396">
                <div class="t396__artboard rendered" data-artboard-recid="663743576"
                    data-artboard-screens="320,640,960,1200" data-artboard-height="1050" data-artboard-valign="center"
                    data-artboard-upscale="grid" data-artboard-height-res-320="1135"
                    data-artboard-height-res-640="1116.5" data-artboard-height-res-960="958.5"
                    data-artboard-proxy-min-offset-top="0" data-artboard-proxy-min-height="1050"
                    data-artboard-proxy-max-height="1050">
                    <div class="t396__carrier" data-artboard-recid="663743576"></div>
                    <div class="t396__filter" data-artboard-recid="663743576"></div>
                    <div class="t396__elem tn-elem tn-elem__6637435761695801104800 zero-form-rendered"
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

                            <form class="t-form t-form_inputs-total_4 t-form_bbonly js-form-proccess" id="form663743576"
                                name="form663743576" action="https://forms.tildacdn.com/procces/" method="POST"
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
                                        data-init-mask="yes" data-input-ready="true" style="margin-bottom: 20px;">
                                        <div class="t-input-block" style="overflow: visible;">
                                            <div class="t-input t-input-phonemask__wrap t-input_bbonly"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983908" data-elem-id="1695798983908"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983914" data-elem-id="1695798983914"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983917" data-elem-id="1695798983917"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983919" data-elem-id="1695798983919"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983921" data-elem-id="1695798983921"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983923" data-elem-id="1695798983923"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983925" data-elem-id="1695798983925"
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
                            Санкт-Петербург, пл. Конституции, д.7 (бизнес-центр «Лидер»)</div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983927" data-elem-id="1695798983927"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695798983929" data-elem-id="1695798983929"
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
                    <div class="t396__elem tn-elem tn-elem__6637435761695916885326" data-elem-id="1695916885326"
                        data-elem-type="shape" data-field-top-value="195" data-field-left-value="57"
                        data-field-height-value="34" data-field-width-value="476" data-field-axisy-value="top"
                        data-field-axisx-value="left" data-field-container-value="grid" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="px"
                        data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="intoview"
                        data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':20,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':400}]"
                        data-field-top-res-320-value="95" data-field-left-res-320-value="31"
                        data-field-height-res-320-value="20" data-field-width-res-320-value="208"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':10,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-640-value="122" data-field-left-res-640-value="45"
                        data-field-width-res-640-value="300"
                        data-animate-sbs-opts-res-640="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':0,'my':15,'sx':1,'sy':0,'op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':500,'mx':0,'my':0,'sx':1,'sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':800}]"
                        data-field-top-res-960-value="167" data-field-left-res-960-value="47"
                        data-fields="width,height,top,left,container,axisx,axisy,widthunits,heightunits,leftunits,topunits"
                        style="width: 476px; left: 217.5px; top: 195px; height: 34px;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743576-1695916885326"
                            style="display: table; width: inherit; height: inherit;">
                            <div class="tn-atom"> </div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435761695916885341" data-elem-id="1695916885341"
                        data-elem-type="text" data-field-top-value="135" data-field-left-value="20"
                        data-field-width-value="474" data-field-axisy-value="top" data-field-axisx-value="left"
                        data-field-container-value="grid" data-field-topunits-value="px" data-field-leftunits-value="px"
                        data-field-heightunits-value="" data-field-widthunits-value="px" data-animate-mobile="y"
                        data-animate-sbs-event="intoview" data-animate-sbs-trg="1" data-animate-sbs-trgofst="0"
                        data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':60,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-320-value="73" data-field-width-res-320-value="213"
                        data-animate-sbs-opts-res-320="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':0,'sy':0,'op':0,'ro':'0','bl':'0','ea':'','dt':'0'},{'ti':0,'mx':'0','my':40,'sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':1000,'mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'}]"
                        data-field-top-res-640-value="87" data-field-top-res-960-value="107"
                        data-field-left-res-960-value="10"
                        data-fields="top,left,width,height,container,axisx,axisy,widthunits,leftunits,topunits"
                        style="top: 135px; left: 180.5px; width: 474px; height: auto;">
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743576-1695916885341"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695916885341" style="line-height: 98px;">Контакты</div>
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6637435761695916885349" data-elem-id="1695916885349"
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
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-663743576-1695916885349"
                            style="display: table; width: inherit; height: inherit; opacity: 0;">
                            <div class="tn-atom" field="tn_text_1695916885349" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('663743576'); }); });</script>
            <!-- /T396 -->
        </div>
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
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-653299401-1475158728637"
                                style="display: inherit; width: inherit; height: inherit; pointer-events: none;"><a
                                    class="tn-atom" href="https://www.behance.net/dikii-design" target="_blank"
                                    rel="noopener" style="pointer-events: auto;"> <img class="tn-atom__img t-img"
                                        data-original="https://static.tildacdn.com/tild3465-3138-4337-a565-376334656464/svg-gobbler_84_1.svg"
                                        alt="" imgfield="tn_img_1475158728637"> </a></div>
                        </div>
                        <div class="t396__elem tn-elem tn-elem__6532994011475158762796" data-elem-id="1475158762796"
                            data-elem-type="image" data-field-top-value="25" data-field-left-value="585"
                            data-field-width-value="30" data-field-axisy-value="top" data-field-axisx-value="left"
                            data-field-container-value="grid" data-field-topunits-value="px"
                            data-field-leftunits-value="px" data-field-heightunits-value=""
                            data-field-widthunits-value="px" data-animate-mobile="y" data-animate-sbs-event="hover"
                            data-animate-sbs-opts="[{'ti':'0','mx':'0','my':'0','sx':'1','sy':'1','op':'1','ro':'0','bl':'0','ea':'','dt':'0'},{'ti':200,'mx':'0','my':'0','sx':1,'sy':1,'op':0.8,'ro':'0','bl':'0','ea':'','dt':'0'}]"
                            data-field-top-res-320-value="46" data-field-left-res-320-value="145"
                            data-field-top-res-480-value="46" data-field-left-res-480-value="225"
                            data-field-top-res-640-value="46" data-field-left-res-640-value="305"
                            data-field-top-res-960-value="25" data-field-left-res-960-value="465"
                            data-fields="img,width,filewidth,fileheight,top,left,container,axisx,axisy,widthunits,leftunits,topunits"
                            style="left: 745.5px; top: 25px; width: 30px;">
                            <div class="tn-atom__sbs-anim-wrapper js-sbs-anim-trigger_hover"
                                id="sbs-653299401-1475158762796"
                                style="display: inherit; width: inherit; height: inherit; pointer-events: none;"><a
                                    class="tn-atom" href="https://vk.com/id759066" target="_blank" rel="noopener"
                                    style="pointer-events: auto;"> <img class="tn-atom__img t-img"
                                        data-original="https://static.tildacdn.com/tild6535-6265-4232-a233-353465613032/19vk.svg"
                                        alt="" imgfield="tn_img_1475158762796"> </a></div>
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