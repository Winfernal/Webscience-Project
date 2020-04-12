<?php
  include 'db_connection.php';
 
?>
<!DOCTYPE html>
<html>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<title> Salhus Inc.</title>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-3">Salhus Inc.</h1>

    <p class="lead">Changing the world with systems.</p>
    <h10>
  <?php
  $sql = "SELECT * from quotes ORDER BY RAND()";
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result, MYSQLI_BOTH);
  printf("<p>%s</p>\n", $row["text"]);

  ?>
  </h10>
  </div>
</div>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Salhus Inc.</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="login_screen.php">Login <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#"></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="employees.php">Our Employees
			  </a>
          <a class="dropdown-item" href="#">Our Goals</a>
          <a class="dropdown-item" href="projects.php", >Our Projects</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Recruitment</a>
        </div>
      </li>
</ul>
</div>

</nav>
</div>

<?php
  $dir = 'images';
  // Initiate array which will contain the image name
  $imgs_arr = array();
  // Check if image directory exists
  if (file_exists($dir) && is_dir($dir) ) {
    
      // Get files from the directory
      $dir_arr = scandir($dir);
      $arr_files = array_diff($dir_arr, array('.','..') );
      foreach ($arr_files as $file) {
        //Get the file path
        $file_path = $dir."/".$file;
        // Get extension
        $ext = pathinfo($file_path, PATHINFO_EXTENSION);
        if ($ext=="jpg" || $ext=="png" || $ext=="JPG" || $ext=="PNG") {
          array_push($imgs_arr, $file);
        }
        
      }
      $count_img_index = count($imgs_arr) - 1;
      $random_img = $imgs_arr[rand( 0, $count_img_index )];
  }
?>

<span class="border border-dark">
<div class="container">
    <div class="col-md-6">
    <img style = "float: left" src="<?php echo $dir."/".$random_img ?> "height = 80% width = 80%  class="rounded">
    </div>
    </div>
    </span>


<style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: black;
  color: white;
  text-align: center;
}
</style>

<div class="footer bg-dark">
  <p>Vegard H. Tro</p>
</div>


  
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</html>
