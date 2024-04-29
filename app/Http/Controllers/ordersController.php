<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response = Http::get('89.108.115.241:6969/api/orders?dateFrom=2024-04-05&dateTo=2024-04-27&page=1&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie&limit=100');

        if ($response->status() == 200) {
            order::truncate(); //clear existing data
            $response = $response['data'];
            foreach ($response as $item) {
                $newOrder = new order();
                $newOrder->g_number = $item['g_number'];
                $newOrder->date = $item['date'];
                $newOrder->last_change_date = $item['last_change_date'];
                $newOrder->supplier_article = $item['supplier_article'];
                $newOrder->tech_size = $item['tech_size'];
                $newOrder->barcode = $item['barcode'];
                $newOrder->total_price = $item['total_price'];
                $newOrder->discount_percent = $item['discount_percent'];
                $newOrder->warehouse_name = $item['warehouse_name'];
                $newOrder->oblast = $item['oblast'];
                $newOrder->income_id = $item['income_id'];
                $newOrder->odid = $item['odid'];
                $newOrder->nm_id = $item['nm_id'];
                $newOrder->subject = $item['subject'];
                $newOrder->category = $item['category'];
                $newOrder->brand = $item['brand'];
                $newOrder->is_cancel = $item['is_cancel'];
                $newOrder->cancel_dt = $item['cancel_dt'];
                $newOrder->save();
            }
        } else
            return response()->json(['error' => 'Error in get orders'], $response->status());

        return view('orders.getOrders', compact('response'));
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
