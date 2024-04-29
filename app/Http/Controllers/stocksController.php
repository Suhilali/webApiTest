<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\stock;
use Illuminate\Support\Facades\Http;

class stocksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response = Http::get('89.108.115.241:6969/api/stocks?dateFrom=2024-04-05&dateTo=2024-04-27&page=1&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie&limit=100');

        // return view('stocks.getstocks', compact('response'));
        if ($response->status() == 200) {
            stock::truncate(); //clear existing data
            $response = $response['data'];
            foreach ($response as $item) {
                $newstock = new stock();
                $newstock->date = $item['date'];
                $newstock->last_change_date = $item['last_change_date'];
                $newstock->supplier_article = $item['supplier_article'];
                $newstock->tech_size = $item['tech_size'];
                $newstock->barcode = $item['barcode'];
                $newstock->quantity = $item['quantity'];
                $newstock->is_supply = $item['is_supply'];
                $newstock->is_realization = $item['is_realization'];
                $newstock->quantity_full = $item['quantity_full'];
                $newstock->warehouse_name = $item['warehouse_name'];
                $newstock->in_way_to_client = $item['in_way_to_client'];
                $newstock->in_way_from_client = $item['in_way_from_client'];
                $newstock->nm_id = $item['nm_id'];
                $newstock->subject = $item['subject'];
                $newstock->category = $item['category'];
                $newstock->brand = $item['brand'];
                $newstock->sc_code = $item['sc_code'];
                $newstock->price = $item['price'];
                $newstock->discount = $item['discount'];
                $newstock->save();
            }
        } else {
            return response()->json(['error' => 'Error in get stocksssss'], $response->status());
        }

        return view('stocks.getStocks', compact('response'));
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
