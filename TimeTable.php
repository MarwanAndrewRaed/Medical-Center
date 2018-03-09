<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    border: 1px solid #ddd;
}

th, td {
    text-align: center;
    padding: 16px;
}

th:first-child, td:first-child {
    text-align: left;
}

tr:nth-child(even) {
    background-color: #f2f2f2
}

.fa-check {
    color: green;
}

.fa-remove {
    color: red;
}
</style>
</head>
<body>

<h2>Doctors Time Table</h2>

<table>
  <tr>
    <th style="width:50%">Time</th>
    <th>Available</th>
    <th>Reserved</th>
  </tr>
  <tr>
    <td>1:00</td>
    <td><i class="fa fa-remove"></i></td>
    <td><input type="submit" value="reserve"></i></td>
  </tr>
  <tr>
    <td>1:30 </td>
    <td><i class="fa fa-check"></i></td>
    <td><input type="submit" value="reserve"></i></td>
  </tr>
  <tr>
    <td>2:00 </td>
    <td><i class="fa fa-check"></i></td>
     <td><input type="submit" value="reserve"></i></td>
  </tr>
</table>

</body>
</html>
