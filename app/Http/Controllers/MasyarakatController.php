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
        $request['id'] = auth()->user()->id;
        $input = Masyarakat::create($request->all());
        return redirect(request()->segment(1).'/masyarakat')->with('success','input data masyarakat berhasil');
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
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Masyarakat  $Masyarakat
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      
    }
}
