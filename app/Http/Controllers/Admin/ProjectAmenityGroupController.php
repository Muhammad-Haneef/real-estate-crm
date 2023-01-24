<?php

namespace App\Http\Controllers;

use App\Models\Admin\ProjectAmenityGroup;
use App\Http\Requests\Admin\StoreProjectAmenityGroupRequest;
use App\Http\Requests\Admin\UpdateProjectAmenityGroupRequest;

class ProjectAmenityGroupController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectAmenityGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectAmenityGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectAmenityGroup  $projectAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectAmenityGroup $projectAmenityGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectAmenityGroup  $projectAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectAmenityGroup $projectAmenityGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectAmenityGroupRequest  $request
     * @param  \App\Models\ProjectAmenityGroup  $projectAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectAmenityGroupRequest $request, ProjectAmenityGroup $projectAmenityGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectAmenityGroup  $projectAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectAmenityGroup $projectAmenityGroup)
    {
        //
    }
}
