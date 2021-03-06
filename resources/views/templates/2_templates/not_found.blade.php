@extends('templates.2_templates.master')
@section('nav')
@include('templates.2_templates.nav-content')
@stop
@section('content')
<section class="product-list section-bg">
    <div class="container" data-aos="fade-up">
        <div class="row mt-5" data-aos="fade-left">

            <div class="col-md-4 mt-5">
                <a href="javascript:history.back(-1)" class="btn btn-info btn-sm text-center"><i class="fa fa-chevron-left"></i> Kembali</a>
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <img src="{{ asset('templates/2_mysuperboss/images/404.png') }}" class="img-fluid" style="width: 400px;" />
                    <h4 style="color:#3a74a7;">{{$message}} </h4>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection