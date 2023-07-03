<?php

namespace App\Http\Controllers;

use App\Models\Reads;
use Illuminate\Http\Request;

class ReadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $read = Reads::all();
        return $read;
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
    public function show(Reads $reads)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Reads $reads)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Reads $reads)
    {
        //
    }
}
