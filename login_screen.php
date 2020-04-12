<?php
  include 'db_connection.php';
?>

<?php

session_start();

  if(isset($_POST['username'])){
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql="SELECT * from employee where username='".$uname."'AND password='".$password."' limit 1";

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) == 1){
      header("Location: user_page?login=success");
      exit();
    }

    else{
      echo "You have entered incorrect password";
      exit();
    }
  }
 

?>

<!DOCTYPE html>
<html>

  
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Salhus Inc.</h1>
	</div>
<div class="container">
<form method ="POST" action="">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" name="username"class="form-control" aria-describedby="emailHelp">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control">
  </div>
  <input type="submit" name="submit" value = "Login" class="btn btn-dark"/>
</form>
<br>

<button type="register" class="btn btn-dark" , onclick="window.location.href='register_new.php'">Register New User</button>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>





 
