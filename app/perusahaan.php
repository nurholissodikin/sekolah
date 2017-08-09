<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perusahaan extends Model
{
    //
     public function jurusan(){
    	return $this->belongsTo('App\jurusan');
    }
}
