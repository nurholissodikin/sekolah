
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data Orang Tua</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data ppdb
                <div class="panel-title pull-right">
                <a href="{{ URL::previous() }}">Kembali</a></div></div>

                <div class="panel-body">
              <form action="{{route('ppdb.update',$ppdb->id)}}" method="POST" enctype="multipart/form-data">
              <input type="hidden" name="_method" value="PUT">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                 
                    <div class="form-group">
                  <label class="control_label">Periode</label>
                  <input type="text" name="a" class="form-control" required="" value="{{$ppdb->periode}}">
                  </div>

                 <div class="form-group">
                  <label class="control_label">Tanggal Penerimaan</label>
                  <input type="text" name="b" class="form-control" required="" value="{{$ppdb->tanggalpenerimaan}}">
                  </div>

              <div class="form-group">
                  <label class="control_label">Lokasi</label>
                  <input type="text" name="c" class="form-control" required="" value="{{$ppdb->lokasi}}">
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
