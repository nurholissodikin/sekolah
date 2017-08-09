<?php

namespace App\Http\Controllers;

use App\profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
             $profil = profil::all();
        return view('profil.index',compact('profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('profil.create');
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
        $profil = new profil;
        $profil ->profil = $request ->a;
        $profil ->sambutan = $request ->b;
     
        
        if ($request->hasFile('foto')) {
            $profils = $request->file('foto');
            $extension = $profils->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $profils->move($destinationPath, $filename);
                $profil->foto=$filename;
        }
           $profil ->sejarah = $request ->c;
                if ($request->hasFile('gambar')) {
            $profils = $request->file('gambar');
            $extension = $profils->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $profils->move($destinationPath, $filename);
                $profil->gambar=$filename;
        }
             $profil ->visi = $request ->d;
               $profil ->misi = $request ->e;

        $profil ->save();
        return redirect()->route('profil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(profil $profil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
          $profil =  profil::findOrFail($id);
        return view('profil.edit',compact('profil'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
          $profil =  profil::findOrFail($id);
        $profil ->profil = $request ->a;
        $profil ->sambutan = $request ->b;
     
        
        if ($request->hasFile('foto')) {
            $profils = $request->file('foto');
            $extension = $profils->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $profils->move($destinationPath, $filename);
                $profil->foto=$filename;
        }
           $profil ->sejarah = $request ->c;
                if ($request->hasFile('gambar')) {
            $profils = $request->file('gambar');
            $extension = $profils->getClientOriginalExtension();
            $filename = str_random('6'). '.' .$extension;
            $destinationPath = public_path() . 
                DIRECTORY_SEPARATOR . 'img';
                $profils->move($destinationPath, $filename);
                $profil->gambar=$filename;
        }
             $profil ->visi = $request ->d;
               $profil ->misi = $request ->e;

        $profil ->save();
        return redirect()->route('profil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
             $profil = profil::findOrFail($id);
        $profil ->delete();
         return redirect()->route('profil.index');
    }
}
