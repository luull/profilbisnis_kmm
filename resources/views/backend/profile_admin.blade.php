@extends('backend.master')
@section('content')
<div class="card">
    <form action="{{route('update_profile_admin')}}" method="post">
        @csrf
        <div class="card-header">
            <h5 class="text-center">DATA PROFIL ADMIN BACKEND</h5>
            <hr>
        </div>
        <div class="card-body">
            @if (session('message'))
                <div class="alert alert-{{session('alert')}} text-center">{{session('message')}}</div>
            @endif    
            <div class="row">
                <div class="col-lg-4 col-md-4 text-center text-md-left">
                    <img src="{{asset($backend_profil->foto)}}" alt="{{$backend_profil->nama}}" class="img img-fluid rounded shadow"  id="img-{{$backend_profil->id}}" >
                                        
                </div>
            <div class="col-lg-8 col-md-8 text-center text-md-left">
                <div class="row p-2" >
                <div class="col-lg-4 col-md-4 text-left">Nama</div>
                <div class="col-lg-8 col-md-8 text-left"><input type="text" class="form-control input-default @error('nama')is-invalid @enderror" value="{{$backend_profil->nama}}" name="nama"> </div>
                </div>
                <div class="row p-2" >
                <div class="col-lg-4 col-md-4 text-left">Handphone</div>
                <div class="col-lg-8 col-md-8 text-left"><input type="text" class="form-control input-default @error('hp')is-invalid @enderror" name="telp" value="{{$backend_profil->telp}}"> </div>
                </div>
                <div class="row p-2" >
                <div class="col-lg-4 col-md-4 text-left">Email</div>
                <div class="col-lg-8 col-md-8 text-left"><input type="text" class="form-control input-default @error('email')is-invalid @enderror" name="email" value="{{$backend_profil->email}}"> </div>
                </div>
                <div class="row p-2" >
                <div class="col-lg-4 col-md-4 text-left">Hak Akses </div>
                
                <div class="col-lg-8 col-md-8 text-left">
                    @if ($backend_profil->akses==1)
                    <select class="form-control input-default @error('akses')is-invalid @enderror" name="akses" >
                        @foreach ($level_admin as $la)
                            @if ($la->kode==$backend_profil->akses)
                            <option value="{{$la->kode}}" selected>{{$la->nama}}</option>
                            @else
                            <option value="{{$la->kode}}">{{$la->nama}}</option>
                            @endif
                        @endforeach
                    </select>
                      @else 
                    {{$backend_profil->level_akses->nama}} 
                    @endif
                    </div>
                    
                </div>
                <div class="row p-2" >
                <div class="col-lg-4 col-md-4 text-left">Last login</div>
                <div class="col-lg-8 col-md-8 text-left">{{$backend_profil->last_login}}</div>
                </div>
               
                
            </div>
            
        </div>
    </div>
    <div class="card-footer">
    <div class="row justify-content-center">
        <input type="submit" class="btn btn-info" value="Update" >
    </div>   
    </div>
</form>
</div>
@endsection