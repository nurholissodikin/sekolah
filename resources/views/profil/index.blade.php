@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
          <center><h1>Data profil</h1></center>
          <div class="panel panel-primary">
                <div class="panel-heading">Data profil
                <div class="panel-title pull-right"><a href="{{ route('profil.create')}}">Tambah</a></div></div>

                <div class="panel-body">
                <table class="table">
                <thead>
                	<tr>
                		<th>Profil</th>
                		<th>Sambutan</th>
                		<th>Foto Kepsek</th>
                		<th>Sejarah</th>
                        <th>Gambar</th>
                        <th>Visi</th>
                        <th>Misi</th>
                		<th colspan="2">Action</th>
                	</tr>
                </thead>

                	<tbody>
                		@foreach($profil as $data)
                		<tr>
                			<td>{{$data->profil}}</td>
                            <td>{{$data->sambutan}}</td>
                			<td><img src="{{asset('img/'.$data->foto.'')}}" height="100px" width="100px"></td>
                          
                			<td>{{$data->sejarah}}</td>
                       
                                    <td><img src="{{asset('img/'.$data->gambar.'')}}" height="100px" width="100px"></td>
                                    <td>{{$data->visi}}</td>
                                        <td>{{$data->misi}}</td>
                			<td>
                  			</td>
                			<td>
                				<a class="btn btn-warning" href="{{ route('profil.edit',$data->id)}}">Edit</a></td><td>
                				</td>



                				<td>
                				<form action="{{route('profil.destroy',$data->id)}}" method="post">

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
