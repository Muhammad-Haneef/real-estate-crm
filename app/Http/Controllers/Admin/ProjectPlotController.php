<?php

namespace App\Http\Controllers;

use App\Models\Admin\ProjectPlot;
use App\Http\Requests\Admin\StoreProjectPlotRequest;
use App\Http\Requests\Admin\UpdateProjectPlotRequest;

class ProjectPlotController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectPlotRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectPlotRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectPlot  $projectPlot
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectPlot $projectPlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectPlot  $projectPlot
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectPlot $projectPlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectPlotRequest  $request
     * @param  \App\Models\ProjectPlot  $projectPlot
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectPlotRequest $request, ProjectPlot $projectPlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectPlot  $projectPlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectPlot $projectPlot)
    {
        //
    }
}
