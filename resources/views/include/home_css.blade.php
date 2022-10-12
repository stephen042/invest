<!-- Document Meta
    ============================================= -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--IE Compatibility Meta-->
<meta name="author" content="zytheme" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name="description" content="Intersperscefinance">
<link rel="shortcut icon" type="image/png"
    href="{{ asset('assets/img/Stancorp03.png') }}" />
<link type="text/css" rel="stylesheet"
    href="fonts.googleapis.com/css2528.css?family=Roboto:300,400,400italic,500,700,900">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/font/font-icon/font-awesome/css/font-awesome.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/font/font-icon/flaticon/flaticon.css') }}">
<!-- LIBRARY CSS-->
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/bootstrap/css/bootstrap.min.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/slick-slider/slick.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/slick-slider/slick-theme.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/animate.css/animate.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/jquery-jvectormap/jquery-jvectormap.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/selectbox/css/jquery.selectbox.css') }}">
<!-- STYLE CSS-->
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/layout.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/fancybox/css/jquery.fancybox8cbb.css?v=2.1.5') }}">
<link type="text/css" rel="stylesheet"
    href="{{ asset('assets/libs/fancybox/css/jquery.fancybox-buttons3447.css?v=1.0.5') }}">
<link type="text/css" rel="stylesheet"
    href="{{ asset('assets/libs/fancybox/css/jquery.fancybox-thumbsf2ad.css?v=1.0.7') }}">


<style>
    *,
    *::before,
    *::after {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #ffffff;
    }

    h1.demo-title {
        text-align: center;
        font-size: 30px;
        font-weight: 600;
        color: #2A293E;
        letter-spacing: 2px;
    }

    h1.demo-title a {
        font-size: 16px;
        font-weight: 300;
    }

    .pricing-table {
        display: flex;
        flex-flow: row wrap;
        width: 100%;
        max-width: 1100px;
        margin: 0 auto;
        background: #ffffff;
    }

    .pricing-table .ptable-item {
        width: 33.33%;
        padding: 0 15px;
        margin-bottom: 30px;
    }

    @media (max-width: 992px) {
        .pricing-table .ptable-item {
            width: 33.33%;
        }
    }

    @media (max-width: 768px) {
        .pricing-table .ptable-item {
            width: 50%;
        }
    }

    @media (max-width: 576px) {
        .pricing-table .ptable-item {
            width: 100%;
        }
    }

    .pricing-table .ptable-single {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .pricing-table .ptable-header,
    .pricing-table .ptable-body,
    .pricing-table .ptable-footer {
        position: relative;
        width: 100%;
        text-align: center;
        overflow: hidden;
    }

    .pricing-table .ptable-status,
    .pricing-table .ptable-title,
    .pricing-table .ptable-price,
    .pricing-table .ptable-description,
    .pricing-table .ptable-action {
        position: relative;
        width: 100%;
        text-align: center;
    }

    .pricing-table .ptable-single {
        background: #f6f8fa;
    }

    .pricing-table .ptable-single:hover {
        box-shadow: 0 0 10px #999999;
    }

    .pricing-table .ptable-header {
        margin: 0 30px;
        padding: 30px 0 45px 0;
        width: auto;
        background: #0033cc;
    }

    .pricing-table .ptable-header::before,
    .pricing-table .ptable-header::after {
        content: "";
        position: absolute;
        bottom: 0;
        width: 0;
        height: 0;
        border-bottom: 100px solid #f6f8fa;
    }

    .pricing-table .ptable-header::before {
        right: 50%;
        border-right: 250px solid transparent;
    }

    .pricing-table .ptable-header::after {
        left: 50%;
        border-left: 250px solid transparent;
    }

    .pricing-table .ptable-item.featured-item .ptable-header {
        background: #FF6F61;
    }

    .pricing-table .ptable-status {
        margin-top: -30px;
    }

    .pricing-table .ptable-status span {
        position: relative;
        display: inline-block;
        width: 50px;
        height: 30px;
        padding: 5px 0;
        text-align: center;
        color: #FF6F61;
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 1px;
        background: #2A293E;
    }

    .pricing-table .ptable-status span::before,
    .pricing-table .ptable-status span::after {
        content: "";
        position: absolute;
        bottom: 0;
        width: 0;
        height: 0;
        border-bottom: 10px solid #FF6F61;
    }

    .pricing-table .ptable-status span::before {
        right: 50%;
        border-right: 25px solid transparent;
    }

    .pricing-table .ptable-status span::after {
        left: 50%;
        border-left: 25px solid transparent;
    }

    .pricing-table .ptable-title h2 {
        color: #ffffff;
        font-size: 24px;
        font-weight: 300;
        letter-spacing: 2px;
    }

    .pricing-table .ptable-price h2 {
        margin: 0;
        color: #ffffff;
        font-size: 45px;
        font-weight: 700;
        margin-left: 15px;
    }

    .pricing-table .ptable-price h2 small {
        position: absolute;
        font-size: 18px;
        font-weight: 300;
        margin-top: 16px;
        margin-left: -15px;
    }

    .pricing-table .ptable-price h2 span {
        margin-left: 3px;
        font-size: 16px;
        font-weight: 300;
    }

    .pricing-table .ptable-body {
        padding: 20px 0;
    }

    .pricing-table .ptable-description ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }

    .pricing-table .ptable-description ul li {
        color: #2A293E;
        font-size: 14px;
        font-weight: 300;
        letter-spacing: 1px;
        padding: 7px;
        border-bottom: 1px solid #dedede;
    }

    .pricing-table .ptable-description ul li:last-child {
        border: none;
    }

    .pricing-table .ptable-footer {
        padding-bottom: 30px;
    }

    .pricing-table .ptable-action a {
        display: inline-block;
        padding: 10px 20px;
        color: #FF6F61;
        font-size: 14px;
        font-weight: 500;
        letter-spacing: 2px;
        text-decoration: none;
        background: #2A293E;
    }

    .pricing-table .ptable-action a:hover {
        color: #2A293E;
        background: #FF6F61;
    }

    .pricing-table .ptable-item.featured-item .ptable-action a {
        color: #2A293E;
        background: #FF6F61;
    }

    .pricing-table .ptable-item.featured-item .ptable-action a:hover {
        color: #FF6F61;
        background: #2A293E;
    }

</style>


					<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '8eca1c004ded6135101a7f300c558ee86f8b1aaf';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    
