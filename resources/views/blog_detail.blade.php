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
                        <!-- post -->
                        <article class="post ttm-blog-classic">
                            <header class="entry-header">
                                <span class="ttm-meta-line cat-links">
                                    <a href="#">Electrical</a>,
                                    <a href="#">Industrial</a>
                                </span>
                                <h2 class="entry-title"><a href="single-blog.html">Equipping Researchers in the Developing.</a></h2>
                            </header>
                            <!-- post-featured-wrapper -->
                            <div class="post-featured-wrapper">
                                <div class="post-featured">
                                    <img class="img-fluid" src="images/portfolio/post-three-1200x800.jpg" alt="">
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
                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable. If you are going to use a passage of Lorem Ipsum.</p>
                                    </div>
                                    <div class="ttm-blogbox-desc-footer">
                                        <div class="ttm-entry-meta-wrapper">
                                            <div class="ttm-entry-meta">
                                                <span class="ttm-meta-line byline">
                                                    <img src="images/admin-avtar.png" alt="" class="avatar">
                                                    <span class="author"><a class="url fn n" href="#">admin</a></span>
                                                </span>
                                                <span class="ttm-meta-line comments-link">
                                                    <a href="">3 Comments</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="ttm-social-share-wrapper">
                                            <div class="social-icons circle">
                                                <ul>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                                    <li><a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="ttm-blogbox-footer-readmore">
                                            <a href="#">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                            </div> <!-- ttm-blog-classic-box-content end -->
                        </article><!-- post end -->
                        <!-- post -->
                    </div>
                    @include('partials.sidebar_blog')
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->


    </div><!--site-main end-->
@endsection
