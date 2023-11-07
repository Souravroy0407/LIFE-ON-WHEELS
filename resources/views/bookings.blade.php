<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>

<h1>Booking Details PDF</h1>

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Phone NO</th>
    <th>Email ID</th>
    <th>Service Name</th>
    <th>Total Distance</th>
    <th>Total Ammount</th>
  </tr>
  @if(count($bookings))
    @foreach ($bookings as $s)
        <tr>
            <td>{{$s->customer_Name}}</td>
            <td>{{$s->phone_no}}</td>
            <td>{{$s->email}}</td>
            <td>{{$s->service_name}}</td>
            <td>{{$s->total_distance}} KM</td>
            <td>{{$s->totalAmount}} .Rs</td>
            
        </tr>
    @endforeach
  @else
  <tr>
    <td colspan="3">No User Found</td>
  </tr>
  @endif
</table>

</body>
</html>