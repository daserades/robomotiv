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
                            <h1 class="title">Blog</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Blog</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                    @foreach($blogs as $blog)
                        <!-- post -->
                            <article class="post ttm-blog-classic">
                                <header class="entry-header">
                                <span class="ttm-meta-line cat-links">
                                    <a href="#">{{$blog->category->title}}</a>,
                                    <a href="#">Industrial</a>
                                </span>
                                    <h2 class="entry-title"><a href="single-blog.html">{{$blog->title}}</a></h2>
                                </header>
                                <!-- post-featured-wrapper -->
                                <div class="post-featured-wrapper">
                                    <div class="post-featured">
                                        <img class="img-fluid" src="{{Voyager::image($blog->thumbnail('cropped'))}}" alt="">
                                    </div>
                                    <div class="ttm-box-post-date">
                                    <span class="ttm-entry-date">
                                        <time class="entry-date" datetime="2019-01-16T07:07:55+00:00">16<span class="entry-month entry-year">Jan</span></time>
                                    </span>
                                    </div>
                                </div>
                                <!-- post-featured-wrapper end -->
                                <!-- ttm-blog-classic-box-content -->
                                <div class="ttm-blog-classic-box-content">
                                    <div class="entry-content">
                                        <div class="ttm-box-desc-text">
                                            <p>{!! substr(strip_tags($blog->content), 0, 250); !!} . . .</p>
                                        </div>
                                        <div class="ttm-blogbox-desc-footer">
                                            <div class="ttm-blogbox-footer-readmore">
                                                <a href="#">Daha Fazla . . .</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- ttm-blog-classic-box-content end -->
                            </article><!-- post end -->
                        @endforeach
                        <div class="ttm-pagination">
                            {{$blogs->links('partials.paginate')}}
                        </div>
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        @include('partials.sidebar_blog')
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->



    </div><!--site-main end-->
@endsection
