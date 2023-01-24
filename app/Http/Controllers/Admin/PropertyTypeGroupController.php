<?php

namespace App\Http\Controllers;

use App\Models\Admin\PropertyTypeGroup;
use App\Http\Requests\Admin\StorePropertyTypeGroupRequest;
use App\Http\Requests\Admin\UpdatePropertyTypeGroupRequest;

class PropertyTypeGroupController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyTypeGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyTypeGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyTypeGroup  $propertyTypeGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyTypeGroup $propertyTypeGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyTypeGroup  $propertyTypeGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyTypeGroup $propertyTypeGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyTypeGroupRequest  $request
     * @param  \App\Models\PropertyTypeGroup  $propertyTypeGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyTypeGroupRequest $request, PropertyTypeGroup $propertyTypeGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyTypeGroup  $propertyTypeGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyTypeGroup $propertyTypeGroup)
    {
        //
    }
}
