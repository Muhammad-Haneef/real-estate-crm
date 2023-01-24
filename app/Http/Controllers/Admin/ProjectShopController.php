<?php

namespace App\Http\Controllers;

use App\Models\Admin\ProjectShop;
use App\Http\Requests\Admin\StoreProjectShopRequest;
use App\Http\Requests\Admin\UpdateProjectShopRequest;

class ProjectShopController extends Controller
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
     * @param  \App\Http\Requests\StoreProjectShopRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectShopRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectShop  $projectShop
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectShop $projectShop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectShop  $projectShop
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectShop $projectShop)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectShopRequest  $request
     * @param  \App\Models\ProjectShop  $projectShop
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectShopRequest $request, ProjectShop $projectShop)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectShop  $projectShop
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectShop $projectShop)
    {
        //
    }
}
