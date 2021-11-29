@extends('templates.2_templates.master')
@section('nav')
@include('templates.2_templates.nav-content')
@stop
@section('content')

<?php
$name = session('data')->username
?>
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2><a href="javascript:history.back(-1)"><i class="fa fa-angle-left"></i></a> Daftar Produk {{ Str::upper($nama_bisnis) }}</h2>
            <ol>
                <li><a href="/{{ session('data')->username }}">Home</a></li>
                <li>Daftar Produk</li>
            </ol>
        </div>

    </div>
</section>
<section id="steps" class="steps section">
    <div class="container">
        @include('templates.global.search2')
        <div class="row justify-content-center no-gutters" data-aos="fade-up">
            @foreach ($produk as $item)
            <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
                <a href="{{ env('APP_URL') }}/{{$link}}/{{ session('data')->username }}/{{$item->slug}}">
                    <?PHP
                    $firsturl = str_replace(" ", "%20", $item->nama_brg);
                    $resulturl = str_replace("&", "n", $firsturl);
                    ?>
                    <img src="{{ asset($item->foto) }}" class="img-fluid" alt="">
                    <span class="mt-4">Rp.<?PHP echo number_format($item->harga); ?></span>
                    <h4>{{ $item->nama_brg }}</h4>
                    <p>{!! Str::limit($item->keterangan, 150, '...') !!}</p>
                </a>

                <a href="{{ env('APP_URL') }}/{{$link}}/{{ session('data')->username }}/{{$item->slug}}" class="btn btn-product2 mt-4 mb-3">Detail</a>
                <a href="https://wa.me/{{ $no_wa }}?text={{ $wa_template1 }} {{ $resulturl }}" target="_blank" class="btn btn-product mt-4 mb-3">Beli</a>

            </div>
            @endforeach


        </div>

    </div>
</section>

@endsection