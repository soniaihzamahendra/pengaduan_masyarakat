<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Http\Requests\StorePetugasRequest;
use App\Http\Requests\UpdatePetugasRequest; 

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['petugas'] = Petugas::get();
        return view('petugas.index')->with($data);
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
     * @param  \App\Http\Requests\StorePetugasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePetugasRequest $request)
    {

        $Petugas =new Petugas();
        $Petugas->id_petugas=$request->id_petugas;
        $Petugas->nama_petugas=$request->nama_petugas;
        $Petugas->username=$request->username;
        $Petugas->password=bcrypt($request->password);
        $Petugas->telp=$request->telp;
        $Petugas->level='petugas';
        $Petugas->save();
        

        return redirect('petugas')->with('success','Data Petugas berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petugas  $Petugas
     * @return \Illuminate\Http\Response
     */
    public function show(Petugas $Petugas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Petugas  $Petugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Petugas $Petugas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePetugasRequest  $request
     * @param  \App\Models\Petugas  $Petugas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePetugasRequest $request, Petugas $Petugas)
    {
        $Petugas->update($request->all());

        return redirect('petugas')->with('success', 'Petugas berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petugas  $Petugas
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // return $id;
        //  $id->delete();
        Petugas::find($id)->delete();

        return redirect('petugas')->with('success', 'Petugas berhasil dihapus');
    }
}
