<?php

namespace App\Http\Controllers;

use App\Models\Tanggapan;
use App\Http\Requests\StoreTanggapanRequest;
use App\Http\Requests\UpdateTanggapanRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class TanggapanController extends Controller
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
    public function store(StoreTanggapanRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tanggapan $tanggapan): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tanggapan $tanggapan): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTanggapanRequest $request, Tanggapan $tanggapan): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tanggapan $tanggapan): RedirectResponse
    {
        //
    }
}
