@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data ekskul</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data ekskul
                <div class="panel-title pull-right"><a href="{{ route('ekskul.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                <table class="table">
                <thead>
                	<tr>
                		<th>Nama Ekskul</th>
                		<th>Foto</th>
                		<th colspan="2">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($ekskul as $data)
                		<tr>
                			<td>{{$data->nama}}</td>
                          
                			<td><img src="{{asset('img/'.$data->foto.'')}}" height="100px" width="100px"></td>
                          
                		
                  			
                			<td>
                				<a class="btn btn-warning" href="{{ route('ekskul.edit',$data->id)}}">Edit</a></td><td>
                				</td>



                				<td>
                				<form action="{{route('ekskul.destroy',$data->id)}}" method="post">

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
