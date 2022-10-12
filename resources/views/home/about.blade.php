<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from swlabs.co/goahead/html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 02:51:02 GMT -->

<head>
    @include('include.home_css')
</head>

<body>
    <div class="body-wrapper-content">
        <div class="sidenav-overlay"></div>
        <!-- HEADER-->
        @include('include.home_header')
        <!-- WRAPPER-->
        <div id="wrapper-content">
            <!-- PAGE WRAPPER-->
            <div id="page-wrapper">
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <!-- CONTENT-->
                    <div class="content">
                        <section class="page-banner about">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <h1 class="title">about us</h1>
                                        <ol class="breadcrumb">
                                            <li><a href="{{route('app.home')}}"  class="link home">Home</a></li>
                                            <li><a {{-- href="{{route('about')}}" --}} class="link active">About us</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-special padding-top padding-bottom">
                            <div class="container">
                                <h2 class="page-title">Special History moment</h2>
                                <div class="wrapper-timeline">
                                    <div class="content-timeline">
                                        <div class="timeline-block">
                                            <div class="timeline-number"><span>2013</span></div>
                                            <div class="timeline-title"> tancorp Finance were born</div>
                                            <p class="timeline-text"> tancorp Finance was established in 2013 and it
                                                initially began trading stocks, shares and bonds, it got involved in
                                                forex in 2015 and was among the pioneer traders of Cryptocurrencies in
                                                the advent of Bitcoin in 2014.  tancorp Finance is currently managed
                                                by a senior team which has extensive experience in the development and
                                                implementation of systematic investment strategies. The company
                                                emphasises strong corporate governance and the provision of first class
                                                investor service to a client base which includes many of the world’s
                                                leading institutional investors.

                                                At  tancorp Finance, we deliver strategic advice and solutions,
                                                including capital raising, risk management, and trade tancorp finance services
                                                to corporations, institutions and individuals, We also offer-long term
                                                and short-term investment opportunities.</p>
                                            {{-- <div class="timeline-slider">
                                                <div class="item-slider">
                                                    <a href="#"><img src="assets/img/about/about-1.jpg" alt=""
                                                            class="img-responsive"></a>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                       
                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span>  tancorp Finance </span>
                                            viewpoints!
                                        </p>
                                        <div class="description">Get a weekly email of our pros' current thinking
                                            about financial markets, investing and personal tancorp finance.</div>
                                    </div>
                                    <div class="subscribe-email-right">
                                        <form>
                                            <div class="input-group form-subscribe-email">
                                                <input type="text" placeholder="Email" class="form-control"><span
                                                    class="input-group-btn"><button type="submit"
                                                        class="btn-view">Get viewpoint</button></span>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="back-top"><a href="#top" class="link"><i class="fa fa-angle-double-up"></i></a></div>
        </div>
        <!-- FOOTER-->
        @include('include.home_footer')
    </div>
    <!-- LIBRARY JS-->
    @include('include.home_script')
</body>


<!-- Mirrored from swlabs.co/goahead/html/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 02:51:25 GMT -->

</html>
