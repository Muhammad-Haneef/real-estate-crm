<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Coworker;
use App\Http\Requests\StoreCoworkerRequest;
use App\Http\Requests\UpdateCoworkerRequest;

class CoworkerController extends Controller
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
     * @param  \App\Http\Requests\StoreCoworkerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCoworkerRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Coworker  $coworker
     * @return \Illuminate\Http\Response
     */
    public function show(Coworker $coworker)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Coworker  $coworker
     * @return \Illuminate\Http\Response
     */
    public function edit(Coworker $coworker)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCoworkerRequest  $request
     * @param  \App\Models\Coworker  $coworker
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCoworkerRequest $request, Coworker $coworker)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Coworker  $coworker
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coworker $coworker)
    {
        //
    }
}
