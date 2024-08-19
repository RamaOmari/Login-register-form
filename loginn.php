<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>


<!-- bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

 <!-- Font Awesome library-->
 <link href="css/all.min.css" rel="stylesheet">
<link href="css/all.css" rel="stylesheet">
<!--  google font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans:ital,wght@0,100;0,300;0,400;0,500;0,700;0,800;0,900;1,100;1,300;1,400;1,500;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet"> 

<!-- css file-->
<link href="css/patient.css"  type=" text/css"     rel="stylesheet">


</head>
<body>

<?php 
   if (isset(($_SESSION['mistakes'] ))){
    foreach($_SESSION['mistakes'] as $mistake)  { 

      ?>
      <div class="alert alert-danger" role="alert">
       <?php echo $mistake; ?>
       </div>
    <?php }

    unset($_SESSION['mistakes'] );}
    ?>

<div class="container">
      <div class="wrapper">
        <div class="title"><span>Login</span></div>
        <form action="handel_login.php" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email"   name="email">
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password"  name="password">
          </div>
          
          <div class="row button">
            <input type="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="regester.php">Sign up now</a></div>
        </form>
      </div>
</div>

    
</body>
</html>