<?php
	include_once 'db_connection.php';
?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Salhus Inc.</h1>
    <h4 class = "display-10"> Our Employees</h4>
    <br>
	</div>
<head>
    <title> Table with database</title>
</head>
<body>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Phone</th>
      <th scope="col">Mail</th>
      <th scope="col">Discipline</th>
      

    </tr>
  
    
  </thead>

<?php
$sql = "SELECT * from employee";
$result = $conn->query($sql);
    while($rows = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo $rows['firstname']; ?></td>
            <td><?php echo $rows['lastname']; ?></td>
            <td><?php echo $rows['phone']; ?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><?php echo $rows['discipline']; ?></td>
            

         </tr>
<?php
        }
?>


</table>

    </body>
</html>
