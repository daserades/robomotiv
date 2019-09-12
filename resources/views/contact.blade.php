@extends('layouts.master')

@section('content')
    <!--site-main start-->
    <div class="site-main">

        <div class="ttm-row map-section ttm-bgcolor-white">
            <div class="map-wrapper">
                <div id="map_canvas">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d196279.019517971!2d30.404730377605865!3d39.76525880143579!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cc3e08220c0e5f%3A0xbc89395938049a08!2sEski%C5%9Fehir!5e0!3m2!1str!2str!4v1568120192485!5m2!1str!2str" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>

        <section class="ttm-row pb-160 res-991-pb-100 clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 pr-60 res-767-pr-15">
                        <!-- section title -->
                        <div class="section-title with-desc clearfix">
                            <div class="title-header">
                                <br>
                                <h2 class="title">İletişim Formu</h2>
                            </div>
                        </div><!-- section title end -->
                        <form id="ttm-contactform" class="ttm-contactform wrap-form clearfix" method="post" action="{{route('contact_post')}}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-user"></i><input name="name" type="text" value="" placeholder="İsim - Soyisim" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-mobile"></i><input name="gsm" type="text" value="" placeholder="GSM" required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-email"></i><input name="mail" type="email" value="" placeholder="E-Posta" required="required"></span>
                                    </label>
                                </div>
                                <div class="col-lg-6">
                                    <label>
                                        <span class="text-input"><i class="ttm-textcolor-skincolor ti-location-pin"></i><input name="city" type="text" value="" placeholder="Şehir" required="required"></span>
                                    </label>
                                </div>
                            </div>
                            <label>
                                <span class="text-input"><i class="ttm-textcolor-skincolor ti-comment"></i><textarea name="message" cols="40" placeholder="Mesajınız . . ." required="required"></textarea></span>
                            </label>
                            <input name="submit" type="submit" id="submit" class="submit ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black" value="Formu Gönder">
                        </form>

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-5">
                        <div class="ttm-rounded-shadow-box pt-40 pr-50 pb-55 pl-50 box-shadow2 res-767-mt-40 clearfix">
                            <h4>İletişim Bilgileri</h4>
                            <ul class="ttm_contact_widget_wrapper">
                                <li><i class="ttm-textcolor-skincolor ti ti-location-pin"></i>{{setting('iletisim.address')}}</li>
                                <li><i class="ttm-textcolor-skincolor ti ti-mobile"></i>{{setting('iletisim.phone')}}</li>
                                <li><i class="ttm-textcolor-skincolor ti ti-comment"></i><a href="mailto:{{setting('iletisim.email')}}">{{setting('iletisim.email')}}</a></li>
                            </ul>
                            <div class="social-icons circle social-hover">
                                <ul class="list-inline">
                                    <li class="social-facebook"><a class="tooltip-top ttm-textcolor-skincolor" target="_blank" href="{{setting('iletisim.facebook')}}" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li class="social-twitter"><a class="tooltip-top ttm-textcolor-skincolor" target="_blank" href="{{setting('iletisim.twitter')}}" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li class="social-gplus"><a class=" tooltip-top ttm-textcolor-skincolor" target="_blank" href="{{setting('iletisim.youtube')}}" data-tooltip="Youtube"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li class="social-linkedin"><a class=" tooltip-top ttm-textcolor-skincolor" target="_blank" href="{{setting('iletisim.linkedin')}}" data-tooltip="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div><!-- row end -->
            </div>
        </section>

    </div><!--site-main end-->
@endsection
