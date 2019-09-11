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
                            <h1 class="title">{{$project->title}}</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Tiles Repair, Austin</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pt-60 pb-110 clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <!-- ttm-pf-single-content-wrapper-innerbox -->
                        <div class="ttm-pf-single-content-wrapper-innerbox ttm-pf-view-left-image">
                            <div class="row">
                                <div class="col-md-8">
                                    <div class="ttm-featured-wrapper ttm-portfolio-featured-wrapper">
                                        <img class="img-fluid" src="{{Voyager::image($project->thumbnail('cropped'))}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="ttm-pf-single-detail-box res-991-mt-30">
                                        <div class="ttm-portfolio-title">
                                            <h2 class="ttm-pf-detailbox-title">Proje Detay</h2>
                                        </div>
                                        <div class="ttm-pf-detailbox">
                                            <ul class="ttm-pf-detailbox-list">
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-briefcase"></i>
                                                    <span class="ttm-pf-left-details">Proje İsmi</span>
                                                    <span class="ttm-pf-right-details">{{$project->name}}</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-user"></i>
                                                    <span class="ttm-pf-left-details">Müşteri </span>
                                                    <span class="ttm-pf-right-details">{{$project->client}}</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-calendar"></i>
                                                    <span class="ttm-pf-left-details">Tarih </span>
                                                    <span class="ttm-pf-right-details">{{$project->created_at->format('d')." ".$project->created_at->formatLocalized('%b')." ".$project->created_at->format('Y')}}</span>
                                                </li>
                                                <li class="ttm-pf-details-date">
                                                    <i class="fa fa-clock-o"></i>
                                                    <span class="ttm-pf-left-details">Süre  </span>
                                                    <span class="ttm-pf-right-details">{{$project->duration}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ttm-pf-single-content-wrapper-innerbox end-->
                    </div>
                </div>
            </div>
        </section>

        <section class="ttm-row pt-50 pb-280 ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h4>Proje Özeti</h4>
                        <p>{!! substr(strip_tags($project->summery), 0, 600) !!}</p>
                    </div>
                    <div class="col-sm-6">
                        <p>{!! substr(strip_tags($project->summery), 600) !!}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ttm-row pt-50 pb-0 res-991-pt-0 res-991-pb-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Proje Misyonu</h4>
                        <p>{!! $project->mission !!}</p>
                        <div class="pt-15 clearfix">
                            <div class="social-icons circle social-hover text-right">
                                <ul class="list-inline mb-0">
                                    <li class="social-facebook"><a href="{{setting('iletisim.facebook')}}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a href="{{setting('iletisim.twitter')}}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a href="{{setting('iletisim.youtube')}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a href="{{setting('iletisim.linkedin')}}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                            <div class="ttm-nextprev-bottom-nav">
                                <nav class="navigation post-navigation">

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- tttm-pf-single-related-wrapper -->
                <div class="row ttm-pf-single-related-wrapper">
                    <div class="col-lg-12">
                        <h3 class="ttm-pf-single-related-title">Diğer Projelerimiz</h3>
                    </div>
                    {{--@foreach($projects as $project)--}}
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="#"> <img class="img-fluid" src="" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="Plumbing, New York" data-rel="prettyPhoto" href=""><i class="ti ti-search"></i></a>
                                        <a href="portfolio-style-1.html" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <span class="category">
                                    <a href="portfolio-category.html">Painting</a>,
                                    <a href="portfolio-category.html">Plumbing</a>
                                </span>
                                <h2 class="featured-title"><a href="portfolio-style-1.html">{{$projects->title}}</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    {{--@endforeach--}}
                </div>
                <!-- tttm-pf-single-related-wrapper end-->
            </div>
        </section>

    </div><!--site-main end-->
@endsection
