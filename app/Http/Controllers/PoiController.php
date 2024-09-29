<?php

namespace App\Http\Controllers;

use App\Models\Poi;
use Illuminate\Http\Request;

class PoiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Poi::orderBy('nama', 'asc')->get();

        return response()->json([
            "status" => "OK",
            "message" => "Data berhasil ditampilkan",
            "data" => $data
        ]);
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
    public function show(Poi $poi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poi $poi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Poi $poi)
    {
        //
    }
}
