<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\ProjectOfferType;
use App\Http\Requests\StoreProjectOfferTypeRequest;
use App\Http\Requests\UpdateProjectOfferTypeRequest;

class ProjectOfferTypeController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectOfferTypeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectOfferTypeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectOfferType  $projectOfferType
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectOfferType $projectOfferType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectOfferType  $projectOfferType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectOfferType $projectOfferType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectOfferTypeRequest  $request
     * @param  \App\Models\ProjectOfferType  $projectOfferType
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectOfferTypeRequest $request, ProjectOfferType $projectOfferType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectOfferType  $projectOfferType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectOfferType $projectOfferType)
    {
        //
    }
}
