@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Orang Tua</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data profil
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
              <form action="{{route('profil.update',$profil->id)}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 <div class="form-group">
                  <label class="control_label">Profil</label>
                  <input type="text" name="a" class="form-control" required="" value="{{$profil->profil}}">
                  </div>


                  <div class="form-group">
                  <label class="control_label">Sambutan</label>
                  <input type="text" name="b" class="form-control" required=""  value="{{$profil->sambutan}}">
                  </div>


                  <div class="form-group">
                    <label >Foto kepsek</label><br>
                    <img src="{{asset('img/'.$profil->foto.'')}}" height="100px" width="100px"></td>
                    <br>
                    <input type="file"  name="foto" class="form-control" placeholder="Ganti Gambar">
                </div>

        
                
                 <div class="form-group">
                  <label class="control_label">Sejarah</label>
                  <input type="text" name="c" class="form-control" required="" value="{{$profil->sejarah}}">
                  </div>

                 <div class="form-group">
                    <label >Foto kepsek</label><br>
                    <img src="{{asset('img/'.$profil->gambar.'')}}" height="100px" width="100px"></td>
                    <br>
                    <input type="file"  name="gambar" class="form-control" placeholder="Ganti Gambar">
                </div>

                      <div class="form-group">
                  <label class="control_label">Visi</label>
                  <input type="text" name="d" class="form-control" required="" value="{{$profil->visi}}">
                  </div>

                     <div class="form-group">
                  <label class="control_label">Visi</label>
                  <input type="text" name="e" class="form-control" required="" value="{{$profil->misi}}">
                  </div>
                  <div>
                      <button type="submit" class="btn btn-success">
                          Simpan
                      </button>
                       <button type="reset" class="btn btn-danger">
                          Reset
                      </button>
                  </div>
                                    
              </form>
                  
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
