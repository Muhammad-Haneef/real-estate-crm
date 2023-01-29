<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\ProjectOffer;
use App\Http\Requests\StoreProjectOfferRequest;
use App\Http\Requests\UpdateProjectOfferRequest;

class ProjectOfferController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectOfferRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectOfferRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectOffer  $projectOffer
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectOffer $projectOffer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectOffer  $projectOffer
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectOffer $projectOffer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectOfferRequest  $request
     * @param  \App\Models\ProjectOffer  $projectOffer
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectOfferRequest $request, ProjectOffer $projectOffer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectOffer  $projectOffer
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectOffer $projectOffer)
    {
        //
    }
}
