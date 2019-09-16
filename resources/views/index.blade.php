@extends('layouts.master')

@section('content')

    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

    <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
    <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.4.8.1">
        <ul>
            @php $i = 1; @endphp
            @foreach($sliders as $slider)

                <li data-index="rs-{{$i}}"  data-transition="slotslide-horizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="default" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                    <img src="{{Voyager::image($slider->thumbnail('cropped'))}}" alt="" title="slider-mainbg-001" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>

                    <div class="tp-caption tp-resizeme gvv_color" id="slide-3-layer-2-@php echo $i; @endphp"  data-x="['left','left','center','center']" data-hoffset="['50','40','0','0']" data-y="['top','top','top','top']" data-voffset="['271','281','170','156']"

                         data-fontsize="['75','75','60','40']"
                         data-lineheight="['100','100','80','50']"
                         data-fontweight="['600','600','600','600']"
                         data-color="['rgb(242, 244, 248)','rgb(242, 244, 248)','rgb(242, 244, 248)','rgb(242, 244, 248)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":840,"speed":800,"frame":"0","from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">{{$slider->title}}</div>

                    <div class="tp-caption tp-resizeme gvv_bg gvv_color"  id="slide-3-layer-1-@php echo $i; @endphp"  data-x="['left','left','center','center']" data-hoffset="['50','40','-142','-473']" data-y="['top','top','middle','middle']" data-voffset="['379','389','44','76']"

                         data-fontsize="['22','22','19','19']"
                         data-lineheight="['30','30','25','25']"
                         data-color="['rgb(242, 244, 248)','rgb(242, 244, 248)','rgb(242, 244, 248)','rgb(242, 244, 248)']"
                         data-width="none"
                         data-height="none"
                         data-whitespace="nowrap"
                         data-visibility="['on','on','on','off']"
                         data-type="text"
                         data-responsive_offset="on"
                         data-frames='[{"delay":1500,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                         data-textAlign="['inherit','inherit','inherit','inherit']"
                         data-paddingtop="[0,0,0,0]"
                         data-paddingright="[0,0,0,0]"
                         data-paddingbottom="[0,0,0,0]"
                         data-paddingleft="[0,0,0,0]">@if(strlen($slider->description)>100) {!! substr(strip_tags($slider->description), 0, 100) !!} . . . @else {!! substr(strip_tags($slider->description), 0, 100) !!} @endif </div>


                    @if($slider->link != null)
                        <a class="tp-caption skin-flat-button tp-resizeme" href="{{$slider->link}}"
                           target="_blank" data-x="['left','left','center','center']"
                           data-hoffset="['50','40','0','0']" data-y="['top','top','middle','middle']"
                           data-voffset="['452','462','121','69']"
                           data-fontsize="['13','13','12','11']"
                           data-lineheight="['13','13','12','11']"
                           data-width="none"
                           data-height="none"
                           data-whitespace="nowrap"
                           data-type="text"
                           data-actions=''
                           data-responsive_offset="on"
                           data-frames='[{"delay":1970,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                           data-textAlign="['inherit','inherit','inherit','inherit']"
                           data-paddingtop="[20,20,15,12]"
                           data-paddingright="[30,30,25,20]"
                           data-paddingbottom="[20,20,15,12]"
                           data-paddingleft="[30,30,25,20]">Detay . . .</a>
                    @endif



                </li>
                @php $i++; @endphp
            @endforeach
        </ul>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

        {{--<!--Header-->
        <section class="ttm-row row-top-section clearfix">
            <div class="container">
                <div class="row row-equal-height">
                    <div class="mt_40 mlr-30 res-767-mt-0">
                        <div class="row row-equal-height ttm-bgcolor-white box-shadow2">
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style1 top-icon text-center">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">
                                        <i class="ti ti-settings"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Large Number <br>of Services Provided</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>We are a company providing a wide range of maintenance and many other services.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 box-shadow2">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style1 top-icon text-center">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">
                                        <i class="ti ti-user"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>10+ Years of <br>Professional Experience</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>We work to ensure people’s comfort at their home to provide the best and the fastest.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12">
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style1 top-icon text-center">
                                    <div class="ttm-icon ttm-icon_element-fill ttm-icon_element-background-color-skincolor ttm-icon_element-size-md ttm-icon_element-style-square">
                                        <i class="ti ti-thumb-up"></i>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>A Large Number <br>of Grateful Customers</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>We have been working for years to improve our skills, to expand the spheres of our work.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- Header end -->--}}

        <!--Corporate-->
        <section class="ttm-row about-section ttm-bgcolor-white bg-img1 break-991-colum clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-12">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb-35">
                            <img class="img-fluid" src="{{Voyager::image(setting('kurumsal.image'))}}" alt="">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-md-7 col-sm-12">
                        <div class="pr-10 res-991-plr-0">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h2 class="title">{{setting('kurumsal.title')}}</h2>
                                </div>
                            </div><!-- section title end -->
                            <p><strong>{!! substr(strip_tags(setting('kurumsal.description')), 0, 200) !!} . . . </strong></p>
                            <a class="ttm-btn ttm-btn-size-sm ttm-icon-btn-right ttm-btn-color-skincolor btn-inline mb-30" href="{{route('corporate')}}">Daha Fazla<i class="ti ti-angle-double-right"></i></a>
                            <div class="separator">
                                <div class="sep-line mt_5 mb-35"></div>
                            </div>
                            <!-- row-->
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style2 left-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="ti ti-timer"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Zamanında Teslim</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style2 left-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="ti ti-wand"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>7 / 24<br>Hizmet</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                                <div class="col-md-4 col-sm-12">
                                    <!--featured-icon-box-->
                                    <div class="featured-icon-box style2 left-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                            <i class="ti ti-medall"></i>
                                        </div>
                                        <div class="featured-content">
                                            <div class="featured-title">
                                                <h5>Müşteri Memnuniyeti</h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-icon-box end-->
                                </div>
                            </div><!-- row end-->
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- Corporate end-->
        <div class="ttm-row"></div>

        <!-- Products -->
        <section class="ttm-row only-title-section ttm-bgcolor-skincolor mt_70 res-991-mt-0 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <div class="title-header">
                                <h2 class="title">ÜRÜNLERİMİZ</h2>
                            </div>
                            <div class="title-desc">Firmamıza ait en güncel ve en çok tercih edilen ürünler.</div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-white mt-15 mb-30 float-right res-991-mb-0" href="{{route('products')}}">TÜM ÜRÜNLERİMİZ<i class="ti ti-angle-double-right"></i></a>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <section class="ttm-row team-section mt_150 res-991-mt_15 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel" data-item="4" data-nav="false" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-team -->
                        @foreach($products as $product)
                            <div class="featured-imagebox featured-imagebox-team ttm-team-box-view-overlay">
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="{{Voyager::image($product->thumbnail('cropped'))}}" alt="image">
                                </div>
                                <div class="featured-content featured-content-team">
                                    <div class="featured-title">
                                        <h5><a href="{{route('product_detail', ['category'=>$product->category->slug, 'slug'=>$product->slug])}}">{{$product->title}}</a></h5>
                                    </div>
                                    <div class="ttm-social-links-wrapper">
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-team end-->
                        @endforeach
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- Products end-->
        <div class="ttm-row"></div>


        <!-- Service -->
        <div class="ttm-row broken-section break-991-colum ttm-bgcolor-darkgrey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">

                    <div class="col-md-12">
                        <div class="spacing-2">
                            <!-- wrap-testimonial -->
                            <div class="testimonial-slide owl-carousel" data-item="1" data-nav="false" data-dots="false" data-auto="false">


                                @foreach($services as $service)
                                    <!-- testimonials -->
                                        <div class="testimonials">
                                            <div class="testimonial-content mb-35">
                                                <div class="testimonial-avatar">
                                                    <div class="testimonial-img text-center">
                                                        <img class="img-center" src="{{Voyager::image($service->thumbnail('cropped'))}}" alt="testimonial-img">
                                                    </div>
                                                </div>
                                                <div class="testimonial-caption text-center">
                                                    <a href="{{route('service_detail', ['slug'=>$service->slug])}}"><h6>{{$service->title}}</h6></a>
                                                </div>
                                                <blockquote>{!! substr(strip_tags($service->content), 0, 300) !!} . . .</blockquote>
                                            </div>
                                        </div><!-- testimonials end -->
                                @endforeach
                            </div><!-- wrap-testimonial end-->
                            <!-- row-->
                            <div class="row ttm-fid-row-wrapper">
                                <div class="col-md-4 col-sm-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-calendar"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "{{setting('neden-biz.year')}}"
                                                        data-interval         = "1"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                >{{setting('neden-biz.year')}}</span></span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">YIL</h3>
                                        </div>
                                    </div><!-- ttm-fid end -->
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-user"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "{{setting('neden-biz.customer')}}"
                                                        data-interval         = "10"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                >{{setting('neden-biz.customer')}}</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">Müşteri</h3>
                                        </div>
                                    </div><!-- ttm-fid end -->
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-briefcase"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "{{setting('neden-biz.project')}}"
                                                        data-interval         = "5"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                >{{setting('neden-biz.project')}}</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">Proje</h3>
                                        </div>
                                    </div><!-- ttm-fid end-->
                                </div>
                            </div><!-- row end-->
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- Service end -->



        <!--Projects -->
        <section class="ttm-row portfolio-section bg-img2 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ttm-tabs">
                            <!-- section-title -->
                            <div class="section-title width-36">
                                <div class="title-header">
                                    <h5>Firmamızın Çalışmaları</h5>
                                    <h2 class="title">Çalışmalarımız</h2>
                                </div>
                            </div><!-- section-title end -->
                            <ul class="text-right width-64 mt-35 res-1199-mt-0 res-1199-mb-20">
                                <li class="tab active"><a href="{{route('projects')}}"> TÜM ÇALIŞMALARIMIZ </a></li>
                            </ul><!-- flat-tab end -->
                            <div class="content-tab width-100">
                                <!-- content-inner -->
                                <div class="content-inner active">
                                    <div class="row multi-columns-row ttm-boxes-spacing-10px">
                                        @foreach($projects as $project)
                                        <div class="ttm-box-col-wrapper col-lg-4 col-md-6 col-sm-12">
                                            <!-- featured-imagebox -->
                                            <div class="featured-imagebox featured-imagebox-portfolio">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <a href="{{route('project_detail', ['slug'=>$project->slug])}}"> <img class="img-fluid" src="{{Voyager::image($project->thumbnail('cropped'))}}" alt="image"></a>
                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay ttm-portfolio-box-view-overlay">
                                                    <div class="ttm-box-view-content-inner">
                                                        <div class="featured-content featured-content-portfolio">
                                                            <h2 class="featured-title"><a href="{{route('project_detail', ['slug'=>$project->slug])}}">{{$project->title}}</a></h2>
                                                        </div>
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div><!-- featured-imagebox -->
                                        </div>
                                        @endforeach
                                    </div><!-- row end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- Projects end-->
        <div class="ttm-row"></div>

        <!--Blogs -->
        <section class="ttm-row blog-section bg-img3 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 col-md-12">
                        <!-- section-title -->
                        <div class="section-title style2 clearfix">
                            <div class="title-header">
                                <h2 class="title">Güncel Bloglar</h2>
                            </div>
                        </div><!-- section-title end -->
                    </div>
                    <div class="col-lg-3 col-md-12">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-15 mb-30 float-right" href="{{route('blogs')}}">Tüm Bloglar<i class="ti ti-angle-double-right"></i></a>
                    </div>
                </div><!-- row end -->
                <!-- row -->
                <div class="row">
                    <!-- post-slide -->
                    <div class="post-slide owl-carousel owl-theme owl-loaded" data-item="4" data-nav="false" data-dots="false" data-auto="false">
                        <!-- featured-imagebox-post -->
                        @foreach($blogs as $blog)
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{Voyager::image($blog->thumbnail('cropped'))}}" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="{{route('blog_detail', ['category'=>$blog->category->slug, 'slug'=>$blog->slug])}}">{{$blog->created_at->format('d-m-Y')}}</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="{{route('blog_detail', ['category'=>$blog->category->slug, 'slug'=>$blog->slug])}}">{{$blog->title}}</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                        @endforeach
                    </div>
                </div><!-- row end-->
            </div>
        </section>
        <!-- Blogs end-->
        <div class="ttm-row bg-img3">

        </div>

    </div><!--site-main end-->

{{--





        <!--broken-section-->
        <section class="ttm-row broken-section bg-layer break-1199-colum res-991-mt-0 mt_70 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- about-content -->
                        <div class="about-content ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-skincolor spacing-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title with-desc mb-40 clearfix">
                                    <div class="title-header">
                                        <h2 class="title">HİZMETLERİMİZ</h2>
                                    </div>
                                </div><!-- section title end -->
                                <!--featured-icon-box-->
                                <div class="featured-icon-box style3 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-square">
                                            <i class="ti ti-home"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Home Maintenance</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>We have experience in home maintenance any surface from new constructions to cabinets in commercial properties. If you are doing your</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                                <div class="separator">
                                    <div class="sep-line mt_5 mb-35"></div>
                                </div>
                                <!--featured-icon-box-->
                                <div class="featured-icon-box style3 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-border ttm-icon_element-color-white ttm-icon_element-size-md ttm-icon_element-style-square">
                                            <i class="ti ti-light-bulb"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Electrical Services</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Electricity is very important part of our life. We can’t imagine it without home appliances that in turns work with services provider</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end-->
                            </div>
                        </div><!-- about-content end-->
                    </div>
                    <div class="col-lg-6">
                        <!-- col-img-img-one -->
                        <div class="col-bg-img-one ttm-col-bgimage-yes ttm-bg ttm-right-span">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content"></div>
                        </div><!-- col-img-bg-img-one end-->
                        <img src="{{asset('images/bg-image/col-bgimage-1.jpg')}}" class="ttm-equal-height-image" alt="bg-image">
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!--broken-section end-->


        <!--broken-section-->
        <div class="ttm-row broken-section break-991-colum ttm-bgcolor-darkgrey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-5">
                        <!-- ttm_single_image-wrapper -->
                        <div class="ttm_single_image-wrapper mb_60 res-991-mb-0 res-991-mt-50">
                            <img class="img-fluid" src="{{asset('images/single-img-twel.jpg')}}" alt="">
                        </div><!-- ttm_single_image-wrapper end -->
                    </div>
                    <div class="col-md-7">
                        <div class="spacing-2">
                            <!-- wrap-testimonial -->
                            <div class="testimonial-slide owl-carousel" data-item="1" data-nav="false" data-dots="false" data-auto="false">
                                <!-- testimonials -->
                                <div class="testimonials">
                                    <div class="testimonial-content mb-35">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center" src="{{asset('images/testimonial/01.jpg')}}" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h6>Linda Jone</h6>
                                            <label>Newyork City</label>
                                        </div>
                                        <blockquote>Amazing service! Attention to detail, very helpful in terms of providing us with our preferred TV mounting and wiring needs. Excellent work and very pleasant! Highly recommend. Will hire again any time. Many thanks!</blockquote>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials">
                                    <div class="testimonial-content mb-35">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center" src="{{asset('images/testimonial/02.jpg')}}" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h6>Tonny Edward</h6>
                                            <label>Newyork City</label>
                                        </div>
                                        <blockquote>I called Boldman for some work. He arrived early, was very professional, went above and beyond to make sure that I was a happy client. I would definitely hire him again. He did a great job and I would recommend him anytime.</blockquote>
                                    </div>
                                </div><!-- testimonials end -->
                                <!-- testimonials -->
                                <div class="testimonials">
                                    <div class="testimonial-content mb-35">
                                        <div class="testimonial-avatar">
                                            <div class="testimonial-img">
                                                <img class="img-center" src="{{asset('images/testimonial/03.jpg')}}" alt="testimonial-img">
                                            </div>
                                        </div>
                                        <div class="testimonial-caption">
                                            <h6>Teena Venanda</h6>
                                            <label>Newyork City</label>
                                        </div>
                                        <blockquote>Boldman was awesome. Arrived early, super friendly, understood everything I needed. He finished his work on time, cleaned up the area and was professional. He did a great job and I would recommend him anytime.</blockquote>
                                    </div>
                                </div><!-- testimonials end -->
                            </div><!-- wrap-testimonial end-->
                            <!-- row-->
                            <div class="row ttm-fid-row-wrapper">
                                <div class="col-md-4 col-sm-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-calendar"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "{{setting('neden-biz.year')}}"
                                                        data-interval         = "1"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                >30</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">YIL</h3>
                                        </div>
                                    </div><!-- ttm-fid end -->
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-user"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "{{setting('neden-biz.customer')}}"
                                                        data-interval         = "10"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                >120</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">Müşteri</h3>
                                        </div>
                                    </div><!-- ttm-fid end -->
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <!-- ttm-fid -->
                                    <div class="ttm-fid inside ttm-fid-view-lefticon">
                                        <div class="ttm-fid-left">
                                            <div class="ttm-fid-icon-wrapper">
                                                <i class="ti ti-briefcase"></i>
                                            </div>
                                            <h4 class="ttm-fid-inner">
                                                <span   data-appear-animation = "animateDigits"
                                                        data-from             = "0"
                                                        data-to               = "{{setting('neden-biz.project')}}"
                                                        data-interval         = "5"
                                                        data-before           = ""
                                                        data-before-style     = "sup"
                                                        data-after            = ""
                                                        data-after-style      = "sub"
                                                >350</span><span>+</span>
                                            </h4>
                                        </div>
                                        <div class="ttm-fid-contents">
                                            <h3 class="ttm-fid-title">Proje</h3>
                                        </div>
                                    </div><!-- ttm-fid end-->
                                </div>
                            </div><!-- row end-->
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!--broken-section end-->



--}}


@endsection
