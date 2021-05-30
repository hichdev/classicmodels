<!DOCTYPE html>
<html>
<head>


<?php
$servername = "localhost";
$username = "root";
$password = "Hogent12345";
$dbname = "classicmodels";

// Create connection
$conn=mysqli_connect($servername,$username,$password,$dbname);
// Check connection

$query=$conn->query("SELECT * FROM employees;");
$result= $query->fetch_all();
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<title>Classic Models</title>
</head>
<body>
<div class="container">
<h1>Hicham Employees php site</h1>


<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Nr. Werknemer</th>
      <th scope="col">Naam</th>
      <th scope="col">Voornaam</th>
      <th scope="col">Email</th>
      <th scope="col">job titel</th>
    </tr>
  </thead>
  <tbody>
        <?php
        foreach ($result as $row){ ?>
    <tr>
      <th scope="row"><?php echo $row[0]  ?></th>
      <td><?php echo $row[1] ?></td>
      <td><?php echo $row[2] ?></td>
      <td><?php echo $row[4] ?></td>
      <td><?php echo $row[7] ?></td>
    </tr>
        <?php } ?>
  </tbody>
</table>


</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
