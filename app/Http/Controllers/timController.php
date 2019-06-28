<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelTim;
use App\modelBencana;

class timController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelTim::all();
        return view('tim',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new    modelTim();
       $data->nama_tim = $request->nama_tim;
       $data->bencana = "";
       $data->jenis_tim = $request->jenis_tim;
       $data->save();
       return redirect()->route('buattim')->with('alert-success','Berhasil Menambahkan Data!');
    }

    public function anggota(Request $request){
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = modelTim::where('id_tim',$id)->get();
        return view('formmobilisasi',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_tim)
    {
         $data = modelTim::where('id_tim',$id_tim)->first();
        $data->bencana = $request->bencana;
        $data->save();
        return redirect()-> route('mobilisasi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_tim)
    {
        $data = modelTim::where('id_tim',$id_tim)->first();
        $data->delete();
        return redirect()->route('tabeltim')->with('alert-success','Data deleted');
    }
}
