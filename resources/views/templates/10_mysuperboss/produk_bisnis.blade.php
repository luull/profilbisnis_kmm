@extends('templates.10_mysuperboss.master')
@section('nav')
@include('templates.10_mysuperboss.nav-content')
@stop
@section('content')

<?php
$name = session('data')->username
?>

<section id="slider-sec" class="slider-sec parallax">
    <div class="overlay text-center d-flex justify-content-center align-items-center">
        <div class="slide-contain">
            <h4>Detail Bisnis {{ Str::upper($nama_bisnis) }}</h4>
            <div class="crumbs">
                <nav aria-label="breadcrumb" class="breadcrumb-items">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="/{{ session('data')->username }}">Home</a>
                        </li>
                        <li class="breadcrumb-item"><a href>Detail Bisnis</a></li>
                    </ol>
                    <a class="text-white" href="javascript:history.back(-1)" style="float: left;" class="back-button"><i class="fa fa-chevron-left mr-2"></i>Kembali</a>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="padding-top padding-bottom" id="blog-sec">
    <div class="container">
        @include('templates.global.search2')
        <div class="row wow slideInUp">
            <div class="col-12 latest-blogs">
                <div class="row blog-cards">
                    @foreach ($produk as $item)
                    <div class="col-12 col-lg-4 blog-card">
                           <?PHP
                    $firsturl = str_replace(" ", "%20", $item->nama_brg);
                    $resulturl = str_replace("&", "n", $firsturl);
                    ?>
                        <div class="news-card mt-5">
                            <div class="news-img">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <img src="{{ asset($item->foto) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="news-content">
                                <h5 class="news-heading mt-3 mb-3">{{ $item->nama_brg }}</h5>
                                <h4 style="color:green">Rp.<?PHP echo number_format($item->harga); ?></h4>
                                <hr>
                                <p class="news-text">{!! Str::limit($item->keterangan_singkat, 150, '...') !!}.</p>
                                <a href="{{ env('APP_URL') }}/{{$link}}/{{ session('data')->username }}/{{$item->slug}}" class="btn btn-medium btn-rounded black-and-white-slider-btn">
                                    Detail
                                </a>
                                <a href="https://wa.me/{{ $no_wa }}?text={{ $wa_template1 }} {{ $resulturl }}" target="_blank" class="btn btn-medium btn-rounded yellow-and-white-slider-btn">
                                    Beli
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection