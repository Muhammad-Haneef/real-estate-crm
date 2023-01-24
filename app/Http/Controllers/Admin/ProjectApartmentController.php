<?php

namespace App\Http\Controllers;

use App\Models\Admin\ProjectApartment;
use App\Http\Requests\Admin\StoreProjectApartmentRequest;
use App\Http\Requests\Admin\UpdateProjectApartmentRequest;

class ProjectApartmentController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectApartmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectApartmentRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectApartment  $projectApartment
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectApartment $projectApartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectApartment  $projectApartment
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectApartment $projectApartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectApartmentRequest  $request
     * @param  \App\Models\ProjectApartment  $projectApartment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectApartmentRequest $request, ProjectApartment $projectApartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectApartment  $projectApartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectApartment $projectApartment)
    {
        //
    }
}
