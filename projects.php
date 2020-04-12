<?php
	include_once 'db_connection.php';
?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">  
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Salhus Inc.</h1>
    <h4 class = "display-10"> Our Active Projects</h4>
    <br>
	</div>
<head>
    <title> Table with database</title>
</head>
<body>
<table class="table table-hover table-dark">
  <thead>
    <tr>
      <th scope="col">Project Title</th>
      <th scope="col">About</th>
      <th scope="col">Active Engineers</th>
    </tr>
  
    
  </thead>

<?php
$sql = "SELECT * from projects";

$result = $conn->query($sql);
 
    while($rows = mysqli_fetch_assoc($result)){
?>
        <tr>
            <td><?php echo $rows['project_title']; ?></td>
            <td><?php echo $rows['project_about']; ?></td>
            <
         </tr>
<?php
        }
?>
</table>

    </body>
</html>