<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Stock;

Use Illuminate\Support\Facades\DB;

class R1datasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = \App\Models\Stock::all();
        
        foreach ($stocks as $stock)
        {
            var_dump($stock->Tahun);
        }
        

        /*
        $Pabrik_Nonsub = Stock::select('Pabrik_Nonsub')->get();
        $SiapJual_Sub = Stock::select('SiapJual_Sub')->get();
        $SiapJual_NonSub = Stock::select('SiapJual_NonSub')->get();

        $StokAwal_Subsidi = $Pabrik_Sub + $SiapJual_Sub;
        $StokAwal_Nonsubsidi = $Pabrik_Nonsub + $SiapJual_Nonsub;
        $StokAwal = $StokAwal_Subsidi + $StokAwal_Nonsubsidi;

        return $StokAwal;
        */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
