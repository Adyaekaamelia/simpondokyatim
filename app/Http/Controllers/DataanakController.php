<?php

namespace App\Http\Controllers;

use App\Models\Dataanak;
use Illuminate\Http\Request;

class DataanakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $dataanak = Dataanak::all();
        return view('dataanak.index', compact('dataanak'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function show(Dataanak $dataanak)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function edit(Dataanak $dataanak)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dataanak $dataanak)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dataanak  $dataanak
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dataanak $dataanak)
    {
        //
    }
}
