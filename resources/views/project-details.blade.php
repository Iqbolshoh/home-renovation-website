<!DOCTYPE html>
<html lang="ru">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Подробности проекта | {{ config('app.name') }}</title>
    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- JS -->
    <script src="{{ asset('js/tilda-scripts-3.0.min.js') }}"></script>
    <script src="{{ asset('js/tilda-events-1.0.min.js') }}"></script>
    <script src="{{ asset('js/tilda-cover-1.0.min.js') }}"></script>
    <script src="{{ asset('js/tilda-zero-1.1.min.js') }}"></script>
    <script src="{{ asset('js/tilda-video-1.0.min.js') }}"></script>
    <script src="{{ asset('js/tilda-animation-sbs-1.0.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" defer></script>
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
    <script>function t_onReady(t) { "loading" != document.readyState ? t() : document.addEventListener("DOMContentLoaded", t) } function t_onFuncLoad(t, e, a) { "function" == typeof window[t] ? e() : setTimeout(function () { t_onFuncLoad(t, e, a) }, a || 100) } function t396_initialScale(t) { if ((t = document.getElementById("rec" + t)) && (t = t.querySelector(".t396__artboard"))) { var e, a = document.documentElement.clientWidth, r = []; if (i = t.getAttribute("data-artboard-screens")) for (var i = i.split(","), o = 0; o < i.length; o++)r[o] = parseInt(i[o], 10); else r = [320, 480, 640, 960, 1200]; for (o = 0; o < r.length; o++) { var n = r[o]; n <= a && (e = n) } var l = "edit" === window.allrecords.getAttribute("data-tilda-mode"), d = "center" === t396_getFieldValue(t, "valign", e, r), c = "grid" === t396_getFieldValue(t, "upscale", e, r), s = t396_getFieldValue(t, "height_vh", e, r), u = t396_getFieldValue(t, "height", e, r), f = !!window.opr && !!window.opr.addons || !!window.opera || -1 !== navigator.userAgent.indexOf(" OPR/"); if (!l && d && !c && !s && u && !f) { for (var g = parseFloat((a / e).toFixed(3)), b = [t, t.querySelector(".t396__carrier"), t.querySelector(".t396__filter")], o = 0; o < b.length; o++)b[o].style.height = Math.floor(parseInt(u, 10) * g) + "px"; t396_scaleInitial__getElementsToScale(t).forEach(function (t) { t.style.zoom = g }) } } } function t396_scaleInitial__getElementsToScale(t) { return t ? Array.prototype.slice.call(t.children).filter(function (t) { return t && (t.classList.contains("t396__elem") || t.classList.contains("t396__group")) }) : [] } function t396_getFieldValue(t, e, a, r) { var i = r[r.length - 1], o = a === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + a); if (!o) for (var n = 0; n < r.length; n++) { var l = r[n]; if (!(l <= a) && (o = l === i ? t.getAttribute("data-artboard-" + e) : t.getAttribute("data-artboard-" + e + "-res-" + l))) break } return o } window.dataLayer = window.dataLayer || [], !/bot|google|yandex|baidu|bing|msn|duckduckbot|teoma|slurp|crawler|spider|robot|crawling|facebook/i.test(navigator.userAgent) && "undefined" != typeof sessionStorage && "y" !== sessionStorage.getItem("visited") && document.visibilityState && document.addEventListener("DOMContentLoaded", function t() { var e = document.querySelectorAll(".t-records"); Array.prototype.forEach.call(e, function (t) { t.classList.add("t-records_animated") }), setTimeout(function () { Array.prototype.forEach.call(e, function (t) { t.classList.add("t-records_visible") }), sessionStorage.setItem("visited", "y") }, 400) });</script>
</head>

<body class="t-body" style="margin:0;">
    <!--allrecords-->
    <div id="allrecords" class="t-records t-records_animated t-records_visible"
        data-hook="blocks-collection-content-node" data-tilda-project-id="7378990" data-tilda-page-id="38850329"
        data-tilda-formskey="5fd665d1bd81ccc3f894e0dfe7378990" data-tilda-lazy="yes" data-tilda-root-zone="com"
        style="overflow: hidden;">
        <noindex>
            <a href="#t-main-content" class="t-skiplink" rel="nofollow" aria-label="Перейти к основному содержимому"
                style="opacity:0;">Перейти к основному содержимому</a>
        </noindex>
        <!--header-->
        <header id="t-header" class="t-records" data-hook="blocks-collection-content-node"
            data-tilda-project-id="7378990" data-tilda-page-id="40381961" data-tilda-page-alias="header"
            data-tilda-formskey="5fd665d1bd81ccc3f894e0dfe7378990" data-tilda-lazy="yes" data-tilda-root-zone="com">
            <div id="rec653298887" class="r t-rec" style="opacity: 1;" data-animationappear="off"
                data-record-type="360">
                <!-- T360 -->
                <script>t_onReady(function () { var e = document.querySelector(".t-records"); window.addEventListener("pageshow", function (t) { t.persisted && e.classList.add("t-records_visible") }); var t = document.querySelector("#rec653298887"); t && (t.setAttribute("data-animationappear", "off"), t.style.opacity = "1", e.classList.add("t-records_animated"), setTimeout(function () { e.classList.add("t-records_visible") }, 200)) });</script>
                <script> t_onReady(function () { var t = document.querySelectorAll('button:not(.t-submit):not(.t835__btn_next):not(.t835__btn_prev):not(.t835__btn_result):not(.t862__btn_next):not(.t862__btn_prev):not(.t862__btn_result):not(.t854__news-btn):not(.t862__btn_next),a:not([href*="#"]):not(.carousel-control):not(.t-carousel__control):not(.t807__btn_reply):not([href^="#price"]):not([href^="javascript"]):not([href^="mailto"]):not([href^="tel"]):not([href^="link_sub"]):not(.js-feed-btn-show-more):not(.t367__opener):not([href^="https://www.dropbox.com/"])'); Array.prototype.forEach.call(t, function (t) { t.getAttribute("data-menu-submenu-hook") || t.addEventListener("click", function (t) { var e = this.getAttribute("href"); if (null !== e) { var n = t.ctrlKey, o = t.metaKey && -1 !== navigator.platform.indexOf("Mac"); if (!n && !o && "_blank" !== this.getAttribute("target")) { t.preventDefault(); var r = document.querySelector(".t-records"); r && r.classList.remove("t-records_visible"), setTimeout(function () { window.location = e }, 500) } } }) }) });</script>
            </div>
            <div id="rec653298888" class="r t-rec t-rec_pt_0 t-rec_pb_0"
                style="padding-top: 0px; padding-bottom: 0px; --zoom: 1;" data-animationappear="off"
                data-record-type="396">
                <!-- T396 -->
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
                            <div style="color: white;">
                                @foreach ($contacts as $contact)
                                    @if ($contact['is_active'] && !in_array($contact['name'], ['Phone', 'Email', 'Address']))
                                        <a href="{{ $contact['url'] . $contact['value'] }}"
                                            target="{{ $contact['target'] ?? '_blank' }}" title="{{ $contact['name'] }}"
                                            style="width: 40px; height: 40px; background: rgba(255,255,255,0.1); border-radius: 50%; color: #999999; font-size: 1.2rem; display: flex; align-items: center; justify-content: center; text-decoration: none; transition: all 0.3s ease; margin-top: 3px;">
                                            <i class="{{ $contact['icon'] }}"></i>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
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
                                    alt="" imgfield="tn_img_1696008238634"
                                    src="{{ asset('storage/svg-gobbler_-_2023-0.svg') }}">
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
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="/#about"
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
                                    <a href="/#price" style="color: inherit" class="t794__tm-link"
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
                                    <a href="/#projects" style="color: inherit">Портфолио</a>
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
                <script>t_onReady(function () { t_onFuncLoad("t396_init", function () { t396_init("653298888") }) });</script>
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
                                    <li class="t450__list_item"> <a class="t-menu__link-item t-active" href="/"
                                            data-menu-submenu-hook="" data-menu-item-number="1">
                                            Главная
                                        </a> </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="/#about"
                                            data-menu-submenu-hook="" data-menu-item-number="2">
                                            О нас
                                        </a>
                                    </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="/#projects"
                                            data-menu-submenu-hook="" data-menu-item-number="4">
                                            Портфолио
                                        </a>
                                    </li>
                                    <li class="t450__list_item"> <a class="t-menu__link-item" href="/#price"
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
                            style="left: 40px; top: 5px; width: 100px;">
                            <a href="{{ config('app.url') }}" aria-label="Главная страница">
                                <img src="{{ asset('storage/logo.jpg') }}" alt="Logo"
                                    style="width: 100%; height: auto;">
                            </a>
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
                                    src="{{ asset('storage/svg-gobbler_-_2023-0(1).svg') }}"></a>
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
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="/"
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
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="/#about"
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
                                <div class="tn-atom" style="pointer-events: auto; line-height: 20px;"><a href="/#price"
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
                                        href="/#projects" style="color: inherit" class="t794__tm-link"
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

        <div id="t-main-content"></div>

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
                        data-field-imgs-value='[
                     {"lid":1698922282904,"li_img":"{{ asset('storage/1/1.jpg')
                }}","li_imgalt":"","li_imgtitle":"","li_youtube":"","li_vimeo":"","li_imgurl":"","li_imgtarget":false,"li_imgnofollow":false},
                {"lid":1698922282905,"li_img":"{{ asset('storage/1/2.jpg')
                }}","li_imgalt":"","li_imgtitle":"","li_youtube":"","li_vimeo":"","li_imgurl":"","li_imgtarget":false,"li_imgnofollow":false},
                {"lid":1698922282906,"li_img":"{{ asset('storage/1/3.jpg')
                }}","li_imgalt":"","li_imgtitle":"","li_youtube":"","li_vimeo":"","li_imgurl":"","li_imgtarget":false,"li_imgnofollow":false},
                {"lid":1698922282907,"li_img":"{{ asset('storage/1/4.jpg')
                }}","li_imgalt":"","li_imgtitle":"","li_youtube":"","li_vimeo":"","li_imgurl":"","li_imgtarget":false,"li_imgnofollow":false},
                {"lid":1698922282908,"li_img":"{{ asset('storage/1/5.jpg')
                }}","li_imgalt":"","li_imgtitle":"","li_youtube":"","li_vimeo":"","li_imgurl":"","li_imgtarget":false,"li_imgnofollow":false}
                ]' data-field-slds_arrowcolor-value="#000000" data-field-slds_arrowbgcolor-value="#e8e8e8"
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
                                                data-slider-totalslides="5" data-slider-pos="1" data-slider-cycle="yes"
                                                data-slider-animated="" data-swiper-initialized="true"
                                                style="width: 15210px; height: 800px; transform: translateX(-1521px);"
                                                data-slider-timeout="3000" data-slider-interval-id="268"
                                                data-slider-stopped="">
                                                <div class="t-slds__item t-slds__item-loaded" data-slide-index="0"
                                                    aria-hidden="true" style="width: 1521px; opacity: 0;">
                                                    <div class="t-width">
                                                        <div itemscope=""
                                                            class="t-null__slds-wrapper t-slds__wrapper t-slds__wrapper_100 t-align_center">
                                                            <meta itemprop="image" content="">
                                                            <meta itemprop="caption" content="SEO">
                                                            <div data-img-lid="1698922282904"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="{{ asset('storage/1/1.jpg') }}"
                                                                style="background-image: url('{{ asset('storage/1/1.jpg') }}'); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282904"
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
                                                            <div data-img-lid="1698922282905"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="{{ asset('storage/1/2.jpg') }}"
                                                                style="background-image: url('{{ asset('storage/1/2.jpg') }}'); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282905"
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
                                                            <div data-img-lid="1698922282906"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="{{ asset('storage/1/3.jpg') }}"
                                                                style="background-image: url('{{ asset('storage/1/3.jpg') }}'); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282906"
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
                                                            <div data-img-lid="1698922282907"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="{{ asset('storage/1/4.jpg') }}"
                                                                style="background-image: url('{{ asset('storage/1/4.jpg') }}'); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282907"
                                                                data-tu-noclick="yes" data-tu-is-image="yes"
                                                                data-tu-multiple="no"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-slds__item t-slds__item-loaded" data-slide-index="4"
                                                    aria-hidden="true" style="width: 1521px; opacity: 0;">
                                                    <div class="t-width">
                                                        <div itemscope=""
                                                            class="t-null__slds-wrapper t-slds__wrapper t-slds__wrapper_100 t-align_center">
                                                            <meta itemprop="image" content="">
                                                            <meta itemprop="caption" content="SEO">
                                                            <div data-img-lid="1698922282908"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="{{ asset('storage/1/5.jpg') }}"
                                                                style="background-image: url('{{ asset('storage/1/5.jpg') }}'); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
                                                                width="100%" imgfield="tn_img_1698922282908"
                                                                data-tu-noclick="yes" data-tu-is-image="yes"
                                                                data-tu-multiple="no"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="t-slds__item t-slds__item-loaded" data-slide-index="5"
                                                    aria-hidden="true" style="width: 1521px; opacity: 0;">
                                                    <div class="t-width">
                                                        <div itemscope=""
                                                            class="t-null__slds-wrapper t-slds__wrapper t-slds__wrapper_100 t-align_center">
                                                            <meta itemprop="image" content="">
                                                            <meta itemprop="caption" content="SEO">
                                                            <div data-img-lid="1698922282904"
                                                                class="tn-atom__slds-img t-bgimg loaded"
                                                                data-original="{{ asset('storage/1/1.jpg') }}"
                                                                style="background-image: url('{{ asset('storage/1/1.jpg') }}'); width: calc(1521px * var(--zoom, 1)); height: calc(800px * var(--zoom, 1));"
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
                                        <div class="t-slds__bullet" data-slide-bullet-for="3">
                                            <div class="t-slds__bullet_body"
                                                style="width: calc(8px * var(--zoom, 1)); height: calc(8px * var(--zoom, 1)); background-color: rgb(153, 153, 153);">
                                            </div>
                                        </div>
                                        <div class="t-slds__bullet" data-slide-bullet-for="4">
                                            <div class="t-slds__bullet_body"
                                                style="width: calc(8px * var(--zoom, 1)); height: calc(8px * var(--zoom, 1)); background-color: rgb(153, 153, 153);">
                                            </div>
                                        </div>
                                        <div class="t-slds__bullet" data-slide-bullet-for="5">
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
                                    <div class="t-slds__caption" data-slide-caption="3">
                                        <div class="t-slds__caption_wrapper">
                                            <div class="t-slds__title"></div>
                                        </div>
                                    </div>
                                    <div class="t-slds__caption" data-slide-caption="4">
                                        <div class="t-slds__caption_wrapper">
                                            <div class="t-slds__title"></div>
                                        </div>
                                    </div>
                                    <div class="t-slds__caption" data-slide-caption="5">
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
                        <h1 class="tn-atom" field="tn_text_1695797803907" style="line-height: 96px;">
                            {{ $project->title }}
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
                        <div class="tn-atom" field="tn_text_1695797803912" style="line-height: 29px;">
                            {{ $project->apartment_info }}
                        </div>
                    </div>
                    <div class="t396__elem tn-elem tn-elem__6617306041695797803957" data-elem-id="1695797803957"
                        data-elem-type="text" data-field-top-value="-134" data-field-left-value="-108"
                        data-field-width-value="322" data-field-axisy-value="bottom" data-field-axisx-value="right"
                        data-field-container-value="window" data-field-topunits-value="px"
                        data-field-leftunits-value="px" data-field-heightunits-value="" data-field-widthunits-value="px"
                        data-field-top-res-320-value="-64" data-field-left-res-320-value="20"
                        data-field-top-res-640-value="-57" data-field-left-res-640-value="47" Тип
                        данных-x-res-640="left" data-field-top-res-960="-93" data-field-left-res-960="-99"
                        data-field-width-res-960="242"
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
                            <div class="tn-atom" style="pointer-events: auto; line-height: 14px;"><a href="/"
                                    style="color: inherit">Главная</a></div>
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
                            <div class="tn-atom" style="pointer-events: auto;"><a href="/projects"
                                    style="color: inherit">Проекты</a></div>
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
                        <div class="tn-atom" field="tn_text_1695797803912" style=""><a href="/"
                                style="color: rgb(255, 255, 255);">Главная</a> → <a href="/projects"
                                style="color: rgb(255, 255, 255);">Проекты</a> → Проект {{ $project->id }}</div>
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
                            style="pointer-events: auto;"> </a>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('661730604'); }); });</script>
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
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645332199-1695915205005">
                            <div class="tn-atom" field="tn_text_1695915205005" style="line-height: 98px;">
                                {{$project->client_solution}}
                            </div>
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
                            <div class="t005__text t-text t-text_md" field="text">{{ $project->text_1 }}</div>
                        </div>
                        <div class="t-col t-col_6 ">
                            <div class="t005__text t-text t-text_md" field="text2">{{ $project->text_1 }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="rec663743567" class="r t-rec t-rec_pt_0 t-rec_pb_0" style="padding-top:0px;padding-bottom:0px; "
            data-animationappear="off" data-record-type="552"> <!-- t552--> <!-- @classes: t-descr t-descr_xxs -->
            <div class="t552">
                <div class="t552__container t-container_100">
                    @foreach($project['images'] as $index => $image)
                        <div class="t552__tile t552__tile_50" itemscope itemtype="http://schema.org/ImageObject">
                            <div class="t552__blockimg t552__blockimg_animated t-bgimg t-zoomable"
                                data-original="{{ asset('storage/' . $image->image) }}" bgimgfield="gi_img__{{ $index }}"
                                data-zoom-target="{{ $index }}" data-zoomable="yes"
                                data-img-zoom-url="{{ asset('storage/' . $image->image) }}"
                                style="background: url('{{ asset('storage/' . $image->image) }}') center center / cover no-repeat; height: 570px;"
                                data-lazy-rule="comm:resize,round:100">
                                <meta itemprop="image" content="{{ asset('storage/' . $image->image) }}">
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t552_init', function () { t552_init('663743567', '0.75'); }); });</script>
        </div>

        <!-- contact -->
        <div id="rec646114295" class="r t-rec t-rec_pb_0 r_hidden r_anim" style="padding-bottom:0px; "
            data-record-type="215"> <a name="contacts" style="font-size:0;"></a>
        </div>
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
                        data-field-top-res-640-value="299" data-field-left-res-640-value="-15"
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
                            <form id="send-message">
                                @csrf
                                <div class="t-form__inputsbox">
                                    <div class="t-input-group t-input-group_nm" style="margin-bottom: 20px;">
                                        <div class="t-input-block">
                                            <input aria-label="name" type="text" name="name"
                                                class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles t-input_pvis"
                                                data-tilda-rule="text" data-tilda-req="1"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;">
                                            <div class="t-input__vis-ph"
                                                style="top: 17px; font-weight: 400; font-size: 16px; height: 17px;">
                                                Name
                                            </div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>

                                    <div class="t-input-group t-input-group_ph" style="margin-bottom: 20px;">
                                        <div class="t-input-block">
                                            <input aria-label="number" type="tel" name="number"
                                                class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles t-input_pvis"
                                                data-tilda-rule="phone" data-tilda-req="1"
                                                placeholder="+7 (999) 999-99-99"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;">
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>

                                    <div class="t-input-group t-input-group_em" style="margin-bottom: 20px;">
                                        <div class="t-input-block">
                                            <input aria-label="email" type="email" name="email"
                                                class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles t-input_pvis"
                                                data-tilda-rule="email" data-tilda-req="1"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 50px;">
                                            <div class="t-input__vis-ph"
                                                style="top: 17px; font-weight: 400; font-size: 16px; height: 17px;">
                                                Email
                                            </div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>

                                    <div class="t-input-group t-input-group_ta" style="margin-bottom: 20px;">
                                        <div class="t-input-block">
                                            <textarea aria-label="message" name="message"
                                                class="t-input js-tilda-rule t-input_bbonly t-input-inline-styles t-input_pvis"
                                                data-rows="3" rows="3"
                                                style="color: rgb(0, 0, 0); border: 1px solid rgb(0, 0, 0); background-color: rgb(255, 255, 255); font-size: 16px; font-weight: 400; height: 85px;"></textarea>
                                            <div class="t-input__vis-ph"
                                                style="top: 17px; font-weight: 400; font-size: 16px; height: 17px;">
                                                Message
                                            </div>
                                            <div class="t-input-error"></div>
                                        </div>
                                    </div>

                                    <div class="tn-form__submit">
                                        <button type="submit" class="t-submit">
                                            ОТПРАВИТЬ ЗАЯВКУ
                                        </button>
                                    </div>
                                </div>
                                <div
                                    style="text-align: left; color: rgb(0, 0, 0); font-weight: 400; font-family: TildaSans; margin-top: 15px; font-size: 13px;">
                                    <span style="color: rgb(128, 128, 128); font-size: 14px;">
                                        Нажимая на кнопку, вы соглашаетесь с обработкой персональных данных и политикой
                                        конфиденциальности
                                    </span>
                                </div>
                            </form>
                            <script>const form = document.querySelector("#send-message"), numberInput = form.querySelector("input[name='number']"), submitBtn = form.querySelector("button[type='submit']"); let isSubmitting = !1; numberInput.addEventListener("input", function (e) { let t = e.target.value.replace(/\D/g, "").slice(0, 11); t.startsWith("7") && (t = t.slice(1)); let i = "+7"; t.length > 0 && (i += " (" + t.slice(0, 3)), t.length >= 3 && (i += ") " + t.slice(3, 6)), t.length >= 6 && (i += "-" + t.slice(6, 8)), t.length >= 8 && (i += "-" + t.slice(8, 10)), e.target.value = i }), form.addEventListener("submit", async function (e) { if (e.preventDefault(), isSubmitting) return; let t = form.querySelector("input[name='name']").value.trim(), i = numberInput.value.trim(), r = form.querySelector("input[name='email']").value.trim(), s = form.querySelector("textarea[name='message']").value.trim(); if (!t) { Swal.fire({ icon: "error", title: "Ошибка", text: "Пожалуйста, введите ваше имя" }); return } if (!/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/.test(i)) { Swal.fire({ icon: "error", title: "Ошибка", text: "Неверный формат телефона! Пример: +7 (999) 999-99-99" }); return } if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(r)) { Swal.fire({ icon: "error", title: "Ошибка", text: "Пожалуйста, введите корректный email" }); return } if (!s) { Swal.fire({ icon: "error", title: "Ошибка", text: "Пожалуйста, введите сообщение" }); return } let n = new FormData(form), l = form.querySelector('input[name="_token"]').value; try { isSubmitting = !0, submitBtn.classList.add("loading"), submitBtn.disabled = !0; let m = await fetch("{{ route('message.send') }}", { method: "POST", headers: { "X-CSRF-TOKEN": l, Accept: "application/json" }, body: n }), u = await m.json(); if (m.ok) Swal.fire({ icon: "success", title: "Успех", text: u.message || "Заявка успешно отправлена!", timer: 3e3, timerProgressBar: !0, willClose() { isSubmitting = !1, submitBtn.classList.remove("loading"), submitBtn.disabled = !1, form.reset() } }); else throw Error(u.message || "Ошибка при отправке формы") } catch (a) { Swal.fire({ icon: "error", title: "Ошибка", text: a.message || "Произошла ошибка. Попробуйте снова." }), isSubmitting = !1, submitBtn.classList.remove("loading"), submitBtn.disabled = !1 } });</script>
                        </div>
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
                        <div class="tn-atom" field="tn_text_1695798983914" style="line-height: 30px;">
                            @if(isset($contacts[0]) && $contacts[0]['is_active'])
                                <a
                                    href="{{ $contacts[0]['url'] . $contacts[0]['value'] }}">{{ $contacts[0]['value'] }}</a><br>
                            @endif

                            @if(isset($contacts[1]) && $contacts[1]['is_active'])
                                <a href="{{ $contacts[1]['url'] . $contacts[1]['value'] }}">{{ $contacts[1]['value'] }}</a>
                            @endif
                        </div>
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
                        <div class="tn-atom" field="tn_text_1695798983923" style="line-height: 30px;">
                            @if(isset($contacts[2]) && $contacts[2]['is_active'])
                                <a
                                    href="{{ $contacts[2]['url'] . $contacts[2]['value'] }}">{{ $contacts[2]['value'] }}</a><br>
                            @endif

                            @if(isset($contacts[3]) && $contacts[3]['is_active'])
                                <a href="{{ $contacts[3]['url'] . $contacts[3]['value'] }}">{{ $contacts[3]['value'] }}</a>
                            @endif
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
                        <div class="tn-atom" field="tn_text_1695798983925" style="line-height: 30px;">
                            @if(isset($contacts[4]) && $contacts[4]['is_active'])
                                {{ $contacts[4]['value'] }}
                            @endif
                        </div>
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
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645336490-1695916885341">
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
                        <div class="tn-atom__sbs-anim-wrapper" id="sbs-645336490-1695916885349">
                            <div class="tn-atom" field="tn_text_1695916885349" style="line-height: 25px;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t396_init', function () { t396_init('645336490'); }); });</script>
        </div>
        <!-- contact -->

        <footer id="minimal-white-footer">
            <div class="footer-container">
                <!-- О компании -->
                <div class="footer-section">
                    <a href="{{ config('app.url') }}">
                        <h3>{{ config('app.name') }}</h3>
                    </a>
                    <p>Мы создаём инновационные решения для вашего бизнеса и повседневной жизни.</p>
                </div>

                <!-- Навигация -->
                <div class="footer-section">
                    <h3 style="color: white;">Навигация</h3>
                    <a href="/">Главная</a>
                    <a href="/#about">О нас</a>
                    <a href="/#price">Стоимость</a>
                    <a href="/#projects">Портфолио</a>
                    <a href="#contacts">Контакты</a>
                </div>

                <!-- Контакты -->
                <div class="footer-section">
                    <h3 style="color: white;">Контакты</h3>
                    @foreach ($contacts as $contact)
                        @if ($contact['is_active'] && in_array($contact['name'], ['Phone', 'Email', 'Address']))
                            <a href="{{ $contact['url'] ? $contact['url'] . $contact['value'] : '#' }}"
                                target="{{ $contact['target'] ?? '_self' }}">
                                <i class="{{ $contact['icon'] }}" style="margin-right: 10px;"></i>
                                {{ $contact['value'] }}
                            </a>
                        @endif
                    @endforeach
                </div>

                <!-- Социальные сети -->
                <div class="footer-section">
                    <h3 style="color: white;">Следите за нами</h3>
                    <div class="social-icons">
                        @foreach ($contacts as $contact)
                            @if ($contact['is_active'] && !in_array($contact['name'], ['Phone', 'Email', 'Address']))
                                <a href="{{ $contact['url'] . $contact['value'] }}"
                                    target="{{ $contact['target'] ?? '_blank' }}" title="{{ $contact['name'] }}">
                                    <i class="{{ $contact['icon'] }}"></i>
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <style>
                .copyright {
                    font-size: 14px;
                    color: #ccc;
                    text-align: center;
                    padding: 20px 0;
                }

                .copyright a {
                    font-weight: bold;
                    color: #444 !important;
                    text-decoration: none;
                    transition: color 0.3s ease;
                }

                .copyright a:hover {
                    color: #fff !important;
                    text-decoration: underline;
                }
            </style>

            <div class="copyright">
                &copy; {{ date('Y') }} {{ config('app.name') }}. Все права защищены.
                Сайт разработан <a href="https://iqbolshoh.uz" target="_blank">Iqbolshoh dev</a>.
            </div>

        </footer>

        <div id="rec653299402" class="r t-rec" style="opacity: 1;" data-animationappear="off" data-record-type="890">
            <!-- t890 -->
            <div class="t890" style="display: none; opacity:1; position:fixed; z-index:99990; bottom:20px;right:20px;">
                <button type="button" class="t890__arrow" aria-label="Вернуться к началу страницы"
                    style="box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.2);"> <svg role="presentation" width="50"
                        height="50" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="50" height="50" rx="50" fill="#ffffff" fill-opacity="0.90" stroke="none">
                        </rect>
                        <path d="M14 28L25 18l10 10" stroke="#17161c" stroke-width="1" fill="none"></path>
                    </svg> </button>
            </div>
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

                    <div>
                        <div class="custom-popup__container">
                            <div class="custom-popup__wrapper">
                                <div class="custom-popup__text">
                                    <div class="custom-popup__title">Бесплатная консультация</div>
                                    <div class="custom-popup__description">Заполните форму, и мы свяжемся с вами в
                                        ближайшее время.</div>
                                </div>

                                <form id="custom-consultation-form">
                                    @csrf
                                    <input type="text" name="name" placeholder="Ваше имя" required>
                                    <input type="email" name="email" placeholder="Ваш email" required>
                                    <input type="tel" name="phone" id="custom-phone" placeholder="+7 (___) ___-__-__"
                                        required>
                                    <button type="submit" id="custom-submit-btn">Отправить</button>
                                </form>

                                <div id="custom-response-msg"></div>

                                <div class="custom-popup__bottom-text">
                                    Нажимая на кнопку, вы соглашаетесь на обработку персональных данных и политику
                                    конфиденциальности.
                                </div>
                            </div>
                        </div>
                        <script>document.addEventListener("DOMContentLoaded", function () { let e = document.getElementById("custom-consultation-form"), t = document.getElementById("custom-submit-btn"), s = document.getElementById("custom-response-msg"), n = document.getElementById("custom-phone"), l = !1; n.addEventListener("input", function (e) { let t = e.target.value.replace(/\D/g, ""); t.startsWith("7") && (t = t.slice(1)), t.length > 10 && (t = t.slice(0, 10)); let s = "+7"; t.length > 0 && (s += " (" + t.slice(0, 3)), t.length > 3 && (s += ") " + t.slice(3, 6)), t.length > 6 && (s += "-" + t.slice(6, 8)), t.length > 8 && (s += "-" + t.slice(8, 10)), e.target.value = s }), e.addEventListener("submit", async function (r) { if (r.preventDefault(), l) return; let a = n.value.trim(); if (!/^\+7 \(\d{3}\) \d{3}-\d{2}-\d{2}$/.test(a)) { s.className = "show error", s.innerText = "Телефон введён неверно! Пожалуйста, используйте формат: +7 (XXX) XXX-XX-XX.", setTimeout(() => { s.classList.remove("show", "error") }, 3500); return } l = !0, t.disabled = !0, s.className = "", t.classList.add("loading"); let i = new FormData(e), o = document.querySelector('input[name="_token"]').value; try { let c = await fetch("{{ route('consultation.send') }}", { method: "POST", headers: { "X-CSRF-TOKEN": o }, body: i }), d = await c.json(); s.classList.add("show"), c.ok && d.success ? (s.classList.add("success"), s.innerText = "Ваш запрос успешно отправлен!", e.reset()) : (s.classList.add("error"), s.innerText = "Ошибка при отправке!") } catch (u) { console.error(u), s.classList.add("show", "error"), s.innerText = "Не удалось связаться с сервером!" } finally { setTimeout(() => { s.classList.remove("show", "success", "error"), l = !1, t.disabled = !1, t.classList.remove("loading") }, 3500) } }) });</script>
                    </div>

                </div>
            </div>
            <script>t_onReady(function () { t_onFuncLoad('t702_initPopup', function () { t702_initPopup('653299529'); }); });</script>
        </div>

    </div>
</body>

</html>