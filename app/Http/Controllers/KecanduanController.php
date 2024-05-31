<?php

namespace App\Http\Controllers;

use App\Models\Kecanduan;
use Illuminate\Http\Request;

class KecanduanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.kecanduan.index', [
            'kecanduans' => Kecanduan::latest()->get()
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
    public function show(Kecanduan $kecanduan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Kecanduan $kecanduan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Kecanduan $kecanduan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Kecanduan $kecanduan)
    {
        //
    }
}
