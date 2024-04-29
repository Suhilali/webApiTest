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
                <th>warehouse_name</th>
                <th>oblast</th>
                <th>income_id</th>
                <th>odid</th>
                <th>nm_id</th>
                <th>subject</th>
                <th>category</th>
                <th>brand</th>
                <th>is_cancel</th>
                <th>cancel_dt</th>    
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
                    <td>{{ $uni['warehouse_name']}}</td>
                    <td>{{ $uni['oblast']}}</td>
                    <td>{{ $uni['income_id']}}</td>
                    <td>{{ $uni['odid']}}</td>
                    <td>{{ $uni['nm_id']}}</td>
                    <td>{{ $uni['subject']}}</td>
                    <td>{{ $uni['category']}}</td>
                    <td>{{ $uni['brand']}}</td>
                    <td>{{ $uni['is_cancel']}}</td>
                    <td>{{ $uni['cancel_dt']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>


    </div>
    
@stop
<!-- 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Orders</title>
</head>
<body>
    
    
</body>
</html> -->