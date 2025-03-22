<?php

namespace App\Http\Controllers\Travel\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTravelsRequest;
use App\Http\Requests\UpdateTravelsRequest;
use App\Models\Travel;

class TravelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Travel::query()->where('is_public', true)->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTravelsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Travel $travels)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTravelsRequest $request, Travel $travels)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Travel $travels)
    {
        //
    }
}
