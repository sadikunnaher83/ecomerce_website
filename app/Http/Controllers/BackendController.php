<?php

namespace App\Http\Controllers;

use App\Models\Backend;
use Illuminate\Http\Request;

class BackendController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function layout()
    {
        // echo "Backend";
        return view('layouts.maind');
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
    public function show(Backend $backend)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Backend $backend)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Backend $backend)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Backend $backend)
    {
        //
    }
}
