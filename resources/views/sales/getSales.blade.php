@extends('layouts.layout')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
              <tr>     
                <th>g_number</th>
                <th>date</th>
                <th>last_change_date</th>
                <th>supplier_article</th>
                <th>tech_size</th>
                <th>barcode</th>
                <th>total_price</th>
                <th>discount_percent</th>
                <th>is_supply</th>
                <th>is_realization</th>
                <th>promo_code_discount</th>
                <th>warehouse_name</th>
                <th>country_name</th>
                <th>oblast_okrug_name</th>
                <th>region_name</th>
                <th>income_id</th>
                <th>sale_id</th>
                <th>odid</th>
                <th>spp</th>
                <th>for_pay</th>
                <th>nm_id</th>
                <th>subject</th>
                <th>category</th>
                <th>brand</th>
                <th>is_storno</th>
                   
              </tr>
            </thead>
            <tbody>
                @foreach ($response as $uni)
                <tr>
                    <td>{{ $uni['g_number']}}</td>
                    <td>{{ $uni['date']}}</td>
                    <td>{{ $uni['last_change_date']}}</td>
                    <td>{{ $uni['supplier_article']}}</td>
                    <td>{{ $uni['tech_size']}}</td>
                    <td>{{ $uni['barcode']}}</td>
                    <td>{{ $uni['total_price']}}</td>
                    <td>{{ $uni['discount_percent']}}</td>
                    <td>{{ $uni['is_supply']}}</td>
                    <td>{{ $uni['is_realization']}}</td>
                    <td>{{ $uni['promo_code_discount']}}</td>
                    <td>{{ $uni['warehouse_name']}}</td>
                    <td>{{ $uni['country_name']}}</td>
                    <td>{{ $uni['oblast_okrug_name']}}</td>
                    <td>{{ $uni['region_name']}}</td>
                    <td>{{ $uni['income_id']}}</td>
                    <td>{{ $uni['sale_id']}}</td>
                    <td>{{ $uni['odid']}}</td>
                    <td>{{ $uni['spp']}}</td>
                    <td>{{ $uni['for_pay']}}</td>
                    <td>{{ $uni['nm_id']}}</td>
                    <td>{{ $uni['subject']}}</td>
                    <td>{{ $uni['category']}}</td>
                    <td>{{ $uni['brand']}}</td>
                    <td>{{ $uni['is_storno']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
 @stop