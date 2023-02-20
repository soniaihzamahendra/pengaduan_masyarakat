<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use App\Http\Requests\StoreMasyarakatRequest;
use App\Http\Requests\UpdateMasyarakatRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;

class MasyarakatController extends Controller
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
    public function store(StoreMasyarakatRequest $request): RedirectResponse
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Masyarakat $masyarakat): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Masyarakat $masyarakat): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMasyarakatRequest $request, Masyarakat $masyarakat): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Masyarakat $masyarakat): RedirectResponse
    {
        //
    }
}
