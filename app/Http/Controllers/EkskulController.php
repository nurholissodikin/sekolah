<?php

namespace App\Http\Controllers;

use App\ekskul;
use Illuminate\Http\Request;

class EkskulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $ekskul =  ekskul::all();;
        return view('ekskul.index',compact('ekskul'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //

           return view('ekskul.create');
             
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $ekskul = new ekskul;
        $ekskul ->nama = $request ->a;
    
     
        
           if ($request->hasFile('foto')) {
            $ekskuls = $request->file('foto');
            $extension = $ekskuls->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $ekskuls->move($destinationPath, $filename);
                $ekskul->foto=$filename;
        }
           
        $ekskul ->save();
        return redirect()->route('ekskul.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ekskul  $ekskul
     * @return \Illuminate\Http\Response
     */
    public function show(ekskul $ekskul)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ekskul  $ekskul
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $ekskul= ekskul::findOrFail($id);
        return view('ekskul.edit')->with(compact('ekskul'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ekskul  $ekskul
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        //
        $ekskul= ekskul::findOrFail($id);
        $ekskul ->nama = $request ->a;
    
     
        
           if ($request->hasFile('foto')) {
            $ekskuls = $request->file('foto');
            $extension = $ekskuls->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $ekskuls->move($destinationPath, $filename);
                $ekskul->foto=$filename;
        }
           
        $ekskul ->save();
        return redirect()->route('ekskul.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ekskul  $ekskul
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
            $ekskul = ekskul::findOrFail($id);
        $ekskul ->delete();
         return redirect()->route('ekskul.index');
    }
}
