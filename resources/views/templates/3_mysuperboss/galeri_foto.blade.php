@extends('templates.3_mysuperboss.master')
@section('nav')
@include('templates.3_mysuperboss.nav-content')
@stop
@section('content')

<?php

$name = session('data')->username
?>
<section class="breadcrumbs">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <h2><a href="javascript:history.back(-1)"><i class="fa fa-angle-left"></i></a> Galeri Foto</h2>
            <ol>
                <li><a href="/{{ session('data')->username }}">Home</a></li>
                <li>Galeri Foto</li>
            </ol>
        </div>

    </div>
</section>

<section class="section galery">
    <div class="container">
        <div class="col-sm-12 col-md-12 ">
            <div class="row">

                @foreach ($gphoto as $photo)
                <div class="col-md-6 col-lg-4 py-4" data-aos="zoom-in" data-aos-delay="100" id="t-{{$photo->id}}" data-bs-toggle="modal" data-bs-target="#modal-foto">
                    <div class="gallery-container">
                        <span id="g-{{$photo->id}}"><img src="{{  asset($photo->file_photo)  }}" class="img-fluid image" id="{{$photo->id}}" style="cursor:pointer" alt="">
                        </span>
                        <div class="overlay">
                            <p class="text p-2">
                                <span id="ket-{{$photo->id}}">{{$photo->keterangan}}</span><br>
                                <span class="small">{{$photo->katagori}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @if(session('level')>0)
                @foreach ($photos as $photo)
                <div class="col-md-6 col-lg-4 py-4" data-aos="zoom-in" data-aos-delay="100" id="t-{{$photo->id}}" data-bs-toggle="modal" data-bs-target="#mo">
                    <div class="gallery-container">
                        <span id="g1-{{$photo->id}}"><img src="{{  asset($photo->file_photo)  }}" class="img-fluid image1" id="f-{{$photo->id}}" style="cursor:pointer" alt="">
                        </span>
                        <div class="overlay">
                            <p class="text">
                                <span id="ket1-{{$photo->id}}">{{$photo->keterangan}}</span><br>
                                <span class="small">{{$photo->katagori}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</section>
@endsection
@section('modal')
<!-- Modal -->
<div class="modal fade" id="modal-foto" tabindex="-1" aria-labelledby="modal-fotoLabel" aria-hidden="true" style="background:rgba(0, 0, 0, 0.4) !important;">
    <div class=" modal-dialog">
        <div class="modal-content" style="background:transparent !important;border:none !important;color:#fff !important;">
            <div class="modal-header" style="border:none !important;padding:0px !important;">
                <h5 class="modal-title" id="modal_title"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-times-circle" style="color:#fff;font-size:30px;"></i></button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div id="img"></div>
                    <p id="ket"></p>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
@section('script')

<script type="text/javascript">
    $(function() {
        $(".image").click(function() {
            var idnya = $(this).attr('id');
            var id = "g-" + idnya;
            var gambar = $("#" + id).html();
            var ket = $("#ket-" + idnya).html();
            $("#img").html(gambar);
            $("#modal_title").html(ket)
            $("#modal-foto").modal();
        })
        $(".image1").click(function() {
            var idnya = $(this).attr('id').split("-");
            var id = "g1-" + idnya[1];
            var gambar = $("#" + id).html();
            var ket = $("#ket1-" + idnya[1]).html();
            $("#img").html(gambar);
            $("#modal_title").html(ket)
            $("#modal-foto").modal('toggle');
        })
    })
</script>
@endsection