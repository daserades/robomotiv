{{--
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
                            <h1 class="title">Blog Grid View</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Blog Grid View</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row pb-70 ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                    <div class="col-md-12 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/blog/02.jpg" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">Simple Steps for Replacing old Tiling</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end -->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/blog/03.jpg" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">February 5, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">Danger of Having High Water Pressure</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/blog/04.jpg" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">March 6, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">When have a problem with Cracked Pipes</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="ttm-post-format-video">
                                <iframe src="https://www.youtube.com/embed/nKHiP7NH75E" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">March 24, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">Got a Leaking? Hire an experienced Plumber</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/blog/06.jpg" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 16, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">Handling Clogged Shower Drain Problems</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/blog/07.jpg" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">Choosing Roofing Material for Home</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/blog/08.jpg" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">The Most Common Painting Mistakes</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <!-- featured-imagebox-post -->
                        <div class="featured-imagebox featured-imagebox-post">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="images/blog/09.jpg" alt="">
                            </div>
                            <div class="featured-content featured-content-post">
                                <div class="post-meta">
                                    <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="single-blog.html">January 31, 2019</a></span>
                                </div>
                                <div class="post-title featured-title">
                                    <h5><a href="single-blog.html">Protecting Your Outdoor Tankless Water Heater</a></h5>
                                </div>
                            </div>
                        </div><!-- featured-imagebox-post end-->
                    </div>
                    <div class="col-lg-12">
                        <div class="ttm-pagination">
                            <span class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="next page-numbers" href="#"><i class="ti ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    @include('partials.sidebar_product')
                </div>
            </div>
        </div>

    </div><!--site-main end-->

@endsection
--}}



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
                            <h1 class="title">Ürünler</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            @if(is_active(['urunler/*']))
                                <span>
                                    <a title="Homepage" href="{{route('products')}}">Ürünler</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span><span>
                                    {{$category->title}}
                                </span></span>
                            @else
                                <span><span>
                                    Ürünler
                                </span></span>
                            @endif
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
                        <div class="row">
                            @foreach($products as $product)
                                <div class="col-md-6">
                                    <!-- featured-imagebox-post -->
                                    <div class="featured-imagebox featured-imagebox-post">
                                        <div class="featured-thumbnail">
                                            <img class="img-fluid" src="{{Voyager::image($product->thumbnail('cropped'))}}" alt="">
                                        </div>
                                        <div class="featured-content featured-content-post">
                                            <div class="post-meta">
                                                <span class="ttm-meta-line"><i class="fa fa-calendar"></i>{{$product->created_at->format('d-m-Y')}}</span>
                                            </div>
                                            <div class="post-title featured-title">
                                                <h5><a href="{{route('product_detail', ['category'=>$product->category->slug, 'slug'=>$product->slug])}}">{{$product->title}}</a></h5>
                                            </div>
                                        </div>
                                    </div><!-- featured-imagebox-post -->
                                </div>
                            @endforeach
                        </div><!-- post end -->
                        <div class="ttm-pagination">
                            {{$products->links('partials.paginate')}}
                        </div>
                    </div>

                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        @include('partials.sidebar_product')
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->
    </div><!--site-main end-->

@endsection
