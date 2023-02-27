<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Http\Requests\StoreMasyarakatRequest;
use App\Http\Requests\UpdateMasyarakatRequest; 

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['masyarakat'] = Masyarakat::get();
        return view('masyarakat.index')->with($data);
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
     * @param  \App\Http\Requests\StoreMasyarakatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMasyarakatRequest $request)
    {

        $Masyarakat =new Masyarakat();
        $Masyarakat->nik=$request->nik;
        $Masyarakat->nama=$request->nama;
        $Masyarakat->username=$request->username;
        $Masyarakat->password=bcrypt($request->password);
        $Masyarakat->telp=$request->telp;
        $Masyarakat->save();

        return redirect('masyarakat')->with('success','Data Masyarakat berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Masyarakat  $Masyarakat
     * @return \Illuminate\Http\Response
     */
    public function show(Masyarakat $Masyarakat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Masyarakat  $Masyarakat
     * @return \Illuminate\Http\Response
     */
    public function edit(Masyarakat $Masyarakat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMasyarakatRequest  $request
     * @param  \App\Models\Masyarakat  $Masyarakat
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMasyarakatRequest $request, Masyarakat $Masyarakat)
    {
        $Masyarakat->update($request->all());

        return redirect('masyarakat')->with('success', 'masyarakat berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\masyarakat  $Masyarakat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        //  $id->delete();
        masyarakat::find($id)->delete();

        return redirect('masyarakat')->with('success', 'masyarakat berhasil dihapus');
    }
}
