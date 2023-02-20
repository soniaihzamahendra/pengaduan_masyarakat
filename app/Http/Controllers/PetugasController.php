<?php

namespace App\Http\Controllers;

use App\Models\Petugas;
use App\Http\Requests\StorePetugasRequest;
use App\Http\Requests\UpdatePetugasRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class PetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePetugasRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Petugas $petugas): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Petugas $petugas): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePetugasRequest $request, Petugas $petugas): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Petugas $petugas): RedirectResponse
    {
        //
    }
}
