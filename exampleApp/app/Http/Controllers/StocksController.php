<?php

namespace App\Http\Controllers;

use App\Models\Stock;


Use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stocks = \App\Models\Stock::all();
        return view('stocks.index', ['stocks'=> $stocks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("stocks.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bulan' => 'required', 'tahun' => 'required'
        ]);

        // return $request;
        $stock = new Stock;
        $stock->Bulan = $request->bulan;
        $stock->Tahun = $request->tahun;
        $stock->Urea = $request->urea;
        $stock->Pabrik_Sub = $request->pabrik_Sub;
        $stock->Pabrik_Nonsub = $request->pabrik_Nonsub;
        $stock->Pabrik_Total = $request->pabrik_Sub + $request->pabrik_Nonsub;
        $stock->SiapJual_Sub = $request->siapJual_Sub;
        $stock->SiapJual_Nonsub = $request->siapJual_Nonsub;
        $stock->SiapJual_Total = $request->siapJual_Sub + $request->siapJual_Nonsub;
        $stock->Total =  $stock->Pabrik_Total + $stock->SiapJual_Total;

        $stock->save();
        return redirect('/stocks')->with('status', 'Data telah ditambahkan !');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(Stock $stock)
    {
        // return $stock;
        return view('stocks.show', ['stock'=>$stock]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(Stock $stock)
    {
        return view('stocks.edit', compact('stock'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stock $stock)
    {
        $stock->Bulan = $request->bulan;
        $stock->Tahun = $request->tahun;
        $stock->Urea = $request->urea;
        $stock->Pabrik_Sub = $request->pabrik_Sub;  
        $stock->Pabrik_Nonsub = $request->pabrik_Nonsub;
        $stock->Pabrik_Total = $request->pabrik_Sub + $request->pabrik_Nonsub;
        $stock->SiapJual_Sub = $request->siapJual_Sub;
        $stock->SiapJual_Nonsub = $request->siapJual_Nonsub;
        $stock->SiapJual_Total = $request->siapJual_Sub + $request->siapJual_Nonsub;
        $stock->Total =  $stock->Pabrik_Total + $stock->SiapJual_Total;

        $stock->save();
        return redirect('/stocks')->with('status', 'Data telah diubah !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stock $stock)
    {
        Stock::destroy($stock->id);
        return redirect('/stocks')->with('status', 'Data telah dihapus !');
    }
}
