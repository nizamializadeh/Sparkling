<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8"><script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,t,n){function r(n){if(!t[n]){var o=t[n]={exports:{}};e[n][0].call(o.exports,function(t){var o=e[n][1][t];return r(o||t)},o,o.exports)}return t[n].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<n.length;o++)r(n[o]);return r}({1:[function(e,t,n){function r(){}function o(e,t,n){return function(){return i(e,[f.now()].concat(u(arguments)),t?null:this,n),t?void 0:this}}var i=e("handle"),a=e(2),u=e(3),c=e("ee").get("tracer"),f=e("loader"),s=NREUM;"undefined"==typeof window.newrelic&&(newrelic=s);var p=["setPageViewName","setCustomAttribute","setErrorHandler","finished","addToTrace","inlineHit","addRelease"],d="api-",l=d+"ixn-";a(p,function(e,t){s[t]=o(d+t,!0,"api")}),s.addPageAction=o(d+"addPageAction",!0),s.setCurrentRouteName=o(d+"routeName",!0),t.exports=newrelic,s.interaction=function(){return(new r).get()};var m=r.prototype={createTracer:function(e,t){var n={},r=this,o="function"==typeof t;return i(l+"tracer",[f.now(),e,n],r),function(){if(c.emit((o?"":"no-")+"fn-start",[f.now(),r,o],n),o)try{return t.apply(this,arguments)}catch(e){throw c.emit("fn-err",[arguments,this,e],n),e}finally{c.emit("fn-end",[f.now()],n)}}}};a("setName,setAttribute,save,ignore,onEnd,getContext,end,get".split(","),function(e,t){m[t]=o(l+t)}),newrelic.noticeError=function(e){"string"==typeof e&&(e=new Error(e)),i("err",[e,f.now()])}},{}],2:[function(e,t,n){function r(e,t){var n=[],r="",i=0;for(r in e)o.call(e,r)&&(n[i]=t(r,e[r]),i+=1);return n}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],3:[function(e,t,n){function r(e,t,n){t||(t=0),"undefined"==typeof n&&(n=e?e.length:0);for(var r=-1,o=n-t||0,i=Array(o<0?0:o);++r<o;)i[r]=e[t+r];return i}t.exports=r},{}],4:[function(e,t,n){t.exports={exists:"undefined"!=typeof window.performance&&window.performance.timing&&"undefined"!=typeof window.performance.timing.navigationStart}},{}],ee:[function(e,t,n){function r(){}function o(e){function t(e){return e&&e instanceof r?e:e?c(e,u,i):i()}function n(n,r,o,i){if(!d.aborted||i){e&&e(n,r,o);for(var a=t(o),u=m(n),c=u.length,f=0;f<c;f++)u[f].apply(a,r);var p=s[y[n]];return p&&p.push([b,n,r,a]),a}}function l(e,t){v[e]=m(e).concat(t)}function m(e){return v[e]||[]}function w(e){return p[e]=p[e]||o(n)}function g(e,t){f(e,function(e,n){t=t||"feature",y[n]=t,t in s||(s[t]=[])})}var v={},y={},b={on:l,emit:n,get:w,listeners:m,context:t,buffer:g,abort:a,aborted:!1};return b}function i(){return new r}function a(){(s.api||s.feature)&&(d.aborted=!0,s=d.backlog={})}var u="nr@context",c=e("gos"),f=e(2),s={},p={},d=t.exports=o();d.backlog=s},{}],gos:[function(e,t,n){function r(e,t,n){if(o.call(e,t))return e[t];var r=n();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,t,{value:r,writable:!0,enumerable:!1}),r}catch(i){}return e[t]=r,r}var o=Object.prototype.hasOwnProperty;t.exports=r},{}],handle:[function(e,t,n){function r(e,t,n,r){o.buffer([e],r),o.emit(e,t,n)}var o=e("ee").get("handle");t.exports=r,r.ee=o},{}],id:[function(e,t,n){function r(e){var t=typeof e;return!e||"object"!==t&&"function"!==t?-1:e===window?0:a(e,i,function(){return o++})}var o=1,i="nr@id",a=e("gos");t.exports=r},{}],loader:[function(e,t,n){function r(){if(!x++){var e=h.info=NREUM.info,t=d.getElementsByTagName("script")[0];if(setTimeout(s.abort,3e4),!(e&&e.licenseKey&&e.applicationID&&t))return s.abort();f(y,function(t,n){e[t]||(e[t]=n)}),c("mark",["onload",a()+h.offset],null,"api");var n=d.createElement("script");n.src="https://"+e.agent,t.parentNode.insertBefore(n,t)}}function o(){"complete"===d.readyState&&i()}function i(){c("mark",["domContent",a()+h.offset],null,"api")}function a(){return E.exists&&performance.now?Math.round(performance.now()):(u=Math.max((new Date).getTime(),u))-h.offset}var u=(new Date).getTime(),c=e("handle"),f=e(2),s=e("ee"),p=window,d=p.document,l="addEventListener",m="attachEvent",w=p.XMLHttpRequest,g=w&&w.prototype;NREUM.o={ST:setTimeout,SI:p.setImmediate,CT:clearTimeout,XHR:w,REQ:p.Request,EV:p.Event,PR:p.Promise,MO:p.MutationObserver};var v=""+location,y={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-1071.min.js"},b=w&&g&&g[l]&&!/CriOS/.test(navigator.userAgent),h=t.exports={offset:u,now:a,origin:v,features:{},xhrWrappable:b};e(1),d[l]?(d[l]("DOMContentLoaded",i,!1),p[l]("load",r,!1)):(d[m]("onreadystatechange",o),p[m]("onload",r)),c("mark",["firstbyte",u],null,"api");var x=0,E=e(4)},{}]},{},["loader"]);</script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <title>Sparkling - Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites</title>
    <script>window._wca = window._wca || [];</script>

    <!-- This site is optimized with the Yoast SEO plugin v7.9.1 - https://yoast.com/wordpress/plugins/seo/ -->
    <meta name="description" content="Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites"/>
    <link rel="canonical" href="index.html" />
    <link rel="next" href="page/2/index.html" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sparkling - Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites" />
    <meta property="og:description" content="Free flat design WordPress theme developed using Bootstrap 3 and is well suited for blogs, portfolio, design, photography and other creative websites" />
    <meta property="og:url" content="https://colorlib.com/sparkling/" />
    <meta property="og:site_name" content="Sparkling" />
    <meta property="og:image" content="https://cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/03/colorlib-logo-slider.jpg" />
    <meta property="og:image:secure_url" content="https://cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/03/colorlib-logo-slider.jpg" />
    <meta property="og:image:width" content="1920" />
    <meta property="og:image:height" content="600" />
    <script type='application/ld+json'>{"@context":"https:\/\/schema.org","@type":"WebSite","@id":"#website","url":"https:\/\/colorlib.com\/sparkling\/","name":"Sparkling","potentialAction":{"@type":"SearchAction","target":"https:\/\/colorlib.com\/sparkling\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
    <!-- / Yoast SEO plugin. -->

    <link rel='dns-prefetch' href='http://s0.wp.com/' />
    <link rel='dns-prefetch' href='http://secure.gravatar.com/' />
    <link rel='dns-prefetch' href='http://fonts.googleapis.com/' />
    <link rel='dns-prefetch' href='http://s.w.org/' />
    <link rel="alternate" type="application/rss+xml" title="Sparkling &raquo; Feed" href="feed/index.html" />
    <link rel="alternate" type="application/rss+xml" title="Sparkling &raquo; Comments Feed" href="comments/feed/index.html" />
    <!-- This site uses the Google Analytics by MonsterInsights plugin v7.1.0 - Using Analytics tracking - https://www.monsterinsights.com/ -->
    <script type="text/javascript" data-cfasync="false">
        var mi_version         = '7.1.0';
        var mi_track_user      = true;
        var mi_no_track_reason = '';

        var disableStr = 'ga-disable-UA-23581568-13';

        /* Function to detect opted out users */
        function __gaTrackerIsOptedOut() {
            return document.cookie.indexOf(disableStr + '=true') > -1;
        }

        /* Disable tracking if the opt-out cookie exists. */
        if ( __gaTrackerIsOptedOut() ) {
            window[disableStr] = true;
        }

        /* Opt-out function */
        function __gaTrackerOptout() {
            document.cookie = disableStr + '=true; expires=Thu, 31 Dec 2099 23:59:59 UTC; path=/';
            window[disableStr] = true;
        }

        if ( mi_track_user ) {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','../../www.google-analytics.com/analytics.js','__gaTracker');

            window.ga = __gaTracker;		__gaTracker('create', 'UA-23581568-13', 'auto');
            __gaTracker('set', 'forceSSL', true);
            __gaTracker('set', 'anonymizeIp', true);
            __gaTracker('set', 'displayFeaturesTask', null);
            __gaTracker('send','pageview');
        } else {
            console.log( "" );
            (function() {
                /* https://developers.google.com/analytics/devguides/collection/analyticsjs/ */
                var noopfn = function() {
                    return null;
                };
                var noopnullfn = function() {
                    return null;
                };
                var Tracker = function() {
                    return null;
                };
                var p = Tracker.prototype;
                p.get = noopfn;
                p.set = noopfn;
                p.send = noopfn;
                var __gaTracker = function() {
                    var len = arguments.length;
                    if ( len === 0 ) {
                        return;
                    }
                    var f = arguments[len-1];
                    if ( typeof f !== 'object' || f === null || typeof f.hitCallback !== 'function' ) {
                        console.log( 'Not running function __gaTracker(' + arguments[0] + " ....) because you are not being tracked. " + mi_no_track_reason );
                        return;
                    }
                    try {
                        f.hitCallback();
                    } catch (ex) {

                    }
                };
                __gaTracker.create = function() {
                    return new Tracker();
                };
                __gaTracker.getByName = noopnullfn;
                __gaTracker.getAll = function() {
                    return [];
                };
                __gaTracker.remove = noopfn;
                window['__gaTracker'] = __gaTracker;
                window.ga = __gaTracker;		})();
        }
    </script>
    <!-- / Google Analytics by MonsterInsights -->
    <script type="text/javascript">
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/colorlib.com\/sparkling\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
        !function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
    </script>
    <style type="text/css">
        img.wp-smiley,
        img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 .07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <link rel='stylesheet' id='contact-form-7-css'  href="{{ asset('assets/css/stylesaead.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='woocommerce-layout-css'  href="{{ asset('assets/css/woocommerce-layoutedb1.css') }}" type='text/css' media='all' />
    <style id='woocommerce-layout-inline-css' type='text/css'>

        .infinite-scroll .woocommerce-pagination {
            display: none;
        }
    </style>
    <link rel='stylesheet' id='woocommerce-smallscreen-css'  href="{{ asset('assets/css/woocommerce-smallscreenedb1.css') }}" type='text/css' media='only screen and (max-width: 768px)' />
    <link rel='stylesheet' id='woocommerce-general-css'  href="{{ asset('assets/css/woocommerceedb1.css') }}" type='text/css' media='all' />
    <style id='woocommerce-inline-inline-css' type='text/css'>
        .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel='stylesheet' id='wp-pagenavi-css'  href="{{ asset('assets/css/pagenavi-css44fd.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='mediaelement-css'  href="{{ asset('assets/css/mediaelementplayer-legacy.min45a0.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='wp-mediaelement-css'  href="{{ asset('assets/css/wp-mediaelement.min5010.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css'  href="{{ asset('assets/css/dashicons.min5010.css') }}" type='text/css' media='all' />
    <link rel='stylesheet' id='sparkling-bootstrap-css'  href="{{ asset('assets/css/bootstrap.min5010.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='sparkling-icons-css'  href="{{ asset('assets/css/fontawesome-all.min7fff.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='sparkling-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans%3A400italic%2C400%2C600%2C700%7CRoboto+Slab%3A400%2C300%2C700&amp;ver=4.9.8' type='text/css' media='all' />
    <link rel='stylesheet' id='flexslider-css-css'  href="{{ asset('assets/css/flexslider5010.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='sparkling-style-css'  href="{{ asset('assets/css/stylea305.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' id='jetpack_css-css'  href='../../cdn.colorlib.com/sparkling/wp-content/plugins/jetpack/css/jetpack1e39.css?ver=6.4.2' type='text/css' media='all' />
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-includes/js/jquery/jqueryb8ff.js?ver=1.12.4'></script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-includes/js/jquery/jquery-migrate.min330a.js?ver=1.4.1'></script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-content/plugins/sellfy-sell-digital-downloads/js/embed5010.js?ver=4.9.8'></script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-content/plugins/jetpack/_inc/build/spin.min4e44.js?ver=1.3'></script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-content/plugins/jetpack/_inc/build/jquery.spin.min4e44.js?ver=1.3'></script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-content/plugins/jetpack/_inc/build/tiled-gallery/tiled-gallery/tiled-gallery.min5010.js?ver=4.9.8'></script>
    <script type='text/javascript'>
        var mejsL10n = {"language":"en","strings":{"mejs.install-flash":"You are using a browser that does not have Flash player enabled or installed. Please turn on your Flash player plugin or download the latest version from https:\/\/get.adobe.com\/flashplayer\/","mejs.fullscreen-off":"Turn off Fullscreen","mejs.fullscreen-on":"Go Fullscreen","mejs.download-video":"Download Video","mejs.fullscreen":"Fullscreen","mejs.time-jump-forward":["Jump forward 1 second","Jump forward %1 seconds"],"mejs.loop":"Toggle Loop","mejs.play":"Play","mejs.pause":"Pause","mejs.close":"Close","mejs.time-slider":"Time Slider","mejs.time-help-text":"Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.","mejs.time-skip-back":["Skip back 1 second","Skip back %1 seconds"],"mejs.captions-subtitles":"Captions\/Subtitles","mejs.captions-chapters":"Chapters","mejs.none":"None","mejs.mute-toggle":"Mute Toggle","mejs.volume-help-text":"Use Up\/Down Arrow keys to increase or decrease volume.","mejs.unmute":"Unmute","mejs.mute":"Mute","mejs.volume-slider":"Volume Slider","mejs.video-player":"Video Player","mejs.audio-player":"Audio Player","mejs.ad-skip":"Skip ad","mejs.ad-skip-info":["Skip in 1 second","Skip in %1 seconds"],"mejs.source-chooser":"Source Chooser","mejs.stop":"Stop","mejs.speed-rate":"Speed Rate","mejs.live-broadcast":"Live Broadcast","mejs.afrikaans":"Afrikaans","mejs.albanian":"Albanian","mejs.arabic":"Arabic","mejs.belarusian":"Belarusian","mejs.bulgarian":"Bulgarian","mejs.catalan":"Catalan","mejs.chinese":"Chinese","mejs.chinese-simplified":"Chinese (Simplified)","mejs.chinese-traditional":"Chinese (Traditional)","mejs.croatian":"Croatian","mejs.czech":"Czech","mejs.danish":"Danish","mejs.dutch":"Dutch","mejs.english":"English","mejs.estonian":"Estonian","mejs.filipino":"Filipino","mejs.finnish":"Finnish","mejs.french":"French","mejs.galician":"Galician","mejs.german":"German","mejs.greek":"Greek","mejs.haitian-creole":"Haitian Creole","mejs.hebrew":"Hebrew","mejs.hindi":"Hindi","mejs.hungarian":"Hungarian","mejs.icelandic":"Icelandic","mejs.indonesian":"Indonesian","mejs.irish":"Irish","mejs.italian":"Italian","mejs.japanese":"Japanese","mejs.korean":"Korean","mejs.latvian":"Latvian","mejs.lithuanian":"Lithuanian","mejs.macedonian":"Macedonian","mejs.malay":"Malay","mejs.maltese":"Maltese","mejs.norwegian":"Norwegian","mejs.persian":"Persian","mejs.polish":"Polish","mejs.portuguese":"Portuguese","mejs.romanian":"Romanian","mejs.russian":"Russian","mejs.serbian":"Serbian","mejs.slovak":"Slovak","mejs.slovenian":"Slovenian","mejs.spanish":"Spanish","mejs.swahili":"Swahili","mejs.swedish":"Swedish","mejs.tagalog":"Tagalog","mejs.thai":"Thai","mejs.turkish":"Turkish","mejs.ukrainian":"Ukrainian","mejs.vietnamese":"Vietnamese","mejs.welsh":"Welsh","mejs.yiddish":"Yiddish"}};
    </script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-includes/js/mediaelement/mediaelement-and-player.min45a0.js?ver=4.2.6-78496d1'></script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-includes/js/mediaelement/mediaelement-migrate.min5010.js?ver=4.9.8'></script>
    <script type='text/javascript'>
        /* <![CDATA[ */
        var _wpmejsSettings = {"pluginPath":"\/sparkling\/wp-includes\/js\/mediaelement\/","classPrefix":"mejs-","stretching":"responsive"};
        /* ]]> */
    </script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-content/themes/sparkling/assets/js/vendor/bootstrap.min5010.js?ver=4.9.8'></script>
    <script type='text/javascript' src='../../cdn.colorlib.com/sparkling/wp-content/themes/sparkling/assets/js/functions7946.js?ver=20180503'></script>
    <link rel='https://api.w.org/' href='wp-json/index.html' />
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="xmlrpc0db0.html?rsd" />
    <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://cdn.colorlib.com/sparkling/wp-includes/wlwmanifest.xml" />
    <meta name="generator" content="WordPress 4.9.8" />
    <meta name="generator" content="WooCommerce 3.4.4" />
    <link rel='shortlink' href='https://wp.me/4uces' />
    <style type='text/css'>img#wpstats{display:none}</style><style type="text/css">body, .entry-content {color:#6B6B6B}.entry-content {font-family: Open Sans;}.entry-content {font-size:14px}.entry-content {font-weight:normal}</style>	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
    <meta name="onesignal" content="wordpress-plugin"/>
    <link rel="manifest"
          href="wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/manifest.json73dd.json?gcm_sender_id="/>
    <script src="../../cdn.onesignal.com/sdks/OneSignalSDK.js" async></script>    <script>

        window.OneSignal = window.OneSignal || [];

        OneSignal.push( function() {
            OneSignal.SERVICE_WORKER_UPDATER_PATH = "OneSignalSDKUpdaterWorker.js.html";
            OneSignal.SERVICE_WORKER_PATH = "OneSignalSDKWorker.js.html";
            OneSignal.SERVICE_WORKER_PARAM = { scope: '/' };

            OneSignal.setDefaultNotificationUrl("https://colorlib.com/sparkling");
            var oneSignal_options = {};
            window._oneSignalInitOptions = oneSignal_options;

            oneSignal_options['wordpress'] = true;
            oneSignal_options['appId'] = '';
            oneSignal_options['autoRegister'] = false;
            oneSignal_options['httpPermissionRequest'] = { };
            oneSignal_options['httpPermissionRequest']['enable'] = true;
            oneSignal_options['welcomeNotification'] = { };
            oneSignal_options['welcomeNotification']['title'] = "";
            oneSignal_options['welcomeNotification']['message'] = "";
            oneSignal_options['path'] = "https://cdn.colorlib.com/sparkling/wp-content/plugins/onesignal-free-web-push-notifications/sdk_files/";
            oneSignal_options['promptOptions'] = { };
            oneSignal_options['notifyButton'] = { };
            oneSignal_options['notifyButton']['enable'] = true;
            oneSignal_options['notifyButton']['position'] = 'bottom-right';
            oneSignal_options['notifyButton']['theme'] = 'default';
            oneSignal_options['notifyButton']['size'] = 'medium';
            oneSignal_options['notifyButton']['prenotify'] = true;
            oneSignal_options['notifyButton']['showCredit'] = true;
            oneSignal_options['notifyButton']['text'] = {};
            OneSignal.init(window._oneSignalInitOptions);
        });

        function documentInitOneSignal() {
            var oneSignal_elements = document.getElementsByClassName("OneSignal-prompt");

            var oneSignalLinkClickHandler = function(event) { OneSignal.push(['registerForPushNotifications']); event.preventDefault(); };        for(var i = 0; i < oneSignal_elements.length; i++)
                oneSignal_elements[i].addEventListener('click', oneSignalLinkClickHandler, false);
        }

        if (document.readyState === 'complete') {
            documentInitOneSignal();
        }
        else {
            window.addEventListener("load", function(event){
                documentInitOneSignal();
            });
        }
    </script>

    <style type="text/css">
        .navbar > .container .navbar-brand {
            color: #dadada;
        }
    </style>
    <link rel="icon" href="../../cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-32x32.png" sizes="32x32" />
    <link rel="icon" href="../../cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-192x192.png" sizes="192x192" />
    <link rel="apple-touch-icon-precomposed" href="../../cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-180x180.png" />
    <meta name="msapplication-TileImage" content="https://cdn.colorlib.com/sparkling/wp-content/uploads/sites/5/2014/11/cropped-colorlib-logo-square1-270x270.png" />
    <style type="text/css" id="wp-custom-css">
        .osc_servicebox .fa { font-size: 40px; padding: 40px; background: #DA4453; border-radius: 50%; color: #fff; } .osc_servicebox { text-align: center; } .woocommerce .full-width { padding-left: 15px; padding-right: 15px; } .pagination { display: none; }		</style>
    <script async src='../../stats.wp.com/s-201833.js'></script>

</head>