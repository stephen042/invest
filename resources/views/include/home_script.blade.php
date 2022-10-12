<script src="{{asset('assets/libs/jquery/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('assets/libs/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/libs/slick-slider/slick.min.js')}}"></script>
    <script src="{{asset('assets/libs/detect-browser/browser.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.appear.js')}}"></script>
    <script src="{{asset('assets/libs/wow-js/wow.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery.countTo.js')}}"></script>
    <script src="{{asset('assets/libs/js-cookie/js.cookie.js')}}"></script>
    <script src="{{asset('assets/libs/selectbox/js/jquery.selectbox-0.2.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('assets/libs/jquery-jvectormap/jquery-jvectormap-us-aea.js')}}"></script>
    <script src="{{asset('assets/libs/directional-hover/jquery.directional-hover.min.js')}}"></script>
    <script src="{{asset('assets/libs/enquire/enquire.min.js')}}"></script>
    <!-- MAIN JS-->
    <script src="{{asset('assets/js/main.js')}}"></script>
    <!-- LOADING JS FOR PAGE-->
    <script src="{{asset('assets/libs/fancybox/js/jquery.fancybox.js')}}"></script>
    <script src="{{asset('assets/libs/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
    <script src="{{asset('assets/libs/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
    <script src="{{asset('assets/js/pages/homepage.js')}}"></script>
    <script src="{{asset('assets/libs/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/libs/isotope/packery-mode.pkgd.min.js')}}"></script>
    

{{-- <script type="text/javascript">
    (function() {
        var options = {
            whatsapp: "+13236887461", // WhatsApp number
            call_to_action: "Message us", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol,
            host = "getbutton.io",
            url = proto + "//static." + host;
        var s = document.createElement('script');
        s.type = 'text/javascript';
        s.async = true;
        s.src = url + '/widget-send-button/js/init.js';
        s.onload = function() {
            WhWidgetSendButton.init(host, proto, options);
        };
        var x = document.getElementsByTagName('script')[0];
        x.parentNode.insertBefore(s, x);
    })();
</script>

<script type="text/javascript">
    baseUrl = "https://widgets.cryptocompare.com/";
    var scripts = document.getElementsByTagName("script");
    var embedder = scripts[scripts.length - 1];
    var cccTheme = {
        "General": {
            "background": "#000",
            "priceText": "#fff",
            "enableMarquee": true
        },
        "Currency": {
            "color": "#fff"
        }
    };
    (function() {
        var appName = encodeURIComponent(window.location.hostname);
        if (appName == "") {
            appName = "local";
        }
        var s = document.createElement("script");
        s.type = "text/javascript";
        s.async = true;
        var theUrl = baseUrl + 'serve/v3/coin/header?fsyms=BTC,ETH,XMR,LTC,DASH&tsyms=USD,EUR,CNY,GBP';
        s.src = theUrl + (theUrl.indexOf("?") >= 0 ? "&" : "?") + "app=" + appName;
        embedder.parentNode.appendChild(s);
    })();
</script> --}}
