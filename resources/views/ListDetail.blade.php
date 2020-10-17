
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #FFDFD3;
}
</style>
</head>
<body>

<h2>List of Rockets</h2>

<table>
  <tr>
    <th>Name</th>
    <th>Agency</th>
    <th>Image</th>
    <th>Status</th>
  </tr>
  @foreach($data as $item)
  <tr>
    <td>{{$item['name']}}</td>
    <td>{{$item['agency']}}</td>
    <td><img src='https://i0.wp.com/theitfairy.co.uk/wp-content/uploads/2016/09/space-1951858_1280.png?fit=1280%2C720' style="width:100px;height:100px;"></td>
    <td>{{$item['status']}}</td>
  </tr>
  @endforeach

</table>

</body>
</html>
