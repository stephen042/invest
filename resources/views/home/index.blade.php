<!DOCTYPE html>
<html lang="en">

@include('include.home_css')

<head>
    <title>tancorp Finance | Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT CSS-->
    @include('include.home_header')
</head>

<body>
    <div class="body-wrapper-content">
        <div class="sidenav-overlay"></div>
        <!-- HEADER-->

        <!-- WRAPPER-->
        <div id="wrapper-content">
            <!-- PAGE WRAPPER-->
            <div id="page-wrapper">
                <!-- MAIN CONTENT-->
                <div class="main-content">
                    <!-- CONTENT-->
                    <div class="content">
                        <section class="page-banner-transparent homepage-01">
                            <div class="page-banner banner-01">
                                <div class="container">
                                    <div id="google_translate_element"
                                    style="position:fixed;margin-top:10px; left:20px; bottom: 20px"></div>
        
                                <script type="text/javascript">
                                    var duplicate_google_translate_counter = 0; //this stops google adding button multiple times
        
                                    function googleTranslateElementInit() {
                                        if (duplicate_google_translate_counter == 0) {
                                            new google.translate.TranslateElement({
                                                pageLanguage: 'en'
                                            }, 'google_translate_element');
                                        }
                                        duplicate_google_translate_counter++;
                                    }
                                </script>
                                <script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
                                </script>
                                    <div class="content-wrapper">
                                        {{-- <h4 class="subtitle">Best Invest Platform</h4> --}}
                                        <h1 class="title">Invest With A Firm You Can Trust</h1>
                                        <p class="text">
                                            24/7 monitoring of your investment is assured</p>
                                        <a href="{{ route('user.register') }}" class="button btn-main">GET STARTED</a>
                                        <a href="{{ route('investment_plan') }}" role="button"
                                            class="button btn-light">OUR PLANS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="page-banner banner-02">
                                <div class="container">
                                    <div class="content-wrapper">
                                        <h4 class="subtitle">More Convenient Than Others</h4>
                                        <h1 class="title">TOP NOTCH INVESTMENT STRATEGY</h1>
                                        <p class="text">More Convenient Than Others
                                            Invest with us today. Let your money do the hardwork.</p>
                                        <a href="{{ route('user.register') }}" class="button btn-main">GET STARTED</a>
                                        <a href="{{ route('investment_plan') }}" role="button"
                                            class="button btn-light">OUR PLANS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="page-banner banner-03">
                                <div class="container">
                                    <div class="content-wrapper">
                                        <h4 class="subtitle">We Serve You Better</h4>
                                        <h1 class="title">TOP NOTCH INVESTMENT STRATEGY</h1>
                                        <p class="text">
                                            We hire the best traders to serve you better</p>
                                        <a href="{{ route('user.register') }}" class="button btn-main">GET STARTED</a>
                                        <a href="{{ route('nonfarmpayroll') }}" role="button"
                                            class="button btn-light">OUR PLANS</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="news padding-top padding-bottom">
                            <div class="container">
                                <div class="title-wrapper title-wrapper-main">
                                    {{-- <h1 class="subtitle">INTEREST</h1>  --}}
                                    <h2 class="title">YOU ARE OUR BEST INTEREST</h2>
                                </div>
                                <div class="row">
                                    <div class="article">
                                        <div class="col-md-6">
                                            <video width="100%" height="325" controls>
                                                <source src="{{ asset('assets/video/vid2.mp4') }}" type="video/mp4">
                                                No video support.
                                            </video>
                                        </div>
                                        <div class="col-md-6"><a href="blog-detail.html"
                                                class="article-title">You are our best interest</a>

                                            <div class="preview">
                                                <p class="paragraph">At tancorp  Finance we make our customers interest our best interest
                                                </p>
                                                <p class="paragraph">At tancorp  Finance, our actions and results speaks loud, we ensure that your interest and 
                                                    financial goals are served
                                                </p>
                                            </div><a href="{{route('about')}}" class="readmore">READ MORE<i
                                                    class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>


                        <!-- <section class="finance padding-top padding-bottom">
                            <div class="container">
                                <div class="title-wrapper title-wrapper-main">
                                    {{-- <h1 class="subtitle">INVESTMENT</h1> --}}
                                    <h2 class="title">WE ARE PROFESSIONALS</h2>
                                </div>
                                <div class="row">
                                    <div data-wow-delay="0.2s" class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                        <div class="finance-item">
                                            <a href="charity" class="wp-img img-wrapper"><img
                                                    src="assets/img/homepage/finance-1.jpg" alt=""
                                                    class="img-responsive"></a><a href="{{ route('charity') }}"
                                                class="title">CHARITY</a>
                                            <p class="text">We do a lot of charitable deeds in our
                                                community to help the less privileged</p><a
                                                href="{{ route('charity') }}" class="more">Learn more<i
                                                    class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div data-wow-delay="0.6s" class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                        <div class="finance-item">
                                            <a href="{{ route('children_account') }}" class="wp-img img-wrapper"><img
                                                    src="assets/img/homepage/finance-2.jpg" alt=""
                                                    class="img-responsive"></a><a
                                                href="{{ route('children_account') }}" class="title">CHILDREN
                                                ACCOUNT</a>
                                            <p class="text">You can invest funds for your children in our
                                                childrens account package which will guarantee a better future for your kids</p><a
                                                href="{{ route('children_account') }}" class="more">Learn
                                                more<i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div data-wow-delay="1s" class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                        <div class="finance-item">
                                            <a href="{{ route('personal_loan') }}" class="wp-img img-wrapper"><img
                                                    src="assets/img/homepage/finance-3.jpg" alt=""
                                                    class="img-responsive"></a><a href="{{ route('personal_loan') }}"
                                                class="title">Personal Loans</a>
                                            <p class="text">Our company offers personal loans which can be
                                                used for a variety of things</p><a
                                                href="{{ route('personal_loan') }}" class="more">Learn
                                                more<i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                    <div data-wow-delay="1.4s" class="col-md-3 col-sm-6 col-xs-6 wow fadeInUp">
                                        <div class="finance-item">
                                            <a href="{{ route('retirement_funds') }}" class="wp-img img-wrapper"><img
                                                    src="assets/img/blog/blog-2.jpg" alt=""
                                                    class="img-responsive"></a><a
                                                href="{{ route('retirement_funds') }}"
                                                class="title">RETIREMENT FUND</a>
                                            <p class="text">We help you grow your retirement funds if you
                                                invest with us</p><a href="{{ route('retirement_funds') }}"
                                                class="more">Learn more<i
                                                    class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section> -->


                        <section class="news padding-top padding-bottom">
                            <div class="container">
                                <div class="title-wrapper title-wrapper-main">
                                    <h1 class="subtitle">ABOUTUS</h1>
                                    <h2 class="title">ABOUT US</h2>
                                </div>
                                <div class="row">
                                    <div class="article">
                                        <div class="col-md-6">
                                            <a href="blog-detail.html" class="wp-img"><img
                                                    src="assets/img/homepage/news-1.jpg" alt=""
                                                    class="img-responsive"></a>
                                        </div>
                                        <div class="col-md-6"><a href="blog-detail.html"
                                                class="article-title">About us</a>

                                            <div class="preview">
                                                <p class="paragraph">tancorp Finance was established in 2013
                                                    and it initially began trading stocks, shares and bonds, it got
                                                    involved in forex in 2015 and was among the pioneer traders of
                                                    Cryptocurrencies in the advent of Bitcoin in 2014. tancorp
                                                    Finance is currently managed by a senior team which has extensive
                                                    experience in the development and implementation of systematic
                                                    investment strategies. The company emphasises strong corporate
                                                    governance and the provision of first class investor service to a
                                                    client base which includes many of the world’s leading institutional
                                                    investors.

                                                </p>
                                                <p class="paragraph">At tancorp  Finance, we deliver strategic
                                                    advice and solutions, including capital raising, risk management,
                                                    and trade finance services to corporations, institutions and
                                                    individuals, We also offer-long term and short-term investment
                                                    opportunities.</p>
                                            </div><a href="{{route('about')}}" class="readmore">READ MORE<i
                                                    class="fa fa-long-arrow-right"></i></a>
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
                                        <div data-wow-delay="0.2s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-piggy-bank"></i><a
                                                     class="title" style="font-size:25; background-color:#668cff; font-weight:bold">Crypto Currencies</a>
                                                <p class="text">We help you manage your cryptocurrency
                                                    portfolio and help you grow them exponentially </p>
                                                    <a href="{{ route('cryptocurrency') }}" class="more" style="color:#668cff;">Learn more</a>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.5s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-tasks"></i><a
                                                     class="title" style="font-size:25; background-color:#668cff; font-weight:bold">Forex</a>
                                                <p class="text">Our team of experience trader, trades you
                                                    funds all the time thereby growing you funds daily</p>
                                                    <a href="{{ route('forex') }}" class="more" style="color:#668cff;">Learn more</a>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.8s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-lifebuoy"></i><a
                                                     class="title" style="font-size:25; background-color:#668cff; font-weight:bold">Stocks</a>
                                                <p class="text">Our team oF experts helps in the investments
                                                    of highly-rated company stock, including corporate and sovereign
                                                    debt, equities, currencies and various derivatives and structured
                                                    products.</p>
                                                    <a href="{{ route('stocks') }}" class="more" style="color:#668cff;">Learn more</a>
                                            </div>
                                        </div>
                                        <!-- <div data-wow-delay="1.1s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-diagram"></i><a
                                                     class="title" style="font-size:25; background-color:#668cff; font-weight:bold">Non-farm Payroll
                                                    (NFP)</a>
                                                <p class="text">The non-farm payroll (NFP) figure is a key
                                                    economic indicator. It represents the number of jobs added,
                                                    excluding farm employees, government employees, private household
                                                    employees and employees of nonprofit organizations.

                                                </p>
                                                <a href="{{ route('nonfarmpayroll') }}" class="more" style="color:#668cff;">Learn more</a>
                                            </div>
                                        </div> -->
                                        <div data-wow-delay="1.4s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-calculator"></i><a
                                                     class="title" style="font-size:25; background-color:#668cff; font-weight:bold">Real Estate</a>
                                                <p class="text">We also run real estate fund investments
                                                    which has proven to give the highest returns in recent times</p>
                                                    <a href="{{ route('realEstate') }}" class="more" style="color:#668cff;">Learn more</a>
                                            </div>
                                        </div>
                                        <!-- <div data-wow-delay="1.7s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-dollar-coins"></i><a
                                                     class="title" style="font-size:25; background-color:#668cff; font-weight:bold">Escrow Services</a>
                                                <p class="text">We offer escrow services to our customers who
                                                    needs to make exchanges between two parties </p>
                                                    <a href="{{ route('escrow') }}" class="more" style="color:#668cff;">Learn more</a>
                                            </div>
                                        </div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        


                        <section class="stats padding-top padding-bottom">
                            <h1 class="title">OVERVIEW</h1>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-3 col-sm-3 col-xs-3 stat">
                                        <div data-value="2500" class="count">2500</div>
                                        <div class="stat-label">Individual Investors</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 stat">
                                        <div data-value="2280" class="count">2280</div>
                                        <div class="stat-label">Brokerage Accounts</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 stat">
                                        <div data-value="4764" class="count">4764</div>
                                        <div class="stat-label">Commissionable Trades</div>
                                    </div>
                                    <div class="col-md-3 col-sm-3 col-xs-3 stat">
                                        <div data-value="5100" class="count">5100</div>
                                        <div class="stat-label">Customer Assets</div>
                                    </div>
                                </div>
                            </div>
                        </section>

                        <div class="service service-banner padding-top padding-bottom">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-9 pull-right">
                                        <div data-wow-duration="1s" class="service-intro" style="margin-bottom:30px">
                                            <i class="icon flaticon-piggy-bank"></i><a 
                                                class="title" style="font-size:30px; font-weight:bold">TRADING
                                                STRATEGIES </a>
                                            <p class="text">This strategies affects only the CRYPTO
                                                CURRENCIES
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
                                                     class="title" style="background-color:#668cff;">OPEN BALANCE
                                                    STRATEGY</a>
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
                                                     class="title" style="background-color:#668cff;">LOCKED BALANCE
                                                    STRATEGY</a>
                                                <p class="text">The term “ locked balance “ as used here
                                                    means
                                                    that the investor do not stand eligible to withdraw weekly from
                                                    available balance but can only withdraw Annually from your total
                                                    available balance on the date of expiry .
                                                    The minimum investment for this plan is $5000
                                                    this pays 5% per week of your initial investment for a total of 52
                                                    weeks (12 months ) starting from the day of investment.</p>
                                            </div>
                                        </div>
                                        <div data-wow-delay="0.8s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-lifebuoy"></i><a
                                                     class="title" style="background-color:#668cff;">COMPOUNDING INTEREST
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
                                        <div data-wow-delay="0.8s" data-wow-duration="1s"
                                            class="col-md-4 col-sm-4 col-xs-6 wow fadeInUp">
                                            <div class="service-intro"><i class="icon flaticon-lifebuoy"></i><a
                                                     class="title">
                                                </a>
                                                <p class="text">
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <section class="page-banner about">
                                <div class="container">
                                    <div class="page-title-wrapper">
                                        <div class="page-title-content">
                                            <h1 class="title">INVESTMENT PLANS</h1>
                                            <ol class="breadcrumb">
                                                <li><a href="{{ route('app.home') }}"
                                                        class="link home">Home</a>
                                                </li>
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
                                                            <h2>Digital Plan 1</h2>
                                                        </div>
                                                        <div class="ptable-price">
                                                            <span style="color: white;">max</span>
                                                            <h2><small>$</small>500<span></span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="ptable-body">
                                                        <div class="ptable-description">
                                                            <ul>
                                                                <li>Minimum investment $50</li>
                                                                <li>15.0% ROI </li>
                                                                <li>TRADE DURATION: 24hrs</li>
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
                                                            <h2>Digital Plan 2</h2>
                                                        </div>
                                                        <div class="ptable-price">
                                                            <span style="color: white;">max</span>
                                                            <h2><small>$</small>2,500<span></span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="ptable-body">
                                                        <div class="ptable-description">
                                                            <ul>
                                                                <li>Minimum investment $501</li>
                                                                <li>25.0% ROI </li>
                                                                <li>TRADE DURATION: 24hrs</li>
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
                                                            <h2>Digital Plan 3</h2>
                                                        </div>
                                                        <div class="ptable-price">
                                                            <h4 style="color: white;">max</h4>
                                                            <h2><small>$</small>5,000</h2>
                                                        </div>
                                                    </div>
                                                    <div class="ptable-body">
                                                        <div class="ptable-description">
                                                            <ul>
                                                                <li>Minimum investment $ 2,501</li>
                                                                <li>35.0% ROI </li>
                                                                <li>TRADE DURATION: 48hrs</li>
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
                                                            <h2>cloud minning plan 1</h2>
                                                        </div>
                                                        <div class="ptable-price">
                                                            <h4 style="color: white;">max</h4>
                                                            <h2><small>$</small>10,000<span></span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="ptable-body">
                                                        <div class="ptable-description">
                                                            <ul>
                                                                <li>Minimum investment $5001</li>
                                                                <li>50.0 % ROI</li>
                                                                <li>TRADE DURATION: 4 days</li>
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
                                                            <h2>cloud minning plan 2</h2>
                                                        </div>
                                                        <div class="ptable-price">
                                                            <h4 style="color: white;">max</h4>
                                                            <h2><small>$</small>unlimited<span></span></h2>
                                                        </div>
                                                    </div>
                                                    <div class="ptable-body">
                                                        <div class="ptable-description">
                                                            <ul>
                                                                <li>Minimum investment $10,001</li>
                                                                <li>100% ROI </li>
                                                                <li>TRADE DURATION: 7 days</li>
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


                            <!-- <section class="testimonial padding-top padding-bottom">
                                <div class="container">
                                    <div class="title-wrapper title-wrapper-main">
                                        <h1 class="subtitle">SAYINGS</h1>
                                        <h2 class="title">TESTIMONIAL</h2>
                                    </div>
                                    <div class="testimonial-slider">
                                        <div class="single-testimonial">
                                            <div class="content">
                                                <div class="main-testimonial"><span
                                                        class="w3-icon">&#10077;</span>
                                                    <blockquote class="quote">
                                                        <p>Since i joined tancorpfinance i had seen a massive returns on the investments i have made and it makes me feel good and i also encourage you to invest</p>
                                                    </blockquote>
                                                </div><span class="name">Howard K. Stern</span>
                                                {{-- <span
                                                    class="company">WallStreet Company</span> --}}
                                            </div>
                                        </div>
                                        <div class="single-testimonial">
                                            <div class="content">
                                                <div class="main-testimonial"><span
                                                        class="w3-icon">&#10077;</span>
                                                    <blockquote class="quote">
                                                        <p>
                                                            real estate investment was the game changer for me i made thousands of dollars on a single investment
                                                        </p>
                                                    </blockquote>
                                                </div><span class="name">David Doe</span>
                                                {{-- <span
                                                    class="company">Apollo Company</span> --}}
                                            </div>
                                        </div>
                                        <div class="single-testimonial">
                                            <div class="content">
                                                <div class="main-testimonial"><span
                                                        class="w3-icon">&#10077;</span>
                                                    <blockquote class="quote">
                                                        <p>Never think of a bigger source of passive other than tancorp  Finance, this company will help you reach your financial goals</p>
                                                    </blockquote>
                                                </div><span class="name">Susan Solomon</span><span
                                                    class="company">Aurora Company</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> -->

                            <section class="news padding-top padding-bottom">
                                <div class="container">
                                    <div class="title-wrapper title-wrapper-main">
                                        {{-- <h1 class="subtitle">INTEREST</h1>  --}}
                                        <h2 class="title">tancorpfinance IS DEDICATED TO GROWING YOUR FINANCE</h2>
                                    </div>
                                    <div class="row">
                                        <div class="article">
                                            
                                            <div class="col-md-6"><a href="blog-detail.html"
                                                    class="article-title">are dedicated to serve you</a>
    
                                                <div class="preview">
                                                    <p class="paragraph">At tancorp Finance we employ every tool we have to maximize profit for our customers
                                                    </p>
                                                    <p class="paragraph">At tancorp  Finance, investment and
                                                        crypto trading is unmatched. if you are seeking financial freedom this is the best platform for
                                                        you
                                                    </p>
                                                </div><a href="{{route('about')}}" class="readmore">READ MORE<i
                                                        class="fa fa-long-arrow-right"></i></a>
                                            </div>
                                            <div class="col-md-6">
                                                <video width="100%" height="325" controls>
                                                    <source src="{{ asset('assets/video/vid1.mp4') }}" type="video/mp4">
                                                    No video support.
                                                </video>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <section class="achievement-dark achievement-dark-banner">
                                <div class="container">
                                    <div class="row banner">
                                        <div class="col-sm-4 banner-left padding-top padding-bottom">
                                            <div class="banner-main-left">
                                                <h2 class="title">You deserve the best</h2>
                                                <p class="text">We'll help you rollover your old retirement
                                                    plan
                                                    so you can enjoy our wide variety of investment options and roll
                                                    your
                                                    old one-on-one guidance retirement plan.</p><a
                                                    href="{{route('about')}}" class="button btn-main">READ MORE</a>
                                            </div>
                                        </div>
                                        <div class="col-sm-1 dummy-cell">&nbsp;</div>
                                        <div class="col-sm-7 banner-right padding-top padding-bottom">
                                            <div class="banner-main-right">
                                                <div class="item-logo">
                                                    <a href="#" class="wrapper-img"><img
                                                            src="assets/img/logo/comp1.jpg" alt="achievement logo"
                                                            class="logo-achievement"></a>
                                                </div>
                                                <div class="item-logo">
                                                    <a href="#" class="wrapper-img"><img
                                                            src="assets/img/logo/comp2.jpg" alt="achievement logo"
                                                            class="logo-achievement"></a>
                                                </div>
                                                <div class="item-logo" style="margin-left: 55">
                                                    <a href="#" class="wrapper-img">
                                                        {{-- <img src="assets/img/logo/comp3.jpg"
                                                        alt="achievement logo" class="logo-achievement"> --}}
                                                    </a>
                                                </div>
                                                <div class="item-logo">
                                                    <a href="#" class="wrapper-img"><img
                                                            src="assets/img/logo/comp4.jpg" alt="achievement logo"
                                                            class="logo-achievement"></a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>


                            <div id="back-top"><a href="#top" class="link"><i
                                        class="fa fa-angle-double-up"></i></a>
                            </div>
                        </div>
                        <!-- FOOTER-->
                        @include('include.home_footer')
                        <!-- LIBRARY JS-->

</body>
@include('include.home_script')

<!-- Mirrored from swlabs.co/goahead/html/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 02:45:23 GMT -->

</html>
