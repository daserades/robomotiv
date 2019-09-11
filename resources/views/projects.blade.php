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
                            <span><span>Çalışmalar</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <section class="ttm-row pt-60 pb-110 res-991-pb-70 ttm-bgcolor-grey clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <h2><strong>Çalışmalarımız</strong></h2><br>
                    </div>
                </div><!-- row end -->
                <div class="row">
                    @foreach($projects as $project)
                    <div class="col-lg-4 col-md-4 col-sm-6">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                            <div class="ttm-box-view-content-inner">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <a href="{{route('project_detail', ['slug'=>$project->slug])}}"> <img class="img-fluid" src="{{Voyager::image($project->thumbnail('cropped'))}}" alt="image"></a>
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
            </div>
        </section>

    </div><!--site-main end-->
@endsection
