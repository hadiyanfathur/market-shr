<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMarketShareRequest;
use App\Http\Requests\UpdateMarketShareRequest;
use App\Models\MarketShare;
use App\Imports\MarketShareImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class MarketShareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreMarketShareRequest $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(MarketShare $marketShare)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MarketShare $marketShare)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMarketShareRequest $request, MarketShare $marketShare)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MarketShare $marketShare)
    {
        //
    }

    public function upload(Request $request)
    {
        MarketShare::truncate();
        Excel::import(new MarketShareImport, $request->file('file'));
    }

    public function download(Request $request)
    {
        //Excel::import(new MarketShareImport, $request->file('file'));
    }

    public function format(Request $request)
    {
        return $this->formatStrKec($request->address);
    }

    private function formatStrKec($address)
    {
        $explodedArr = explode(" ", $address);
        return array_slice($explodedArr, -6);
    }
}
