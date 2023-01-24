<?php

namespace App\Http\Controllers;

use App\Models\Admin\PropertyStatus;
use App\Http\Requests\Admin\StorePropertyStatusRequest;
use App\Http\Requests\Admin\UpdatePropertyStatusRequest;

class PropertyStatusController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyStatus  $propertyStatus
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyStatus  $propertyStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyStatusRequest  $request
     * @param  \App\Models\PropertyStatus  $propertyStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyStatusRequest $request, PropertyStatus $propertyStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyStatus  $propertyStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyStatus $propertyStatus)
    {
        //
    }
}
