@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data ppdb</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data ppdb
                <div class="panel-title pull-right"><a href="{{ route('ppdb.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                <table class="table">
                <thead>
                	<tr>
                		<th>Periode</th>
                		<th>Tanggal Penerimaan</th>
                		<th>Lokasi</th>
                	
                		<th colspan="2">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($ppdb as $data)
                		<tr>
                			<td>{{$data->periode}}</td>
                            <td>{{$data->tanggalpenerimaan}}</td>
                		
                          
                			<td>{{$data->lokasi}}</td>
                       
                                
                			<td>
                  			</td>
                			<td>
                				<a class="btn btn-warning" href="{{ route('ppdb.edit',$data->id)}}">Edit</a></td><td>
                				</td>



                				<td>
                				<form action="{{route('ppdb.destroy',$data->id)}}" method="post">

                				<input name="_method" type="hidden" value="DELETE">
                				<input name="_token" type="hidden">
                				<input class="btn btn-danger" type="submit" value="Delete">
                				{{csrf_field()}}
                					
                				</form>
                				</td>
                				
                				@endforeach
                			</td>
                		</tr>
                	</tbody>
                </table>
                	
                </div>

             
                
                </div>
            </div>
        </div>
    
@endsection
