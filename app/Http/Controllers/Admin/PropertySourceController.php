<?php

namespace App\Http\Controllers;

use App\Models\Admin\PropertySource;
use App\Http\Requests\Admin\StorePropertySourceRequest;
use App\Http\Requests\Admin\UpdatePropertySourceRequest;

class PropertySourceController extends Controller
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
     * @param  \App\Http\Requests\StorePropertySourceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertySourceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertySource  $propertySource
     * @return \Illuminate\Http\Response
     */
    public function show(PropertySource $propertySource)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertySource  $propertySource
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertySource $propertySource)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertySourceRequest  $request
     * @param  \App\Models\PropertySource  $propertySource
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertySourceRequest $request, PropertySource $propertySource)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertySource  $propertySource
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertySource $propertySource)
    {
        //
    }
}
