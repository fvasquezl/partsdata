<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePartReferencesRequest;
use App\Http\Requests\UpdatePartReferencesRequest;
use App\Models\PartReferences;

class PartReferencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StorePartReferencesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePartReferencesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PartReferences  $partReferences
     * @return \Illuminate\Http\Response
     */
    public function show(PartReferences $partReferences)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PartReferences  $partReferences
     * @return \Illuminate\Http\Response
     */
    public function edit(PartReferences $partReferences)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePartReferencesRequest  $request
     * @param  \App\Models\PartReferences  $partReferences
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePartReferencesRequest $request, PartReferences $partReferences)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PartReferences  $partReferences
     * @return \Illuminate\Http\Response
     */
    public function destroy(PartReferences $partReferences)
    {
        //
    }
}
