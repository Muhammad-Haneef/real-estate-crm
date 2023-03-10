<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\ProjectGallery;
use App\Http\Requests\Admin\StoreProjectGalleryRequest;
use App\Http\Requests\Admin\UpdateProjectGalleryRequest;

class ProjectGalleryController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectGallery  $projectGallery
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectGallery $projectGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectGallery  $projectGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectGallery $projectGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectGalleryRequest  $request
     * @param  \App\Models\ProjectGallery  $projectGallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectGalleryRequest $request, ProjectGallery $projectGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectGallery  $projectGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectGallery $projectGallery)
    {
        //
    }
}
