<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBayuRequest;
use App\Http\Requests\UpdateBayuRequest;
use App\Models\Bayu;

class BayuController extends Controller
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
     * @param  \App\Http\Requests\StoreBayuRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBayuRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bayu  $bayu
     * @return \Illuminate\Http\Response
     */
    public function show(Bayu $bayu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bayu  $bayu
     * @return \Illuminate\Http\Response
     */
    public function edit(Bayu $bayu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBayuRequest  $request
     * @param  \App\Models\Bayu  $bayu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBayuRequest $request, Bayu $bayu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bayu  $bayu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bayu $bayu)
    {
        //
    }
}
