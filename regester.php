<?php session_start();
//conection with database

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="luminouskey";


$conn=mysqli_connect("localhost","root","","luminouskey");
?>




<!DOCTYPE html>
<html lang="en">
<head>
<title>Register</title>


<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

<!--  google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

<!-- css file-->
<link href="css/patient.css" rel="stylesheet">


   

<body>

  <?php 
   if (isset(($_SESSION['errors'] ))){
    foreach($_SESSION['errors'] as $error)  { 

      ?>
      <div class="alert alert-danger" role="alert">
       <?php echo $error; ?>
       </div>
    <?php }

    unset($_SESSION['errors'] );}
    ?>
    
    
  <div class="container1 mt-5">
    

    <form method="Post" action="handel_regester.php"> 
      
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name:</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   name="name"    placeholder="Enter your name">
    
  </div>



  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email:</label>
    <input type="email" class="form-control" id="exampleInputPassword1"   name="email"  placeholder="Enter your email">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password:</label>
    <input type="password" class="form-control" id="exampleInputPassword1"  name="password"    placeholder="Enter your password">
  </div>



  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>


  <button type="submit" class="btn btn-primary" name="submit">Submit</button>

  
  
</form>
      
  
</div>
  







    
</body>
</html>




