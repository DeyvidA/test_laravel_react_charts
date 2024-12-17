<?php

namespace App\Http\Controllers;

use App\Models\HouseMarket;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HouseMarketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $houses = HouseMarket::all();
        return Inertia::render('House/House', [
            'houses' => $houses
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $houseMarket = HouseMarket::find($id);

        $houseMarket->load('housePricings');
        return Inertia::render('House/Details', [
            'house' => $houseMarket
        ]);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HouseMarket $houseMarket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HouseMarket $houseMarket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HouseMarket $houseMarket)
    {
        //
    }
}
