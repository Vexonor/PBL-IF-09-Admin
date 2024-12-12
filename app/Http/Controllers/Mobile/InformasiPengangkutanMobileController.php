<?php

namespace App\Http\Controllers\Mobile;

use App\Http\Controllers\Controller;
use App\Models\InformasiModel;
use Illuminate\Http\Request;

class InformasiPengangkutanMobileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $informasi = InformasiModel::all();
        return response()->json($informasi);
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
    public function show(InformasiModel $informasiModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, InformasiModel $informasiModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(InformasiModel $informasiModel)
    {
        //
    }
}
