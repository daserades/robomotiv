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
                            <h1 class="title">Single Product Details</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="index.html"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Single Product Details</span></span>
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
                                        <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-seven.jpg" alt="product-img">
                                        </div>
                                        <div class="product-gallery__image">
                                            <img class="img-fluid" src="images/product/product-seven.jpg" alt="product-img">
                                        </div>
                                    </figure>
                                </div>
                                <div class="summary entry-summary">
                                    <div class="product-rating clearfix">
                                        <ul class="star-rating clearfix">
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <a href="#reviews" class="review-link" rel="nofollow">(<span class="count">1</span> customer review)</a>
                                    </div>
                                    <p class="price">
                                        <span class="Price-amount amount">
                                            <span class="Price-currencySymbol">$</span>20.00
                                        </span>
                                    </p>
                                    <div class="product-details__short-description">
                                        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper.</p>
                                    </div>
                                    <form class="cart" action="#" method="post" enctype="multipart/form-data">
                                        <div class="quantity"><label class="screen-reader-text">Quantity</label>
                                            <input type="number" id="quantity_5c357ca137d75" class="input-text qty text" step="1" min="1" max="50" name="quantity" value="1" title="Qty" size="4">
                                        </div>
                                        <button  id="submit" name="add-to-cart" type="submit" class="cart_button ttm-bgcolor-darkgrey ttm-textcolor-white" title="Submit now">Add to cart</button>
                                    </form>
                                    <div class="add-to-wishlist yith-wcwl-add-to-wishlist">
                                        <div class="product_meta">
                                            <span class="sku_wrapper">SKU:
                                                <span class="sku">woo-polo</span>
                                            </span>
                                            <span class="posted_in">Category:
                                                <a href="#" rel="tag">Grapplers</a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ttm-tabs tabs-for-single-products" data-effect="fadeIn">
                                <ul class="tabs clearfix">
                                    <li class="tab active"><a href="#">Description</a></li>
                                    <li class="tab"><a href="#">Additional information</a></li>
                                    <li class="tab"><a href="#">Reviews (1)</a></li>
                                </ul>
                                <div class="content-tab ttm-bgcolor-white">
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Description</h2>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea comodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <h2>Additional information</h2>
                                        <table class="shop_attributes">
                                            <tbody><tr><th>color</th><td><p>Blue</p></td></tr></tbody>
                                        </table>
                                    </div><!-- content-inner end-->
                                    <!-- content-inner -->
                                    <div class="content-inner">
                                        <div id="reviews" class="woocommerce-Reviews">
                                            <div id="comments">
                                                <h2 class="woocommerce-Reviews-title">1 review for <span>Ladder</span></h2>
                                                <ol class="commentlist">
                                                    <li class="review">
                                                        <div class="comment_container">
                                                            <img class="avatar" src="images/blog/blog-comment-01.jpg" alt="comment-img" >
                                                            <div class="comment-text">
                                                                <ul class="star-rating">
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                    <li class="fa fa-star"></li>
                                                                </ul>
                                                                <p class="meta">
                                                                    <strong class="eview__author">Cherie </strong><span class="review__dash">–</span>
                                                                    <time class="woocommerce-review__published-date" datetime="2018-11-01T04:58:58+00:00">November 1, 2018</time>
                                                                </p>
                                                                <div class="description">
                                                                    <p>Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante<br>Very good product and amazing quality.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            <div id="review_form_wrapper">
                                                <div class="comment-respond">
                                                    <span class="comment-reply-title">Add a review
                                                        <small><a rel="nofollow" id="cancel-comment-reply-link" href="#">Cancel reply</a></small>
                                                    </span>
                                                    <form action="#" method="post" id="commentform" class="comment-form">
                                                        <p class="comment-notes">
                                                            <span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span>
                                                        </p>
                                                        <div class="comment-form-rating">
                                                            <label for="rating">Your rating</label>
                                                            <ul class="stars">
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                                <li class="fa fa-star-o"></li>
                                                            </ul>
                                                            <select name="rating" id="rating" required="" tabindex="-1">
                                                                <option value="">Rate…</option>
                                                                <option value="5">Perfect</option>
                                                                <option value="4">Good</option>
                                                                <option value="3">Average</option>
                                                                <option value="2">Not that bad</option>
                                                                <option value="1">Very poor</option>
                                                            </select>
                                                        </div>
                                                        <p class="comment-form-comment">
                                                            <label for="comment">Your review&nbsp;<span class="required">*</span></label>
                                                            <textarea id="comment" name="comment" cols="45" rows="8" required=""></textarea>
                                                        </p>
                                                        <p class="comment-form-author">
                                                            <label for="author">Name&nbsp;<span class="required">*</span></label>
                                                            <input id="author" name="author" type="text" value="" required="">
                                                        </p>
                                                        <p class="comment-form-email">
                                                            <label for="email">Email&nbsp;<span class="required">*</span></label>
                                                            <input id="email" name="email" type="email" value="" required="">
                                                        </p>
                                                        <p class="form-submit">
                                                            <input name="submit" type="submit" class="submit btn btn-fill btn-dark" value="Submit">
                                                        </p>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related products">
                            <h2>Related products</h2>
                            <div class="products row">
                                <!-- product -->
                                <div class="product col-md-4 col-sm-6 col-xs-12">
                                    <div class="ttm-product-box">
                                        <!-- ttm-product-box-inner -->
                                        <div class="ttm-product-box-inner">
                                            <div class="ttm-shop-icon">
                                                <div class="product-btn"><a href="#" class="add-to-cart-btn"><i class="ti ti-shopping-cart"></i></a></div>
                                                <div class="product-btn"><a href="#" class="search-btn"><i class="ti ti-search"></i></a></div>
                                            </div>
                                            <div class="ttm-product-image-box">
                                                <img class="img-fluid" src="images/product/product-one.jpg" alt="">
                                            </div>
                                        </div><!-- ttm-product-box-inner end -->
                                        <div class="ttm-product-content">
                                            <a class="ttm-product-title" href="#">
                                                <h2>Screwdriver</h2>
                                            </a>
                                            <div class="star-ratings">
                                                <ul class="rating">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                            </div>
                                            <span class="price"><span class="product-Price-amount">
                                                <span class="product-Price-currencySymbol">$</span>35.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div><!-- product end-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 widget-area sidebar-right ttm-col-bgcolor-yes ttm-bg ttm-right-span ttm-bgcolor-grey">
                        <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                        <aside class="widget widget-search">
                            <form role="search" method="get" class="search-form  box-shadow" action="#">
                                <label>
                                    <span class="screen-reader-text">Search for:</span>
                                    <input type="search" class="input-text" placeholder="Search …" value="" name="s">
                                </label>
                                <input type="submit" class="search-submit" value="Search">
                            </form>
                        </aside>
                        <aside class="widget widget-Categories">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <li><a href="#">Carpentry</a><span>3</span></li>
                                <li><a href="#">Electrical</a><span>3</span></li>
                                <li><a href="#">Flooring</a><span>3</span></li>
                                <li><a href="#">Home Maintenance</a><span>4</span></li>
                                <li><a href="#">Industrial</a><span>3</span></li>
                                <li><a href="#">Painting</a><span>2</span></li>
                                <li><a href="#">Plumber</a><span>5</span></li>
                            </ul>
                        </aside>
                        <aside class="widget tagcloud-widget">
                            <h3 class="widget-title">Tags</h3>
                            <div class="tagcloud">
                                <a href="#" class="tag-cloud-link">Design</a>
                                <a href="#" class="tag-cloud-link">Dry Wall</a>
                                <a href="#" class="tag-cloud-link">Electrical</a>
                                <a href="#" class="tag-cloud-link">Furniture</a>
                                <a href="#" class="tag-cloud-link">Handywork</a>
                                <a href="#" class="tag-cloud-link">Painting</a>
                                <a href="#" class="tag-cloud-link">Pools</a>
                                <a href="#" class="tag-cloud-link">Roofing</a>
                            </div>
                        </aside>
                        <aside class="widget widget_media_image">
                            <a href="#"><img class="img-fluid" src="images/widget-banner.jpg" alt="widget-banner"></a>
                        </aside>
                    </div>
                </div><!-- row end -->
            </div>
        </div>
        <!-- sidebar end -->

    </div><!--site-main end-->
@endsection
