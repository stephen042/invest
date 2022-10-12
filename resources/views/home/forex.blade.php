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
                                        <h1 class="title">FOREX</h1>
                                        <ol class="breadcrumb">
                                            <li><a href="{{ route('app.home') }}" class="link home">Home</a></li>
                                            <li><a {{-- href="{{route('about')}}" --}} class="link active">FOREX</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="about-special padding-top padding-bottom">
                            <div class="container">
                                <h2 class="page-title">FOREX</h2>
                                <div class="wrapper-timeline">
                                    <div class="content-timeline">
                                        <div class="timeline-block">
                                            {{-- <div class="timeline-number"><span>2003</span></div> --}}
                                            <div class="timeline-title">What is a Forex Investment in  tancorp Finance?</div>
                                            <p class="timeline-text">At  tancorp Finance, we provide a financial business platform which provides trading services in your broker’s accounts. Your account will be operated by a professional group of asset managers paying an agreed monthly fee. That fee will be automatically deducted of your broker’s account if the account gets profits. Let us manage your account and get profits at last in your Forex investments. Feel the peace of mind that gives having a managed account by  tancorp Finance. We’ll be getting profits for you meanwhile you are walking or sleeping.</p>

                                            <div class="timeline-title">Who needs an online forex investment?</div>
                                            <p class="timeline-text">If you don’t have time to trade your funds or you think that you don’t have enough knowledge and experience, then it’s recommended that you get your funds managed by a forex investment platform. You can be an individual investor or a hedge fund company looking to diversify its savings in the Forex Market without having to be involved in direct managing of your funds.</p>

                                            <div class="timeline-title">Why you should let  tancorp Finance manage your forext investment?</div>

                                            <p class="timeline-text">
                                                The main reason to let  tancorp Finance manage your Forex investment is to have safe and long term steady profitable performance.</p>
                                            <p class="timeline-text">1. Forex Market is a 24/7 open market and is a worldwide market, so trading is continuous as long as there is any open market in any world’s country.</p>
                                            <p class="timeline-text">2. Forex market has high liquidity. With this, we can move large amounts of money into and out of foreign currency with a minimal price movement. Transaction Costs in the Forex Market are very low.The cost of each transaction is built into the price in Forex. It is technically called ‘spread’. The spread is the calculation of the difference between the buying and selling price.</p>
                                            <p class="timeline-text">3. Leverage can be used in Forex Market. Leverage is the capability to trade more money on the market than what is in your account. Brokers in Forex allow traders to trade the market using different leverages. For example, if you would trade at 100:1 leverage, you could trade $100 on the market for every $1 that was in your account. It means that you could control a trade of $100,000 using only $1,000 of capital.</p>
                                            <p class="timeline-text">4. The potential profits should be weighted about the risk you assume to achieve them. 24/5 open market can also mean that a movement against your profits could happen while you are not watching the screen. In most markets great liquidity could be available when you don’t need it and limited when you require it. Leverage gives you a good feeling when a trade is working in your favor, but it usually makes things worse if you don’t have a professional plan to get out of a losing position.</p>

                                            <p class="timeline-text">As you can see the advantages of investing in Forex can turn against you easily if you are not a professional trader. That’s why is very important to avoid risking your funds trying to control such a complex market and better choose a professional Forex investment company in order to control, manage and make your funds grow. Keep your funds safe from the beginning and let the professional asset managers do what they know and love to do. Ensure annual steady good Forex profits every year, while you enjoy your life doing your regular work, being with friends, traveling, etc. Let Asset managers manage your Forex Investments and have the complete peace of mind that means working with a professional online investment company like  tancorp Finance.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                       
                        <div class="sign-up">
                            <div class="container">
                                <div class="subscribe-email-wrapper">
                                    <div class="subscribe-email-left">
                                        <p class="subscribe-email-title">Sign up for <span>  tancorp Finance </span> viewpoints!
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
