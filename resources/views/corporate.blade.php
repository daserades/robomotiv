@extends('layouts.master')

@section('content')
    <!-- page-title -->
    <div class="ttm-page-title-row">
        <div class="ttm-page-title-row-bg-layer ttm-bg-layer"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-box ttm-textcolor-white">
                        <div class="page-title-heading">
                            <h1 class="title">Kurumsal</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>About Us 1</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        {{--<!-- row-text-section -->
        <section class="ttm-row row-text-section ttm-bgcolor-grey">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="sep-box text-center">
                            <h2 style="font-size: 50px;">ROBOMOTİV</h2>
                            <div class="sep_holder_box width-30 pt-10">
                                <span class="sep_holder"><span class="sep_line"></span></span>
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span class="sep_holder"><span class="sep_line"></span></span>
                            </div>
                            <h4>Telefon: {{setting('contact.phone')}}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- row-text-section end -->--}}

        <!-- about-section -->
        <section class="ttm-row about3-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-35">
                            <img class="img-fluid" src="{{Voyager::image(setting('corporate.image'))}}" alt="">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-lg-7 col-sm-12">
                        <div class="pl-20">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{setting('corporate.title')}}</h2>
                                </div>
                            </div><!-- section title end -->
                            <p><strong>{!! setting('corporate.description') !!}</strong></p>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- about-section end -->

        <!--services-box-section-->
        <section class="ttm-row services-box-section bg-img12 clearfix">
            <div class="container">
                <div class="row row-equal-height">
                    @foreach($corporates as $corporate)
                    <div class="col-lg-4 col-md-4 col-sm-12">
                        <!-- featured-icon-box -->
                        <div class="featured-icon-box style1 top-icon text-center ttm-bgcolor-white box-shadow2">
                            <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-rounded">
                                <i class="ti ti-flag-alt-2"></i>
                            </div>
                            <div class="featured-content">
                                <div class="featured-title">
                                    <h5>{{$corporate->title}}</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{!! $corporate->description !!}</p>
                                </div>
                            </div>
                        </div><!-- featured-icon-box end-->
                    </div>
                    @endforeach
                </div><!-- row end -->
            </div>
        </section>
        <!-- services-box-section end -->


        <!-- fid-section -->
        <section class="ttm-row fid2-section bg-img13 ttm-bgcolor-skincolor ttm-bg ttm-bgimage-yes clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row ttm-facts-colum-sep">
                    <div class="col-md-4">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-calendar"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "3245"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                    >3245
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>YIL<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-user"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "35"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                    >35
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>Müşteri<br></span></h3>
                            </div><!-- ttm-fid-contents end-->
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ttm-fid inside ttm-fid-view-topicon">
                            <div class="ttm-fid-icon-wrapper"><i class="ti ti-light-bulb"></i></div>
                            <div class="ttm-fid-contents">
                                <h4><span   data-appear-animation = "animateDigits"
                                            data-from             = "0"
                                            data-to               = "215"
                                            data-interval         = "10"
                                            data-before           = ""
                                            data-before-style     = "sup"
                                            data-after            = ""
                                            data-after-style      = "sub"
                                    >215
                                    </span>
                                </h4>
                                <h3 class="ttm-fid-title"><span>PROJE<br></span></h3>
                            </div><!-- ttm-fid-contents end -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fid-section end -->

    </div><!--site-main end-->

@endsection
