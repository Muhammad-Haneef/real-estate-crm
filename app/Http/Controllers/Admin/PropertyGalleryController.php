<?php

namespace App\Http\Controllers;

use App\Models\Admin\PropertyGallery;
use App\Http\Requests\Admin\StorePropertyGalleryRequest;
use App\Http\Requests\Admin\UpdatePropertyGalleryRequest;

class PropertyGalleryController extends Controller
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
     * @param  \App\Http\Requests\StorePropertyGalleryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePropertyGalleryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PropertyGallery  $propertyGallery
     * @return \Illuminate\Http\Response
     */
    public function show(PropertyGallery $propertyGallery)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PropertyGallery  $propertyGallery
     * @return \Illuminate\Http\Response
     */
    public function edit(PropertyGallery $propertyGallery)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePropertyGalleryRequest  $request
     * @param  \App\Models\PropertyGallery  $propertyGallery
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePropertyGalleryRequest $request, PropertyGallery $propertyGallery)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PropertyGallery  $propertyGallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(PropertyGallery $propertyGallery)
    {
        //
    }
}
