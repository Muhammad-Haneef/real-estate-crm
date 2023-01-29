<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\PropertyPurpose;
use App\Http\Requests\Admin\StorePropertyPurposeRequest;
use App\Http\Requests\Admin\UpdatePropertyPurposeRequest;

class PropertyPurposeController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyPurposeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyPurposeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyPurpose $propertyPurpose)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyPurpose $propertyPurpose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyPurposeRequest  $request
     * @param  \App\Models\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyPurposeRequest $request, PropertyPurpose $propertyPurpose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyPurpose  $propertyPurpose
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyPurpose $propertyPurpose)
    {
        //
    }
}
