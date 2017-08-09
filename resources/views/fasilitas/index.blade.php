@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data fasilitas</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data fasilitas
                <div class="panel-title pull-right"><a href="{{ route('fasilitas.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                <table class="table">
                <thead>
                	<tr>
                		<th>Nama fasilitas</th>
                		<th>Foto</th>
                		<th colspan="2">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($fasilitas as $data)
                		<tr>
                			<td>{{$data->nama}}</td>
                          
                			<td><img src="{{asset('img/'.$data->foto.'')}}" height="100px" width="100px"></td>
                          <td>{{$data->ket}}</td>
                		
                  			
                			<td>
                				<a class="btn btn-warning" href="{{ route('fasilitas.edit',$data->id)}}">Edit</a></td><td>
                				</td>



                				<td>
                				<form action="{{route('fasilitas.destroy',$data->id)}}" method="post">

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
