@extends('templates.8_mysuperboss.master')
@section('nav')
@include('templates.8_mysuperboss.nav-content')
@stop
@section('content')

<?php
$name = session('data')->username
?>
<section class="about-banner pb-0 padding-100">
    <div class="blog-detail-img parallaxie">
        <div class="bg-overlay opacity-7 bg-blue"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-capitalize mb-15 text-center text-white">Produk</h2>
                    <div class="page_nav pt-10">
                        <a href="/{{ session('data')->username }}" class="text-white blog-15">Home</a> <span class="text-white blog-15"><i class="fa fa-angle-double-right text-white angle-font"></i>Produk</span>
                        <br>
                        <p style="float: left !important;"><a href="javascript:history.back(-1)" class="back-button"><i class="fa fa-chevron-left mr-2"></i>Kembali</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="plan" class="price-sec">
    <div class="container">
        @include('templates.global.search')
        <!--Team-->
        <div class="row wow slideInUp">
            <!--price item-->
            @foreach ($produk_default as $item)
            <div class="col-md-4">
                <div class="price-item text-left">
                    <?PHP
                    $firsturl = str_replace(" ", "%20", $item->nama_brg);
                    $resulturl = str_replace("&", "n", $firsturl);
                    ?>
                    <img src="{{ asset($item->foto) }}" class="img-fluid" style="height:380px;width:100%;" alt="">
                    <h3 class="alt-font d-inline-block font-weight-600 mb-3 mt-3 blue text-capitalize">{{ $item->nama_brg }}</h3>
                    <small style="font-size: 24px;color:#c32865">Rp.<?PHP echo number_format($item->harga); ?></small>
                    <div class="price-tag d-flex align-items-center mt-3">
                        <div class="price alt-font text-dark-gray">
                            <p>{!! Str::limit($item->keterangan_singkat, 150, '...') !!}</p>
                        </div>
                    </div>
                    <br>
                    <a href="/produk1/{{ session('data')->username }}/{{$item->slug}}" class="btn btn-rounded btn-medium btn-transparent text-capitalize">Detail</a>
                    <a href="https://wa.me/{{ $no_wa }}?text={{ $wa_template1 }} {{ $resulturl }}" target="_blank" class="btn btn-rounded btn-medium btn-green w-50 text-capitalize">Beli</a>
                </div>
            </div>
            @endforeach
            @if (session('level')>0)
            @foreach ($produk as $item)
            <div class="col-md-4">
                <div class="price-item text-left">
                    <?PHP
                    $firsturl = str_replace(" ", "%20", $item->nama_brg);
                    $resulturl = str_replace("&", "n", $firsturl);
                    ?>
                    <img src="{{ asset($item->foto) }}" class="img-fluid" style="height:380px;width:100%;" alt="">
                    <h3 class="alt-font d-inline-block font-weight-600 mb-3 mt-3 blue text-capitalize">{{ $item->nama_brg }}</h3>
                    <small style="font-size: 24px;color:#c32865">Rp.<?PHP echo number_format($item->harga); ?></small>
                    <div class="price-tag d-flex align-items-center mt-3">
                        <div class="price alt-font text-dark-gray">
                            <p>{!! Str::limit($item->keterangan_singkat, 150, '...') !!}</p>
                        </div>
                    </div>
                    <br>
                    <a href="/produk/{{ session('data')->username }}/{{$item->slug}}" class="btn btn-rounded btn-medium btn-transparent text-capitalize">Detail</a>
                    <a href="https://wa.me/{{ $no_wa }}?text={{ $wa_template1 }} {{ $resulturl }}" target="_blank" class="btn btn-rounded btn-medium btn-green w-50 text-capitalize">Beli</a>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection