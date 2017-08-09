@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Fasilitas</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Fasilitas
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
      <form action="{{route('fasilitas.store')}}" method="post" enctype="multipart/form-data">
                  {{csrf_field()}}

                  <div class="form-group">
                  <label class="control_label">Nama fasilitas</label>
                  <input type="text" name="a" class="form-control" required="">
                  </div>

        

                  <div class="form-group">
                    <label >Foto</label>
                    <input type="file"  name="foto" class="form-control">
                </div>
                 <div class="form-group">
                  <label class="control_label">Keterangan</label>
                  <input type="text" name="b" class="form-control" required="">
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
