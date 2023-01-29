<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\ProjectAmenity;
use App\Http\Requests\Admin\StoreProjectAmenityRequest;
use App\Http\Requests\Admin\UpdateProjectAmenityRequest;

class ProjectAmenityController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectAmenityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectAmenityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectAmenity  $projectAmenity
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectAmenity $projectAmenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectAmenity  $projectAmenity
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectAmenity $projectAmenity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectAmenityRequest  $request
     * @param  \App\Models\ProjectAmenity  $projectAmenity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectAmenityRequest $request, ProjectAmenity $projectAmenity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectAmenity  $projectAmenity
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectAmenity $projectAmenity)
    {
        //
    }
}
