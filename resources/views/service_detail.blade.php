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
                            <h1 class="title">HİZMETLER</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i></a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span>
                                    <a title="Homepage" href="{{route('services')}}">Hizmetler</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span><span>
                                   {{$service->title}}
                                </span></span>

                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-left ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-3 widget-area sidebar-left ttm-col-bgcolor-yes ttm-bg ttm-left-span ttm-bgcolor-white">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-nav-menu">
                            <ul class="widget-menu">
                                {{--@foreach($services as $service)
                                    <li class="">
                                        <a href="{{route('service_detail', ['slug'=>$service->slug])}}">
                                            {{$service->title}}
                                        </a>
                                    </li>
                                @endforeach--}}
                            </ul>
                        </aside>
                        <aside class="widget contact-widget">
                            <h3 class="widget-title">İletişim Bilgileri</h3>
                            <ul class="contact-widget-wrapper">
                                <li><i class="fa fa-map-marker"></i>{{setting('iletisim.address')}}</li>
                                <li><i class="fa fa-envelope-o"></i><a href='mailto:{{setting('iletisim.email')}}' target="_blank">{{setting('iletisim.email')}}</a></li>
                                <li><i class="fa fa-phone"></i>{{setting('iletisim.phone')}}</li>
                            </ul>
                        </aside>
                    </div>
                    <div class="col-lg-9 content-area">
                        <!-- ttm-service-single-content-are -->
                        <div class="ttm-service-single-content-area">
                            <!-- section title -->
                            <div class="section-title without-sep-line clearfix">
                                <div class="title-header">
                                    <h5></h5>
                                    <h2 class="title">{{$service->title}}</h2>
                                </div>
                            </div><!-- section title end -->
                            <div class="ttm-service-description">
                                <div class="mb-35">
                                    <p>{!! $service->description !!}</p>
                                </div>
                            </div>
                            @if($service->gallery != null)
                                @foreach(json_decode($service->gallery) as $detail)
                                    <div class="ttm_single_image-wrapper mb-35">
                                        <img src="{{ Voyager::image($service->getThumbnail($detail, 'cropped')) }}" style="width: 800px; height: 500px;" alt=""/>
                                    </div>
                                @endforeach
                            @endif
                            <div class="mb-35">
                                <p>{!! $service->content !!}</p>
                            </div>
                            <div class="sep_holder_box width-100">
                                <span class="sep_holder m-0 mb-35"><span class="sep_line"></span></span>
                                <span class="sep_holder m-0 mb-35"><span class="sep_line"></span></span>
                            </div>
                        </div>
                        <!-- ttm-service-single-content-are end -->
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->
@endsection
