<?php

namespace App\Http\Controllers;

use App\Models\Admin\AgencyStatus;
use App\Http\Requests\Admin\StoreAgencyStatusRequest;
use App\Http\Requests\Admin\UpdateAgencyStatusRequest;

class AgencyStatusController extends Controller
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
     * @param  \App\Http\Requests\StoreAgencyStatusRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgencyStatusRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AgencyStatus  $agencyStatus
     * @return \Illuminate\Http\Response
     */
    public function show(AgencyStatus $agencyStatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AgencyStatus  $agencyStatus
     * @return \Illuminate\Http\Response
     */
    public function edit(AgencyStatus $agencyStatus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgencyStatusRequest  $request
     * @param  \App\Models\AgencyStatus  $agencyStatus
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgencyStatusRequest $request, AgencyStatus $agencyStatus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AgencyStatus  $agencyStatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(AgencyStatus $agencyStatus)
    {
        //
    }
}
