<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json([
            "REsult"=>"Index data"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return response()->json([
            "REsult"=>"create data"
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return response()->json([
            "REsult"=>"store data"
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return response()->json([
            "REsult"=>"show data"
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return response()->json([
            "REsult"=>"edit data"
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return response()->json([
            "REsult"=>"update data"
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return response()->json([
            "REsult"=>"destroy data"
        ]);
    }
}
