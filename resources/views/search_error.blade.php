@extends('layouts.master')

@section('content')
    <!--error-404 start-->
    <section class="error-404 bg-img3">
        <div class="ttm-big-icon ttm-textcolor-skincolor">
            <i class="fa fa-thumbs-o-down"></i>
        </div>
        <header class="page-header"><h1 class="page-title">404</h1></header>
        <div class="page-content"> <p>Aradığınız Sayfa Bulunamadı</p></div>
        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-15" href="{{route('index')}}">Anasayfa</a>
    </section>
    <!--error-404 end-->
@endsection
