<!DOCTYPE html>
<html lang="en">

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
                                        <h1 class="title">INVESTMENT PLANS</h1>
                                        <ol class="breadcrumb">
                                            <li><a href="{{ route('app.home') }}" class="link home">Home</a></li>
                                            <li><a href="{{ route('investment_plan') }}"
                                                    class="link active">INVESTMENT PLANS</a>
                                            </li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-special padding-top padding-bottom">
                            <div class="container">
                                <h2 class="page-title">INVESTMENT PLANS</h2>
                                <div class="wrapper-timeline">
                                    <h1 class="demo-title">
                                        INVESTMENT PLANS<br> <br> <br>
                                    </h1>
                                    <div class="pricing-table">
                                        <div class="ptable-item">
                                            <div class="ptable-single">
                                                <div class="ptable-header">
                                                    <div class="ptable-title">
                                                        <h2>Cryptocurrencies</h2>
                                                    </div>
                                                    <div class="ptable-price">
                                                        <h2><small>$</small>1000<span></span></h2>
                                                    </div>
                                                </div>
                                                <div class="ptable-body">
                                                    <div class="ptable-description">
                                                        <ul>
                                                            <li>Minimum investment $1,000</li>
                                                            <li>5.0% ROI </li>
                                                            <li>TRADE DURATION: 52 WEEKS</li>
                                                            <li>5% REFERAL BONUS</li>
                                                            <li>INSTANT WITHDRAWAL OF INTEREST</li>
                                                            <li>24/7 OPERATIONAL TIME</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ptable-footer">
                                                    <div class="ptable-action">
                                                        <a href="{{ route('user.register') }}">GET STARTED</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ptable-item">
                                            <div class="ptable-single">
                                                <div class="ptable-header">
                                                    <div class="ptable-title">
                                                        <h2>Forex</h2>
                                                    </div>
                                                    <div class="ptable-price">
                                                        <h2><small>$</small>3000<span></span></h2>
                                                    </div>
                                                </div>
                                                <div class="ptable-body">
                                                    <div class="ptable-description">
                                                        <ul>
                                                            <li>Minimum investment $3,000</li>
                                                            <li>6.0% ROI </li>
                                                            <li>TRADE DURATION: 52 WEEKS</li>
                                                            <li>5% REFERAL BONUS</li>
                                                            <li>INSTANT WITHDRAWAL OF INTEREST</li>
                                                            <li>24/7 OPERATIONAL TIME</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ptable-footer">
                                                    <div class="ptable-action">
                                                        <a href="{{ route('user.register') }}">GET STARTED</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ptable-item">
                                            <div class="ptable-single">
                                                <div class="ptable-header">
                                                    <div class="ptable-title">
                                                        <h2>STOCKS</h2>
                                                    </div>
                                                    <div class="ptable-price">
                                                        <h2><small>$</small>5,000<span></span></h2>
                                                    </div>
                                                </div>
                                                <div class="ptable-body">
                                                    <div class="ptable-description">
                                                        <ul>
                                                            <li>Minimum investment $5,000</li>
                                                            <li>7.0% ROI </li>
                                                            <li>TRADE DURATION: 52 WEEKS</li>
                                                            <li>5% REFERAL BONUS</li>
                                                            <li>INSTANT WITHDRAWAL INTEREST</li>
                                                            <li>24/7 OPERATIONAL TIME</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ptable-footer">
                                                    <div class="ptable-action">
                                                        <a href="{{ route('user.register') }}">GET STARTED</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ptable-item">
                                            <div class="ptable-single">
                                                <div class="ptable-header">
                                                    <div class="ptable-title">
                                                        <h2>NFP</h2>
                                                    </div>
                                                    <div class="ptable-price">
                                                        <h2><small>$</small>30,000<span></span></h2>
                                                    </div>
                                                </div>
                                                <div class="ptable-body">
                                                    <div class="ptable-description">
                                                        <ul>
                                                            <li>Minimum investment $30,000</li>
                                                            <li>100% (30 DAYS)</li>
                                                            <li>TRADE DURATION: 1 MONTH</li>
                                                            <li>5% REFERAL BONUS</li>
                                                            <li>INSTANT WITHDRAWAL OF INTEREST</li>
                                                            <li>24/7 OPERATIONAL TIME</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ptable-footer">
                                                    <div class="ptable-action">
                                                        <a href="{{ route('user.register') }}">GET STARTED</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="ptable-item">
                                            <div class="ptable-single">
                                                <div class="ptable-header">
                                                    <div class="ptable-title">
                                                        <h2>Real Estate</h2>
                                                    </div>
                                                    <div class="ptable-price">
                                                        <h2><small>$</small>50,000<span></span></h2>
                                                    </div>
                                                </div>
                                                <div class="ptable-body">
                                                    <div class="ptable-description">
                                                        <ul>
                                                            <li>Minimum investment $50,000</li>
                                                            <li>250% ROI </li>
                                                            <li>TRADE DURATION: 12 - 36 MONTHS</li>
                                                            <li>5% REFERAL BONUS</li>
                                                            <li>INSTANT WITHDRAWAL OF INTEREST</li>
                                                            <li>24/7 OPERATIONAL TIME</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="ptable-footer">
                                                    <div class="ptable-action">
                                                        <a href="{{ route('user.register') }}">GET STARTED</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>






                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="service service-banner padding-top padding-bottom"><img
                                src="assets/img/homepage/piggy-man.png" alt="piggy man"
                                class="piggy-man img-responsive">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 pull-right">
                                        <div data-wow-duration="1s" class="service-intro" style="margin-bottom:30px"><i
                                                class="icon flaticon-piggy-bank"></i><a href="service.html"
                                                class="title" style="font-size:30px; font-weight:bold">TRADING
                                                STRATEGIES </a>
                                            <p class="text">This strategies affects only the CRYPTO CURRENCIES
                                                ,FOREX and STOCK investment plans .. We trade on Stocks, Forex,
                                                cryptocurrency and other commodities using confidential brokerage
                                                options and the regulatory bodies help in minimizing and regulating the
                                                losses.We create awesome and effective trading strategies to help our
                                                clients improve their portfolio profit in the financial markets.</p>
                                            </>
                                        </div>
                                        <div data-wow-delay="0.2s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-tasks"></i><a
                                                    href="service.html" class="title">OPEN BALANCE STRATEGY</a>
                                                <p class="text">The term open balance as used here means that
                                                    the
                                                    investor stands eligible to withdraw weekly from available balance.
                                                    The
                                                    minimum investment for this plan is $1000
                                                    This pays 5% per week of your initial investment for a total of 52
                                                    weeks
                                                    (12 months ) starting from the day of investment.</p>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.5s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-tasks"></i><a
                                                    href="service.html" class="title">LOCKED BALANCE
                                                    STRATEGY</a>
                                                <p class="text">The term “ locked balance “ as used here means
                                                    that the investor do not stand eligible to withdraw weekly from
                                                    available balance but can only withdraw Annually from your total
                                                    available balance on the date of expiry .
                                                    The minimum investment for this plan is $5000
                                                    this pays 10% per week of your initial investment for a total of 52
                                                    weeks (12 months ) starting from the day of investment.</p>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.8s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-lifebuoy"></i><a
                                                    href="service.html" class="title">COMPOUNDING INTEREST
                                                    STRATEGY
                                                </a>
                                                <p class="text">The term compounding interest shows that your
                                                    profits will be compounded until after 5 weeks . Then the clients
                                                    proceed to earn 15% of investment for the remaining 48 weeks . The
                                                    minimum investment for this Strategy is $15,000
                                                    Here the client earns 15% of investment weekly .
                                                    And is eligible to withdraw only 3 times until the end of the
                                                    contract
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span>tancorp  Finance </span>
                                            viewpoints!
                                        </p>
                                        <div class="description">Get a weekly email of our pros' current thinking
                                            about financial markets, investing and personal finance.</div>
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
