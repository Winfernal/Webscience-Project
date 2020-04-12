<?php
	include_once 'db_connection.php';
?>

<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Salhus Inc.</h1>
    <h4 class = "display-10"> Register New Employee</h4>
	</div>

<div class="container">
<form action = "signup.php" method ="POST">
  <div class="form-group">
    <label for="InputName">First name</label>
    <input type="text" name = "firstname" class="form-control">
  </div>
  <div class="form-group">
    <label for="adress">Last name</label>
    <input type="text" name = "lastname" class="form-control">
  </div>
  <div class="form-group">
    <label for="InputPhone">Date of Birth</label>
    <input type="text" name = "dob" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Address</label>
    <input type="text" name = "address" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Phone</label>
    <input type="text" name = "phone" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input type="text" name = "email" class="form-control">
  </div>
  
   
    
  <div class="form-group">
    <label for="exampleInputPassword1">Username</label>
    <input type="text" name = "username" class="form-control">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" name = "password" class="form-control">
  </div>

  <div class="form-group">
      <select name="discipline" class="form-control">
        <option selected>Choose your discipline</option>
        <option value = "Electrical Engineer">Electrial Engineer</option>
        <option value = "Mechanical Engineer">Mechanical Engineer</option>
        <option value = "Software Engineer">Software Engineer</option>
        <option value = "Systems Engineer">Systems Engineer</option>
      </select>

      <?php
        $sql3 = "SELECT * FROM projects";
        $result = mysqli_query($conn, $sql3);
      ?>
  <div class="form-group">
    
      <select class="custom-select mr-sm-2" name = "project">
      <?php while($row1 = mysqli_fetch_array($result)):;?>
      <option value="<?php echo $row1[0];?>"><?php echo $row1[1];?></option>
        <?php endwhile;?>
    </select> 
  </div>
  

  <button type="submit" name="submit" class="btn btn-dark">Submit</button>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</html>