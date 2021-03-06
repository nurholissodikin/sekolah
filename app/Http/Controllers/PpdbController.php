<?php

namespace App\Http\Controllers;

use App\ppdb;
use Illuminate\Http\Request;

class PpdbController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
              $ppdb = ppdb::all();
        return view('ppdb.index',compact('ppdb'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
          return view('ppdb.create');
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
          $ppdb = new ppdb;
        $ppdb ->periode = $request ->a;
        $ppdb ->tanggalpenerimaan = $request ->b;
     
               $ppdb ->lokasi = $request ->c;

        $ppdb ->save();
        return redirect()->route('ppdb.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function show(ppdb $ppdb)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
                  $ppdb =  ppdb::findOrFail($id);
        return view('ppdb.edit',compact('ppdb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
  $ppdb =  ppdb::findOrFail($id);
        $ppdb ->periode = $request ->a;
        $ppdb ->tanggalpenerimaan = $request ->b;
     
               $ppdb ->lokasi = $request ->ec;

        $ppdb ->save();
        return redirect()->route('ppdb.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ppdb  $ppdb
     * @return \Illuminate\Http\Response
     */
    public function destroy(ppdb $ppdb)
    {
        //
                  $ppdb = ppdb::findOrFail($id);
        $ppdb ->delete();
         return redirect()->route('ppdb.index');
    }
}
