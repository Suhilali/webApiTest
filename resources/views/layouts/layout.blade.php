<!DOCTYPE html>
<html lang="en">
<head>
  <title>Web Api Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
</head>
<body>

<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Main</a></li>
      <li><a href="{{url('orders/getOrders')}}">Orders</a></li>
      <li><a href="{{url('sales/getSales')}}">Sales</a></li>
      <li><a href="{{url('incomes/getIncomes')}}">Incomes</a></li>
      <li><a href="{{url('stocks/getStocks')}}">Stocks</a></li>

    </ul>
  </div>
</nav>
   @yield('content') 
</body>
</html>
