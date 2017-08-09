<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jurusan extends Model
{
    //
    public function jurusan(){
    	return $this->hasMany('App\perusahaan');
    }
}
