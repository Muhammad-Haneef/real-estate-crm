<?php

namespace App\Http\Controllers;

use App\Models\Admin\ProjectVilla;
use App\Http\Requests\Admin\StoreProjectVillaRequest;
use App\Http\Requests\Admin\UpdateProjectVillaRequest;

class ProjectVillaController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectVillaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectVillaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectVilla  $projectVilla
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectVilla $projectVilla)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectVilla  $projectVilla
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectVilla $projectVilla)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectVillaRequest  $request
     * @param  \App\Models\ProjectVilla  $projectVilla
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectVillaRequest $request, ProjectVilla $projectVilla)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectVilla  $projectVilla
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectVilla $projectVilla)
    {
        //
    }
}
