@extends('templates.3_templates.master')
@section('nav')
@include('templates.3_templates.nav-content')
@stop
@section('content')

<?php
$name = session('data')->username
?>

<section class="header" id="home">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12 col-md-12 col-sm-12 header-text wow fadeInLeft" data-wow-delay="1000ms">
                <h2>Kontak</h2>
                <ul class="page-breadcrumb ">
                    <li><a href="/{{ session('data')->username }}"><i class="fas fa-home"></i>Home <i class="fas fa-angle-double-right white-icon"></i></a></li>
                    <li>Kontak</li>
                    <br>
                    <li> <a href="javascript:history.back(-1)" class="back-button"><i class="fa fa-chevron-left mr-2"></i>Kembali</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>
<section id="contact" class="contacts main-page">
    <div class="container" data-aos="fade-up">
        <div class="row">
            @if (!@empty($data->map))
            <div class="col-lg-12">
                <div class="info-box mb-4">
                    <iframe src="{{$data->map}}" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
            @endif
            @if (!@empty($data->alamat))
            <div class="col-lg-12">
                <div class="info-box mb-4">
                    <i class="fa fa-map"></i>
                    <h3>Alamat</h3>
                    <p>{{$data->alamat}}, {{$data->kelurahan}}, {{$data->subdistrict->subdistrict_name}}, {{$data->city->city_name.' '.$data->city->type}}, {{$data->province->province}} {{$data->kd_pos}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-12">
                <div class="info-box mb-4">
                    <i class="fa fa-map"></i>
                    <h3>Alamat</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
            @if (!@empty($data->email))
            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>{{$data->email}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-envelope"></i>
                    <h3>Email</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
            @if (!@empty($data->telp))
            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-phone"></i>
                    <h3>Telepon</h3>
                    <p>{{$data->telp}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-phone"></i>
                    <h3>Telepon</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
            @if (!@empty($data->tube))
            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-youtube"></i>
                    <h3>Youtube</h3>
                    <p>{{$data->tube}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-4 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-youtube"></i>
                    <h3>Youtube</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
               @if (!@empty($data->wa))
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-whatsapp"></i>
                    <h3>Whatsapp</h3>
                    <p>{{$data->wa}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-whatsapp"></i>
                    <h3>Whatsapp</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
            @if (!@empty($data->fb))
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-facebook"></i>
                    <h3>Facebook</h3>
                    <p>{{$data->fb}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-facebook"></i>
                    <h3>Facebook</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
            @if (!@empty($data->twitter))
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-twitter"></i>
                    <h3>Twitter</h3>
                    <p>{{$data->twitter}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-twitter"></i>
                    <h3>Twitter</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
            @if (!@empty($data->ig))
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-instagram"></i>
                    <h3>Instagram</h3>
                    <p>{{$data->ig}}</p>
                </div>
            </div>
            @else
            <div class="col-lg-3 col-md-6">
                <div class="info-box  mb-4">
                    <i class="fa fa-instagram"></i>
                    <h3>Instagram</h3>
                    <p>-</p>
                </div>
            </div>
            @endif
        </div>

    </div>
</section>

@endsection