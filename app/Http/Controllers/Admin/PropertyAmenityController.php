<?php

namespace App\Http\Controllers;

use App\Models\Admin\PropertyAmenity;
use App\Http\Requests\Admin\StorePropertyAmenityRequest;
use App\Http\Requests\Admin\UpdatePropertyAmenityRequest;

class PropertyAmenityController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyAmenityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyAmenityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyAmenity  $propertyAmenity
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyAmenity $propertyAmenity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyAmenity  $propertyAmenity
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyAmenity $propertyAmenity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyAmenityRequest  $request
     * @param  \App\Models\PropertyAmenity  $propertyAmenity
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyAmenityRequest $request, PropertyAmenity $propertyAmenity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyAmenity  $propertyAmenity
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyAmenity $propertyAmenity)
    {
        //
    }
}
