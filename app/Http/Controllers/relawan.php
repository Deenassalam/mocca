<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelRelawan;
use Image;
use Response;

class relawan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelRelawan::paginate(5);
        return view('relawans',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new    modelRelawan();
        $data->id_rel = $request->id_rel;
       $data->nama = $request->nama_ket;
       $data->jenisKel = $request->jenisKel;
       $data->email = $request->email_ket;
       $data->noHP = $request->hp_ket;
       $data->keahlian = $request->keahlian;
       $data->alamat = $request->alamat;
       $data->usia = $request->usia;
       $data->tim = "-";
       $file = $request->file('file');
       $ext = $file->getClientOriginalExtension();
       $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);
        $data->foto = $newName;
       $data->save();
       return redirect()->route('kelola')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = modelRelawan::where('id_relawan',$id)->get();

        return view('editrelawan',compact('data'));
    }


    public function editRelawanTim($id)
    {
        $data = modelRelawan::where('id_relawan',$id)->get();

        return view('pilihtim',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_relawan)
    {
        $data = modelRelawan::where('id_relawan',$id_relawan)->first();
        return $data->nama;
        
       /*$data->nama = $request->nama;
       $data->status = $request->status;
       $data->email = $request->email;
       $data->noHP = $request->nohp;
       $data->keahlian = $request->keahlian;
       $data->alamat = $request->alamat;
       $data->usia = $request->usia;
        $data->save();
        return redirect()->route('kelola')->with('alert-success','Data berhasil diubah!');*/
    }
    public function updateTim(Request $request,$id_relawan){
        $data = modelRelawan::where('id_relawan',$id_relawan)->first();
        $data->tim = $request->tim;
        $data->status = "Siaga";
        $data->save();
        return redirect()->route('buattim');
    }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_relawan)
    {
        $data = modelRelawan::where('id_relawan',$id_relawan)->first();
        $data->delete();
        return redirect()->route('kelola')->with('alert-success','Data deleted');
    }
}
