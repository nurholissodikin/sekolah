<?php

namespace App\Http\Controllers;

use App\fasilitas;
use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $fasilitas =  fasilitas::all();;
        return view('fasilitas.index',compact('fasilitas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
             return view('fasilitas.create');
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
          $fasilitas = new fasilitas;
        $fasilitas ->nama = $request ->a;
    
     
        
           if ($request->hasFile('foto')) {
            $fasilitass = $request->file('foto');
            $extension = $fasilitass->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $fasilitass->move($destinationPath, $filename);
                $fasilitas->foto=$filename;
        }
           $fasilitas ->ket = $request ->b;
           
        $fasilitas ->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function show(fasilitas $fasilitas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
            $fasilitas= fasilitas::findOrFail($id);
        return view('fasilitas.edit')->with(compact('fasilitas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         $fasilitas= fasilitas::findOrFail($id);
         $fasilitas ->nama = $request ->a;
    
     
        
           if ($request->hasFile('foto')) {
            $fasilitass = $request->file('foto');
            $extension = $fasilitass->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $fasilitass->move($destinationPath, $filename);
                $fasilitas->foto=$filename;
        }
           $fasilitas ->ket = $request ->b;
           
        $fasilitas ->save();
        return redirect()->route('fasilitas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fasilitas  $fasilitas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
              $fasilitas = fasilitas::findOrFail($id);
        $fasilitas ->delete();
         return redirect()->route('fasilitas.index');
    }
}
