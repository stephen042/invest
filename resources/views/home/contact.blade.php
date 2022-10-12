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
                        <section class="page-banner page-contact">
                            <div class="container">
                                <div class="page-title-wrapper">
                                    <div class="page-title-content">
                                        <h1 class="title">contact</h1>
                                        <ol class="breadcrumb">
                                            <li><a href="{{ route('app.home') }}" class="link home">Home</a></li>
                                            <li><a href="#" class="link active">contact</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="section-contact padding-top padding-bottom">
                            <div class="container">
                                <h2 class="page-title">we are here for you</h2>
                                <div class="row padding-bottom">
                                    <div class="col-md-4 col-xs-6">
                                        <div class="title-box-contact">support</div>
                                        <div class="box-contact">
                                            <div class="wrapper"><i class="icons fa fa-comments-o"></i>
                                                <div class="description">
                                                    <div class="description-items"><i class="fa fa-map-marker"></i>
                                                        <p class="text">Head office : 1100 southwest 6th avenue Portland Oregon.  97204 United States </p>
                                                    </div>
                                                    <div class="description-items"><i class="fa fa-phone"></i>
                                                        <p class="text">+1 (402) 882 2262</p>
                                                    </div>
                                                    <div class="description-items"><i class="fa fa-envelope-o"></i>
                                                        <p class="text">support@tancorpfinance.com</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6">
                                        <div class="title-box-contact">visit us</div>
                                        <div class="box-contact">
                                            <div class="wrapper"><i class="icons fa fa-building-o"></i>
                                                <div class="description">
                                                    <div class="description-items">
                                                        <p class="text">Schedule time to visit our Head Ofice or our branchs in around the world. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-6 style-2">
                                        <div class="title-box-contact">appointment</div>
                                        <div class="box-contact">
                                            <div class="wrapper"><i class="icons fa fa-wpforms"></i>
                                                <div class="description">
                                                    <div class="description-items">
                                                        <p class="text">Book appointment with our advisor via email to get support within 24 hours.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="page-title">get in touch to day</h2>
                                <form id="contact-form" class="contact-form">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <input type="text" placeholder="Your Name" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="email" placeholder="Your Email" class="form-control">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" placeholder="Your Phone" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea placeholder="Your Message" class="form-control form-textarea"></textarea>
                                        </div>
                                    </div><a href="#" class="button btn-main">Submit Message </a></form>
                            </div>
                        </section>
                        
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


<!-- Mirrored from swlabs.co/goahead/html/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Jan 2022 02:58:02 GMT -->
</html>
