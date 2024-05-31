<?php

namespace App\Http\Controllers;

use App\Models\BasisAturan;
use Illuminate\Http\Request;

class BasisAturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.aturan.index', [
            // 'title' => 'Login',
            // 'active' => 'Login'
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
    public function show(BasisAturan $basisAturan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BasisAturan $basisAturan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BasisAturan $basisAturan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BasisAturan $basisAturan)
    {
        //
    }
}
