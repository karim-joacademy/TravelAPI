<?php

namespace App\Http\Controllers\Tour\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreToursRequest;
use App\Http\Requests\UpdateToursRequest;
use App\Models\Tour;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreToursRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tour $tours)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateToursRequest $request, Tour $tours)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tour $tours)
    {
        //
    }
}
