<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\PropertyAmenityGroup;
use App\Http\Requests\Admin\StorePropertyAmenityGroupRequest;
use App\Http\Requests\Admin\UpdatePropertyAmenityGroupRequest;

class PropertyAmenityGroupController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyAmenityGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyAmenityGroupRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyAmenityGroup  $propertyAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyAmenityGroup $propertyAmenityGroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyAmenityGroup  $propertyAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyAmenityGroup $propertyAmenityGroup)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyAmenityGroupRequest  $request
     * @param  \App\Models\PropertyAmenityGroup  $propertyAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyAmenityGroupRequest $request, PropertyAmenityGroup $propertyAmenityGroup)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyAmenityGroup  $propertyAmenityGroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyAmenityGroup $propertyAmenityGroup)
    {
        //
    }
}
