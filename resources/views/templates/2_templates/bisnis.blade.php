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
            <h2><a href="javascript:history.back(-1)"><i class="fa fa-angle-left"></i></a> Bisnis</h2>
            <ol>
                <li><a href="/{{ session('data')->username }}">Home</a></li>
                <li>Bisnis</li>
            </ol>
        </div>
    </div>
</section>
<section class="section business bg-section">
    <div class="container">

        <div class="row mt-5 justify-content-center">
            @foreach ($bisnis_default as $bs)
            <div class="col-lg-4 col-md-6 align-self-center " data-aos="zoom-in" data-aos-delay="100">
                <a href="/bisnis1/{{$bs->slug}}">
                    <div class="icon-box">
                        <div class="icon"> <img src="{{ asset($bs->logo)}}" class="img-fluid" style="width:100px;height:auto;"></div>
                        <h4><a href="/bisnis1/{{$bs->slug}}">{{ $bs->nama }}</a></h4>
                        <p class="mb-3">{!! Str::limit($bs->keterangan_singkat, 100,'...') !!}</p>
                        <a href="/bisnis1/{{$bs->slug}}" class="mt-4 mb-4 btn btn-about">Detil Bisnis</a>
                    </div>
                </a>
            </div>
            @endforeach
            @if(session('level')>0)
            @foreach ($bisnis as $bs)
            <div class="col-lg-4 col-md-6 align-self-center " data-aos="zoom-in" data-aos-delay="100">
                <a href="/bisnis/{{$bs->slug}}">
                    <div class="icon-box">
                        <div class="icon"> <img src="{{ asset($bs->logo)}}" class="img-fluid" style="width:100px;height:auto;"></div>
                        <h4><a href="/bisnis/{{$bs->slug}}">{{ $bs->nama }}</a></h4>
                        <p class="mb-3">{!! Str::limit($bs->keterangan_singkat, 100,'...') !!}</p>
                        <a href="/bisnis/{{$bs->slug}}" class="mt-4 mb-4 btn btn-about">Detil Bisnis</a>
                    </div>
                </a>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection