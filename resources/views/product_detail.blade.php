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
                            <h1 class="title">ÜRÜNLER</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i></a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span>
                                    <a title="Homepage" href="{{route('products')}}">Ürünler</a>
                                </span>
                                <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                                <span>
                                    <a title="Homepage" href="{{route('products_category', ['category'=>$product->category->slug])}}">{{$product->category->title}}</a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>{{$product->title}}</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->

    <!--site-main start-->
    <div class="site-main single">

        <!-- sidebar -->
        <div class="sidebar ttm-sidebar-right ttm-bgcolor-white break-991-colum clearfix">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-9 content-area">
                        <div class="ttm-single-product-details product">
                            <div class="ttm-single-product-info clearfix">
                                <div class="product-gallery images">

                                    <figure class="ttm-product-gallery__wrapper">
                                        <!-- featured-imagebox -->
                                        <div class="featured-imagebox featured-imagebox-portfolio ttm-box-view-top-image">
                                            <div class="ttm-box-view-content-inner">
                                                <!-- featured-thumbnail -->
                                                <div class="featured-thumbnail">
                                                    <img class="img-fluid" src="{{Voyager::image($product->thumbnail('cropped'))}}" alt="image">
                                                </div><!-- featured-thumbnail end-->
                                                <!-- ttm-box-view-overlay -->
                                                <div class="ttm-box-view-overlay">
                                                    <div id="searchSlip" class="featured-iconbox ttm-media-link">
                                                        <a class="ttm_prettyphoto ttm_image" title="{{$product->title}}" data-rel="prettyPhoto" href="{{Voyager::image($product->thumbnail('cropped'))}}">
                                                            <i class="ti ti-search"></i>
                                                        </a>
                                                    </div>
                                                </div><!-- ttm-box-view-overlay end-->
                                            </div>
                                        </div><!-- featured-imagebox -->
                                    </figure>

                                </div>
                                <div class="summary entry-summary">
                                    <div class="product-details__short-description">
                                        <p>{!! $product->sort_description !!}</p>
                                    </div>
                                    <div class="add-to-wishlist yith-wcwl-add-to-wishlist">
                                        <div class="product_meta">
                                            <span class="posted_in">Kategori:
                                                <a href="{{route('products_category', ['category'=>$product->category->slug])}}" rel="tag">{{$product->category->title}}</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">Açıklama</a></li>
                                    <li class="tab"><a href="#">Ürün Özellikleri</a></li>
                                </ul>
                                <div class="content-tab ttm-bgcolor-white">
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>{{$product->title}}</h2>
                                        <p>{!! $product->long_description !!}</p>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Özellikler</h2>
                                        <table class="shop_attributes">
                                            @foreach($product_property as $property)
                                            <tbody><tr><th>{{$property->type}}</th><td><p>{{$property->value}}</p></td></tr></tbody>
                                            @endforeach
                                        </table>
                                    </div><!-- content-inner end-->
                                </div>
                            </div>
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
