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
                            <h1 class="title">ÇALIŞMALAR</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span>
                                <a title="Homepage" href="{{route('projects')}}">Çalışmalar</a>
                            </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>{{$project->title}}</span></span>
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
                                                    <span class="ttm-pf-right-details">{{$project->title}}</span>
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

        <section class="ttm-row ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <h4>Proje Özeti</h4>
                        <p>{!! $project->summery !!}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="ttm-row mt-50 pt-50 pb-0 res-991-pt-0 res-991-pb-0 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h4>Proje Misyonu</h4>
                        <p>{!! $project->mission !!}</p>
                        <div class="pt-15 clearfix">
                            {{--<div class="ttm-nextprev-bottom-nav">
                                <nav class="navigation post-navigation">
                                    <div class="nav-links">
                                        <div class="nav-previous"><a href="#" rel="prev"><span class="meta-nav" aria-hidden="true">Geri</span></a></div>
                                        <div class="nav-next float-right"><a href="{{$project->}}" rel="next"><span class="meta-nav" aria-hidden="true">İleri</span></a></div>
                                    </div>
                                </nav>
                            </div>--}}
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
                    @foreach($projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{Voyager::image($project->thumbnail('cropped'))}}"> <img class="img-fluid" src="{{Voyager::image($project->thumbnail('cropped'))}}" alt="image"></a>
                                </div><!-- featured-thumbnail end-->
                                <!-- ttm-box-view-overlay -->
                                <div class="ttm-box-view-overlay">
                                    <div class="featured-iconbox ttm-media-link">
                                        <a class="ttm_prettyphoto ttm_image" title="{{$project->title}}" data-rel="prettyPhoto" href="{{Voyager::image($project->thumbnail('cropped'))}}"><i class="ti ti-search"></i></a>
                                        <a href="{{route('project_detail', ['slug'=>$project->slug])}}" class="ttm_link"><i class="ti ti-link"></i></a>
                                    </div>
                                </div><!-- ttm-box-view-overlay end-->
                            </div>
                            <div class="ttm-box-bottom-content featured-content-portfolio box-shadow2">
                                <h2 class="featured-title"><a href="{{route('project_detail', ['slug'=>$project->slug])}}">{{$project->title}}</a></h2>
                            </div>
                        </div><!-- featured-imagebox -->
                    </div>
                    @endforeach
                </div>
                <!-- tttm-pf-single-related-wrapper end-->
            </div>
        </section>

    </div><!--site-main end-->
@endsection
