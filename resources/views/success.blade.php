@extends('layouts.master')

@section('content')
    <br><br><br><br><br><br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-primary">{{$title}}</h1>
                <p style="font-size: 20px">{{$message}}</p>
            </div>
            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-black mb-15" href="{{route('index')}}">Anasayfaya Dön</a>
        </div>
    </div>

    <br><br><br><br><br><br><br>
@endsection
