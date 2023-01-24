<?php

namespace App\Http\Controllers;

use App\Models\Admin\ProjectOffice;
use App\Http\Requests\Admin\StoreProjectOfficeRequest;
use App\Http\Requests\Admin\UpdateProjectOfficeRequest;

class ProjectOfficeController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectOfficeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectOfficeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectOffice  $projectOffice
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectOffice $projectOffice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectOffice  $projectOffice
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectOffice $projectOffice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectOfficeRequest  $request
     * @param  \App\Models\ProjectOffice  $projectOffice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectOfficeRequest $request, ProjectOffice $projectOffice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectOffice  $projectOffice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectOffice $projectOffice)
    {
        //
    }
}
