<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Penyakit;
use App\Models\Kecanduan;
use App\Models\BasisAturan;
use Illuminate\Http\Request;

class DiagnosaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(BasisAturan $rule, Kecanduan $kecanduan, Gejala $gejala)
    {
        return view('dashboard.diagnosa.index', [
            'rules' => $rule->orderBy('gejala_id')->get(),
            'kecanduan' => $kecanduan->get(),
            'gejala' => $gejala->orderBy('id')->get(),
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
