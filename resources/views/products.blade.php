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
                                                      <span class="ttm-meta-line"><i class="fa fa-calendar"></i><a href="">January 16, 2019</a></span>
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
