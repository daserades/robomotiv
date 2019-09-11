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
                            <span><span>Hizmetler</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- service-section -->
        <section class="ttm-row services2-section pb-110 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <!-- section title -->
                        <div class="section-title with-desc title-style-center_text clearfix">
                            <div class="title-header">
                                <h2 class="title">Hizmetlerimiz</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-2"></div>
                </div>
                <div class="row mt-10">
                    @foreach($services as $service)
                    <div class="col-md-4">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox box-shadow2 mb-30">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="{{Voyager::image($service->thumbnail('cropped'))}}" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-title featured-title">
                                    <h5><a href="{{route('service_detail', ['slug'=>$service->slug])}}">{{$service->title}}</a></h5>
                                </div>
                                <div class="featured-desc">
                                    <p>{!! substr(strip_tags($service->description), 0, 50) !!} . . .</p>
                                    <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-icon-btn-right ttm-btn-style-border ttm-btn-color-black mt-10" href="{{route('service_detail', ['slug'=>$service->slug])}}">Daha Fazla<i class="ti ti-angle-double-right"></i></a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                    @endforeach
                </div><!-- row end -->
            </div>
        </section>
        <!-- service-section end -->

    </div><!--site-main end-->

@endsection
