@extends('layouts.layout')
@section('content')
<div class="container">
        <table class="table table-bordered">
            <thead>
              <tr>                
                <th>income_id</th>
                <th>number</th>
                <th>date</th>
                <th>last_change_date</th>
                <th>supplier_article</th>
                <th>tech_size</th>
                <th>barcode</th>
                <th>quantity</th>
                <th>total_price</th>
                <th>date_close</th>
                <th>warehouse_name</th>
                <th>nm_id</th>
                <th>status</th>                  
              </tr>
            </thead>
            <tbody>
                @foreach ($response as $uni)
                <tr>
                    <td>{{ $uni['income_id']}}</td>
                    <td>{{ $uni['number']}}</td>
                    <td>{{ $uni['date']}}</td>
                    <td>{{ $uni['last_change_date']}}</td>
                    <td>{{ $uni['supplier_article']}}</td>
                    <td>{{ $uni['tech_size']}}</td>
                    <td>{{ $uni['barcode']}}</td>
                    <td>{{ $uni['quantity']}}</td>
                    <td>{{ $uni['total_price']}}</td>
                    <td>{{ $uni['date_close']}}</td>
                    <td>{{ $uni['warehouse_name']}}</td>
                    <td>{{ $uni['nm_id']}}</td>
                    <td>{{ $uni['status']}}</td>                   
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
@stop




    
 