@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Orang Tua</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data book
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
      <form action="{{route('profil.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="form-group">
                  <label class="control_label">Profil</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>


                  <div class="form-group">
                  <label class="control_label">Sambutan</label>
                  <input type="text" name="b" class="form-control" required="">
                  </div>

        

                  <div class="form-group">
                    <label >Foto Kepsek</label>
                    <input type="file"  name="foto" class="form-control">
                </div>
                
                 <div class="form-group">
                  <label class="control_label">Sejarah</label>
                  <input type="text" name="c" class="form-control" required="">
                  </div>

                <div class="form-group">
                    <label >Gambar Lokasi</label>
                    <input type="file"  name="gambar" class="form-control">
                </div>

                      <div class="form-group">
                  <label class="control_label">Visi</label>
                  <input type="text" name="d" class="form-control" required="">
                  </div>

                     <div class="form-group">
                  <label class="control_label">Visi</label>
                  <input type="text" name="e" class="form-control" required="">
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
