<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\income;




class incomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $response = Http::get('89.108.115.241:6969/api/incomes?dateFrom=2024-04-05&dateTo=2024-04-27&page=1&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie&limit=100');

        if ($response->status() == 200) {
            income::truncate(); //clear existing data
            $response = $response['data'];
            foreach ($response as $item) {
                $newincome = new income();
                $newincome->income_id = $item['income_id'];
                $newincome->number = $item['number'];
                $newincome->date = $item['date'];
                $newincome->last_change_date = $item['last_change_date'];
                $newincome->supplier_article = $item['supplier_article'];
                $newincome->tech_size = $item['tech_size'];
                $newincome->barcode = $item['barcode'];
                $newincome->quantity = $item['quantity'];
                $newincome->total_price = $item['total_price'];
                $newincome->date_close = $item['date_close'];
                $newincome->warehouse_name = $item['warehouse_name'];
                $newincome->nm_id = $item['nm_id'];
                $newincome->status = $item['status'];
                $newincome->save();
            }
        } else
            return response()->json(['error' => 'Error in get incomes'], $response->status());

        return view('incomes.getIncomes', compact('response'));
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
