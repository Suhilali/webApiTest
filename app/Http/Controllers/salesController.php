<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sale;
use Illuminate\Support\Facades\Http;

class salesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response = Http::get('89.108.115.241:6969/api/sales?dateFrom=2024-04-05&dateTo=2024-04-27&page=1&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie&limit=100');

        // return view('sales.getsales', compact('response'));
        if ($response->status() == 200) {
            sale::truncate(); //clear existing data
            $response = $response['data'];
            foreach ($response as $item) {
                $newsale = new sale();
                $newsale->g_number = $item['g_number'];
                $newsale->date = $item['date'];
                $newsale->last_change_date = $item['last_change_date'];
                $newsale->supplier_article = $item['supplier_article'];
                $newsale->tech_size = $item['tech_size'];
                $newsale->barcode = $item['barcode'];
                $newsale->total_price = $item['total_price'];
                $newsale->discount_percent = $item['discount_percent'];
                $newsale->is_supply = $item['is_supply'];
                $newsale->is_realization = $item['is_realization'];
                $newsale->promo_code_discount = $item['promo_code_discount'];
                $newsale->warehouse_name = $item['warehouse_name'];
                $newsale->country_name = $item['country_name'];
                $newsale->oblast_okrug_name = $item['oblast_okrug_name'];
                $newsale->region_name = $item['region_name'];
                $newsale->income_id = $item['income_id'];
                $newsale->sale_id = $item['sale_id'];
                $newsale->odid = $item['odid'];
                $newsale->spp = $item['spp'];
                $newsale->for_pay = $item['for_pay'];
                $newsale->finished_price = $item['finished_price'];
                $newsale->price_with_disc = $item['price_with_disc'];
                $newsale->nm_id = $item['nm_id'];
                $newsale->subject = $item['subject'];
                $newsale->category = $item['category'];
                $newsale->brand = $item['brand'];
                $newsale->is_storno = $item['is_storno'];

                $newsale->save();
            }
        } else
            return response()->json(['error' => 'Error in get sales'], $response->status());

        return view('sales.getSales', compact('response'));
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
