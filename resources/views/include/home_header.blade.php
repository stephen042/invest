<header>
    <div class="header-absolute">
        <div class="bg-header-wrapper bg-transparent">
            <div class="header-main">
                <div class="container">
                    <div class="header-main-wrapper">
                        <div class="navbar-header">
                            <button type="button" data-toggle="offcanvas" class="btn-hamburger visible-tablet"><span class="icon-bar"></span></button>
                            <a href="{{route('app.home')}}" class="header-logo"><img src="{{ asset('assets/img/background/stan.png') }}" height="100px" width="50px" alt="Main Logo" class="logo" /></a>
                        </div>
                        <nav class="navigation navbar-offcanvas pull-right">
                            <div class="nav-wrapper">
                                <ul class="nav-links nav navbar-nav">
                                    <li class=""><a href="{{route('app.home')}}" class="main-menu"><span class="text">HOME</span><span class=""><i class=""></i></span></a>
                                    </li>
                                    <li><a href="{{route('about')}}" class="main-menu"><span class="text">ABOUT</span></a></li>
                                    <li class="dropdown"><a href="javascript:void(0)" class="main-menu"><span class="text">SERVICES</span><span class="icons-dropdown"><i class="fa fa-angle-down"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="{{route('cryptocurrency')}}" class="link-page">CRYPTOCURRENCY</a></li>
                                            <!-- <li><a href="{{route('escrow')}}" class="link-page">ESCROW SERVICES</a></li> -->
                                            <li><a href="{{route('stocks')}}" class="link-page">STOCKS</a></li>
                                            <li><a href="{{route('realEstate')}}" class="link-page">REAL ESTATE</a></li>
                                            <li><a href="{{route('forex')}}" class="link-page">FOREX</a></li>
                                            <!-- <li><a href="{{route('nonfarmpayroll')}}" class="link-page">NON FARM PAYROLL</a></li> -->
                                            <!-- <li><a href="{{route('personal_loan')}}" class="link-page">LOANS</a></li> -->
                                        </ul>
                                    </li>
                                    <li class=""><a href="{{route('investment_plan')}}" class="main-menu"><span class="text">INVESTMENT PLANS</span><span class=""><i class=""></i></span></a>

                                    </li>
                                    <li class=""><a href="{{route('user.login')}}" class="main-menu"><span class="text">LOGIN</span><span class=""><i class=""></i></span></a>
                                    </li>
                                    <li class=""><a href="{{route('user.register')}}" class="main-menu"><span class="text">REGISTER</span><span class=""><i class=""></i></span></a>
                                    </li>
                                    <li><a href="{{route('contact')}}" class="main-menu"><span class="text">CONTACT US</span></a></li>
                                </ul><a href="javascript:void(0)" class="search-btn"><i class="fa fa-search"></i></a>
                                <div class="nav-search hide">
                                    <form>
                                        <input type="text" placeholder="Search" class="searchbox" />
                                        <button type="submit" class="search-btn fa fa-search"></button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>