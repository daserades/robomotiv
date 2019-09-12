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
                            <h1 class="title">Arama Sonuçları</h1>
                        </div><!-- /.page-title-captions -->
                        <div class="breadcrumb-wrapper">
                                <span>
                                    <a title="Homepage" href="{{route('index')}}"><i class="ti ti-home"></i></a>
                                </span>
                            <span class="ttm-bread-sep">&nbsp; / &nbsp;</span>
                            <span><span>Arama Sonucu</span></span>
                        </div>
                    </div>
                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- page-title end-->


    <!--site-main start-->

    <div class="site-main">

        <!--element-section-->
        <section class="element-row element-style clearfix mt_40">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <div class="section-title clearfix">
                            <h2 class="title">Arama Sonuçları</h2>
                        </div>
                        <div class="ttm-tabs ttm-tab-style-horizontal clearfix">
                            <!-- tabs -->
                            <ul class="tabs clearfix">
                                <li class="tab active"><a href="#">ÜRÜNLER</a></li>
                                <li class="tab"><a href="#">HİZMETLER</a></li>
                                <li class="tab"><a href="#">ÇALIŞMALAR</a></li>
                                <li class="tab"><a href="#">BLOGLAR</a></li>
                            </ul>
                            <div class="content-tab">


                                <div class="content-inner">
                                    <div class="row">
                                        @forelse($products as $product)
                                        <div class="col-lg-2">
                                            <br>
                                            <h5 class="title"><a href="{{route('product_detail', ['category'=>$product->category->slug, 'slug'=>$product->slug])}}">{{$product->title}}</a></h5>
                                        </div>
                                        <div class="col-lg-10">
                                            <p class="pt-15">{!! substr(strip_tags($product->sort_description), 0, 150) !!} . . .</p>
                                        </div>
                                        @empty
                                            <div class="col-lg-12 text-left mt-50">
                                                <p style="font-size: 20px;"><i class="fa fa-times text-danger"></i>&nbsp;&nbsp;&nbsp;&nbsp;Ürünler Kategorisinde Sonuç Bulunamadı</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>


                                <div class="content-inner">
                                    <div class="row">
                                        @forelse($services as $service)
                                            <div class="col-lg-2">
                                                <br>
                                                <h5 class="title"><a href="{{route('service_detail', ['slug'=>$service->slug])}}">{{$service->title}}</a></h5>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pt-15">{!! substr(strip_tags($service->description), 0, 150) !!} . . .</p>
                                            </div>
                                        @empty
                                            <div class="col-lg-12 text-left mt-50">
                                                <p style="font-size: 20px;"><i class="fa fa-times text-danger"></i>&nbsp;&nbsp;&nbsp;&nbsp;Hizmetler Kategorisinde Sonuç Bulunamadı</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>


                                <div class="content-inner">
                                    <div class="row">
                                        @forelse($projects as $project)
                                            <div class="col-lg-2">
                                                <br>
                                                <h5 class="title"><a href="{{route('project_detail', ['slug'=>$project->slug])}}">{{$project->title}}</a></h5>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pt-15">{!! substr(strip_tags($project->summery), 0, 150) !!} . . .</p>
                                            </div>
                                        @empty
                                            <div class="col-lg-12 text-left mt-50">
                                                <p style="font-size: 20px;"><i class="fa fa-times text-danger"></i>&nbsp;&nbsp;&nbsp;&nbsp;Çalışmalar Kategorisinde Sonuç Bulunamadı</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>


                                <div class="content-inner">
                                    <div class="row">
                                        @forelse($blogs as $blog)
                                            <div class="col-lg-2">
                                                <br>
                                                <h5 class="title"><a href="{{route('blog_detail', ['category'=>$blog->category->slug, 'slug'=>$blog->slug])}}">{{$blog->title}}</a></h5>
                                            </div>
                                            <div class="col-lg-10">
                                                <p class="pt-15">{!! substr(strip_tags($blog->content), 0, 150) !!} . . .</p>
                                            </div>
                                        @empty
                                            <div class="col-lg-12 text-left mt-50">
                                                <p style="font-size: 20px;"><i class="fa fa-times text-danger"></i>&nbsp;&nbsp;&nbsp;&nbsp;Bloglar Kategorisinde Sonuç Bulunamadı</p>
                                            </div>
                                        @endforelse
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- element-section end -->
    </div><!--site-main end-->
    <div class="bg-white">
        <br><br><br><br><br>
    </div>

@endsection
