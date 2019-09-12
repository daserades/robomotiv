<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="author" content="https://www.themetechmount.com/" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    {!! SEOMeta::generate() !!}

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}"/>

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.css')}}"/>

    <!-- owl-carousel -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.css')}}">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/font-awesome.css')}}"/>

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/themify-icons.css')}}"/>

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.css')}}"/>


    <!-- REVOLUTION LAYERS STYLES -->

    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/layers.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('revolution/css/settings.css')}}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/prettyPhoto.css')}}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/shortcodes.css')}}"/>

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/main.css')}}"/>

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive.css')}}"/>

</head>
<body>
<!--page start-->
<div class="page">
    <!-- preloader start -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- preloader end -->

    <!--header start-->
    <header id="masthead" class="header ttm-header-style-classic">
        <!-- ttm-topbar-wrapper -->
        <div class="ttm-topbar-wrapper ttm-bgcolor-darkgrey ttm-textcolor-white clearfix">
            <div class="container">
                <div class="ttm-topbar-content">
                    <ul class="top-contact ttm-highlight-left text-left">
                       <li><i class="fa fa-phone"></i><strong>Müşteri Hizmetleri: </strong><span class="tel-no">{{setting('iletisim.phone')}}</span></li>
                    </ul>
                    <div class="topbar-right text-right">
                        <ul class="top-contact">
                            <li><i class="fa fa-envelope-o"></i><strong>E-Posta: </strong><a href="mailto:{{setting('iletisim.email')}}">{{setting('iletisim.email')}}</a></li>
                        </ul>
                        <div class="ttm-social-links-wrapper list-inline">
                            <ul class="social-icons">
                                <li><a href="{{setting('iletisim.facebook')}}" target="_blank"><i class="fa fa-facebook"></i></a>
                                </li>
                                <li><a href="{{setting('iletisim.twitter')}}" target="_blank"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li><a href="{{setting('iletisim.youtube')}}" target="_blank"><i class="fa fa-youtube"></i></a>
                                </li>
                                <li><a href="{{setting('iletisim.linkedin')}}" target="_blank"><i class="fa fa-linkedin"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- ttm-topbar-wrapper end -->
        <!-- ttm-header-wrap -->
        <div class="ttm-header-wrap">
            <!-- ttm-stickable-header-w -->
            <div id="ttm-stickable-header-w" class="ttm-stickable-header-w clearfix">
                <div id="site-header-menu" class="site-header-menu">
                    <div class="site-header-menu-inner ttm-stickable-header">
                        <div class="container">
                            <!-- site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="{{route('index')}}" title="Boldman" rel="home">
                                    <img id="logo-img" class="img-center" src="{{asset('images/logo-img.png')}}" alt="logo-img">
                                </a>
                            </div><!-- site-branding end -->
                            <!--site-navigation -->
                            <div id="site-navigation" class="site-navigation">
                                <!-- header-icins -->
                                <div class="ttm-header-icons ">
                                    <div class="ttm-header-icon ttm-header-search-link">
                                        <a href="#"><i class="ti ti-search"></i></a>
                                        <div class="ttm-search-overlay">
                                            <form method="post" class="ttm-site-searchform" action="{{route('search')}}">
                                                @csrf
                                                <div class="w-search-form-h">
                                                    <div class="w-search-form-row">
                                                        <div class="w-search-input">
                                                            <input type="search" class="field searchform-s" name="keyword" placeholder="Arama  . . .">
                                                            <button type="submit">
                                                                <i class="ti ti-search"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- header-icons end -->
                                <div class="ttm-menu-toggle">
                                    <input type="checkbox" id="menu-toggle-form" />
                                    <label for="menu-toggle-form" class="ttm-menu-toggle-block">
                                        <span class="toggle-block toggle-blocks-1"></span>
                                        <span class="toggle-block toggle-blocks-2"></span>
                                        <span class="toggle-block toggle-blocks-3"></span>
                                    </label>
                                </div>
                                <nav id="menu" class="menu">
                                    <ul class="dropdown">
                                        <li><a href="{{route('index')}}">Anasayfa</a></li>
                                        <li><a href="{{route('corporate')}}">Kurumsal</a></li>
                                        <li><a href="{{route('products')}}">Ürünler</a></li>
                                        <li><a href="{{route('services')}}">Hizmetler</a></li>
                                        <li><a href="{{route('projects')}}">Çalışmalar</a></li>
                                        <li><a href="{{route('blogs')}}">Blog</a></li>
                                        <li><a href="{{route('contact')}}">İletişim</a></li>
                                    </ul>
                                </nav>
                            </div><!-- site-navigation end-->
                        </div>
                    </div>
                </div>
            </div><!-- ttm-stickable-header-w end-->
        </div><!--ttm-header-wrap end -->
    </header><!--header end-->

    @yield('content')

    <!--footer start-->
    <footer class="footer widget-footer clearfix">
        <div class="first-footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-footer-cta-wrapper ttm-textcolor-dark ttm-bgcolor-white">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                    <div class="featured-icon-box iconalign-before-heading ttm-icon_element-size-lg">
                                        <div class="featured-content">
                                            <div class="featured-icon">
                                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                                    <i class="ti ti-email"></i>
                                                </div>
                                            </div>
                                            <div class="featured-title">
                                                <h5>Bültenimize Abone Olun</h5>
                                                <h6>Yeniliklerden Anında Haberiniz Olsun</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 widget-area">
                                    <form id="subscribe-form" class="newsletter-form" method="post" action="{{route('bulten_post')}}" data-mailchimp="true">
                                        @csrf
                                        <div class="mailchimp-inputbox clearfix" id="subscribe-content">
                                            <p><input type="email" name="email" placeholder="E-Posta" required=""></p>
                                            <p><input type="submit" value="Abone Ol"></p>
                                        </div>
                                        <div id="subscribe-msg"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer ttm-textcolor-white">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget clearfix">
                            <div class="footer-logo">
                                <img id="footer-logo-img" class="img-center" src="images/footer-logo.png" alt="">
                            </div>
                            <p>{{setting('footer-alani.description')}}</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_nav_menu clearfix">
                            <h3 class="widget-title">Faydalı Linkler</h3>
                            <ul id="menu-footer-services">
                                <li><a href="{{route('index')}}">Anasayfa</a></li>
                                <li><a href="{{route('corporate')}}">Kurumsal</a></li>
                                <li><a href="{{route('products')}}">Ürünler</a></li>
                                <li><a href="{{route('services')}}">Hizmetler</a></li>
                                <li><a href="{{route('projects')}}">Çalışmalar</a></li>
                                <li><a href="{{route('blogs')}}">Bloglar</a></li>
                                <li><a href="{{route('contact')}}">İletişim</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget widget_text clearfix">
                            <h3 class="widget-title">Sorularınız İçin</h3>
                            <div class="textwidget widget-text">
                                <h4 class="ttm-textcolor-skincolor"><a style="color: #fda12b;" href="tel:{{setting('iletisim.phone')}}">{{setting('iletisim.phone')}}</a></h4>
                                <h6 class="ttm-textcolor-skincolor"><a style="color: #fda12b;" href="mailto:{{setting('iletisim.email')}}">{{setting('iletisim.email')}}</a></h6>
                                <p>Ürünler hakkında bilgi almak için email ve telefon adreslerinden firmamız ile iletişime geçebilirsiniz.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 widget-area">
                        <div class="widget flicker_widget clearfix">
                            <h3 class="widget-title">Hizmetlerimiz</h3>
                            <div class="ttm-flicker-widget-wrapper">
                                @foreach($services_footer as $service)
                                <a href="{{route('service_detail', ['slug'=>$service->slug])}}"><img src="{{Voyager::image($service->thumbnail('cropped'))}}" alt="A photo on Flickr" title="themetech-one"></a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-footer-text ttm-textcolor-white">
            <div class="container">
                <div class="row copyright">
                    <div class="col-md-8 ttm-footer2-left">
                        <span>Copyright © {{date('Y')}}&nbsp;{{setting('footer-alani.copy')}}</span>
                    </div>
                    <div class="col-md-4 ttm-footer2-right">
                        <div class="social-icons">
                            <ul class="list-inline">
                                <li><a href="{{setting('iletisim.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="{{setting('iletisim.twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="{{setting('iletisim.youtube')}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                <li><a href="{{setting('iletisim.linkedin')}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--footer end-->

    <!--back-to-top start-->
    <a id="totop" href="#top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!--back-to-top end-->

</div><!-- page end -->


<!-- Javascript -->

<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/tether.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.js')}}"></script>
<script src="{{asset('js/jquery-waypoints.js')}}"></script>
<script src="{{asset('js/jquery-validate.js')}}"></script>
<script src="{{asset('js/owl.carousel.js')}}"></script>
<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('js/numinate.min.js?ver=4.9.3')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

<!-- Revolution Slider -->
<script src="{{asset('revolution/js/jquery.themepunch.tools.min.js')}}"></script>
<script src="{{asset('revolution/js/jquery.themepunch.revolution.min.js')}}"></script>
<script src="{{asset('revolution/js/slider.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

<script src="{{asset('revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script src="{{asset('revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>

<!-- Javascript end-->

</body>
</html>
