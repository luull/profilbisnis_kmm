@extends('templates.1_templates.master')
@section('meta')
<meta property="og:title" content="{{ $produk->nama_brg }}" />
<meta property="og:image" content="{{ (@file_exists(public_path($produk->foto))) ? asset($produk->foto) : asset('images/no-product.svg') }}" />
<meta property="og:description" content="{{ $produk->keterangan_singkat }}" />
<meta property="og:type" content="website" />
@endsection
@section('nav')
@include('templates.1_templates.nav-content')
@stop
@section('content')
<?php
$name = session('data')->username
?>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="javascript:history.back(-1)"><i class="fa fa-angle-left mr-2"></i>Kembali</a></li>
    <li class="breadcrumb-item"><a href="/{{ session('data')->username }}">Home</a></li>
    <li class="breadcrumb-item"><a href="/produk">Produk</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Produk</li>
  </ol>
</nav>
<section class="section-bg product-detail">
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="col-lg-3 col-md-3">
                    <?PHP
                    $firsturl = str_replace(" ", "%20", $produk->nama_brg);
                    $resulturl = str_replace("&", "n", $firsturl);
                    ?>
                <div class="row justify-content-center " style="background:#fff;">
                    <img src="{{ (@file_exists(public_path($produk->foto))) ? asset($produk->foto) : asset('images/no-product.svg') }}" class="img-fluid align-top " alt="{{ $produk->nama_brg }}">
                </div>
                <a href="https://wa.me/{{ $no_wa }}?text={{ $wa_template }} {{ $resulturl }}" target="_blank" class="btn_common btn_secondry btn_full mt-3"><i class="fa fa-cart-plus mr-3"></i> Beli</a>

            </div>

            <div class="col-lg-1 col-md-1"></div>
            <div class="col-lg-8 col-md-8">
                @include('templates.global.shared')
                <h2 class="section-title text-dark" data-aos="fade-left" data-aos-delay="200"><strong>{{ $produk->nama_brg }}</strong></h2>
                <h3 style="font-family: 'Poppins', sans-serif;color:#3a74a7"><strong>Rp. <?PHP echo number_format($produk->harga); ?></strong></h3>
                @if($testimoni < 1) <br>
                    @else
                    <a class="testimoni-text mb-3" style="font-size:18px;font-weight:300" href="{{ env('APP_URL') }}/testimoni/{{$produk->slug}}"><i class="fa fa-quote-right"></i> Testimoni</a>
                    @endif
                    <hr>
                    <p class="subtitle " data-aos="fade-left">Detil Produk</p>
                    <p class="mb-4" data-aos="fade-left" data-aos-delay="300">{!! $produk->keterangan !!}.</p>
            </div>
        </div>
    </div>
</section>
@endsection