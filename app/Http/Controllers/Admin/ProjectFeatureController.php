<?php

namespace App\Http\Controllers;

use App\Models\Admin\ProjectFeature;
use App\Http\Requests\Admin\StoreProjectFeatureRequest;
use App\Http\Requests\Admin\UpdateProjectFeatureRequest;

class ProjectFeatureController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectFeatureRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectFeatureRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectFeature $projectFeature)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectFeature $projectFeature)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectFeatureRequest  $request
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectFeatureRequest $request, ProjectFeature $projectFeature)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectFeature  $projectFeature
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectFeature $projectFeature)
    {
        //
    }
}
