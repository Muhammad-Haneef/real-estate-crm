<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Models\Admin\Builder;
use App\Http\Requests\Admin\StoreBuilderRequest;
use App\Http\Requests\Admin\UpdateBuilderRequest;

class BuilderController extends Controller
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
     * @param  \App\Http\Requests\StoreBuilderRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBuilderRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function show(Builder $builder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function edit(Builder $builder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBuilderRequest  $request
     * @param  \App\Models\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBuilderRequest $request, Builder $builder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Builder  $builder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Builder $builder)
    {
        //
    }
}
