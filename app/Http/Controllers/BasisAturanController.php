<?php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\Kecanduan;
use App\Models\BasisAturan;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Echo_;

class BasisAturanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        
        return view("dashboard.aturan.index", [
            'kecanduan' => Kecanduan::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        dd($request);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kecanduanId = $request->route('kecanduan');
        $rule = BasisAturan::orderBy('kecanduan_id')->where('kecanduan_id', 1);
        $data= request()->except('_token');
        $gejala = Gejala::whereNotIn('id', $rule->pluck('gejala_id'))->latest()->get();
        foreach ($data as $key => $value) {
            if ($rule->Where('gejala_id', $key)->first() && $value !== null) {
                echo "hebat <br>";
            }
            // if ($rule->where('gejala_id', $key)->isEmpty() && $value != null) {
            //     echo "Fix done good job";
            //     echo $value;
            //     echo "<br>";
            // }
        }
        // dd();
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
