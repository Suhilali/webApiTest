@extends('layouts.layout')
@section('content')
    <div class="container">
        <table class="table table-bordered">
            <thead>
              <tr> 
                <th>date</th>
                <th>last_change_date</th>
                <th>supplier_article</th>
                <th>tech_size</th>
                <th>barcode</th>
                <th>quantity</th>
                <th>is_supply</th>
                <th>is_realization</th>
                <th>quantity_full</th>
                <th>in_way_to_client</th>
                <th>in_way_from_client</th>
                <th>nm_id</th>
                <th>subject</th>
                <th>category</th>
                <th>brand</th>
                <th>sc_code</th>
                <th>price</th>    
                <th>discount</th>    

              </tr>
            </thead>
            <tbody>
                @foreach ($response as $uni)
                <tr>
                    <td>{{ $uni['date']}}</td>
                    <td>{{ $uni['last_change_date']}}</td>
                    <td>{{ $uni['supplier_article']}}</td>
                    <td>{{ $uni['tech_size']}}</td>
                    <td>{{ $uni['barcode']}}</td>
                    <td>{{ $uni['quantity']}}</td>
                    <td>{{ $uni['is_supply']}}</td>
                    <td>{{ $uni['is_realization']}}</td>
                    <td>{{ $uni['quantity_full']}}</td>
                    <td>{{ $uni['warehouse_name']}}</td>
                    <td>{{ $uni['in_way_to_client']}}</td>
                    <td>{{ $uni['in_way_from_client']}}</td>
                    <td>{{ $uni['nm_id']}}</td>
                    <td>{{ $uni['subject']}}</td>
                    <td>{{ $uni['category']}}</td>
                    <td>{{ $uni['brand']}}</td>
                    <td>{{ $uni['sc_code']}}</td>
                    <td>{{ $uni['price']}}</td>
                    <td>{{ $uni['discount']}}</td>
                    
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@stop